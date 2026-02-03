#!/usr/bin/env python3
"""
Blog Article Auto-Fixer
Automatically fixes common issues in blog articles:
1. Missing </body> and </html> tags
2. Missing footer.php include
3. Missing blog-interactions.js script
"""

import os
import re
from pathlib import Path

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")

# Standard footer template to append
FOOTER_TEMPLATE = """
                </div><!-- /.article-body -->
            </div><!-- /.article-wrapper -->
        </div><!-- /.container -->
    </article>

    <?php include '../includes/footer.php'; ?>
    <script src="../js/blog-interactions.js"></script>
</body>

</html>"""

fixed_count = 0
skipped_count = 0

for php_file in BLOG_DIR.glob("*.php"):
    if php_file.name.startswith("_"):
        continue
    
    try:
        content = php_file.read_text(encoding='utf-8')
    except:
        try:
            content = php_file.read_text(encoding='utf-8-sig')
        except Exception as e:
            print(f"❌ Cannot read: {php_file.name} - {e}")
            continue
    
    # Check if file needs fixing
    has_body_close = '</body>' in content
    has_html_close = '</html>' in content
    has_footer = "include '../includes/footer.php'" in content
    has_js_script = 'blog-interactions.js' in content
    
    needs_fix = not (has_body_close and has_html_close and has_footer and has_js_script)
    
    if not needs_fix:
        skipped_count += 1
        continue
    
    # Remove any incomplete endings
    # First, find where the PHP include for blog-article-footer.php is
    if "include '../includes/blog-article-footer.php';" in content:
        # Find the position after this include and the ?>
        pattern = r"(include\s+['\"]\.\.\/includes\/blog-article-footer\.php['\"];\s*\?>)"
        match = re.search(pattern, content)
        
        if match:
            end_pos = match.end()
            
            # Get everything after the include
            after_include = content[end_pos:].strip()
            
            # Check what's already there
            has_proper_ending = (
                '</div>' in after_include and
                '</article>' in after_include and
                '</body>' in after_include and
                '</html>' in after_include and
                "include '../includes/footer.php'" in after_include
            )
            
            if has_proper_ending:
                skipped_count += 1
                continue
            
            # Remove incomplete ending and add proper one
            # Keep everything up to and including the ?> after blog-article-footer include
            new_content = content[:end_pos] + FOOTER_TEMPLATE
            
            # Write the fixed content
            php_file.write_text(new_content, encoding='utf-8')
            print(f"✅ Fixed: {php_file.name}")
            fixed_count += 1
        else:
            print(f"⚠️ Pattern not found in: {php_file.name}")
    else:
        print(f"⚠️ No blog-article-footer include in: {php_file.name}")

print()
print("=" * 50)
print(f"✅ Fixed: {fixed_count} articles")
print(f"⏭️ Skipped (already OK): {skipped_count}")
print("=" * 50)
