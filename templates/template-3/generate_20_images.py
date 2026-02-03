#!/usr/bin/env python3
"""
توليد 20 صورة للمقالات - الدفعة الكبيرة
يستخدم gemini-3-pro-image-preview
Rate Limit: 20 RPM
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

# 20 مقال لتوليد صور لها - مختارة بناءً على طلب المستخدم
ARTICLES = [
    # المقالات المطلوبة تحديداً
    {
        "file": "سرعة-المحركات-الكهربائية.php",
        "new_image": "motor-speed-calculation-featured.webp",
        "prompt": "Electric motor speed calculation diagram, technician using tachometer to measure RPM on industrial motor, digital display showing speed readings, motor nameplate visible with specs, high quality photorealistic industrial image"
    },
    {
        "file": "home-water-pump-types.php",
        "new_image": "12-pump-types-guide-featured.webp",
        "prompt": "Collection of 12 different water pump types displayed in showroom, submersible pump, centrifugal pump, gear pump, diaphragm pump, jet pump, booster pump arranged in grid layout, professional product photography, high quality photorealistic image"
    },
    {
        "file": "electrical-layouts-for-buildings.php",
        "new_image": "building-electrical-design-featured.webp",
        "prompt": "Electrical engineer designing building electrical layouts on large drawing table, CAD software on computer screen showing electrical schematics, electrical symbols chart on wall, professional engineering office in Saudi Arabia, high quality photorealistic image"
    },
    # مقالات إضافية مهمة
    {
        "file": "3-phase-motor-winding-rules.php",
        "new_image": "3-phase-winding-guide-featured.webp",
        "prompt": "Three phase motor winding process step by step, technician carefully winding copper wire on motor stator, winding diagram chart visible, motor rewinding workshop with copper wire spools, high quality photorealistic industrial image"
    },
    {
        "file": "booster-pump-repair.php",
        "new_image": "booster-pump-repair-featured.webp",
        "prompt": "Water pressure booster pump repair and maintenance, technician servicing multi-stage booster pump system, pressure gauges showing readings, replacement parts laid out, high quality photorealistic industrial image"
    },
    {
        "file": "civil-defense-approved-companies.php",
        "new_image": "civil-defense-approved-featured.webp",
        "prompt": "Fire safety equipment installation certified by civil defense, red fire extinguishers, fire alarm panel, safety inspector checking compliance, official Saudi civil defense certification documents, high quality photorealistic image"
    },
    {
        "file": "control-panel-prices-2026.php",
        "new_image": "control-panel-prices-2026-featured.webp",
        "prompt": "Electrical control panel showroom with various panels and price displays, MCC panels, VFD panels, PLC cabinets in different sizes, professional industrial equipment store, high quality photorealistic commercial image"
    },
    {
        "file": "fire-network-filling.php",
        "new_image": "fire-network-testing-featured.webp",
        "prompt": "Fire sprinkler network pressure testing and filling, red fire pipes with pressure gauges, hydrostatic test equipment, professional fire protection contractors at work, high quality photorealistic industrial image"
    },
    {
        "file": "grundfos-pump-agent-riyadh.php",
        "new_image": "grundfos-showroom-riyadh-featured.webp",
        "prompt": "Grundfos authorized dealer showroom in Riyadh, blue Grundfos pumps on display, CR pumps SP pumps CM series, branded environment with Grundfos logo, professional sales staff, high quality photorealistic commercial image"
    },
    {
        "file": "ksb-pump-maintenance.php",
        "new_image": "ksb-pump-service-featured.webp",
        "prompt": "KSB industrial pump maintenance and overhaul, technician servicing large green KSB centrifugal pump, impeller and mechanical seal replacement, specialized tools and KSB spare parts, high quality photorealistic industrial image"
    },
    {
        "file": "pump-humming-sound-causes.php",
        "new_image": "pump-vibration-diagnosis-featured.webp",
        "prompt": "Water pump vibration and noise troubleshooting, technician using vibration analyzer on running pump, diagnostic screen showing frequency readings, cavitation and bearing issues demonstration, high quality photorealistic industrial image"
    },
    {
        "file": "pump-room-components.php",
        "new_image": "pump-room-layout-featured.webp",
        "prompt": "Complete pump room overview with all components, main pumps with control panels, pressure vessels, isolation valves, strainers, check valves, piping system, labeled professional pump station, high quality photorealistic industrial image"
    },
    {
        "file": "sewage-pump-maintenance.php",
        "new_image": "sewage-pump-service-featured.webp",
        "prompt": "Submersible sewage pump maintenance, technician in protective gear servicing heavy duty sewage grinder pump, wastewater pumping station, cleaning and inspection process, high quality photorealistic industrial image"
    },
    {
        "file": "submersible-pump-problems.php",
        "new_image": "submersible-pump-troubleshooting-featured.webp",
        "prompt": "Submersible well pump pulled from well for inspection, technician diagnosing pump motor issues, megger testing insulation resistance, burnt windings visible, troubleshooting equipment, high quality photorealistic image"
    },
    {
        "file": "vfd-programming-guide.php",
        "new_image": "vfd-setup-guide-featured.webp",
        "prompt": "Variable Frequency Drive VFD programming tutorial, technician adjusting parameters on VFD keypad, digital display showing frequency and speed settings, industrial motor control training, high quality photorealistic image"
    },
    {
        "file": "water-leak-detection.php",
        "new_image": "leak-detection-service-featured.webp",
        "prompt": "Professional water leak detection service in Saudi Arabia, technician using acoustic leak detector on underground pipe, thermal imaging camera, modern non-destructive detection technology, high quality photorealistic image"
    },
    {
        "file": "weak-water-pressure-solutions.php",
        "new_image": "low-pressure-solutions-featured.webp",
        "prompt": "Low water pressure diagnosis and repair, plumber installing pressure booster pump, water pressure gauge showing improvement, residential plumbing upgrade, before and after demonstration, high quality photorealistic image"
    },
    {
        "file": "well-pump-installation.php",
        "new_image": "well-pump-drilling-featured.webp",
        "prompt": "Deep well submersible pump installation in Saudi Arabia desert, drilling rig lowering pump into borehole, professional well drilling team, safety equipment, arid landscape background, high quality photorealistic image"
    },
    {
        "file": "صيانة-بساتم-الهيدروليك.php",
        "new_image": "hydraulic-cylinder-service-featured.webp",
        "prompt": "Hydraulic cylinder and piston rebuild, technician disassembling hydraulic ram, precision machined components, hydraulic seals and O-rings, industrial hydraulic repair workshop, high quality photorealistic industrial image"
    },
    {
        "file": "صيانة-بلوف-الهيدروليك.php",
        "new_image": "hydraulic-valve-repair-featured.webp",
        "prompt": "Industrial hydraulic valve assembly and testing, technician calibrating proportional valve, hydraulic test bench with pressure gauges, precision valve components, high quality photorealistic industrial image"
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
            print(f"   ❌ خطأ: {response.status_code} - {response.text[:200]}")
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

def update_article(article: dict) -> bool:
    """تحديث الصورة في المقال"""
    file_path = BLOG_DIR / article["file"]
    if not file_path.exists():
        return False
    
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            content = f.read()
        
        # البحث عن og:image وتحديثه
        new_img_url = f"https://brilliantserv.com/media/blog/{article['new_image']}"
        
        # تحديث og:image
        content = re.sub(
            r'(property=["\']og:image["\'].*?content=["\'])([^"\']+)(["\'])',
            rf'\g<1>{new_img_url}\g<3>',
            content
        )
        
        # تحديث twitter:image
        content = re.sub(
            r'(name=["\']twitter:image["\'].*?content=["\'])([^"\']+)(["\'])',
            rf'\g<1>{new_img_url}\g<3>',
            content
        )
        
        with open(file_path, "w", encoding="utf-8") as f:
            f.write(content)
        
        return True
    except Exception as e:
        print(f"   ⚠️ تحديث فشل: {e}")
        return False

def main():
    print("=" * 60)
    print("🖼️ توليد 20 صورة - Gemini 3 Pro Image Preview")
    print("=" * 60)
    print(f"📊 المقالات: {len(ARTICLES)}")
    print(f"⏱️ الوقت المتوقع: ~{len(ARTICLES) * 4} دقائق (3 ثوانٍ/صورة)")
    
    results = {"success": [], "failed": [], "skipped": []}
    
    for i, article in enumerate(ARTICLES, 1):
        print(f"\n{'='*50}")
        print(f"📰 [{i}/{len(ARTICLES)}] {article['file']}")
        
        # التحقق من الصورة
        if (MEDIA_BLOG_DIR / article["new_image"]).exists():
            print("   ℹ️ موجودة - تخطي")
            results["skipped"].append(article["file"])
            continue
        
        # التحقق من المقال
        if not (BLOG_DIR / article["file"]).exists():
            print("   ⚠️ المقال غير موجود - تخطي")
            results["skipped"].append(article["file"])
            continue
        
        if generate_image(article["prompt"], article["new_image"]):
            update_article(article)
            results["success"].append(article["file"])
        else:
            results["failed"].append(article["file"])
        
        # Rate limiting: 20 RPM = 3 sec/request
        if i < len(ARTICLES):
            print("   ⏳ انتظار 3 ثوانٍ...")
            time.sleep(3)
    
    # الملخص
    print("\n" + "=" * 60)
    print("📊 الملخص النهائي")
    print("=" * 60)
    print(f"✅ نجح: {len(results['success'])}")
    print(f"⏭️ تخطي: {len(results['skipped'])}")
    print(f"❌ فشل: {len(results['failed'])}")
    
    with open(SCRIPT_DIR / "batch_20_report.json", "w", encoding="utf-8") as f:
        json.dump(results, f, ensure_ascii=False, indent=2)

if __name__ == "__main__":
    main()
