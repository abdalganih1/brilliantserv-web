#!/usr/bin/env python3
"""
Blog Articles Updater
Updates all blog articles to use the new shared CTA components
"""

import os
import re
from pathlib import Path

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")

# Pattern to find the old footer section (various formats)
OLD_PATTERNS = [
    # Pattern 1: Standard format with article-cta first
    r'<div class="article-cta">.*?</div>\s*<div class="related-articles">.*?</div>\s*<div class="article-back">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>\s*<\?php include.*?footer\.php.*?\?>\s*<script src=".*?main\.js.*?"></script>\s*</body>\s*</html>',
    
    # Pattern 2: Related articles first, then CTA
    r'<div class="related-articles">.*?</div>\s*<div class="article-cta">.*?</div>\s*<div class="article-back">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>\s*<\?php include.*?footer\.php.*?\?>\s*<script src=".*?main\.js.*?"></script>\s*</body>\s*</html>',
    
    # Pattern 3: With Call to Action comment
    r'<!-- Call to Action -->\s*<div class="related-articles">.*?</div>\s*<div class="article-cta">.*?</div>\s*<div class="article-back">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>\s*<\?php include.*?footer\.php.*?\?>\s*<script src=".*?main\.js.*?"></script>\s*</body>\s*</html>',
]

# Also match simpler patterns
SIMPLE_PATTERNS = [
    # Just article-back and footer
    r'<div class="article-back">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>\s*<\?php include.*?footer\.php.*?\?>\s*<script src=".*?main\.js.*?"></script>\s*</body>\s*</html>',
]

def extract_related_articles(content):
    """Extract related articles from old format"""
    related = {}
    # Look for related articles section
    match = re.search(r'<div class="related-articles">.*?<ul>(.*?)</ul>', content, re.DOTALL)
    if match:
        links = re.findall(r'<a href="([^"]+)"[^>]*>([^<]+)</a>', match.group(1))
        for href, title in links:
            # Clean up the href
            href = href.strip()
            title = title.strip()
            if href and title:
                related[href] = title
    return related

def create_new_footer(related_articles):
    """Create the new footer PHP code"""
    if related_articles:
        related_php = ",\n                        ".join([f"'{k}' => '{v}'" for k, v in related_articles.items()])
        return f'''
                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        {related_php}
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
'''
    else:
        return '''
                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles (add manually if needed)
                    $related_articles = [];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
'''

def update_article(filepath):
    """Update a single article file"""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Skip if already updated
        if "include '../includes/blog-article-footer.php'" in content:
            return "SKIPPED", "Already updated"
        
        # Skip archive files
        if '_archive' in str(filepath):
            return "SKIPPED", "Archive file"
        
        # Extract related articles before replacement
        related = extract_related_articles(content)
        
        # Try each pattern
        original_content = content
        updated = False
        
        for pattern in OLD_PATTERNS + SIMPLE_PATTERNS:
            match = re.search(pattern, content, re.DOTALL | re.IGNORECASE)
            if match:
                new_footer = create_new_footer(related)
                content = content[:match.start()] + new_footer
                updated = True
                break
        
        if not updated:
            # Try a more aggressive approach - find the article-back or end of article-body
            # Look for the pattern that ends the article content
            patterns_to_try = [
                r'(</div>\s*<!-- Back Link -->.*?</html>)',
                r'(<div class="article-back">.*?</html>)',
                r'(<div class="article-cta">.*?</html>)',
                r'(<div class="related-articles">.*?</html>)',
            ]
            
            for p in patterns_to_try:
                match = re.search(p, content, re.DOTALL | re.IGNORECASE)
                if match:
                    new_footer = create_new_footer(related)
                    content = content[:match.start()] + new_footer
                    updated = True
                    break
        
        if updated:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return "UPDATED", f"Related: {len(related)} articles"
        else:
            return "FAILED", "No matching pattern found"
            
    except Exception as e:
        return "ERROR", str(e)

def main():
    print("=" * 60)
    print("Blog Articles Updater")
    print("=" * 60)
    
    # Get all PHP files
    php_files = list(BLOG_DIR.glob("*.php"))
    
    stats = {"UPDATED": 0, "SKIPPED": 0, "FAILED": 0, "ERROR": 0}
    failed_files = []
    
    for filepath in sorted(php_files):
        status, message = update_article(filepath)
        stats[status] += 1
        
        icon = {"UPDATED": "✅", "SKIPPED": "⏭️", "FAILED": "❌", "ERROR": "💥"}[status]
        print(f"{icon} {filepath.name}: {message}")
        
        if status in ("FAILED", "ERROR"):
            failed_files.append((filepath.name, message))
    
    print("\n" + "=" * 60)
    print("Summary:")
    print(f"  ✅ Updated: {stats['UPDATED']}")
    print(f"  ⏭️ Skipped: {stats['SKIPPED']}")
    print(f"  ❌ Failed: {stats['FAILED']}")
    print(f"  💥 Errors: {stats['ERROR']}")
    print("=" * 60)
    
    if failed_files:
        print("\nFailed files:")
        for name, msg in failed_files:
            print(f"  - {name}: {msg}")

if __name__ == "__main__":
    main()
