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

# المقالات التي تحتاج صور جديدة - 21 صورة مفقودة
ARTICLES_NEEDING_IMAGES = [
    {
        "file": "pump-handover.php",
        "title": "تسليم المضخات",
        "image_name": "pump-handover-featured.webp",
        "prompt": "Professional pump handover ceremony in Saudi Arabia, engineer handing over documents to client, new industrial water pump system in background, modern pump room, professional lighting, corporate style"
    },
    {
        "file": "pump-maintenance-contracts.php",
        "title": "عقود صيانة المضخات",
        "image_name": "pump-maintenance-contracts-featured.webp",
        "prompt": "Business contract signing for pump maintenance services, professional hands signing documents, industrial pumps in background, Saudi Arabian corporate setting, clean modern office"
    },
    {
        "file": "pump-maintenance-riyadh.php",
        "title": "صيانة مضخات الرياض",
        "image_name": "pump-maintenance-riyadh-featured.webp",
        "prompt": "Professional pump maintenance technician in Riyadh Saudi Arabia, working on large industrial water pump, modern pump room with blue pipes, wearing safety uniform, professional tools"
    },
    {
        "file": "pump-operation-panels.php",
        "title": "لوحات تشغيل المضخات",
        "image_name": "pump-operation-panels-featured.webp",
        "prompt": "Modern pump operation control panel in industrial setting, digital displays and switches, electrical control cabinet, LED indicators, clean professional pump room"
    },
    {
        "file": "pump-panel-assembly.php",
        "title": "تجميع لوحات المضخات",
        "image_name": "pump-panel-assembly-featured.webp",
        "prompt": "Electrical engineer assembling pump control panel, wiring and components visible, modern workshop setting, professional tools, Saudi Arabian industrial facility"
    },
    {
        "file": "pump-piping-maintenance.php",
        "title": "صيانة مواسير المضخات",
        "image_name": "pump-piping-maintenance-featured.webp",
        "prompt": "Professional pipe maintenance technician inspecting large industrial water pipes, blue painted pipes, pump room setting, using inspection tools, safety equipment"
    },
    {
        "file": "pump-pressure-calibration.php",
        "title": "معايرة ضغط المضخات",
        "image_name": "pump-pressure-calibration-featured.webp",
        "prompt": "Pressure gauge calibration on industrial pump system, digital pressure meter, technician adjusting values, modern pump control system, precision instruments"
    },
    {
        "file": "pump-pressure-sensor.php",
        "title": "حساس ضغط المضخات",
        "image_name": "pump-pressure-sensor-featured.webp",
        "prompt": "Close-up of industrial pressure sensor on water pump system, digital display showing pressure readings, stainless steel sensor, blue pipes in background"
    },
    {
        "file": "pump-room-maintenance.php",
        "title": "صيانة غرف المضخات",
        "image_name": "pump-room-maintenance-featured.webp",
        "prompt": "Clean modern pump room maintenance in progress, multiple industrial water pumps, technician inspecting equipment, blue painted pipes, professional lighting"
    },
    {
        "file": "pump-services-riyadh.php",
        "title": "خدمات المضخات بالرياض",
        "image_name": "pump-services-riyadh-featured.webp",
        "prompt": "Professional pump service team in Riyadh, service van with company branding, technicians with equipment ready for service call, Saudi Arabian urban background"
    },
    {
        "file": "pump-supplier-saudi.php",
        "title": "موردين المضخات بالسعودية",
        "image_name": "pump-supplier-saudi-featured.webp",
        "prompt": "Modern pump warehouse in Saudi Arabia, rows of industrial water pumps on shelves, logistics and inventory, professional warehouse lighting, brand new equipment"
    },
    {
        "file": "pump-testing.php",
        "title": "اختبار المضخات",
        "image_name": "pump-testing-featured.webp",
        "prompt": "Professional pump testing procedure, technician using testing equipment on large water pump, digital meters and gauges, modern testing facility, quality control"
    },
    {
        "file": "pumping-system-installation.php",
        "title": "تركيب أنظمة الضخ",
        "image_name": "pumping-system-installation-featured.webp",
        "prompt": "Professional installation team installing large pumping system, crane lifting pump equipment, construction site, Saudi Arabian industrial setting, safety equipment"
    },
    {
        "file": "pumping-system-maintenance.php",
        "title": "صيانة أنظمة الضخ",
        "image_name": "pumping-system-maintenance-featured.webp",
        "prompt": "Comprehensive pumping system maintenance in progress, multiple technicians working, large pump room with several units, professional maintenance equipment"
    },
    {
        "file": "schneider-control-panels.php",
        "title": "لوحات تحكم شنايدر",
        "image_name": "schneider-control-panels-featured.webp",
        "prompt": "Schneider Electric branded control panel, professional electrical cabinet with Schneider components, modern industrial setting, green brand colors visible, clean installation"
    },
    {
        "file": "sewage-pump-panels.php",
        "title": "لوحات مضخات الصرف",
        "image_name": "sewage-pump-panels-featured.webp",
        "prompt": "Sewage pump control panel, weatherproof electrical cabinet, submersible pump controls, level indicators, professional outdoor installation"
    },
    {
        "file": "soft-starter-panels.php",
        "title": "لوحات السوفت ستارتر",
        "image_name": "soft-starter-panels-featured.webp",
        "prompt": "Soft starter electrical panel for motor control, ABB or Siemens soft starter unit visible, industrial electrical cabinet, LED status indicators, professional installation"
    },
    {
        "file": "submersible-pump-problems.php",
        "title": "مشاكل المضخات الغاطسة",
        "image_name": "submersible-pump-problems-featured.webp",
        "prompt": "Submersible pump being lifted from well for inspection, technician examining damaged pump, cable and motor visible, diagnostic equipment, maintenance scenario"
    },
    {
        "file": "water-pumping-solutions.php",
        "title": "حلول ضخ المياه",
        "image_name": "water-pumping-solutions-featured.webp",
        "prompt": "Complete water pumping solution showcase, modern pump room with multiple systems, booster pumps and pressure tanks, professional installation, clean industrial setting"
    },
    {
        "file": "water-pumps-saudi.php",
        "title": "مضخات المياه بالسعودية",
        "image_name": "water-pumps-saudi-featured.webp",
        "prompt": "High-quality water pumps display in Saudi Arabia showroom, various pump types on display, professional lighting, modern store interior, Grundfos and KSB brands"
    },
    {
        "file": "pump-installation-east-riyadh.php",
        "title": "تركيب مضخات شرق الرياض",
        "image_name": "pump-installation-east-riyadh-featured.webp",
        "prompt": "Professional pump installation team in East Riyadh, installing large water pump, construction site background, safety equipment, Saudi Arabian setting"
    }
]

def generate_image_with_gemini(prompt: str, image_name: str) -> bool:
    """توليد صورة باستخدام Gemini 3 Pro Image Preview API"""
    print(f"\n  Generating: {image_name}")
    
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
            print(f"   ERROR: {response.status_code}")
            try:
                error_data = response.json()
                if "error" in error_data:
                    print(f"   Message: {error_data['error'].get('message', '')[:200]}")
            except:
                print(f"   Response: {response.text[:200]}")
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
                        
                        print(f"   OK - Size: {len(image_bytes) / 1024:.1f} KB")
                        return True
        
        print(f"   WARNING: No image in response")
        return False
        
    except requests.exceptions.Timeout:
        print(f"   TIMEOUT")
        return False
    except Exception as e:
        print(f"   ERROR: {e}")
        return False

def main():
    print("=" * 50)
    print("Generating 21 Missing Blog Images")
    print("Using Gemini 3 Pro Image Preview")
    print("=" * 50)
    
    # التأكد من وجود مجلد الصور
    MEDIA_BLOG_DIR.mkdir(parents=True, exist_ok=True)
    
    results = {
        "success": [],
        "failed": [],
        "skipped": []
    }
    
    for i, article in enumerate(ARTICLES_NEEDING_IMAGES, 1):
        print(f"\n[{i}/{len(ARTICLES_NEEDING_IMAGES)}] {article['title']}")
        
        # التحقق من وجود الصورة مسبقاً
        image_path = MEDIA_BLOG_DIR / article["image_name"]
        if image_path.exists():
            print(f"   SKIP - Already exists")
            results["skipped"].append(article["file"])
            continue
        
        # توليد الصورة
        if generate_image_with_gemini(article["prompt"], article["image_name"]):
            results["success"].append(article["file"])
        else:
            results["failed"].append(article["file"])
        
        # انتظار بين الطلبات لتجنب rate limiting
        time.sleep(3)
    
    # ملخص النتائج
    print("\n" + "=" * 50)
    print("RESULTS:")
    print("=" * 50)
    print(f"OK: {len(results['success'])}")
    print(f"FAILED: {len(results['failed'])}")
    print(f"SKIPPED: {len(results['skipped'])}")
    
    if results["failed"]:
        print("\nFailed articles:")
        for f in results["failed"]:
            print(f"  - {f}")
    
    # حفظ التقرير
    report_path = SCRIPT_DIR / "image_generation_report.json"
    with open(report_path, "w", encoding="utf-8") as f:
        json.dump(results, f, ensure_ascii=False, indent=2)
    print(f"\nReport saved: {report_path}")

if __name__ == "__main__":
    main()
