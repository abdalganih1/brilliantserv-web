#!/usr/bin/env python3
"""
Blog Articles Fixer - V2
Removes old CTA and related articles sections, keeps only the new unified ones
"""

import os
import re
from pathlib import Path

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")

def fix_article(filepath):
    """Fix an article by removing old CTA and related sections"""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Skip archive files
        if '_archive' in str(filepath):
            return "SKIPPED", "Archive file"
        
        # Check if has the new include
        if "include '../includes/blog-article-footer.php'" not in content:
            return "SKIPPED", "Not updated yet"
        
        original_content = content
        
        # Remove old article-cta divs that appear BEFORE the PHP include
        # Pattern: <div class="article-cta">...</div> followed eventually by <?php
        old_cta_pattern = r'<div class="article-cta">.*?</div>\s*(?=<div class="related-articles">|<\?php)'
        content = re.sub(old_cta_pattern, '', content, flags=re.DOTALL)
        
        # Remove old related-articles divs that appear BEFORE the PHP include
        old_related_pattern = r'<div class="related-articles">.*?</div>\s*(?=\s*<\?php\s*\n\s*// Article data)'
        content = re.sub(old_related_pattern, '', content, flags=re.DOTALL)
        
        # Clean up any extra whitespace before the PHP include
        content = re.sub(r'\n{3,}\s*<\?php\s*\n\s*// Article data', '\n\n                    <?php \n                    // Article data', content)
        
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return "FIXED", "Removed duplicate CTA/related"
        else:
            return "OK", "No duplicates found"
            
    except Exception as e:
        return "ERROR", str(e)

def main():
    print("=" * 60)
    print("Blog Articles Fixer - V2 (Remove Duplicates)")
    print("=" * 60)
    
    php_files = list(BLOG_DIR.glob("*.php"))
    
    stats = {"FIXED": 0, "SKIPPED": 0, "OK": 0, "ERROR": 0}
    
    for filepath in sorted(php_files):
        status, message = fix_article(filepath)
        stats[status] += 1
        
        icon = {"FIXED": "🔧", "SKIPPED": "⏭️", "OK": "✅", "ERROR": "💥"}[status]
        print(f"{icon} {filepath.name}: {message}")
    
    print("\n" + "=" * 60)
    print("Summary:")
    print(f"  🔧 Fixed: {stats['FIXED']}")
    print(f"  ✅ Already OK: {stats['OK']}")
    print(f"  ⏭️ Skipped: {stats['SKIPPED']}")
    print(f"  💥 Errors: {stats['ERROR']}")
    print("=" * 60)

if __name__ == "__main__":
    main()
