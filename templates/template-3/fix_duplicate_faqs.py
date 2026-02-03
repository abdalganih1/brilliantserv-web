#!/usr/bin/env python3
"""
إصلاح مشاكل تكرار قسم الأسئلة الشائعة في المقالات
يحتفظ فقط بالقسم الأخير (AI-Generated FAQ Section)
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
    
    # Pattern 1: Remove "الأسئلة الشائعة" h2 before the AI-Generated FAQ Section
    # Keep the AI-Generated one (has the ❓ emoji)
    pattern1 = r'<h2[^>]*>\s*الأسئلة الشائعة\s*</h2>\s*<div class="faq-section">'
    if '<h2>❓ الأسئلة الشائعة</h2>' in content and re.search(pattern1, content):
        # Find the first faq-section that doesn't have the emoji
        # and remove it until we hit the AI-Generated comment
        content = re.sub(
            r'<h2[^>]*>\s*الأسئلة الشائعة\s*</h2>\s*<div class="faq-section">.*?</div>\s*(?=<!-- AI-Generated FAQ Section -->)',
            '',
            content,
            flags=re.DOTALL
        )
    
    # Pattern 2: Remove extra "الأسئلة الشائعة حول" sections in AI-enhanced content
    # These are H2/H3 inside the ai-enhanced-content div
    pattern2 = r'(<div class="ai-enhanced-content">.*?)(<h2>الأسئلة الشائعة.*?(?=</div>\s*<!-- AI-Generated FAQ Section -->|</div>\s*</div>\s*<!-- AI-Generated FAQ Section -->))'
    
    # Pattern 3: Remove the old Table of Contents reference to FAQ if we're removing it
    content = re.sub(r'<li>\s*<a href="#section-\d+">\s*\d+\.\s*الأسئلة الشائعة\s*</a>\s*</li>', '', content)
    
    if content != original:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        fixed_files.append(filename)
        print(f"✅ Fixed: {filename}")

print(f"\n=== Fixed {len(fixed_files)} files ===")
