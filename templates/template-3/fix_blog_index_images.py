#!/usr/bin/env python3
"""
إصلاح صور المقالات في blog_index.json
- توليد صور AI للمقالات التي تستخدم صور مكررة
- تحديث blog_index.json بالصور الجديدة
"""

import os
import json
import requests
import base64
from pathlib import Path
import time
import re

# Configuration
API_KEY_FILE = Path(__file__).parent.parent.parent / ".gemini_api_key"
with open(API_KEY_FILE, "r") as f:
    API_KEY = f.read().strip()
API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-3-pro-image-preview:generateContent"

SCRIPT_DIR = Path(__file__).parent
BLOG_DIR = SCRIPT_DIR / "blog"
MEDIA_BLOG_DIR = SCRIPT_DIR / "media" / "blog"
INDEX_FILE = SCRIPT_DIR / "media" / "blog_index.json"

# المقالات التي تستخدم صور مكررة وتحتاج صور جديدة
ARTICLES_TO_FIX = [
    # المقالات التي تستخدم hero-mechanic-pumps.webp
    {
        "slug": "صيانة-مضخات-جراندفوس",
        "new_image": "grundfos-pump-maintenance-featured.webp",  # موجودة
        "prompt": None  # لا حاجة للتوليد - الصورة موجودة
    },
    {
        "slug": "سرعة-المحركات-الكهربائية",
        "new_image": "motor-speed-calculation-featured.webp",  # موجودة
        "prompt": None
    },
    {
        "slug": "انواع-المضخات",
        "new_image": "12-pump-types-guide-featured.webp",  # موجودة
        "prompt": None
    },
    {
        "slug": "المخططات-الكهربائية-للمباني",
        "new_image": "building-electrical-design-featured.webp",  # موجودة
        "prompt": None
    },
    {
        "slug": "pump-repair-north-riyadh",
        "new_image": "pump-repair-north-riyadh-featured.webp",  # موجودة
        "prompt": None
    },
    {
        "slug": "pool-maintenance-jeddah",
        "new_image": "pool-maintenance-jeddah-featured.webp",
        "prompt": "Swimming pool maintenance service in Jeddah Saudi Arabia, technician cleaning pool water, pool pump and filter system visible, modern villa pool, professional pool cleaning equipment, high quality photorealistic image"
    },
    # المقالات التي تستخدم weak-water-pressure.webp
    {
        "slug": "submersible-pump-problems",
        "new_image": "submersible-pump-troubleshooting-featured.webp",  # موجودة
        "prompt": None
    },
    # المقالات التي تستخدم home-water-pump-types.webp
    {
        "slug": "pump-installation-east-riyadh",
        "new_image": "pump-installation-east-riyadh-featured.webp",  # موجودة
        "prompt": None
    }
]

def generate_image(prompt: str, image_name: str) -> bool:
    """توليد صورة باستخدام Gemini API"""
    print(f"\n🎨 توليد: {image_name}")
    print(f"   Prompt: {prompt[:70]}...")
    
    headers = {"Content-Type": "application/json"}
    payload = {
        "contents": [{"parts": [{"text": f"Generate a high-quality professional photograph: {prompt}"}]}],
        "generationConfig": {"responseModalities": ["IMAGE", "TEXT"]}
    }
    
    try:
        response = requests.post(f"{API_URL}?key={API_KEY}", headers=headers, json=payload, timeout=120)
        
        if response.status_code != 200:
            print(f"   ❌ خطأ: {response.status_code}")
            return False
        
        result = response.json()
        
        if "candidates" in result and len(result["candidates"]) > 0:
            for part in result["candidates"][0].get("content", {}).get("parts", []):
                if "inlineData" in part:
                    image_bytes = base64.b64decode(part["inlineData"]["data"])
                    image_path = MEDIA_BLOG_DIR / image_name
                    with open(image_path, "wb") as f:
                        f.write(image_bytes)
                    print(f"   ✅ حُفظت ({len(image_bytes)/1024:.0f} KB)")
                    return True
        
        print(f"   ⚠️ لا صورة في الاستجابة")
        return False
        
    except Exception as e:
        print(f"   ❌ خطأ: {e}")
        return False

def main():
    print("=" * 60)
    print("🖼️ إصلاح صور blog_index.json")
    print("=" * 60)
    
    # قراءة الفهرس الحالي
    with open(INDEX_FILE, "r", encoding="utf-8") as f:
        articles = json.load(f)
    
    changes = []
    generated = []
    
    for fix in ARTICLES_TO_FIX:
        # البحث عن المقال في الفهرس
        for article in articles:
            if article["slug"] == fix["slug"]:
                old_image = article["image"]
                new_image = fix["new_image"]
                
                # التحقق من وجود الصورة الجديدة
                if not (MEDIA_BLOG_DIR / new_image).exists():
                    if fix["prompt"]:
                        # توليد الصورة
                        if generate_image(fix["prompt"], new_image):
                            generated.append(new_image)
                        else:
                            print(f"⚠️ فشل توليد {new_image} - تخطي")
                            continue
                    else:
                        print(f"⚠️ الصورة {new_image} غير موجودة ولا يوجد prompt - تخطي")
                        continue
                
                # تحديث الفهرس
                article["image"] = new_image
                changes.append(f"{fix['slug']}: {old_image} → {new_image}")
                print(f"✅ {fix['slug']}: {old_image} → {new_image}")
                break
    
    # حفظ الفهرس المحدث
    with open(INDEX_FILE, "w", encoding="utf-8") as f:
        json.dump(articles, f, ensure_ascii=False, indent=4)
    
    print("\n" + "=" * 60)
    print("📊 الملخص")
    print("=" * 60)
    print(f"✅ تم تحديث: {len(changes)} مقال")
    print(f"🎨 تم توليد: {len(generated)} صورة جديدة")
    
    if changes:
        print("\n📝 التغييرات:")
        for c in changes:
            print(f"   • {c}")

if __name__ == "__main__":
    main()
