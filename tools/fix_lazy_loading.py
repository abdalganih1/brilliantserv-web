import os
import re

TARGET_DIR = r"C:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3"

def fix_lazy_loading():
    print("🚀 Fixing Lazy Loading...")
    
    files_updated = 0
    
    for root, dirs, files in os.walk(TARGET_DIR):
        if '.git' in dirs: dirs.remove('.git')
        
        for file in files:
            if file.endswith(('.html', '.php')):
                file_path = os.path.join(root, file)
                
                with open(file_path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                # We need to render the changes. 
                # Strategy: Identify images. determine if it needs lazy.
                # If yes, add it.
                
                new_content = content
                
                # Regex to find img tags
                # Use a callback to decide replacement
                def replace_img(match):
                    full_tag = match.group(0)
                    
                    # Already has lazy?
                    if 'loading="lazy"' in full_tag or "loading='lazy'" in full_tag:
                        return full_tag
                    
                    # Logic to skip likely Above-The-Fold images
                    # 1. Logos
                    if 'logo' in full_tag.lower():
                        return full_tag
                        
                    # 2. Hero images (often have class="hero..." or in a hero section)
                    # This regex check is local to the tag, context is harder.
                    # Simple heuristic: If the image source or alt contains 'hero', skip it.
                    if 'hero' in full_tag.lower():
                        # However, some hero images might be in a slider where only the first needs to be eager.
                        # For safety, let's skip anything explicit named 'hero'.
                        return full_tag
                        
                    # Add loading="lazy"
                    # Insert before the closing >
                    if full_tag.endswith('/>'):
                        return full_tag[:-2] + ' loading="lazy" />'
                    else:
                        return full_tag[:-1] + ' loading="lazy">'

                # Pattern to match img tags. 
                # Note: This is simple and might be fragile with complex HTML, but works for standard tags.
                pattern = r'<img\s+[^>]+>'
                
                new_content = re.sub(pattern, replace_img, content)
                
                if new_content != content:
                    with open(file_path, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                    print(f"✏️ Added lazy loading to: {file}")
                    files_updated += 1

    print(f"✅ Finished! Updated {files_updated} files.")

if __name__ == "__main__":
    fix_lazy_loading()
