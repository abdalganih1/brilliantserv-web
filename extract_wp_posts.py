#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""
استخراج المقالات من قاعدة بيانات WordPress SQL
يستخرج عناوين المقالات وروابطها والمحتوى
"""

import re
import json
from pathlib import Path

SQL_FILE = Path(r"ملفات المستخدم/u552295015_ytO4e.sql")

def extract_posts_data():
    """
    يقرأ ملف SQL ويستخرج بيانات المقالات
    """
    posts = []
    
    with open(SQL_FILE, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # البحث عن جميع الروابط العربية في الملف
    arabic_url_pattern = r'https?://brilliantserv\.com/([^/"\'\s<>]+)/'
    urls = re.findall(arabic_url_pattern, content)
    
    # إزالة الروابط المكررة
    unique_urls = list(set(urls))
    
    # فك ترميز الروابط العربية
    from urllib.parse import unquote
    
    decoded_urls = []
    for url in unique_urls:
        try:
            decoded = unquote(url)
            # تصفية الروابط التي تحتوي على كلمات عربية فقط
            if any('\u0600' <= c <= '\u06FF' for c in decoded):
                decoded_urls.append({
                    'encoded': url,
                    'decoded': decoded,
                    'full_url': f'https://brilliantserv.com/{url}/'
                })
        except:
            continue
    
    # ترتيب حسب الاسم
    decoded_urls.sort(key=lambda x: x['decoded'])
    
    return decoded_urls

def extract_post_content():
    """
    يستخرج محتوى المقالات من INSERT statements
    """
    with open(SQL_FILE, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # البحث عن post_title و post_name
    post_pattern = r"'([^']{10,200})',\s*'([^']{0,200})',\s*'[^']*',\s*'publish',\s*'open',\s*'open',\s*'',\s*'([a-zA-Z0-9%_-]+)'"
    
    posts = []
    for match in re.finditer(post_pattern, content):
        title = match.group(1)
        post_name = match.group(3)
        if title and post_name:
            posts.append({
                'title': title[:100],
                'slug': post_name
            })
    
    return posts

if __name__ == '__main__':
    print("="*60)
    print("🔍 استخراج روابط المقالات العربية من WordPress")
    print("="*60)
    
    urls = extract_posts_data()
    
    print(f"\n📊 تم العثور على {len(urls)} رابط عربي فريد:\n")
    
    for i, url in enumerate(urls, 1):
        print(f"{i:2}. {url['decoded']}")
        print(f"    🔗 {url['full_url']}")
        print()
    
    # حفظ النتائج في ملف JSON
    output_file = Path("extracted_wp_urls.json")
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(urls, f, ensure_ascii=False, indent=2)
    
    print(f"\n✅ تم حفظ النتائج في: {output_file}")
