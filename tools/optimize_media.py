import os
import re
from PIL import Image
from pathlib import Path

# Configuration
PROJECT_ROOT = r"C:\Users\Abdalgani\Documents\BrilliantServ"
DIRS_TO_SCAN = [
    os.path.join(PROJECT_ROOT, "media"),
    os.path.join(PROJECT_ROOT, "templates", "template-3", "media"),
    os.path.join(PROJECT_ROOT, "templates", "template-3", "assets", "img") # Check if exists
]
EXTENSIONS = {'.jpg', '.jpeg', '.png'}
QUALITY = 80

def convert_images():
    converted_count = 0
    errors = []
    
    print("🚀 Starting Image Optimization (WebP Conversion)...")

    for directory in DIRS_TO_SCAN:
        if not os.path.exists(directory):
            print(f"⚠️ Directory not found, skipping: {directory}")
            continue

        for root, _, files in os.walk(directory):
            for file in files:
                file_path = Path(root) / file
                if file_path.suffix.lower() in EXTENSIONS:
                    webp_path = file_path.with_suffix('.webp')
                    
                    # Skip if webp already exists and is newer
                    if webp_path.exists() and webp_path.stat().st_mtime > file_path.stat().st_mtime:
                        continue

                    try:
                        with Image.open(file_path) as img:
                            print(f"🔄 Converting: {file}")
                            img.save(webp_path, 'WEBP', quality=QUALITY)
                            converted_count += 1
                    except Exception as e:
                        print(f"❌ Error converting {file}: {e}")
                        errors.append(file)

    print(f"✅ Finished! Converted {converted_count} images.")
    if errors:
        print(f"⚠️ Failed to convert: {errors}")

def update_references():
    print("\n📝 Updating code references to use WebP...")
    
    # Extensions to search for in code
    # strict regex to avoid false positives?
    # Pattern: match (path/to/image).(jpg|png|jpeg) inside quotes or url()
    
    files_updated = 0
    
    # Walk through project root for html, php, css, js
    for root, dirs, files in os.walk(PROJECT_ROOT):
        # Exclude .git, node_modules, etc.
        if '.git' in dirs: dirs.remove('.git')
        if 'node_modules' in dirs: dirs.remove('node_modules')
        if 'analysis_output' in dirs: dirs.remove('analysis_output')
        
        for file in files:
            if file.endswith(('.html', '.php', '.css', '.js')):
                file_path = os.path.join(root, file)
                
                try:
                    with open(file_path, 'r', encoding='utf-8') as f:
                        content = f.read()
                    
                    # Regex replacement:
                    # Look for strings ending in extension, case insensitive
                    # Be careful with absolute URLs if they are external
                    
                    # Simple strategy: If local file exists as webp, replace extension in string.
                    #But mapping string path to file path is tricky.
                    
                    # Safer strategy: Just replace common known paths or usage patterns.
                    # Or: For every converted image, try to find its name in the code.
                    
                    new_content = content
                    modified = False
                    
                    # This is O(N*M) where N=files, M=images. Might be slow on huge projects, but fine here.
                    # Actually, regex with callback is better.
                    
                    def replace_match(match):
                        full_match = match.group(0) # e.g. "media/foo.png"
                        path = match.group(1)       # e.g. "media/foo"
                        ext = match.group(2)        # e.g. ".png"
                        
                        # Check if we should ignore (e.g. favicon usually stays ico/png, but webp is supported in modern browsers)
                        # Ensure it's not an external http link unless it's our domain (brilliantserv.com)
                        
                        # We blindly replace for now, assuming the conversion step handled existence.
                        return f"{path}.webp"

                    # Pattern: (anything excluding quotes/spaces)(.jpg|.jpeg|.png)
                    # This finds relative paths like "media/img.png" or "/assets/foo.JPG"
                    pattern = r'([\w\-\./\\]+?)(\.jpg|\.jpeg|\.png)'
                    
                    # Apply regex case-insensitive
                    new_content_sub = re.sub(pattern, replace_match, new_content, flags=re.IGNORECASE)
                    
                    if new_content != new_content_sub:
                        # Safety check: Don't replace if it looks like a remote URL we don't own?
                        # For now, let's assume all found assets are local or intended to be updated.
                        
                        with open(file_path, 'w', encoding='utf-8') as f:
                            f.write(new_content_sub)
                        print(f"✏️ Updated: {file}")
                        files_updated += 1
                        
                except Exception as e:
                    print(f"⚠️ Error reading/writing {file}: {e}")

    print(f"✅ Updated references in {files_updated} files.")

if __name__ == "__main__":
    convert_images()
    # update_references() # Commented out for now, let's verify conversion first
