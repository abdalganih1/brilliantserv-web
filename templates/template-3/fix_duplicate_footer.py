#!/usr/bin/env python3
"""
إصلاح تكرار الفوتر في المقالات
الملف blog-article-footer.php يغلق كل شيء بالفعل
فيجب إزالة كل شيء بعد include '../includes/blog-article-footer.php';
"""

import os
import re

blog_dir = r'c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog'
fixed_files = []

for filename in os.listdir(blog_dir):
    if not filename.endswith('.php'):
        continue
    
    filepath = os.path.join(blog_dir, filename)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    original = content
    
    # Pattern: Everything after blog-article-footer.php include should be removed
    # because blog-article-footer.php already includes footer + closing tags
    pattern = r"(include\s+['\"]\.\.\/includes\/blog-article-footer\.php['\"];\s*\?>\s*)\s*</div>.*$"
    
    if re.search(pattern, content, re.DOTALL):
        # Keep only up to and including the blog-article-footer.php include
        content = re.sub(pattern, r'\1', content, flags=re.DOTALL)
        
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        fixed_files.append(filename)
        print(f"✅ Fixed: {filename}")

print(f"\n=== Fixed {len(fixed_files)} files ===")
