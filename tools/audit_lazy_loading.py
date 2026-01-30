import os
import re

TARGET_DIR = r"C:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3"

def audit_lazy_loading():
    print("🚀 Auditing Lazy Loading...")
    
    missing_lazy = []
    
    for root, dirs, files in os.walk(TARGET_DIR):
        if '.git' in dirs: dirs.remove('.git')
        
        for file in files:
            if file.endswith(('.html', '.php')):
                file_path = os.path.join(root, file)
                
                with open(file_path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                # Find img tags
                # This is a simple regex, might miss complex cases or match comments
                # Pattern: <img ... >
                img_tags = re.findall(r'<img[^>]+>', content)
                
                for i, tag in enumerate(img_tags):
                    # Check if loading="lazy" exists
                    if 'loading="lazy"' not in tag and 'loading=\'lazy\'' not in tag:
                        
                        # Heuristic: Skip likely "above the fold" images if we were implementing, 
                        # but for audit we just list them.
                        # We might want to skip logos or hero images conventionally.
                        
                        # Check context basics
                        if 'logo' in tag.lower(): continue # Skip logos usually
                        
                        relative_path = os.path.relpath(file_path, TARGET_DIR)
                        missing_lazy.append(f"{relative_path} -> {tag[:50]}...")

    if missing_lazy:
        print(f"⚠️ Found {len(missing_lazy)} images missing lazy loading:")
        for item in missing_lazy[:20]: # Show first 20
            print(f" - {item}")
        if len(missing_lazy) > 20:
            print(f"... and {len(missing_lazy) - 20} more.")
    else:
        print("✅ All appropriate images seem to have lazy loading!")

if __name__ == "__main__":
    audit_lazy_loading()
