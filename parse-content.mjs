// parse-content.mjs - Parse export data into organized markdown files
import fs from "fs/promises";
import path from "path";
import { existsSync, mkdirSync } from "fs";

// Helper to strip HTML and decode entities
function stripHtml(html) {
    if (!html) return "";
    return html
        .replace(/<[^>]*>/g, "")
        .replace(/&amp;/g, "&")
        .replace(/&lt;/g, "<")
        .replace(/&gt;/g, ">")
        .replace(/&quot;/g, '"')
        .replace(/&#8217;/g, "'")
        .replace(/&#8220;/g, '"')
        .replace(/&#8221;/g, '"')
        .replace(/&#8230;/g, "...")
        .replace(/&nbsp;/g, " ")
        .replace(/\n{3,}/g, "\n\n")
        .trim();
}

// Convert HTML to basic Markdown
function htmlToMarkdown(html) {
    if (!html) return "";
    return html
        // Headings
        .replace(/<h1[^>]*>(.*?)<\/h1>/gi, "# $1\n\n")
        .replace(/<h2[^>]*>(.*?)<\/h2>/gi, "## $1\n\n")
        .replace(/<h3[^>]*>(.*?)<\/h3>/gi, "### $1\n\n")
        .replace(/<h4[^>]*>(.*?)<\/h4>/gi, "#### $1\n\n")
        // Bold and italic
        .replace(/<strong>(.*?)<\/strong>/gi, "**$1**")
        .replace(/<b>(.*?)<\/b>/gi, "**$1**")
        .replace(/<em>(.*?)<\/em>/gi, "*$1*")
        .replace(/<i>(.*?)<\/i>/gi, "*$1*")
        // Links
        .replace(/<a[^>]*href="([^"]*)"[^>]*>(.*?)<\/a>/gi, "[$2]($1)")
        // Images
        .replace(/<img[^>]*src="([^"]*)"[^>]*alt="([^"]*)"[^>]*\/?>/gi, "![$2]($1)")
        .replace(/<img[^>]*src="([^"]*)"[^>]*\/?>/gi, "![]($1)")
        // Lists
        .replace(/<li[^>]*>(.*?)<\/li>/gi, "- $1\n")
        .replace(/<ul[^>]*>/gi, "\n")
        .replace(/<\/ul>/gi, "\n")
        .replace(/<ol[^>]*>/gi, "\n")
        .replace(/<\/ol>/gi, "\n")
        // Paragraphs
        .replace(/<p[^>]*>/gi, "\n")
        .replace(/<\/p>/gi, "\n\n")
        // Line breaks
        .replace(/<br\s*\/?>/gi, "\n")
        // Remove remaining tags
        .replace(/<[^>]*>/g, "")
        // Decode entities
        .replace(/&amp;/g, "&")
        .replace(/&lt;/g, "<")
        .replace(/&gt;/g, ">")
        .replace(/&quot;/g, '"')
        .replace(/&#8217;/g, "'")
        .replace(/&#8220;/g, '"')
        .replace(/&#8221;/g, '"')
        .replace(/&#8230;/g, "...")
        .replace(/&nbsp;/g, " ")
        // Clean up whitespace
        .replace(/\n{3,}/g, "\n\n")
        .trim();
}

async function main() {
    const data = JSON.parse(await fs.readFile("brilliantserv.export.json", "utf8"));

    // Create output directories
    const dirs = ["content", "content/posts", "content/pages"];
    for (const dir of dirs) {
        if (!existsSync(dir)) mkdirSync(dir, { recursive: true });
    }

    // Process posts
    console.log("\n📝 Processing posts...");
    for (const post of data.posts) {
        const title = stripHtml(post.title?.rendered || "Untitled");
        const content = htmlToMarkdown(post.content?.rendered || "");
        const excerpt = stripHtml(post.excerpt?.rendered || "");
        const date = post.date || "";
        const slug = decodeURIComponent(post.slug || "");
        const featuredImage = post.uagb_featured_image_src?.full?.[0] || "";
        const seoDesc = post.yoast_head_json?.description || "";

        const markdown = `---
title: "${title}"
date: "${date}"
slug: "${slug}"
excerpt: "${excerpt.replace(/"/g, '\\"').substring(0, 200)}"
featured_image: "${featuredImage}"
seo_description: "${seoDesc.replace(/"/g, '\\"')}"
---

# ${title}

${featuredImage ? `![${title}](${featuredImage})\n\n` : ""}${content}
`;

        const filename = `content/posts/${post.id}-${slug.substring(0, 50) || "post"}.md`;
        await fs.writeFile(filename, markdown, "utf8");
        console.log(`  ✅ ${title.substring(0, 50)}...`);
    }

    // Process pages
    console.log("\n📄 Processing pages...");
    for (const page of data.pages) {
        const title = stripHtml(page.title?.rendered || "Untitled");
        const content = htmlToMarkdown(page.content?.rendered || "");
        const slug = decodeURIComponent(page.slug || "");

        const markdown = `---
title: "${title}"
slug: "${slug}"
---

# ${title}

${content}
`;

        const filename = `content/pages/${page.id}-${slug || "page"}.md`;
        await fs.writeFile(filename, markdown, "utf8");
        console.log(`  ✅ ${title}`);
    }

    // Create summary file
    console.log("\n📊 Creating summary...");

    const summary = {
        site: data.site,
        exported_at: data.exported_at,
        stats: {
            posts: data.posts.length,
            pages: data.pages.length,
            media: data.media.length,
            categories: data.categories.length,
            tags: data.tags.length,
        },
        categories: data.categories.map((c) => ({
            id: c.id,
            name: c.name,
            slug: c.slug,
            count: c.count,
        })),
        tags: data.tags.map((t) => ({
            id: t.id,
            name: t.name,
            slug: t.slug,
            count: t.count,
        })),
        posts: data.posts.map((p) => ({
            id: p.id,
            title: stripHtml(p.title?.rendered),
            slug: decodeURIComponent(p.slug),
            date: p.date,
            featured_image: p.uagb_featured_image_src?.full?.[0],
        })),
        pages: data.pages.map((p) => ({
            id: p.id,
            title: stripHtml(p.title?.rendered),
            slug: decodeURIComponent(p.slug),
        })),
    };

    await fs.writeFile("content/summary.json", JSON.stringify(summary, null, 2), "utf8");

    console.log("\n✅ Done! Content saved to ./content/");
    console.log(`   Posts: ${data.posts.length}`);
    console.log(`   Pages: ${data.pages.length}`);
}

main().catch(console.error);
