#!/usr/bin/env python3
"""
تحليل متقدم لاكتشاف المقالات التي تستخدم صور مشابهة لصور الخدمات
يقارن أسماء الصور ويكتشف الصور المكررة
"""

import os
import re
from pathlib import Path
from collections import defaultdict
import json

SCRIPT_DIR = Path(__file__).parent
BLOG_DIR = SCRIPT_DIR / "blog"
MEDIA_BLOG_DIR = SCRIPT_DIR / "media" / "blog"
MEDIA_SERVICES_DIR = SCRIPT_DIR / "media" / "services"

def get_service_image_names():
    """الحصول على أسماء صور الخدمات"""
    if not MEDIA_SERVICES_DIR.exists():
        return set()
    
    service_images = set()
    for f in MEDIA_SERVICES_DIR.iterdir():
        if f.is_file() and f.suffix.lower() in ['.webp', '.jpg', '.jpeg', '.png']:
            service_images.add(f.stem)  # اسم الملف بدون الامتداد
    return service_images

def extract_images_from_article(file_path):
    """استخراج جميع الصور من المقال"""
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    images = set()
    
    # استخراج من og:image و twitter:image
    meta_patterns = [
        r'og:image["\']?\s*content=["\']([^"\']+)["\']',
        r'twitter:image["\']?\s*content=["\']([^"\']+)["\']',
    ]
    
    for pattern in meta_patterns:
        matches = re.findall(pattern, content)
        for match in matches:
            images.add(match)
    
    # استخراج من img src
    img_patterns = [
        r'src=["\']([^"\']*\.(webp|jpg|jpeg|png))["\']',
        r'data-src=["\']([^"\']*\.(webp|jpg|jpeg|png))["\']',
    ]
    
    for pattern in img_patterns:
        matches = re.findall(pattern, content, re.IGNORECASE)
        for match in matches:
            images.add(match[0] if isinstance(match, tuple) else match)
    
    return images

def get_image_stem(image_path):
    """استخراج اسم الصورة من المسار الكامل"""
    # تنظيف المسار
    image_path = image_path.replace('../', '').replace('./', '')
    # استخراج اسم الملف
    filename = Path(image_path).stem
    return filename

def analyze_all_articles():
    """تحليل جميع المقالات"""
    service_image_names = get_service_image_names()
    print(f"📁 صور الخدمات: {len(service_image_names)} صورة")
    for name in sorted(service_image_names):
        print(f"   • {name}")
    
    articles_needing_images = []
    
    # تحليل المقالات
    for php_file in BLOG_DIR.glob("*.php"):
        images = extract_images_from_article(php_file)
        
        for img in images:
            img_stem = get_image_stem(img)
            
            # تحقق من تطابق مع صور الخدمات
            if img_stem in service_image_names:
                articles_needing_images.append({
                    "file": php_file.name,
                    "image": img,
                    "matched_service": img_stem,
                    "reason": "direct_match"
                })
            # تحقق من أن الصورة تحتوي على كلمات مفتاحية من الخدمات
            elif "media/services/" in img or "../media/services/" in img:
                articles_needing_images.append({
                    "file": php_file.name,
                    "image": img,
                    "matched_service": img_stem,
                    "reason": "service_path"
                })
            # تحقق من تشابه الأسماء (نفس البادئة)
            else:
                for service_name in service_image_names:
                    # إزالة اللواحق الشائعة للمقارنة
                    clean_img = img_stem.replace('-featured', '').replace('_featured', '')
                    clean_service = service_name.replace('-featured', '').replace('_featured', '')
                    
                    if clean_img == clean_service:
                        articles_needing_images.append({
                            "file": php_file.name,
                            "image": img,
                            "matched_service": service_name,
                            "reason": "similar_name"
                        })
                        break
    
    # إزالة المكررات
    unique_articles = {}
    for item in articles_needing_images:
        key = item["file"]
        if key not in unique_articles:
            unique_articles[key] = item
    
    return list(unique_articles.values()), service_image_names

def main():
    print("=" * 60)
    print("🔍 تحليل متقدم للمقالات وصور الخدمات")
    print("=" * 60)
    
    articles, service_images = analyze_all_articles()
    
    print(f"\n📊 النتائج:")
    print(f"   المقالات التي تستخدم صور مشابهة للخدمات: {len(articles)}")
    
    if articles:
        print("\n📝 قائمة المقالات:")
        for i, article in enumerate(articles, 1):
            print(f"\n   {i}. {article['file']}")
            print(f"      الصورة: {article['image']}")
            print(f"      مطابقة: {article['matched_service']}")
            print(f"      السبب: {article['reason']}")
    
    # حفظ النتائج
    output = {
        "service_images": list(service_images),
        "articles_needing_images": articles,
        "total": len(articles)
    }
    
    with open(SCRIPT_DIR / "service_images_analysis.json", "w", encoding="utf-8") as f:
        json.dump(output, f, ensure_ascii=False, indent=2)
    
    print(f"\n✅ تم حفظ التقرير: service_images_analysis.json")
    
    return articles

if __name__ == "__main__":
    main()
