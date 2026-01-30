import os
import re

# Simple Minifiers to avoid dependencies
def minify_css(content):
    # Remove comments
    content = re.sub(r'/\*[\s\S]*?\*/', '', content)
    # Remove extra spaces/newlines
    content = re.sub(r'\s+', ' ', content)
    content = re.sub(r'\s*([:;{}])\s*', r'\1', content)
    content = content.replace('; }', '}')
    return content.strip()

def minify_js(content):
    # Very basic JS minifier (Removing comments and extra whitespace is risky without syntax parser)
    # So we will proceed safely: Remove single line comments // ... if safe, remove multiline /* ... */
    # remove leading/trailing whitespace on lines, remove empty lines
    
    lines = content.split('\n')
    minified_lines = []
    for line in lines:
        line = line.strip()
        if not line: continue
        if line.startswith('//'): continue
        # Removing block comments logic is complex if inline, skipping for safety in this simple script
        minified_lines.append(line)
    
    return '\n'.join(minified_lines)

TARGET_DIR = r"C:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3"
CSS_DIR = os.path.join(TARGET_DIR, 'css')
JS_DIR = os.path.join(TARGET_DIR, 'js')

def main():
    print("🚀 Starting Asset Minification...")
    
    # Process CSS
    if os.path.exists(CSS_DIR):
        for file in os.listdir(CSS_DIR):
            if file.endswith('.css') and not file.endswith('.min.css'):
                src_path = os.path.join(CSS_DIR, file)
                dest_path = os.path.join(CSS_DIR, file.replace('.css', '.min.css'))
                
                with open(src_path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                minified = minify_css(content)
                
                with open(dest_path, 'w', encoding='utf-8') as f:
                    f.write(minified)
                
                print(f"✅ Minified CSS: {file} -> {os.path.basename(dest_path)}")

    # Process JS
    if os.path.exists(JS_DIR):
        for file in os.listdir(JS_DIR):
            if file.endswith('.js') and not file.endswith('.min.js'):
                src_path = os.path.join(JS_DIR, file)
                dest_path = os.path.join(JS_DIR, file.replace('.js', '.min.js'))
                
                with open(src_path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                # Careful with JS, let's just do basic whitespace for now to be safe
                minified = minify_js(content)
                
                with open(dest_path, 'w', encoding='utf-8') as f:
                    f.write(minified)
                
                print(f"✅ Minified JS: {file} -> {os.path.basename(dest_path)}")

if __name__ == "__main__":
    main()
