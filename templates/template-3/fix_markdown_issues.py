import os
import re
from pathlib import Path

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")

def fix_file(filepath):
    """Remove Markdown code blocks from PHP file"""
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original_content = content
    
    # Remove ```html
    content = re.sub(r'```html\s*', '', content)
    # Remove ```xml
    content = re.sub(r'```xml\s*', '', content)
    # Remove ```json
    content = re.sub(r'```json\s*', '', content)
    # Remove ```
    content = re.sub(r'```', '', content)
    
    if content != original_content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"✅ Fixed: {filepath.name}")
        return True
    return False

def main():
    print("🧹 Fixing Markdown issues in blog files...")
    count = 0
    for filepath in BLOG_DIR.glob("*.php"):
        if fix_file(filepath):
            count += 1
    print(f"🎉 Done! Fixed {count} files.")

if __name__ == "__main__":
    main()
