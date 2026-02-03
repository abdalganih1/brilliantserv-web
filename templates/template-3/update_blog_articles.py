#!/usr/bin/env python3
"""
Blog Articles SEO Enhancer
Adds SEO components to all blog articles:
- Article meta (author, date, reading time)
- Stats grid
- Table of contents
- Proper footer integration
"""

import os
import re
from pathlib import Path
from datetime import datetime
import random

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")

# ============================================
# SEO COMPONENTS TEMPLATES
# ============================================

def get_article_meta():
    """Generate article meta section"""
    return '''
                    <!-- Article Meta -->
                    <div class="article-meta">
                        <img src="../media/team/engineer-avatar.webp" alt="فريق روائع الكريستال" class="author-avatar" onerror="this.style.display='none'">
                        <div class="meta-info">
                            <span class="author-name">فريق روائع الكريستال الهندسي</span>
                            <div class="meta-details">
                                <span class="article-date">آخر تحديث: <?= date('j F Y', filemtime(__FILE__)) ?></span>
                                <span class="reading-time">⏱️ <?= ceil(str_word_count(strip_tags(file_get_contents(__FILE__))) / 200) ?> دقائق قراءة</span>
                            </div>
                        </div>
                    </div>
'''

def get_stats_grid(article_type="general"):
    """Generate stats grid based on article type"""
    stats = {
        "pump": [
            ("7+", "أنواع مضخات"),
            ("500+", "مشروع منجز"),
            ("15+", "سنة خبرة"),
            ("24/7", "دعم فني")
        ],
        "motor": [
            ("1000+", "محرك تم صيانته"),
            ("50+", "نوع محرك"),
            ("15+", "سنة خبرة"),
            ("24/7", "دعم فني")
        ],
        "fire": [
            ("100+", "نظام حريق"),
            ("معتمد", "الدفاع المدني"),
            ("15+", "سنة خبرة"),
            ("24/7", "استجابة")
        ],
        "general": [
            ("500+", "مشروع منجز"),
            ("50+", "عميل راضٍ"),
            ("15+", "سنة خبرة"),
            ("24/7", "دعم فني")
        ]
    }
    
    chosen_stats = stats.get(article_type, stats["general"])
    
    cards = ""
    for num, label in chosen_stats:
        cards += f'''
                        <div class="stat-card">
                            <span class="stat-number">{num}</span>
                            <span class="stat-label">{label}</span>
                        </div>'''
    
    return f'''
                    <!-- Stats Grid -->
                    <div class="article-stats-grid">{cards}
                    </div>
'''

def detect_article_type(content, filename):
    """Detect article type from content/filename"""
    filename_lower = filename.lower()
    content_lower = content.lower()
    
    if any(x in filename_lower for x in ['pump', 'مضخ', 'booster', 'centrifugal', 'sewage']):
        return "pump"
    elif any(x in filename_lower for x in ['motor', 'محرك', 'لف', 'winding']):
        return "motor"
    elif any(x in filename_lower for x in ['fire', 'حريق', 'jockey']):
        return "fire"
    elif 'مضخ' in content_lower or 'pump' in content_lower:
        return "pump"
    elif 'محرك' in content_lower or 'motor' in content_lower:
        return "motor"
    else:
        return "general"

def extract_headings(content):
    """Extract H2/H3 headings for TOC"""
    headings = []
    # Match h2 tags with id or without
    h2_pattern = r'<h2[^>]*(?:id=["\']([^"\']+)["\'])?[^>]*>([^<]+)</h2>'
    matches = re.findall(h2_pattern, content, re.IGNORECASE)
    
    for i, (id_attr, text) in enumerate(matches):
        text = text.strip()
        if not id_attr:
            # Generate id from text
            id_attr = f"section-{i+1}"
        headings.append((id_attr, text))
    
    return headings

def generate_toc(headings):
    """Generate table of contents HTML"""
    if len(headings) < 2:
        return ""  # Don't add TOC for articles with few sections
    
    items = ""
    for i, (id_attr, text) in enumerate(headings[:8], 1):  # Max 8 items
        items += f'''
                            <li><a href="#{id_attr}">{i}. {text}</a></li>'''
    
    return f'''
                    <!-- Table of Contents -->
                    <div class="article-toc">
                        <h4>📋 محتويات المقال</h4>
                        <ol>{items}
                        </ol>
                    </div>
'''

def add_ids_to_headings(content):
    """Add IDs to H2 headings if missing"""
    counter = [0]  # Use list to allow modification in nested function
    
    def replacer(match):
        counter[0] += 1
        full_tag = match.group(0)
        # Check if already has id
        if 'id=' in full_tag.lower():
            return full_tag
        # Add id
        return full_tag.replace('<h2', f'<h2 id="section-{counter[0]}"', 1)
    
    return re.sub(r'<h2[^>]*>', replacer, content, flags=re.IGNORECASE)

def has_seo_components(content):
    """Check if article already has SEO components"""
    has_meta = 'class="article-meta"' in content
    has_stats = 'class="article-stats-grid"' in content
    has_toc = 'class="article-toc"' in content
    return has_meta, has_stats, has_toc

def find_insertion_point(content):
    """Find where to insert SEO components (after first paragraph)"""
    # Look for first </p> after article-body starts
    body_match = re.search(r'class="article-body"[^>]*>', content)
    if body_match:
        # Find first </p> after article-body
        first_p_end = content.find('</p>', body_match.end())
        if first_p_end != -1:
            return first_p_end + 4  # After </p>
    
    # Fallback: after first </p>
    first_p = content.find('</p>')
    if first_p != -1:
        return first_p + 4
    
    return None

def create_footer_code(related_articles):
    """Create proper footer include"""
    if related_articles:
        related_php = ",\n                        ".join([f"'{k}' => '{v}'" for k, v in related_articles.items()])
        return f'''
                    <?php 
                    $article = ['title' => $page_title];
                    $related_articles = [
                        {related_php}
                    ];
                    include '../includes/blog-article-footer.php';
                    ?>
'''
    else:
        return '''
                    <?php 
                    $article = ['title' => $page_title];
                    $related_articles = [];
                    include '../includes/blog-article-footer.php';
                    ?>
'''

def extract_related_articles(content):
    """Extract existing related articles"""
    related = {}
    match = re.search(r'<div class="related-articles">.*?<ul>(.*?)</ul>', content, re.DOTALL)
    if match:
        links = re.findall(r'<a href="([^"]+)"[^>]*>(?:<[^>]+>)*([^<]+)', match.group(1))
        for href, title in links:
            href = href.strip()
            title = title.strip()
            if href and title and not href.startswith('#'):
                related[href] = title
    return related

def clean_duplicate_sections(content):
    """Remove duplicate CTA, footer, related articles sections"""
    # Check if using new footer include
    if "include '../includes/blog-article-footer.php'" in content:
        # Remove any manual CTA sections before the include
        content = re.sub(
            r'<div class="article-cta">.*?</div>\s*</div>\s*(?=\s*<\?php\s*\n?\s*//?\s*Article)',
            '',
            content,
            flags=re.DOTALL
        )
        # Remove manual related-articles sections before include
        content = re.sub(
            r'<div class="related-articles">.*?</div>\s*(?=\s*<\?php\s*\n?\s*//?\s*Article)',
            '',
            content,
            flags=re.DOTALL
        )
    
    # Remove duplicate closing tags after include
    content = re.sub(
        r"(include '../includes/blog-article-footer.php';\s*\?>)\s*</div>\s*</div>\s*</div>\s*</article>\s*<\?php include.*?footer\.php.*?\?>\s*(<\?php include.*?scripts\.php.*?\?>|<script.*?</script>)\s*</body>\s*</html>",
        r'\1',
        content,
        flags=re.DOTALL
    )
    
    return content

def update_article(filepath):
    """Update a single article with SEO enhancements"""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        original_content = content
        changes = []
        
        # Skip archive files
        if '_archive' in str(filepath):
            return "SKIPPED", "Archive file"
        
        # Check existing components
        has_meta, has_stats, has_toc = has_seo_components(content)
        
        # Detect article type
        article_type = detect_article_type(content, filepath.name)
        
        # Add IDs to headings first
        content = add_ids_to_headings(content)
        
        # Extract headings for TOC
        headings = extract_headings(content)
        
        # Find insertion point
        insertion_point = find_insertion_point(content)
        
        if insertion_point:
            components_to_add = ""
            
            if not has_meta:
                components_to_add += get_article_meta()
                changes.append("meta")
            
            if not has_stats:
                components_to_add += get_stats_grid(article_type)
                changes.append("stats")
            
            if not has_toc and len(headings) >= 3:
                components_to_add += generate_toc(headings)
                changes.append("toc")
            
            if components_to_add:
                content = content[:insertion_point] + components_to_add + content[insertion_point:]
        
        # Fix footer if needed
        if "include '../includes/blog-article-footer.php'" not in content:
            # Extract related articles
            related = extract_related_articles(content)
            
            # Remove old footer pattern and add new
            old_footer_patterns = [
                r'<div class="article-cta">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>.*?</html>',
                r'<div class="related-articles">.*?</div>\s*</div>\s*</div>\s*</div>\s*</article>.*?</html>',
                r'<div class="article-back">.*?</html>',
            ]
            
            for pattern in old_footer_patterns:
                match = re.search(pattern, content, re.DOTALL | re.IGNORECASE)
                if match:
                    content = content[:match.start()] + create_footer_code(related)
                    changes.append("footer")
                    break
        
        # Clean any duplicates
        content = clean_duplicate_sections(content)
        
        if content != original_content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(content)
            return "UPDATED", f"Added: {', '.join(changes) if changes else 'cleaned'}"
        else:
            return "SKIPPED", "Already optimized"
            
    except Exception as e:
        return "ERROR", str(e)

def main():
    print("=" * 60)
    print("🚀 Blog Articles SEO Enhancer")
    print("=" * 60)
    
    php_files = sorted(BLOG_DIR.glob("*.php"))
    
    stats = {"UPDATED": 0, "SKIPPED": 0, "ERROR": 0}
    results = []
    
    for filepath in php_files:
        status, message = update_article(filepath)
        stats[status] += 1
        
        icon = {"UPDATED": "✅", "SKIPPED": "⏭️", "ERROR": "💥"}[status]
        print(f"{icon} {filepath.name}: {message}")
        results.append((filepath.name, status, message))
    
    print("\n" + "=" * 60)
    print("📊 Summary:")
    print(f"  ✅ Updated: {stats['UPDATED']}")
    print(f"  ⏭️ Skipped: {stats['SKIPPED']}")
    print(f"  💥 Errors: {stats['ERROR']}")
    print("=" * 60)
    
    if stats['ERROR'] > 0:
        print("\n❌ Errors:")
        for name, status, msg in results:
            if status == "ERROR":
                print(f"  - {name}: {msg}")
    
    return stats

if __name__ == "__main__":
    main()
