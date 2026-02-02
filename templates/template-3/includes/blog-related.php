<?php
/**
 * Blog Related Articles Component
 * يعرض المقالات ذات الصلة
 * يستقبل: $related_articles = ['slug.php' => 'عنوان المقال', ...]
 */

if (!isset($related_articles) || empty($related_articles)) {
    return;
}
?>

<div class="related-articles"
    style="background: var(--color-bg-alt); padding: 1.5rem; border-radius: 1rem; margin: 2rem 0;">
    <h3 style="margin-bottom: 1rem; color: var(--color-text);">📚 مقالات ذات صلة</h3>
    <ul style="list-style: none; padding: 0; margin: 0; display: grid; gap: 0.75rem;">
        <?php foreach ($related_articles as $slug => $title): ?>
            <li>
                <a href="<?= $slug ?>"
                    style="color: var(--color-primary); text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 0.5rem; border-radius: 0.5rem; transition: background 0.2s;"
                    onmouseover="this.style.background='rgba(var(--color-primary-rgb), 0.1)';"
                    onmouseout="this.style.background='transparent';">
                    <span style="color: var(--color-primary);">→</span>
                    <?= htmlspecialchars($title) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>