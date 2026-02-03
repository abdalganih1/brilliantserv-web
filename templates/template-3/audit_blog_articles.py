#!/usr/bin/env python3
"""
Blog Article Auditor
Checks all blog articles for common issues:
1. Missing featured images
2. Missing og:image meta tag
3. Incomplete page structure (missing </body>, </html>)
4. Missing footer include
5. Missing blog-interactions.js script
"""

import os
import re
from pathlib import Path

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")
MEDIA_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\media\blog")

# Get list of available images
available_images = set(f.name for f in MEDIA_DIR.glob("*.webp"))

issues = []
articles_checked = 0

for php_file in BLOG_DIR.glob("*.php"):
    if php_file.name.startswith("_"):
        continue
        
    articles_checked += 1
    article_issues = []
    
    try:
        content = php_file.read_text(encoding='utf-8')
    except:
        try:
            content = php_file.read_text(encoding='utf-8-sig')
        except Exception as e:
            article_issues.append(f"❌ Cannot read file: {e}")
            issues.append((php_file.name, article_issues))
            continue
    
    # Check 1: Featured image in article body
    has_article_image = '<div class="article-image">' in content or "class=\"article-image\"" in content
    if not has_article_image:
        article_issues.append("🖼️ Missing featured image (<div class='article-image'>)")
    
    # Check 2: og:image meta tag
    has_og_image = 'og:image' in content
    if not has_og_image:
        article_issues.append("📱 Missing og:image meta tag")
    
    # Check 3: Proper closing tags
    has_body_close = '</body>' in content
    has_html_close = '</html>' in content
    if not has_body_close:
        article_issues.append("⚠️ Missing </body> tag")
    if not has_html_close:
        article_issues.append("⚠️ Missing </html> tag")
    
    # Check 4: Footer include
    has_footer = "include '../includes/footer.php'" in content or 'include "../includes/footer.php"' in content
    if not has_footer:
        article_issues.append("🔧 Missing footer.php include")
    
    # Check 5: blog-interactions.js script
    has_js_script = 'blog-interactions.js' in content
    if not has_js_script:
        article_issues.append("📜 Missing blog-interactions.js script (FAQ won't work)")
    
    # Check 6: Check if image referenced exists
    img_match = re.search(r'src="\.\.\/media\/blog\/([^"]+)"', content)
    if img_match:
        img_name = img_match.group(1)
        if img_name not in available_images:
            article_issues.append(f"❌ Referenced image not found: {img_name}")
    
    if article_issues:
        issues.append((php_file.name, article_issues))

# Generate report
print("=" * 60)
print("📊 BLOG AUDIT REPORT")
print("=" * 60)
print(f"\n📁 Articles checked: {articles_checked}")
print(f"⚠️ Articles with issues: {len(issues)}")
print(f"✅ Articles OK: {articles_checked - len(issues)}")
print()

if issues:
    print("=" * 60)
    print("🔍 ISSUES FOUND:")
    print("=" * 60)
    
    # Group by issue type
    issue_counts = {}
    for filename, article_issues in issues:
        for issue in article_issues:
            issue_type = issue.split()[0]
            issue_counts[issue_type] = issue_counts.get(issue_type, 0) + 1
    
    print("\n📈 Issue Summary:")
    for issue_type, count in sorted(issue_counts.items(), key=lambda x: -x[1]):
        print(f"  {issue_type}: {count} articles")
    
    print("\n" + "-" * 60)
    print("📝 Detailed Issues by Article:")
    print("-" * 60)
    
    for filename, article_issues in sorted(issues):
        print(f"\n📄 {filename}:")
        for issue in article_issues:
            print(f"   {issue}")

print("\n" + "=" * 60)
print("✅ AUDIT COMPLETE")
print("=" * 60)
