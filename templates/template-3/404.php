<?php
// Page-specific variables
$page_title = "الصفحة غير موجودة (404)";
$base_path = "";
$active_page = "404";

// Attempt Smart Recover (Migration Logic)
$request_uri = $_SERVER['REQUEST_URI'];
$clean_slug = urldecode(basename(parse_url($request_uri, PHP_URL_PATH)));

// 1. GSC Recovery Map (Old Arabic Slugs -> New English Paths)
// Based on Google Search Console Analysis (Jan 2026)
$redirect_map = [
    'انواع-المضخات' => '/blog/types-of-water-pumps',
    'صيانة-مضخات-المياه-الاحترافية' => '/blog/pump-repair-north-riyadh', // Nearest service match
    'لف-المحركات-الكهربائية' => '/blog/electric-motor-winding',
    'صيانة-غرف-التبريد-والتجميد' => '/blog/cold-room-maintenance',
    'صيانة-مضخات-الحريق' => '/blog/jockey-fire-pump-maintenance',
    'تصنيع-لوحات-التوزيع-الكهربائية' => '/blog/star-delta-panel-manufacturing',
    'تصنيع-وتوريد-لوحات-mdb' => '/blog/control-panel-prices-2026',
    'صيانة-كهرباء-المصانع' => '/blog/production-line-maintenance',
    'دور-الكهرباء-الصناعية-في-تطوير-المصان' => '/blog/production-line-maintenance',
    'سرعة-المحركات-الكهربائية' => '/blog/vfd-programming-pumps',
    'افضل-مقاول-كهرباء' => '/contact.html',
    'المخططات-الكهربائية-للمباني' => '/blog/electrical-layouts-for-buildings' // New specific article
];

if (array_key_exists($clean_slug, $redirect_map)) {
    header("Location: " . $redirect_map[$clean_slug], true, 301);
    exit();
}

// 2. Check if this slug exists as a blog post (Direct Match)
if (file_exists(__DIR__ . "/blog/" . $clean_slug . ".php")) {
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

            <div
                style="background: var(--color-bg-dark); color: white; padding: 2rem; border-radius: 1rem; margin-top: 2rem; display: inline-block;">
                <p>تحتاج مساعدة؟ تواصل معنا:</p>
                <a href="tel:0550698111" style="color: var(--color-primary); font-size: 1.5rem; font-weight: bold;">📞
                    0550698111</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="js/main.min.js"></script>
</body>

</html>