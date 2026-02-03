import os
import re
from collections import defaultdict

BLOG_DIR = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog"

def find_duplicates():
    image_counts = defaultdict(list)
    
    for filename in os.listdir(BLOG_DIR):
        if not filename.endswith('.php'):
            continue
            
        filepath = os.path.join(BLOG_DIR, filename)
        
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        # Find og:image
        match = re.search(r'<meta property="og:image" content="(.*?)"', content)
        if match:
            image_url = match.group(1)
            # Normalize URL to get filename
            image_name = image_url.split('/')[-1]
            image_counts[image_name].append(filename)
            
    print("Duplicate Images Found:")
    print("=======================")
    for image, files in image_counts.items():
        if len(files) > 1:
            print(f"\nImage: {image}")
            print(f"Count: {len(files)}")
            print("Used in:")
            for f in files[:5]: # Show max 5
                print(f" - {f}")
            if len(files) > 5:
                print(f" ... and {len(files)-5} more")

if __name__ == "__main__":
    find_duplicates()
