import os
import re

BLOG_DIR = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog"

def fix_paths():
    count = 0
    for filename in os.listdir(BLOG_DIR):
        if not filename.endswith('.php'):
            continue
            
        filepath = os.path.join(BLOG_DIR, filename)
        
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        # Regex to find src="diagrams/..." (without leading /blog/)
        # We look for src="diagrams/ and replace with src="/blog/diagrams/
        
        new_content = re.sub(r'src="diagrams/([^"]+)"', r'src="/blog/diagrams/\1"', content)
        
        if new_content != content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Fixed paths in: {filename}")
            count += 1
            
    print(f"Total files fixed: {count}")

if __name__ == "__main__":
    fix_paths()
