#!/usr/bin/env python3
"""
توليد صور للمقالات المحددة من المستخدم
"""

import os
import json
import requests
import base64
from pathlib import Path
import time

# Configuration
API_KEY_FILE = Path(__file__).parent.parent.parent / ".gemini_api_key"
with open(API_KEY_FILE, "r") as f:
    API_KEY = f.read().strip()
API_URL = "https://generativelanguage.googleapis.com/v1beta/models/gemini-3-pro-image-preview:generateContent"

SCRIPT_DIR = Path(__file__).parent
MEDIA_BLOG_DIR = SCRIPT_DIR / "media" / "blog"
INDEX_FILE = SCRIPT_DIR / "media" / "blog_index.json"

# المقالات المطلوبة
ARTICLES = [
    {
        "slug": "لف-المحركات-الكهربائية",
        "new_image": "electric-motor-rewinding-featured.webp",
        "prompt": "Professional electric motor rewinding workshop, technician carefully winding copper wire on motor stator core, copper wire spools on rack, winding data charts visible, industrial motor repair facility in Saudi Arabia, high quality photorealistic image"
    },
    {
        "slug": "water-pumps-saudi",
        "new_image": "water-pumps-saudi-featured-new.webp",
        "prompt": "Water pumps warehouse in Saudi Arabia, various industrial pumps Grundfos Lowara KSB displayed on shelves, forklift loading pumps, Saudi flag visible, modern warehouse lighting, high quality photorealistic commercial image"
    },
    {
        "slug": "water-pumping-solutions",
        "new_image": "water-pumping-solutions-featured-new.webp",
        "prompt": "Complete water pumping station installation, multiple pumps with control panels, pressure vessels tanks, piping system with valves, professional pump room for commercial building, high quality photorealistic industrial image"
    },
    {
        "slug": "vfd-programming-pumps",
        "new_image": "vfd-programming-pumps-featured.webp",
        "prompt": "Variable Frequency Drive VFD control panel for water pumps, technician programming VFD on keypad, digital display showing Hz and RPM, pump motor connected, energy efficient pump control system, high quality photorealistic image"
    }
]

def generate_image(prompt: str, image_name: str) -> bool:
    """توليد صورة"""
    print(f"\n🎨 توليد: {image_name}")
    
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
        
        if "candidates" in result:
            for part in result["candidates"][0].get("content", {}).get("parts", []):
                if "inlineData" in part:
                    image_bytes = base64.b64decode(part["inlineData"]["data"])
                    image_path = MEDIA_BLOG_DIR / image_name
                    with open(image_path, "wb") as f:
                        f.write(image_bytes)
                    print(f"   ✅ حُفظت ({len(image_bytes)/1024:.0f} KB)")
                    return True
        return False
    except Exception as e:
        print(f"   ❌ خطأ: {e}")
        return False

def main():
    print("=" * 50)
    print("🖼️ توليد صور للمقالات المطلوبة")
    print("=" * 50)
    
    # قراءة الفهرس
    with open(INDEX_FILE, "r", encoding="utf-8") as f:
        all_articles = json.load(f)
    
    success = []
    
    for i, article in enumerate(ARTICLES, 1):
        print(f"\n[{i}/{len(ARTICLES)}] {article['slug']}")
        
        if generate_image(article["prompt"], article["new_image"]):
            # تحديث الفهرس
            for a in all_articles:
                if a["slug"] == article["slug"]:
                    old = a["image"]
                    a["image"] = article["new_image"]
                    print(f"   📝 تحديث: {old} → {article['new_image']}")
                    success.append(article["slug"])
                    break
        
        if i < len(ARTICLES):
            print("   ⏳ انتظار 3 ثوانٍ...")
            time.sleep(3)
    
    # حفظ الفهرس
    with open(INDEX_FILE, "w", encoding="utf-8") as f:
        json.dump(all_articles, f, ensure_ascii=False, indent=4)
    
    print("\n" + "=" * 50)
    print(f"✅ تم: {len(success)}/{len(ARTICLES)}")
    for s in success:
        print(f"   • {s}")

if __name__ == "__main__":
    main()
