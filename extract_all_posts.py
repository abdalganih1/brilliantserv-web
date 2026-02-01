#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""
استخراج جميع المقالات المنشورة من قاعدة بيانات WordPress
ومقارنتها مع المقالات الموجودة حالياً
"""

import re
import json
from pathlib import Path
from urllib.parse import unquote

SQL_FILE = Path(r"ملفات المستخدم/u552295015_ytO4e.sql")
BLOG_DIR = Path("templates/template-3/blog")
GSC_REPORT = Path("gsc_report_20260131_162548.json")

def extract_posts():
    """استخراج المقالات من SQL"""
    with open(SQL_FILE, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # البحث عن أنماط المقالات المنشورة
    # نبحث عن: 'publish', 'open', 'open', '', 'POST_NAME'
    pattern = r"'publish',\s*'open',\s*'open',\s*'',\s*'([%a-zA-Z0-9_-]+)'"
    
    matches = re.findall(pattern, content)
    
    posts = []
    for slug in matches:
        try:
            decoded = unquote(slug)
            posts.append({
                'encoded_slug': slug,
                'decoded_slug': decoded,
                'url': f'https://brilliantserv.com/{slug}/'
            })
        except:
            continue
    
    # إزالة المكررات
    seen = set()
    unique_posts = []
    for p in posts:
        if p['encoded_slug'] not in seen:
            seen.add(p['encoded_slug'])
            unique_posts.append(p)
    
    return unique_posts

def get_existing_blog_files():
    """الحصول على المقالات الموجودة في المدونة"""
    if not BLOG_DIR.exists():
        return []
    
    files = list(BLOG_DIR.glob("*.php"))
    return [f.stem for f in files]

def get_gsc_top_pages():
    """استخراج أفضل الصفحات من تقرير GSC"""
    if not GSC_REPORT.exists():
        return []
    
    with open(GSC_REPORT, 'r', encoding='utf-8') as f:
        data = json.load(f)
    
    pages = []
    for page in data.get('top_pages', []):
        url = page['keys'][0]
        # استخراج الـ slug من الرابط
        match = re.search(r'brilliantserv\.com/([^/]+)/?$', url)
        if match:
            slug = match.group(1)
            decoded = unquote(slug)
            pages.append({
                'url': url,
                'slug': decoded,
                'encoded_slug': slug,
                'clicks': page['clicks'],
                'impressions': page['impressions'],
                'position': page['position']
            })
    
    return pages

def main():
    print("="*70)
    print("🔍 تحليل المقالات المفقودة - BrilliantServ SEO Recovery")
    print("="*70)
    
    # 1. استخراج المقالات من WordPress
    wp_posts = extract_posts()
    print(f"\n📦 WordPress Database: {len(wp_posts)} مقالة/صفحة منشورة")
    
    # 2. المقالات الموجودة حالياً
    existing = get_existing_blog_files()
    print(f"📁 Blog Directory: {len(existing)} مقالة موجودة")
    
    # 3. تحليل GSC
    gsc_pages = get_gsc_top_pages()
    print(f"📊 GSC Top Pages: {len(gsc_pages)} صفحة عالية الأداء")
    
    print("\n" + "="*70)
    print("📊 أفضل الصفحات في Google Search Console:")
    print("="*70)
    
    missing_articles = []
    for i, page in enumerate(gsc_pages, 1):
        status = "✅" if page['slug'] in existing or page['slug'].replace('-', '_') in existing else "❌ مفقودة"
        print(f"\n{i}. {page['slug']}")
        print(f"   🔗 {page['url']}")
        print(f"   📈 Clicks: {page['clicks']} | Impressions: {page['impressions']} | Position: {page['position']:.1f}")
        print(f"   Status: {status}")
        
        if "❌" in status:
            missing_articles.append(page)
    
    print("\n" + "="*70)
    print("❌ المقالات المفقودة التي تحتاج محتوى:")
    print("="*70)
    
    for i, article in enumerate(missing_articles, 1):
        print(f"\n{i}. {article['slug']}")
        print(f"   URL: {article['url']}")
        print(f"   Performance: {article['clicks']} clicks, {article['impressions']} impressions")
    
    # حفظ التقرير
    report = {
        'wordpress_posts': wp_posts[:50],  # أول 50
        'existing_files': existing,
        'gsc_top_pages': gsc_pages,
        'missing_articles': missing_articles
    }
    
    output_file = Path("seo_recovery_report.json")
    with open(output_file, 'w', encoding='utf-8') as f:
        json.dump(report, f, ensure_ascii=False, indent=2)
    
    print(f"\n\n✅ تم حفظ التقرير في: {output_file}")
    
    return missing_articles

if __name__ == '__main__':
    main()
