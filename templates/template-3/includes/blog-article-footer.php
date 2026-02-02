<?php
/**
 * Blog Article Footer Component
 * يجمع: CTA + Related Articles + Back Link + Footer + Scripts
 */

// Load config
include_once __DIR__ . '/blog-config.php';
?>

<?php include __DIR__ . '/blog-cta.php'; ?>

<?php
if (isset($related_articles) && !empty($related_articles)) {
    include __DIR__ . '/blog-related.php';
}
?>

<!-- Back Link -->
<div class="article-back" style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--color-border);">
    <a href="../blog.php" class="back-link"
        style="color: var(--color-primary); text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
        <span>←</span> العودة للمدونة
    </a>
</div>
</div>
</div>
</div>
</article>

<?php include __DIR__ . '/footer.php'; ?>
<script src="../js/main.min.js"></script>
</body>

</html>