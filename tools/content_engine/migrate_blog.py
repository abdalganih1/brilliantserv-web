import re
import json

blog_php_path = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog.php"

with open(blog_php_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Regex to find the $articles array
# Looking for [ ... ] block
# This is a bit quick and dirty, assuming the structure in the file
pattern = r"\$articles\s*=\s*\[(.*?)\];"
match = re.search(pattern, content, re.DOTALL)

articles_json = []

if match:
    array_content = match.group(1)
    # Split by explicit array separators or close bracket
    # The structure is [ ... ], [ ... ]
    # Let's use a simplified parser since it's PHP syntax
    
    # We'll just manually copy the array content structure logic since regex is brittle for nested structures
    # Actually, let's just use simple regex for key-values as they seem consistent
    
    # Split into blocks
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
            # Link is like 'blog/pump-repair-north-riyadh.php'
            slug = link.replace('blog/', '').replace('.php', '')
            item['slug'] = slug
            item['link'] = link # keep just in case
        
        # Extract image
        img = re.search(r"'image'\s*=>\s*'(.*?)'", block)
        if img: 
            # Image is like '../../media/hero-mechanic-pumps.png'
            # We need just 'hero-mechanic-pumps.png' for the generator if it assumes media/blog/ prefix?
            # Wait, generator says: f"https://brilliantserv.com/media/blog/{article['image_filename']}"
            # The current images might be in ../../media/ (root media) or ../../media/blog/
            
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
        
        # Defaults for migration
        item['skip_page_generation'] = True
        item['category'] = "عام" # Default
        item['keywords'] = ""
        item['h1'] = item.get('title', '')
        item['meta_title'] = item.get('title', '')
        item['content_structure'] = []
        item['faq'] = []
        
        if 'slug' in item:
            articles_json.append(item)

print(json.dumps(articles_json, ensure_ascii=False, indent=4))
