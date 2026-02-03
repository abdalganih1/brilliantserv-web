#!/usr/bin/env python3
"""
تحليل صور المقالات للكشف عن الصور المكررة والمتشابهة
"""

import os
import re
from collections import defaultdict
from pathlib import Path

# المسارات
BLOG_DIR = Path(__file__).parent / "blog"
MEDIA_BLOG_DIR = Path(__file__).parent / "media" / "blog"
MEDIA_SERVICES_DIR = Path(__file__).parent / "media" / "services"

# صور الخدمات (يجب ألا تُستخدم في المقالات)
SERVICE_IMAGES = [
    "hero-mechanic-pumps.webp",
    "hero-electrical-work.webp",
    "تصنيع-وتوريد-لوحات-MDB.webp",
    "صيانة-مضخات-KSB-.webp",
    "صيانة-مضخات-KSB-_1_.webp",
    "أفضل-مؤسسة-تنفيذ-أعمال-كهرباء-في-المملكة.webp",
    "تجميع-لوحات-التحكم.webp",
    "صيانة-كهرباء-المصانع-بالرياض.webp",
    "صيانة-مضخات-الحريق.webp",
    "صيانة-مضخات-الديزل.webp",
    "صيانة-مضخات-جراندفوس.webp",
    "صيانة-مضخات-الخرسانة.webp",
    "لف-المحركات-الكهربائية.webp",
]

def extract_images_from_php(file_path):
    """استخراج جميع الصور من ملف PHP"""
    images = []
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # البحث عن الصور في og:image و twitter:image و img src
        patterns = [
            r'og:image.*?content="([^"]+)"',
            r'twitter:image.*?content="([^"]+)"',
            r'"image":\s*"([^"]+)"',
            r'<img[^>]+src="([^"]+)"',
        ]
        
        for pattern in patterns:
            matches = re.findall(pattern, content, re.IGNORECASE)
            for match in matches:
                # استخراج اسم الصورة فقط
                img_name = match.split('/')[-1]
                if img_name.endswith(('.webp', '.png', '.jpg', '.jpeg')):
                    images.append({
                        'full_path': match,
                        'name': img_name,
                        'type': 'og' if 'og:' in pattern or 'twitter:' in pattern or '"image"' in pattern else 'content'
                    })
    except Exception as e:
        print(f"خطأ في قراءة {file_path}: {e}")
    
    return images

def analyze_articles():
    """تحليل جميع المقالات"""
    results = {
        'articles': [],
        'duplicate_images': defaultdict(list),
        'service_images_used': [],
        'hero_images': defaultdict(list),
    }
    
    # فحص جميع ملفات PHP في مجلد blog (عدا _archive)
    for php_file in BLOG_DIR.glob("*.php"):
        if php_file.name.startswith('_'):
            continue
            
        images = extract_images_from_php(php_file)
        
        # البحث عن صورة البطل (og:image)
        hero_image = None
        for img in images:
            if img['type'] == 'og':
                hero_image = img['name']
                results['hero_images'][hero_image].append(php_file.name)
                break
        
        # فحص الصور المستخدمة من الخدمات
        for img in images:
            if img['name'] in SERVICE_IMAGES:
                results['service_images_used'].append({
                    'article': php_file.name,
                    'image': img['name'],
                    'full_path': img['full_path']
                })
        
        results['articles'].append({
            'name': php_file.name,
            'hero_image': hero_image,
            'total_images': len(images),
            'images': images
        })
    
    # تحديد الصور المكررة (أكثر من مقال يستخدم نفس الصورة)
    for img, articles in results['hero_images'].items():
        if len(articles) > 1:
            results['duplicate_images'][img] = articles
    
    return results

def print_report(results):
    """طباعة التقرير"""
    print("=" * 80)
    print("📊 تقرير تحليل صور المقالات")
    print("=" * 80)
    
    print(f"\n📁 إجمالي المقالات: {len(results['articles'])}")
    
    # الصور المكررة
    print(f"\n🔄 الصور المكررة (نفس الصورة في أكثر من مقال):")
    if results['duplicate_images']:
        for img, articles in results['duplicate_images'].items():
            print(f"\n  📷 {img}")
            for article in articles:
                print(f"     └── {article}")
    else:
        print("  ✅ لا توجد صور مكررة")
    
    # صور الخدمات المستخدمة
    print(f"\n⚠️ صور الخدمات المستخدمة في المقالات ({len(results['service_images_used'])} حالة):")
    for item in results['service_images_used']:
        print(f"  📰 {item['article']}")
        print(f"     └── 🖼️ {item['image']}")
    
    # المقالات التي تحتاج صور جديدة
    print(f"\n🎯 المقالات التي تحتاج صور جديدة:")
    needs_new_image = []
    for item in results['service_images_used']:
        if item['article'] not in needs_new_image:
            needs_new_image.append(item['article'])
    
    for img, articles in results['duplicate_images'].items():
        for article in articles[1:]:  # أول مقال يبقى، الباقي يحتاجون صور جديدة
            if article not in needs_new_image:
                needs_new_image.append(article)
    
    for article in needs_new_image:
        print(f"  • {article}")
    
    print(f"\n📈 إجمالي المقالات التي تحتاج صور جديدة: {len(needs_new_image)}")
    
    return needs_new_image

if __name__ == "__main__":
    results = analyze_articles()
    needs_new_image = print_report(results)
    
    # حفظ النتائج
    import json
    output = {
        'total_articles': len(results['articles']),
        'duplicate_images': dict(results['duplicate_images']),
        'service_images_used': results['service_images_used'],
        'articles_needing_new_images': needs_new_image
    }
    
    with open(Path(__file__).parent / 'image_analysis_report.json', 'w', encoding='utf-8') as f:
        json.dump(output, f, ensure_ascii=False, indent=2)
    
    print(f"\n✅ تم حفظ التقرير في: image_analysis_report.json")
