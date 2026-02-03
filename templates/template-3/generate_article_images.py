#!/usr/bin/env python3
"""
توليد صور للمقالات باستخدام Gemini API
يستخدم gemini-3-pro-image-preview لتوليد صور بناءً على محتوى المقال
"""

import os
import json
import requests
import base64
from pathlib import Path
import time

# Configuration - Load API key from external file to avoid leaking
API_KEY_FILE = Path(__file__).parent.parent.parent / ".gemini_api_key"
with open(API_KEY_FILE, "r") as f:
    API_KEY = f.read().strip()
API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-3-pro-image-preview:generateContent"

# Paths
SCRIPT_DIR = Path(__file__).parent
BLOG_DIR = SCRIPT_DIR / "blog"
MEDIA_BLOG_DIR = SCRIPT_DIR / "media" / "blog"

# المقالات التي تحتاج صور جديدة
ARTICLES_NEEDING_IMAGES = [
    {
        "file": "pump-repair-north-riyadh.php",
        "title": "تصليح مضخات مياه شمال الرياض",
        "image_name": "pump-repair-north-riyadh-featured.webp",
        "prompt": "Professional industrial water pump repair technician in Saudi Arabia, working on a large blue water pump in a clean modern pump room, wearing safety gear and blue uniform, high quality photorealistic image, industrial lighting, maintenance tools visible"
    },
    {
        "file": "دور-الكهرباء-الصناعية-في-تطوير-المصان.php",
        "title": "دور الكهرباء الصناعية في تطوير المصانع",
        "image_name": "industrial-electricity-factory.webp",
        "prompt": "Modern industrial factory electrical installation in Saudi Arabia, large electrical control panels with switches and meters, professional electrical engineer inspecting the system, clean industrial environment, high quality photorealistic image, blue and orange lighting accents"
    },
    {
        "file": "لف-المحركات-الكهربائية.php",
        "title": "لف المحركات الكهربائية",
        "image_name": "motor-winding-workshop.webp",
        "prompt": "Electric motor rewinding workshop, skilled technician rewinding copper coils on a large industrial motor stator, specialized winding machine visible, copper wire spools, professional workshop setting, high quality photorealistic image, warm lighting"
    }
]

def generate_image_with_gemini(prompt: str, image_name: str) -> bool:
    """توليد صورة باستخدام Gemini 3 Pro Image Preview API"""
    print(f"\n🎨 توليد صورة: {image_name}")
    print(f"   Prompt: {prompt[:100]}...")
    
    headers = {
        "Content-Type": "application/json",
    }
    
    payload = {
        "contents": [
            {
                "parts": [
                    {
                        "text": f"Generate a high-quality professional photograph: {prompt}"
                    }
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
            print(f"   Response: {response.text[:500]}")
            return False
        
        result = response.json()
        
        # استخراج الصورة من الاستجابة
        if "candidates" in result and len(result["candidates"]) > 0:
            candidate = result["candidates"][0]
            if "content" in candidate and "parts" in candidate["content"]:
                for part in candidate["content"]["parts"]:
                    if "inlineData" in part:
                        image_data = part["inlineData"]["data"]
                        mime_type = part["inlineData"].get("mimeType", "image/png")
                        
                        # حفظ الصورة
                        image_bytes = base64.b64decode(image_data)
                        image_path = MEDIA_BLOG_DIR / image_name
                        
                        with open(image_path, "wb") as f:
                            f.write(image_bytes)
                        
                        print(f"   ✅ تم حفظ الصورة: {image_path}")
                        print(f"   📦 الحجم: {len(image_bytes) / 1024:.1f} KB")
                        return True
        
        print(f"   ⚠️ لم يتم العثور على صورة في الاستجابة")
        # حفظ الاستجابة للتحليل
        with open(MEDIA_BLOG_DIR / "gemini_response.json", "w", encoding="utf-8") as f:
            json.dump(result, f, ensure_ascii=False, indent=2)
        return False
        
    except requests.exceptions.Timeout:
        print(f"   ❌ انتهاء وقت الانتظار")
        return False
    except Exception as e:
        print(f"   ❌ خطأ غير متوقع: {e}")
        return False

def update_article_image_paths(article: dict, new_image_name: str):
    """تحديث مسارات الصور في ملف المقال"""
    file_path = BLOG_DIR / article["file"]
    
    if not file_path.exists():
        print(f"   ⚠️ الملف غير موجود: {file_path}")
        return False
    
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            content = f.read()
        
        # تحديد الصورة القديمة بناءً على المقال
        old_patterns = []
        if "pump-repair-north-riyadh" in article["file"]:
            old_patterns = [
                ("hero-mechanic-pumps.webp", new_image_name),
            ]
        elif "كهرباء" in article["file"] or "المصان" in article["file"]:
            old_patterns = [
                ("hero-electrical-work.webp", new_image_name),
            ]
        elif "لف-المحركات" in article["file"]:
            old_patterns = [
                ("لف-المحركات-الكهربائية.webp", new_image_name),
                ("../media/services/لف-المحركات-الكهربائية.webp", f"../media/blog/{new_image_name}"),
            ]
        
        updated = False
        for old_img, new_img in old_patterns:
            if old_img in content:
                # تحديث في og:image و twitter:image و img src
                content = content.replace(
                    f"media/blog/{old_img}",
                    f"media/blog/{new_img}"
                )
                content = content.replace(
                    f"media/services/{old_img}",
                    f"media/blog/{new_img}"
                )
                content = content.replace(
                    f'src="../media/blog/{old_img}"',
                    f'src="../media/blog/{new_img}"'
                )
                content = content.replace(
                    f'src="../media/services/{old_img}"',
                    f'src="../media/blog/{new_img}"'
                )
                updated = True
        
        if updated:
            with open(file_path, "w", encoding="utf-8") as f:
                f.write(content)
            print(f"   ✅ تم تحديث مسارات الصور في: {article['file']}")
            return True
        else:
            print(f"   ℹ️ لم يتم العثور على صور قديمة للتحديث")
            return False
            
    except Exception as e:
        print(f"   ❌ خطأ في تحديث الملف: {e}")
        return False

def main():
    print("=" * 60)
    print("🖼️ توليد صور للمقالات باستخدام Gemini 3 Pro Image Preview")
    print("=" * 60)
    
    # التأكد من وجود مجلد الصور
    MEDIA_BLOG_DIR.mkdir(parents=True, exist_ok=True)
    
    results = {
        "success": [],
        "failed": []
    }
    
    for article in ARTICLES_NEEDING_IMAGES:
        print(f"\n📰 معالجة: {article['title']}")
        print("-" * 40)
        
        # التحقق من وجود الصورة مسبقاً
        image_path = MEDIA_BLOG_DIR / article["image_name"]
        if image_path.exists():
            print(f"   ℹ️ الصورة موجودة مسبقاً، تخطي التوليد")
            results["success"].append(article["file"])
            continue
        
        # توليد الصورة
        if generate_image_with_gemini(article["prompt"], article["image_name"]):
            # تحديث المقال
            update_article_image_paths(article, article["image_name"])
            results["success"].append(article["file"])
        else:
            results["failed"].append(article["file"])
        
        # انتظار قصير بين الطلبات
        time.sleep(2)
    
    # ملخص النتائج
    print("\n" + "=" * 60)
    print("📊 ملخص النتائج")
    print("=" * 60)
    print(f"✅ نجح: {len(results['success'])} مقالات")
    for f in results["success"]:
        print(f"   • {f}")
    
    if results["failed"]:
        print(f"\n❌ فشل: {len(results['failed'])} مقالات")
        for f in results["failed"]:
            print(f"   • {f}")
    
    # حفظ التقرير
    report_path = SCRIPT_DIR / "image_generation_report.json"
    with open(report_path, "w", encoding="utf-8") as f:
        json.dump(results, f, ensure_ascii=False, indent=2)
    print(f"\n📝 تم حفظ التقرير: {report_path}")

if __name__ == "__main__":
    main()
