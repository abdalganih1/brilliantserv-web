
import shutil
import os

# Source directory (General media)
src_dir = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\media"
# Target directory (Blog media)
dst_dir = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\media\blog"

# Map: Target Filename (in media/blog) -> Source Filename (in media)
image_map = {
    "electrical-drawing.webp": "تصميم-المخططات-الكهربائية-للمباني-.webp",
    "pump-repair-north-riyadh.webp": "صيانة-مضخات-المياه-الاحترافية-لضمان-أداء-مستمر-وفعال.webp",
    "control-panel-prices-2026.webp": "صناعة-لوحات-المحركات-الكهربائية.webp",
    "vfd-programming.webp": "تمديد-الكهرباء-بتقنية-VFD.webp",
    "control-panel-prices.webp": "اسعار-وحات-توزيع-الكهرباء.webp",
    "chiller-maintenance.webp": "صيانة-لوحات-التشلرات.webp",
    "duct-cleaning.webp": "صيانة-وحدات-التكييف-المركزي.webp",
    "industrial-fans.webp": "اعمال-ميكانيكية-1.webp", 
    "fire-pump-maintenance.webp": "صيانة-مضخات-الحريق.webp",
    "fire-network.webp": "صيانة-مضخات-الحريق-_2_.webp",
    "civil-defense.webp": "اعمال-كهربائية-10.webp", # Placeholder
    "hero-mechanic-pumps.webp": "صيانة-مضخات-KSB-.webp",
    "mechanic-project.webp": "mechanic-project.webp",
    "about-team-work.webp": "اعمال-كهرباء-4.webp",
    "mechanic-works.webp": "mechanic-works.webp",
    "hero-electrical-work.webp": "اعمال-كهربائية.webp",
    "motor-winding.webp": "لف-المحركات-الكهربائية.webp",
    "production-line.webp": "صيانة-وبرمجة-خطوط-الإنتاج.webp",
    "fan-balancing.webp": "اعمال-ميكانيكا-5.webp",
    "water-pump-types.webp": "انواع-المضخات-المائية.webp",
    "motor-winding-diagram.webp": "لف-مواتير-1.webp",
    "cold-room.webp": "صيانة-غرف-التبريد-والتجميد-.webp"
}

print("--- Starting Image Population ---")
for target, source in image_map.items():
    s_path = os.path.join(src_dir, source)
    d_path = os.path.join(dst_dir, target)
    
    # Check if target already exists
    if os.path.exists(d_path):
        print(f"[SKIP] {target} already exists.")
        continue
        
    # Check if source exists
    if os.path.exists(s_path):
        try:
            shutil.copy2(s_path, d_path)
            print(f"[OK] Copied {source} -> {target}")
        except Exception as e:
            print(f"[ERR] Failed to copy {source}: {e}")
    else:
        # Try finding in services subdirectory
        s_path_services = os.path.join(src_dir, "services", source)
        if os.path.exists(s_path_services):
             try:
                shutil.copy2(s_path_services, d_path)
                print(f"[OK] Copied services/{source} -> {target}")
             except Exception as e:
                print(f"[ERR] Failed to copy services/{source}: {e}")
        else:
            print(f"[MISSING] Source file not found: {source}")

print("--- Done ---")
