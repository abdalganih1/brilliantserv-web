import os
import re
import glob

BLOG_DIR = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog"
JS_SCRIPT = '<script src="../js/blog-interactions.js"></script>'

def fix_article(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        original_content = content
        
        # 1. Inject JS before </body> if not present
        if JS_SCRIPT not in content and "</body>" in content:
            content = content.replace("</body>", f"    {JS_SCRIPT}\n</body>")
            
        # 2. Wrap Tables in responsive wrapper (if not already wrapped)
        # Simple regex to find tables not preceded by the wrapper
        # This is a bit of a heuristic. if we find <table and it's not strictly inside a div with that class
        # simpler approach: Replace all <table ...> with <div class...><table ...> and </table> with </table></div>
        # BUT we need to be careful not to double wrap. 
        # Let's look for specific tables we know need it, specifically <table class="comparison-table"> 
        # and standard <table> inside .blog-article
        
        # Strategy: Find all tables. Check if they are already wrapped.
        # Check for <table class="comparison-table"> or just <table
        
        def wrap_table(match):
            full_table = match.group(0)
            # check if previously wrapped (this is a weak check but sufficient for this batch pass)
            # A full DOM parser would be better but this is a quick script.
            # actually, let's just do a specific replace for the class="comparison-table" which is the main one
            return f'<div class="table-responsive-wrapper">{full_table}</div>'

        # Regex for comparison table
        if '<div class="table-responsive-wrapper">' not in content: 
             content = re.sub(r'(<table class="comparison-table".*?>.*?</table>)', wrap_table, content, flags=re.DOTALL)
             # Also catch generic tables inside article body if easy to identify
             # adhering to "comparison-table" is safest for now to avoid breaking layout tables if any exist
        
        # 3. Fix Reading Time (RTL)
        # Pattern: <span class="reading-time">⏱️ ... </span>
        # We want to standardize it.
        # Target: <span class="reading-time">⏱️ <?= ceil(str_word_count(strip_tags(file_get_contents(__FILE__))) / 200) ?> دقائق قراءة</span>
        # vs  ... minutes read</span>
        
        reading_time_pattern = r'<span class="reading-time">⏱️.*?</span>'
        new_reading_time = '<span class="reading-time">⏱️ وقت القراءة: <?= ceil(str_word_count(strip_tags(file_get_contents(__FILE__))) / 200) ?> دقائق</span>'
        
        if "minutes read" in content or "دقائق قراءة" in content:
             # Just replace the whole span with the standardized one
             content = re.sub(reading_time_pattern, new_reading_time, content, flags=re.DOTALL)

        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return True
        return False

    except Exception as e:
        print(f"Error processing {filepath}: {e}")
        return False

def main():
    files = glob.glob(os.path.join(BLOG_DIR, "*.php"))
    print(f"Found {len(files)} files.")
    
    modified_count = 0
    for file in files:
        if fix_article(file):
            print(f"Fixed: {os.path.basename(file)}")
            modified_count += 1
            
    print(f"Total files modified: {modified_count}")

if __name__ == "__main__":
    main()
