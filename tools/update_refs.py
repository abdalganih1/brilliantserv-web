import os
import re

# Configuration
PROJECT_ROOT = r"C:\Users\Abdalgani\Documents\BrilliantServ"

def update_references():
    print("🚀 Updating code references to use WebP...")
    
    files_updated = 0
    errors = []

    # Regex to find image files and replace extensions with .webp
    # We look for .png, .jpg, .jpeg inside attributes or css url()
    # Captures: 1=path, 2=extension
    # We deliberately strictly match common image pattern to avoid false positives in text
    pattern = r'([a-zA-Z0-9_\-\./%\\]+?)(\.jpg|\.jpeg|\.png)'
    
    # Files to ignore
    ignored_files = {'optimize_media.py', 'update_refs.py', 'package-lock.json', 'brilliantserv.export.json'}

    for root, dirs, files in os.walk(PROJECT_ROOT):
        # Skip git and other non-source dirs
        if '.git' in dirs: dirs.remove('.git')
        if 'node_modules' in dirs: dirs.remove('node_modules')
        if 'media' in dirs: dirs.remove('media') # Don't edit images themselves
        if 'analysis_output' in dirs: dirs.remove('analysis_output')

        for file in files:
            if file in ignored_files: continue
            
            # Process text-based files
            if file.endswith(('.html', '.php', '.css', '.js', '.json', '.xml')):
                file_path = os.path.join(root, file)
                
                try:
                    with open(file_path, 'r', encoding='utf-8') as f:
                        content = f.read()
                    
                    def replace_match(match):
                        path = match.group(1)
                        ext = match.group(2)
                        
                        # Logic to preserve certain files if needed, currently replacing ALL
                        # EXCEPT: favicon.ico or specific meta tags if necessary.
                        # Using specific checks if needed.
                        
                        # Check if it looks like a URL/Path
                        return f"{path}.webp"

                    new_content = re.sub(pattern, replace_match, content, flags=re.IGNORECASE)
                    
                    if new_content != content:
                        with open(file_path, 'w', encoding='utf-8') as f:
                            f.write(new_content)
                        print(f"✏️ Updated: {file}")
                        files_updated += 1
                        
                except Exception as e:
                    print(f"❌ Error processing {file}: {e}")
                    errors.append(file)

    print(f"✅ Finished! Updated {files_updated} files.")

if __name__ == "__main__":
    update_references()
