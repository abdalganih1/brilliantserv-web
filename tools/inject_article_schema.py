import os
import re
import json

TARGET_DIR = r"C:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog"
BASE_URL = "https://brilliantserv.com"

MONTH_MAP = {
    'يناير': '01', 'فبراير': '02', 'مارس': '03', 'أبريل': '04', 'مايو': '05', 'يونيو': '06',
    'يوليو': '07', 'أغسطس': '08', 'سبتمبر': '09', 'أكتوبر': '10', 'نوفمبر': '11', 'ديسمبر': '12'
}

def parse_date(date_str):
    # Example: "24 يناير 2026 • فريق الصيانة"
    match = re.search(r'(\d+)\s+([\u0600-\u06FF]+)\s+(\d+)', date_str)
    if match:
        day, month_name, year = match.groups()
        month = MONTH_MAP.get(month_name, '01')
        return f"{year}-{month}-{int(day):02d}"
    return "2026-01-01" # Fallback

def inject_schema():
    print("🚀 Injecting Article Schema into Blog Posts...")
    
    count = 0
    
    for filename in os.listdir(TARGET_DIR):
        if not filename.endswith('.php'): continue
        
        filepath = os.path.join(TARGET_DIR, filename)
        
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        # Skip if already has schema
        if 'application/ld+json' in content:
            print(f"Skipping {filename}: Schema already present.")
            continue

        # Extract Data
        title_match = re.search(r'<h1>(.*?)</h1>', content)
        desc_match = re.search(r'<meta name="description"\s+content="(.*?)"', content)
        img_match = re.search(r'<div class="article-image">\s*<img\s+src="([^"]+)"', content)
        date_match = re.search(r'<div class="page-hero-content">.*?<p>([^\u2022<]+)', content, re.DOTALL)
        
        if not (title_match and desc_match):
            print(f"⚠️ Metadata missing in {filename}, skipping.")
            continue

        title = title_match.group(1).strip()
        description = desc_match.group(1).strip()
        
        # Image path cleanup
        image_url = ""
        if img_match:
            raw_src = img_match.group(1) # e.g. ../../media/foo.webp
            clean_src = raw_src.replace('../../', '')
            image_url = f"{BASE_URL}/{clean_src}"
        
        # Date parsing
        date_published = "2026-01-01"
        if date_match:
            date_published = parse_date(date_match.group(1).strip())

        # Construct Schema
        schema = {
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "headline": title[:110], # Max 110 chars recommended for headline
            "description": description,
            "image": image_url,
            "datePublished": date_published,
            "dateModified": date_published,
            "author": {
                "@type": "Organization",
                "name": "روائع الكريستال"
            },
            "publisher": {
                "@type": "Organization",
                "name": "روائع الكريستال",
                "logo": {
                    "@type": "ImageObject",
                    "url": f"{BASE_URL}/media/brilliantcrystal-hd.webp"
                }
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": f"{BASE_URL}/blog/{filename}"
            }
        }
        
        schema_json = json.dumps(schema, indent=4, ensure_ascii=False)
        
        # Injection Block
        injection = f"""    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
{schema_json}
    </script>
"""
        
        # Insert before HEAD include
        if "<?php include '../includes/head.php'; ?>" in content:
            new_content = content.replace("<?php include '../includes/head.php'; ?>", injection + "    <?php include '../includes/head.php'; ?>")
            
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"✅ Injected Schema into: {filename}")
            count += 1
        else:
            print(f"❌ Marker not found in {filename}")

    print(f"Done! Updated {count} articles.")

if __name__ == "__main__":
    inject_schema()
