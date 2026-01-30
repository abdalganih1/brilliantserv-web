import os
import datetime

# Configuration
PROJECT_ROOT = r"C:\\Users\\Abdalgani\\Documents\\BrilliantServ"
TEMPLATE_DIR = os.path.join(PROJECT_ROOT, "templates", "template-3")
BASE_URL = "https://brilliantserv.com"

def get_lastmod(filepath):
    timestamp = os.path.getmtime(filepath)
    return datetime.datetime.fromtimestamp(timestamp).strftime('%Y-%m-%d')

def generate_sitemap():
    print("🚀 Generating Sitemap.xml...")
    
    urls = []
    
    # Static Pages (Priority 0.9-1.0)
    static_pages = [
        ('index.php', '1.0'),
        ('about.php', '0.9'),
        ('services.php', '0.9'),
        ('projects.php', '0.8'),
        ('contact.php', '0.8'),
        ('blog.php', '0.9')
    ]
    
    # Process Static Pages
    for filename, priority in static_pages:
        filepath = os.path.join(TEMPLATE_DIR, filename)
        if os.path.exists(filepath):
            # For index.php, the URL is just /
            url_path = "" if filename == 'index.php' else filename
            full_url = f"{BASE_URL}/{url_path}".rstrip('/')
            
            lastmod = get_lastmod(filepath)
            
            urls.append(f"""    <url>
        <loc>{full_url}</loc>
        <lastmod>{lastmod}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>{priority}</priority>
    </url>""")

    # Process High-Volume Blog Post Pages (PHP)
    blog_dir = os.path.join(TEMPLATE_DIR, "blog")
    if os.path.exists(blog_dir):
        for file in os.listdir(blog_dir):
            if file.endswith(".php"):
                filepath = os.path.join(blog_dir, file)
                url_path = f"blog/{file}"
                full_url = f"{BASE_URL}/{url_path}"
                lastmod = get_lastmod(filepath)
                
                urls.append(f"""    <url>
        <loc>{full_url}</loc>
        <lastmod>{lastmod}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>""")

    # Build XML
    sitemap_content = f"""<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
{'\n'.join(urls)}
</urlset>"""

    # Write to root (user's document root seems to be used as git root, but sitemap usually goes to public_html)
    # The user has been working in PROJECT_ROOT, so we save it there.
    output_path = os.path.join(PROJECT_ROOT, "sitemap.xml")
    
    with open(output_path, "w", encoding="utf-8") as f:
        f.write(sitemap_content)
        
    print(f"✅ Generated sitemap.xml with {len(urls)} URLs at {output_path}")

if __name__ == "__main__":
    generate_sitemap()
