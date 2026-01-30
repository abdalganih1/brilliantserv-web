import json
import os
import datetime
import re

# Configuration
BASE_DIR = os.path.dirname(os.path.abspath(__file__))
TEMPLATE_PATH = os.path.join(BASE_DIR, "template.php")
OUTPUT_DIR = os.path.join(BASE_DIR, "../../templates/template-3/blog/")
ARTICLES_DATA_FILE = os.path.join(BASE_DIR, "articles.json")

def load_data():
    with open(ARTICLES_DATA_FILE, 'r', encoding='utf-8') as f:
        return json.load(f)

def load_template():
    with open(TEMPLATE_PATH, 'r', encoding='utf-8') as f:
        return f.read()

def generate_schema(article):
    """Generates rigorous JSON-LD Schema for LocalBusiness and Article"""
    # 1. Article Schema
    article_schema = {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": article['meta_title'],
        "image": f"https://brilliantserv.com/media/blog/{article['image_filename']}",
        "datePublished": datetime.datetime.now().strftime("%Y-%m-%d"),
        "author": {
            "@type": "Organization",
            "name": "مؤسسة روائع الكريستال"
        }
    }

    # 2. Service Schema (LocalBusiness)
    service_schema = {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": article['title'],
        "provider": {
            "@type": "LocalBusiness",
            "name": "مؤسسة روائع الكريستال",
            "telephone": "+966550698111",
            "priceRange": "$$",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "الرياض",
                "addressCountry": "SA"
            }
        },
        "areaServed": "الرياض",
        "description": article['meta_description']
    }

    # 3. FAQ Schema (if available)
    faq_schema = None
    if 'faq' in article and article['faq']:
        faq_schema = {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": []
        }
        for q in article['faq']:
            faq_schema["mainEntity"].append({
                "@type": "Question",
                "name": q['question'],
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": q['answer']
                }
            })

    # Combine scripts
    scripts = []
    scripts.append(f'<script type="application/ld+json">{json.dumps(article_schema, ensure_ascii=False, indent=4)}</script>')
    scripts.append(f'<script type="application/ld+json">{json.dumps(service_schema, ensure_ascii=False, indent=4)}</script>')
    if faq_schema:
        scripts.append(f'<script type="application/ld+json">{json.dumps(faq_schema, ensure_ascii=False, indent=4)}</script>')
    
    return "\n".join(scripts)

def seo_quality_check(article):
    """Yoast-style quality checks"""
    warnings = []
    if len(article['meta_description']) > 165:
        warnings.append(f"⚠️ Meta description too long ({len(article['meta_description'])} chars). Max 160.")
    if len(article['meta_description']) < 120:
        warnings.append(f"⚠️ Meta description too short ({len(article['meta_description'])} chars). Aim for 120+.")
    if article['keyword'] not in article['meta_title']:
        warnings.append("⚠️ Primary keyword missing from Title.")
    
    if warnings:
        print(f"SEO Warnings for {article['slug']}:")
        for w in warnings:
            print(w)
    else:
        print(f"✅ SEO Check Passed: {article['slug']}")

def generate_html_content(points):
    """Converts a list of content points/markup to HTML body"""
    html = ""
    for section in points:
        if section['type'] == 'paragraph':
            html += f"<p>{section['content']}</p>\n"
        elif section['type'] == 'h2':
            html += f"<h2>{section['content']}</h2>\n"
        elif section['type'] == 'h3':
            html += f"<h3>{section['content']}</h3>\n"
        elif section['type'] == 'list':
            items = "".join([f"<li>{item}</li>" for item in section['items']])
            html += f"<ul>{items}</ul>\n"
    return html

# ... existing imports ...

def generate_blog_index(articles):
    """Generates a lightweight JSON index for the blog listing page."""
    index = []
    for article in articles:
        index.append({
            "title": article['title'],
            "slug": article['slug'],
            "date": article.get('date', datetime.datetime.now().strftime("%d %B %Y").replace("January", "يناير")), # Fallback
            "image": article['image_filename'],
            "alt": article['image_alt'],
            "desc": article['meta_description'],
            "link": article.get('link', f"blog/{article['slug']}.php"),
            "category": article.get('category', 'عام')
        })
    
    output_file = os.path.join(BASE_DIR, "../../templates/template-3/media/blog_index.json")
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(index, f, ensure_ascii=False, indent=4)
    print(f"🚀 Generated Index: {output_file}")

def generate_sitemap(articles):
    """Generates a standard XML sitemap for Google."""
    sitemap_path = os.path.join(BASE_DIR, "../../templates/template-3/sitemap.xml")
    base_url = "https://brilliantserv.com"
    today = datetime.datetime.now().strftime("%Y-%m-%d")

    # 1. Static Pages (Priority 1.0 & 0.8)
    static_pages = [
        {"loc": "", "priority": "1.0"},
        {"loc": "index.html", "priority": "1.0"}, # Canonically same as root usually, but keeping for safety
        {"loc": "services.html", "priority": "0.9"},
        {"loc": "projects.html", "priority": "0.9"},
        {"loc": "blog.php", "priority": "0.9"},
        {"loc": "about.html", "priority": "0.8"},
        {"loc": "contact.html", "priority": "0.8"},
    ]

    xml = ['<?xml version="1.0" encoding="UTF-8"?>']
    xml.append('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">')

    # Add Static Pages
    for page in static_pages:
        xml.append('  <url>')
        xml.append(f'    <loc>{base_url}/{page["loc"]}</loc>')
        xml.append(f'    <lastmod>{today}</lastmod>')
        xml.append(f'    <changefreq>weekly</changefreq>')
        xml.append(f'    <priority>{page["priority"]}</priority>')
        xml.append('  </url>')

    # Add Blog Posts (Priority 0.7)
    for article in articles:
        # Check if skipped? Maybe still include in sitemap if file exists? 
        # For now, include all in JSON.
        xml.append('  <url>')
        xml.append(f'    <loc>{base_url}/blog/{article["slug"]}.php</loc>')
        xml.append(f'    <lastmod>{today}</lastmod>')
        xml.append('    <changefreq>monthly</changefreq>')
        xml.append('    <priority>0.7</priority>')
        xml.append('  </url>')

    xml.append('</urlset>')

    with open(sitemap_path, 'w', encoding='utf-8') as f:
        f.write("\n".join(xml))
    
    print(f"🗺️  Generated Sitemap: {sitemap_path}")

def main():
    articles = load_data()
    template = load_template()
    today_ar = datetime.datetime.now().strftime("%d %B %Y").replace("January", "يناير") # Simple map needed for full Arabic dates

    # 0. Generate Index
    # 0. Generate Index & Sitemap
    generate_blog_index(articles)
    generate_sitemap(articles)

    for article in articles:
        # Check bypass
        if article.get('skip_page_generation', False):
            print(f"⏭️  Skipping generation for: {article['slug']}")
            continue

        # 1. Run SEO Checks
        seo_quality_check(article)

        # 2. Generate Dynamic Parts
        schema_code = generate_schema(article)
        content_html = generate_html_content(article['content_structure'])

        # 3. Inject into Template
        code = template
        code = code.replace("{{TITLE}}", article['title'])
        code = code.replace("{{META_TITLE}}", article['meta_title'])
        code = code.replace("{{META_DESCRIPTION}}", article['meta_description'])
        code = code.replace("{{KEYWORDS}}", article['keywords'])
        code = code.replace("{{SLUG}}", article['slug'])
        code = code.replace("{{OG_TITLE}}", article['meta_title'])
        code = code.replace("{{OG_DESCRIPTION}}", article['meta_description'])
        code = code.replace("{{OG_IMAGE}}", f"https://brilliantserv.com/media/blog/{article['image_filename']}")
        code = code.replace("{{PUBLISH_DATE}}", datetime.datetime.now().isoformat())
        code = code.replace("{{SCHEMA_JSON}}", schema_code)
        code = code.replace("{{CATEGORY}}", article.get('category', 'عام'))
        code = code.replace("{{H1_TITLE}}", article['h1'])
        code = code.replace("{{PUBLISH_DATE_AR}}", "30 يناير 2026") # Hardcoded for now or use mapping
        code = code.replace("{{AUTHOR_NAME}}", "فريق روائع الكريستال")
        code = code.replace("{{IMAGE_PATH}}", f"../../media/blog/{article['image_filename']}")
        code = code.replace("{{IMAGE_ALT}}", article['image_alt'])
        code = code.replace("{{CONTENT_BODY}}", content_html)
        code = code.replace("{{CTA_TITLE}}", article.get('cta_title', 'هل تحتاج مساعدة؟'))
        code = code.replace("{{CTA_TEXT}}", article.get('cta_text', 'اتصل بنا الآن للحصول على استشارة مجانية.'))

        # 4. Save File
        output_file = os.path.join(OUTPUT_DIR, f"{article['slug']}.php")
        with open(output_file, 'w', encoding='utf-8') as f:
            f.write(code)
        
        print(f"🚀 Generated: {output_file}")

if __name__ == "__main__":
    main()
