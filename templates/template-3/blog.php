<?php
// Page-specific variables
$page_title = "المقالات";
$base_path = "";
$active_page = "blog";

// Load site configuration
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo" />
    <!-- Primary Meta Tags -->
    <title>المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال</title>
    <meta name="title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta name="description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta name="keywords" content="مدونة, مقالات كهرباء, صيانة, نصائح تقنية">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/blog.php">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/blog.php">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/blog.php">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/blog.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/blog.php">
    <meta property="og:title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta property="og:description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta property="og:image" content="https://brilliantserv.com/media/hero-mechanic-pumps.png">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/blog.php">
    <meta property="twitter:title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta property="twitter:description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta property="twitter:image" content="https://brilliantserv.com/media/hero-mechanic-pumps.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.png">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.png">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">المدونة</span>
                <h1>مقالات ونصائح هندسية</h1>
                <p>نشارككم خبرتنا الممتدة لسنوات في مجالات الصيانة والتشغيل والحلول الذكية</p>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-main-grid">
                <?php
                // Blog Articles Data
                $articles = [
                    [
                        'title' => 'أفضل فني تصليح مضخات مياه شمال الرياض',
                        'date' => '30 يناير 2026',
                        'image' => '../../media/hero-mechanic-pumps.png',
                        'alt' => 'تصليح مضخات مياه شمال الرياض',
                        'desc' => 'هل توقفت مضخة المياه فجأة؟ فريقنا المتخصص جاهز لخدمتك بقطع غيار أصلية وضمان شامل...',
                        'link' => 'blog/pump-repair-north-riyadh.php'
                    ],
                    [
                        'title' => 'كشف تسربات المياه بجدة بدون تكسير',
                        'date' => '24 يناير 2026',
                        'image' => '../../media/hero-mechanic-pumps.png',
                        'alt' => 'كشف تسربات المياه بجدة',
                        'desc' => 'هل تعاني من ارتفاع فاتورة المياه؟ اكتشف الحلول الجذرية لمشاكل التسربات بأحدث الأجهزة...',
                        'link' => 'blog/leak-detection-jeddah.php'
                    ],
                    [
                        'title' => 'أفضل شركة عزل خزانات بمكة',
                        'date' => '23 يناير 2026',
                        'image' => '../../media/mechanic-project.webp',
                        'alt' => 'عزل خزانات بمكة',
                        'desc' => 'احمِ صحة عائلتك مع خدمات عزل وتعقيم الخزانات بأفضل المواد المصرحة...',
                        'link' => 'blog/tank-insulation-makkah.php'
                    ],
                    [
                        'title' => 'عزل اسطح بالطائف: مائي وحراري',
                        'date' => '22 يناير 2026',
                        'image' => '../../media/about-team-work.png',
                        'alt' => 'عزل اسطح بالطائف',
                        'desc' => 'تخلص من مشاكل تسرب مياه الأمطار والحرارة العالية مع حلول العزل المتكاملة...',
                        'link' => 'blog/roof-insulation-taif.php'
                    ],
                    [
                        'title' => 'صيانة مسابح بجدة',
                        'date' => '20 يناير 2026',
                        'image' => '../../media/mechanic-works.webp',
                        'alt' => 'صيانة مسابح',
                        'desc' => 'خدمات تنظيف وتعقيم وفلترة المسابح لضمان مياه نقية وسباحة آمنة طوال العام...',
                        'link' => 'blog/pool-maintenance-jeddah.php'
                    ],
                    [
                        'title' => 'عزل حمامات بجدة',
                        'date' => '18 يناير 2026',
                        'image' => '../../media/hero-electrical-work.png',
                        'alt' => 'عزل حمامات',
                        'desc' => 'الحل الجذري لمشاكل الرطوبة وتقشير الدهانات في دورات المياه مع ضمان التسليم...',
                        'link' => 'blog/bathroom-insulation-jeddah.php'
                    ]
                ];

                // Loop through articles
                foreach ($articles as $article): ?>
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['alt']; ?>" loading="lazy">
                        </div>
                        <div class="blog-content">
                            <span class="blog-date"><?php echo $article['date']; ?></span>
                            <h3><?php echo $article['title']; ?></h3>
                            <p><?php echo $article['desc']; ?></p>
                            <a href="<?php echo $article['link']; ?>" class="read-more">قراءة المزيد</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>هل تحتاج استشارة هندسية؟</h2>
                <p>فريقنا من الخبراء جاهز لمساعدتك في جميع احتياجاتك الهندسية</p>
                <div class="cta-actions">
                    <a href="tel:0550698111" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="20" height="20">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72" />
                        </svg>
                        0550698111
                    </a>
                    <a href="contact.html" class="btn btn-outline-light">أرسل استفسارك</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>