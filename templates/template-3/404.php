<?php
// Page-specific variables
$page_title = "الصفحة غير موجودة (404)";
$base_path = "";
$active_page = "404";

// Attempt Smart Recover (Migration Logic)
// If the user requested /old-post-name, check if /blog/old-post-name.php exists
$request_uri = $_SERVER['REQUEST_URI'];
$clean_slug = basename(parse_url($request_uri, PHP_URL_PATH));

// Check if this slug exists as a blog post
if (file_exists(__DIR__ . "/blog/" . $clean_slug . ".php")) {
    header("Location: /blog/" . $clean_slug . ".php", true, 301);
    exit();
}

// Check without extension just in case
if (file_exists(__DIR__ . "/blog/" . $clean_slug)) {
    header("Location: /blog/" . $clean_slug . ".php", true, 301);
    exit();
}

include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة غير موجودة - روائع الكريستال</title>
    <meta name="robots" content="noindex, follow">
    <?php include 'includes/head.php'; ?>
    <style>
        .error-section {
            padding: 8rem 0;
            text-align: center;
            background: var(--color-bg-light);
        }

        .error-code {
            font-size: 8rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1;
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: var(--color-text-muted);
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <section class="error-section">
        <div class="container">
            <div class="error-code">404</div>
            <h1>عذراً، الصفحة التي تبحث عنها غير موجودة</h1>
            <p class="error-message">ربما تم نقل الصفحة أو حذفها أثناء تحديث الموقع.</p>

            <div class="actions">
                <a href="index.html" class="btn btn-primary">العودة للرئيسية</a>
                <a href="blog.html" class="btn btn-outline">تصفح المدونة</a>
            </div>

            <div style="margin-top: 4rem;">
                <h3>قد يهمك قراءة:</h3>
                <div class="services-grid" style="margin-top: 2rem; justify-content: center;">
                    <!-- Quick Links to Popular Posts -->
                    <article class="service-card" style="text-align: right;">
                        <h3>صيانة مضخات</h3>
                        <a href="blog/pump-repair-north-riyadh.php" class="service-link">اقرأ المزيد</a>
                    </article>
                    <article class="service-card" style="text-align: right;">
                        <h3>كشف تسربات</h3>
                        <a href="blog/leak-detection-jeddah.php" class="service-link">اقرأ المزيد</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="js/main.min.js"></script>
</body>

</html>