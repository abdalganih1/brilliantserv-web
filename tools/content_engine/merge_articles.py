import json
import os
import sys

# Paths
base_dir = r"c:\Users\Abdalgani\Documents\BrilliantServ\tools\content_engine"
articles_path = os.path.join(base_dir, "articles.json")
migrate_script = os.path.join(base_dir, "migrate_blog.py")

# Run migration script to get new articles
# We will just exec it and capture stdout?
# Or better, just import the logic. But it prints to stdout.
# Let's just run it via subprocess to be clean
import subprocess
result = subprocess.run(["python", migrate_script], capture_output=True, text=True, encoding='utf-8')
if result.returncode != 0:
    print("Error running migration script")
    print(result.stderr)
    sys.exit(1)

new_articles = json.loads(result.stdout)

# Load existing articles
if os.path.exists(articles_path):
    with open(articles_path, 'r', encoding='utf-8') as f:
        existing_articles = json.load(f)
else:
    existing_articles = []

# Merge
# strict mapping by slug
existing_slugs = {a['slug'] for a in existing_articles}

for article in new_articles:
    if article['slug'] not in existing_slugs:
        existing_articles.append(article)
        print(f"Added: {article['slug']}")
    else:
        print(f"Skipped duplicate: {article['slug']}")

# Save back
with open(articles_path, 'w', encoding='utf-8') as f:
    json.dump(existing_articles, f, ensure_ascii=False, indent=4)

print("Merge complete.")
