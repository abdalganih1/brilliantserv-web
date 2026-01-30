import os
import re

TARGET_DIR = r"C:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3"

def update_references():
    print("🚀 Updating HTML/PHP references to minified assets...")
    
    files_updated = 0
    
    # Files to ignore
    ignored_files = {'minify_assets.py'}

    for root, dirs, files in os.walk(TARGET_DIR):
        if '.git' in dirs: dirs.remove('.git')
        
        for file in files:
            if file in ignored_files: continue
            
            # Process HTML/PHP files
            if file.endswith(('.html', '.php')):
                file_path = os.path.join(root, file)
                
                try:
                    with open(file_path, 'r', encoding='utf-8') as f:
                        content = f.read()
                    
                    new_content = content
                    
                    # Regex replacement strategy
                    # Search for href=".../style.css" or src=".../main.js"
                    # We need to be careful not to double minify (style.min.css -> style.min.min.css)
                    
                    # Replace .css with .min.css if not already .min.css
                    new_content = re.sub(r'(href=["\'])(.*?)(?<!\.min)\.css(["\'])', r'\1\2.min.css\3', new_content)
                    
                    # Replace .js with .min.js if not already .min.js
                    # Exclude external CDNs if possible (though checking for http might be enough)
                    # For safety, let's only target our known files or local paths
                    # But generic approach: if it ends in .js and not .min.js, replace.
                    # Wait, external libs like swiper-bundle.min.js are already min, so regex negative lookbehind is good.
                    
                    new_content = re.sub(r'(src=["\'])(.*?)(?<!\.min)\.js(["\'])', r'\1\2.min.js\3', new_content)

                    if new_content != content:
                        with open(file_path, 'w', encoding='utf-8') as f:
                            f.write(new_content)
                        print(f"✏️ Updated references in: {file}")
                        files_updated += 1
                        
                except Exception as e:
                    print(f"❌ Error processing {file}: {e}")

    print(f"✅ Finished! Updated {files_updated} files.")

if __name__ == "__main__":
    update_references()
