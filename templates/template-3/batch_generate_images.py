#!/usr/bin/env python3
"""
توليد صور للمقالات التي تستخدم صور مكررة من الخدمات
يستخدم gemini-3-pro-image-preview
"""

import os
import json
import requests
import base64
from pathlib import Path
import time
import re

# Configuration - Load API key from external file
API_KEY_FILE = Path(__file__).parent.parent.parent / ".gemini_api_key"
with open(API_KEY_FILE, "r") as f:
    API_KEY = f.read().strip()
API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-3-pro-image-preview:generateContent"

# Paths
SCRIPT_DIR = Path(__file__).parent
BLOG_DIR = SCRIPT_DIR / "blog"
MEDIA_BLOG_DIR = SCRIPT_DIR / "media" / "blog"

# المقالات التي تستخدم صور مكررة من الخدمات
ARTICLES_TO_GENERATE = [
    {
        "file": "electric-motor-winding.php",
        "old_image": "motor-winding.webp",
        "new_image": "electric-motor-winding-featured.webp",
        "prompt": "Professional electric motor rewinding technician in a modern industrial workshop, carefully winding copper coils around a large motor stator, surrounded by copper wire spools and specialized tools, high quality photorealistic image, clean workshop environment, detailed view of the winding process"
    },
    {
        "file": "jockey-fire-pump-maintenance.php", 
        "old_image": "fire-pump-maintenance.webp",
        "new_image": "jockey-fire-pump-featured.webp",
        "prompt": "Red jockey fire pump system maintenance in a modern building pump room, professional technician inspecting the compact red fire booster pump, pressure gauges and control panel visible, fire safety equipment, high quality photorealistic industrial image"
    },
    {
        "file": "صيانة-مضخات-جراندفوس.php",
        "old_image": "../media/services/grundfos-maintenance.png",
        "new_image": "grundfos-pump-maintenance-featured.webp",
        "prompt": "Grundfos industrial water pump maintenance, professional technician servicing a blue Grundfos pump in a clean pump room, specialized tools and diagnostic equipment visible, high quality photorealistic image, modern industrial setting"
    },
    {
        "file": "pump-installation-east-riyadh.php",
        "old_image": "hero-mechanic-pumps.webp",
        "new_image": "pump-installation-east-riyadh-featured.webp",
        "prompt": "Water pump installation in a Saudi Arabian building, professional plumber installing a large water pump system, modern plumbing infrastructure visible, pipes and fittings, high quality photorealistic image, professional installation work"
    },
    {
        "file": "centrifugal-pump-types-uses.php",
        "old_image": "centrifugal-pumps-featured.webp",
        "new_image": "centrifugal-pump-types-featured.webp",
        "prompt": "Various types of industrial centrifugal pumps displayed in a showroom, different sizes and colors including blue and green pumps, industrial pump equipment showcase, high quality photorealistic product photography, clean background"
    },
    {
        "file": "fire-pump-types-maintenance.php",
        "old_image": "fire-pumps-featured.webp", 
        "new_image": "fire-pump-complete-guide-featured.webp",
        "prompt": "Complete fire pump station with red fire pumps, jockey pump and main diesel pump, control panels with gauges, industrial fire protection system, professional pump room installation, high quality photorealistic image"
    },
    {
        "file": "mcc-panels-guide.php",
        "old_image": "mcc-panels-featured.webp",
        "new_image": "mcc-panels-complete-guide-featured.webp",
        "prompt": "Modern Motor Control Center MCC panels in an industrial facility, rows of grey electrical cabinets with switches and indicators, professional electrical engineer inspecting the system, high quality photorealistic image"
    },
    {
        "file": "vfd-pump-control-panels.php",
        "old_image": "pump-control-panels-featured.webp",
        "new_image": "vfd-pump-control-featured.webp",
        "prompt": "Variable Frequency Drive VFD control panel for pump systems, modern electrical cabinet with digital displays and status indicators, professional industrial control system, high quality photorealistic image"
    }
]

def generate_image_with_gemini(prompt: str, image_name: str) -> bool:
    """توليد صورة باستخدام Gemini 3 Pro Image Preview API"""
    print(f"\n🎨 توليد صورة: {image_name}")
    print(f"   Prompt: {prompt[:80]}...")
    
    headers = {"Content-Type": "application/json"}
    
    payload = {
        "contents": [
            {
                "parts": [
                    {"text": f"Generate a high-quality professional photograph: {prompt}"}
                ]
            }
        ],
        "generationConfig": {
            "responseModalities": ["IMAGE", "TEXT"]
        }
    }
    
    try:
        response = requests.post(
            f"{API_URL}?key={API_KEY}",
            headers=headers,
            json=payload,
            timeout=120
        )
        
        if response.status_code != 200:
            print(f"   ❌ خطأ في API: {response.status_code}")
            error_text = response.text[:300]
            print(f"   Response: {error_text}")
            return False
        
        result = response.json()
        
        if "candidates" in result and len(result["candidates"]) > 0:
            candidate = result["candidates"][0]
            if "content" in candidate and "parts" in candidate["content"]:
                for part in candidate["content"]["parts"]:
                    if "inlineData" in part:
                        image_data = part["inlineData"]["data"]
                        image_bytes = base64.b64decode(image_data)
                        image_path = MEDIA_BLOG_DIR / image_name
                        
                        with open(image_path, "wb") as f:
                            f.write(image_bytes)
                        
                        print(f"   ✅ تم حفظ الصورة: {image_path}")
                        print(f"   📦 الحجم: {len(image_bytes) / 1024:.1f} KB")
                        return True
        
        print(f"   ⚠️ لم يتم العثور على صورة في الاستجابة")
        return False
        
    except requests.exceptions.Timeout:
        print(f"   ❌ انتهاء وقت الانتظار")
        return False
    except Exception as e:
        print(f"   ❌ خطأ: {e}")
        return False

def update_article_image(article: dict) -> bool:
    """تحديث مسار الصورة في المقال"""
    file_path = BLOG_DIR / article["file"]
    
    if not file_path.exists():
        print(f"   ⚠️ الملف غير موجود: {file_path}")
        return False
    
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            content = f.read()
        
        old_img = article["old_image"]
        new_img = article["new_image"]
        
        # تحديث الصور في المقال
        updated = False
        
        # أنماط مختلفة للتبديل
        replacements = [
            (f'"{old_img}"', f'"../media/blog/{new_img}"'),
            (f"'{old_img}'", f"'../media/blog/{new_img}'"),
            (f'src="../media/blog/{old_img}"', f'src="../media/blog/{new_img}"'),
            (f'src="../media/services/{old_img}"', f'src="../media/blog/{new_img}"'),
            (f'media/blog/{old_img}', f'media/blog/{new_img}'),
            (f'media/services/{old_img.replace("../media/services/", "")}', f'media/blog/{new_img}'),
        ]
        
        for old_pattern, new_pattern in replacements:
            if old_pattern in content:
                content = content.replace(old_pattern, new_pattern)
                updated = True
        
        if updated:
            with open(file_path, "w", encoding="utf-8") as f:
                f.write(content)
            print(f"   ✅ تم تحديث: {article['file']}")
            return True
        else:
            print(f"   ℹ️ لم يتم العثور على الصورة القديمة")
            return False
            
    except Exception as e:
        print(f"   ❌ خطأ: {e}")
        return False

def main():
    print("=" * 60)
    print("🖼️ توليد صور للمقالات - Gemini 3 Pro Image Preview")
    print("=" * 60)
    print(f"📊 عدد المقالات: {len(ARTICLES_TO_GENERATE)}")
    print(f"⏱️ الوقت المتوقع: ~{len(ARTICLES_TO_GENERATE) * 30} ثانية")
    
    MEDIA_BLOG_DIR.mkdir(parents=True, exist_ok=True)
    
    results = {"success": [], "failed": [], "skipped": []}
    
    for i, article in enumerate(ARTICLES_TO_GENERATE, 1):
        print(f"\n{'='*40}")
        print(f"📰 [{i}/{len(ARTICLES_TO_GENERATE)}] {article['file']}")
        print("-" * 40)
        
        # التحقق من وجود الصورة الجديدة
        image_path = MEDIA_BLOG_DIR / article["new_image"]
        if image_path.exists():
            print(f"   ℹ️ الصورة موجودة مسبقاً، تخطي")
            results["skipped"].append(article["file"])
            continue
        
        # التحقق من وجود ملف المقال
        if not (BLOG_DIR / article["file"]).exists():
            print(f"   ⚠️ ملف المقال غير موجود، تخطي")
            results["skipped"].append(article["file"])
            continue
        
        # توليد الصورة
        if generate_image_with_gemini(article["prompt"], article["new_image"]):
            update_article_image(article)
            results["success"].append(article["file"])
        else:
            results["failed"].append(article["file"])
        
        # انتظار بين الطلبات (rate limiting: 20 RPM)
        if i < len(ARTICLES_TO_GENERATE):
            print("   ⏳ انتظار 3 ثوانٍ...")
            time.sleep(3)
    
    # ملخص
    print("\n" + "=" * 60)
    print("📊 ملخص النتائج")
    print("=" * 60)
    print(f"✅ نجح: {len(results['success'])}")
    for f in results["success"]:
        print(f"   • {f}")
    
    print(f"\n⏭️ تخطي: {len(results['skipped'])}")
    for f in results["skipped"]:
        print(f"   • {f}")
    
    if results["failed"]:
        print(f"\n❌ فشل: {len(results['failed'])}")
        for f in results["failed"]:
            print(f"   • {f}")
    
    # حفظ التقرير
    with open(SCRIPT_DIR / "batch_image_generation_report.json", "w", encoding="utf-8") as f:
        json.dump(results, f, ensure_ascii=False, indent=2)

if __name__ == "__main__":
    main()
