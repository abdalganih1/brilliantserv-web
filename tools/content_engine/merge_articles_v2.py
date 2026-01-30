import json
import os
import re

# Paths
base_dir = r"c:\Users\Abdalgani\Documents\BrilliantServ\tools\content_engine"
articles_path = os.path.join(base_dir, "articles.json")
blog_php_path = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog.php"

# 1. Parse blog.php
with open(blog_php_path, 'r', encoding='utf-8') as f:
    content = f.read()

pattern = r"\$articles\s*=\s*\[(.*?)\];"
match = re.search(pattern, content, re.DOTALL)

new_articles = []
if match:
    array_content = match.group(1)
    # Split by explicit array separators or close bracket
    blocks = array_content.split('],')
    
    for block in blocks:
        item = {}
        # Extract title
        t = re.search(r"'title'\s*=>\s*'(.*?)'", block)
        if t: item['title'] = t.group(1)
        
        # Extract link -> slug
        l = re.search(r"'link'\s*=>\s*'(.*?)'", block)
        if l: 
            link = l.group(1)
            slug = link.replace('blog/', '').replace('.php', '')
            item['slug'] = slug
            item['link'] = link
        
        # Extract image
        img = re.search(r"'image'\s*=>\s*'(.*?)'", block)
        if img: 
            raw_img = img.group(1)
            filename = raw_img.split('/')[-1]
            item['image_filename'] = filename
            
        # Extract date
        d = re.search(r"'date'\s*=>\s*'(.*?)'", block)
        if d: item['date'] = d.group(1)
            
        # Extract alt
        a = re.search(r"'alt'\s*=>\s*'(.*?)'", block)
        if a: item['image_alt'] = a.group(1)
            
        # Extract desc
        desc = re.search(r"'desc'\s*=>\s*'(.*?)'", block)
        if desc: item['meta_description'] = desc.group(1)
        
        # Defaults
        item['skip_page_generation'] = True
        item['category'] = "عام"
        item['keywords'] = ""
        item['h1'] = item.get('title', '')
        item['meta_title'] = item.get('title', '')
        item['content_structure'] = []
        item['faq'] = []
        
        if 'slug' in item:
            new_articles.append(item)

# 2. Merge
if os.path.exists(articles_path):
    with open(articles_path, 'r', encoding='utf-8') as f:
        existing_articles = json.load(f)
else:
    existing_articles = []

existing_slugs = {a['slug'] for a in existing_articles}

for article in new_articles:
    if article['slug'] not in existing_slugs:
        existing_articles.append(article)
        print(f"Added: {article['slug']}")
    else:
        print(f"Skipped duplicate: {article['slug']}")

# 3. Save
with open(articles_path, 'w', encoding='utf-8') as f:
    json.dump(existing_articles, f, ensure_ascii=False, indent=4)

print("Merge complete.")
