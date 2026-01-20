// save as export-brilliantserv.mjs
import fs from "fs/promises";

const BASE = "https://brilliantserv.com/wp-json/wp/v2";

async function fetchPaged(endpoint, perPage = 100) {
    let page = 1;
    const all = [];
    while (true) {
        const url = `${BASE}/${endpoint}?per_page=${perPage}&page=${page}`;
        console.log(`Fetching: ${url}`);
        const res = await fetch(url, { headers: { "User-Agent": "ContentExport/1.0" } });
        if (!res.ok) {
            if (res.status === 400) break;
            console.warn(`${endpoint} page ${page} failed: ${res.status}`);
            break;
        }
        const items = await res.json();
        if (!Array.isArray(items) || items.length === 0) break;
        all.push(...items);
        console.log(`  -> Got ${items.length} items (total: ${all.length})`);
        page += 1;
    }
    return all;
}

async function main() {
    console.log("Starting WordPress API export for brilliantserv.com...\n");

    const exportData = {
        site: "brilliantserv.com",
        exported_at: new Date().toISOString(),
        endpoints: {
            posts: `${BASE}/posts`,
            pages: `${BASE}/pages`,
            media: `${BASE}/media`,
            categories: `${BASE}/categories`,
            tags: `${BASE}/tags`,
        },
        posts: await fetchPaged("posts"),
        pages: await fetchPaged("pages"),
        media: await fetchPaged("media"),
        categories: await fetchPaged("categories"),
        tags: await fetchPaged("tags"),
    };

    await fs.writeFile("brilliantserv.export.json", JSON.stringify(exportData, null, 2), "utf8");
    console.log("\n✅ Saved brilliantserv.export.json");
    console.log(`   Posts: ${exportData.posts.length}`);
    console.log(`   Pages: ${exportData.pages.length}`);
    console.log(`   Media: ${exportData.media.length}`);
    console.log(`   Categories: ${exportData.categories.length}`);
    console.log(`   Tags: ${exportData.tags.length}`);
}

main().catch(console.error);
