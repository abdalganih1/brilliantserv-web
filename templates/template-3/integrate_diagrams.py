import os
import re

BLOG_DIR = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog"
DIAGRAMS_DIR = os.path.join(BLOG_DIR, "diagrams")

# Manual mapping for Arabic files to rename
ARABIC_MAP = {
    "انواع-المضخات.svg": "types-of-pumps-ar.svg",
    "دور-الكهرباء-الصناعية-في-تطوير-المصان.svg": "industrial-electricity-role.svg",
    "سرعة-المحركات-الكهربائية.svg": "electric-motor-speed.svg",
    "صيانة-مضخات-جراندفوس.svg": "grundfos-maintenance.svg",
    "لف-المحركات-الكهربائية.svg": "motor-winding-diagram.svg"
}

def normalize_filename(name):
    return name.replace('.svg', '.php')

def inject_diagram(php_file, svg_filename):
    svg_path = f"diagrams/{svg_filename}"
    
    with open(php_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    if svg_path in content or 'class="technical-diagram"' in content:
        print(f"Skipping {os.path.basename(php_file)}: Diagram already present.")
        return False
        
    # Injection Template
    diagram_html = f'''
                    <!-- Technical Diagram Injection -->
                    <div class="technical-diagram" style="margin: 2rem 0; text-align: center;">
                        <img src="/blog/diagrams/{svg_filename}" alt="Technical Diagram" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <p class="caption" style="font-size: 0.9rem; color: #666; margin-top: 0.5rem;">شكل توضيحي: مخطط تفصيلي</p>
                    </div>
'''
    
    # Injection Logic: After the first closing </p> of the first section, or before the first <h2
    # Let's try to inject before the first <h2 id="section-2"> or <h2 id="section-1"> depending on flow.
    # A safe bet is usually after the table of contents or intro text.
    
    # Let's inject after the first <p> following the featured image/meta?
    # Or just search for the first <h2> and inject BEFORE it.
    
    if '<h2 id="section-1">' in content:
         # Some articles assume section 1 is intro. Maybe inject after section 1 header?
         # Or better, just inject before the first h2 that is NOT part of TOC.
         # Actually, let's inject AFTER the first paragraph of content.
         
         # Pattern: Find <div class="article-body"> ... <p> ... </p>
         # Too complex for regex reliable matching.
         
         # Simple strategy: Inject before the second <h2> tag found in the document (the first one usually being section-1).
         # If there is only 1 h2, inject before it.
         pass
    
    # Let's use a simpler marker: Before the first <h2 id="section-2">
    if '<h2 id="section-2">' in content:
        content = content.replace('<h2 id="section-2">', f'{diagram_html}\n                    <h2 id="section-2">')
    elif '<h2 id="section-1">' in content:
         # fallback if no section 2
         content = content.replace('<h2 id="section-1">', f'{diagram_html}\n                    <h2 id="section-1">')
    else:
        # Fallback: append to end of article body if no sections found (rare)
        return False

    with open(php_file, 'w', encoding='utf-8') as f:
        f.write(content)
    return True

def main():
    if not os.path.exists(DIAGRAMS_DIR):
        print("Diagrams directory not found.")
        return

    # 1. Rename Arabic Files
    for old_name, new_name in ARABIC_MAP.items():
        old_path = os.path.join(DIAGRAMS_DIR, old_name)
        new_path = os.path.join(DIAGRAMS_DIR, new_name)
        if os.path.exists(old_path):
            try:
                os.rename(old_path, new_path)
                print(f"Renamed: {old_name} -> {new_name}")
            except Exception as e:
                print(f"Error renaming {old_name}: {e}")
        elif os.path.exists(new_path):
             print(f"Already renamed: {old_name} -> {new_name}")

    # 2. Iterate and Inject
    files = os.listdir(DIAGRAMS_DIR)
    count = 0
    for svg_file in files:
        if not svg_file.endswith('.svg'):
            continue
            
        # Determine PHP file
        # Special case for Arabic Renames: map back to the original PHP file?
        # No, the PHP files are Arabic or English?
        
        # PHP filenames:
        # لف-المحركات-الكهربائية.php (Arabic)
        # electric-motor-winding.php (English)
        
        # We need to map the new SVG name to the specific PHP file.
        # Reverse map for our renamed files:
        php_filename = normalize_filename(svg_file)
        
        # Check specific mappings for the ones we just renamed
        if svg_file == "types-of-pumps-ar.svg": php_filename = "انواع-المضخات.php"
        elif svg_file == "industrial-electricity-role.svg": php_filename = "دور-الكهرباء-الصناعية-في-تطوير-المصان.php"
        elif svg_file == "electric-motor-speed.svg": php_filename = "سرعة-المحركات-الكهربائية.php"
        elif svg_file == "grundfos-maintenance.svg": php_filename = "صيانة-مضخات-جراندفوس.php"
        elif svg_file == "motor-winding-diagram.svg": php_filename = "لف-المحركات-الكهربائية.php" 
        
        php_path = os.path.join(BLOG_DIR, php_filename)
        
        if os.path.exists(php_path):
            if inject_diagram(php_path, svg_file):
                print(f"Injected diagram into {php_filename}")
                count += 1
        else:
            print(f"Skipping {svg_file}: Corresponding PHP file {php_filename} not found.")

    print(f"Total injections: {count}")

if __name__ == "__main__":
    main()
