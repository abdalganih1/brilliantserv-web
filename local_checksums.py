
import hashlib
import os

def get_md5(path):
    if not os.path.exists(path):
        return "MISSING"
    with open(path, "rb") as f:
        return hashlib.md5(f.read()).hexdigest()

files = [
    "templates/template-3/media/hero-motor-winding.png",
    "templates/template-3/media/brilliantcrystal.jpg",
    "templates/template-3/media/electrical/p17_img4.jpeg"
]

print("--- LOCAL CHECKSUMS ---")
for f in files:
    full_path = os.path.join(r"c:/Users/Abdalgani/Documents/BrilliantServ", f)
    print(f"{f}: {get_md5(full_path)}")
