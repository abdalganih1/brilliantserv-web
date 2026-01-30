#!/bin/bash
# ==============================================
# 🚀 BrilliantServ Deployment Script
# ==============================================
# This script runs on the server to:
# 1. Pull latest changes from GitHub
# 2. Sync template-3 to the root directory
# ==============================================

set -e  # Exit on any error

# Configuration
SITE_ROOT="/home/u571469569/domains/brilliantserv.com/public_html"
TEMPLATE_DIR="$SITE_ROOT/templates/template-3"

echo "🚀 Starting BrilliantServ Deployment..."
echo "=========================================="

# Step 1: Go to site root
cd "$SITE_ROOT"
echo "📂 Working directory: $(pwd)"

# Step 2: Pull latest from GitHub
echo ""
echo "📥 Pulling latest changes from GitHub..."
git pull origin main

# Step 3: Sync template-3 to root (PHP files only)
echo ""
echo "📋 Syncing template-3 to root..."

# Copy main PHP files
for file in index.php about.php services.php projects.php contact.php blog.php; do
    if [ -f "$TEMPLATE_DIR/$file" ]; then
        cp "$TEMPLATE_DIR/$file" "$SITE_ROOT/"
        echo "  ✅ Copied: $file"
    fi
done

# Copy includes folder
if [ -d "$TEMPLATE_DIR/includes" ]; then
    cp -r "$TEMPLATE_DIR/includes" "$SITE_ROOT/"
    echo "  ✅ Copied: includes/"
fi

# Copy blog folder PHP files
if [ -d "$TEMPLATE_DIR/blog" ]; then
    mkdir -p "$SITE_ROOT/blog"
    cp "$TEMPLATE_DIR/blog/"*.php "$SITE_ROOT/blog/" 2>/dev/null || true
    echo "  ✅ Copied: blog/*.php"
fi

# Copy CSS, JS, and media if they exist
for folder in css js media; do
    if [ -d "$TEMPLATE_DIR/$folder" ]; then
        cp -r "$TEMPLATE_DIR/$folder" "$SITE_ROOT/"
        echo "  ✅ Synced: $folder/"
    fi
done

echo ""
echo "=========================================="
echo "✅ Deployment Complete!"
echo "🌐 Site: https://brilliantserv.com"
echo "=========================================="
