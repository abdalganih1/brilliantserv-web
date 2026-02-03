<?php
// pump-piping-maintenance - OPTIMIZED by Phase 6
$page_title = "صيانة مواسير وتوصيلات المضخات | روائع الكريستال";
$base_path = "../";
$active_page = "blog";

include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title><?= $page_title ?></title>
    <meta name="description"
        content="صيانة مواسير المضخات: كشف تسربات، تبديل جوانات، إصلاح وصلات. خدمة سريعة في الرياض. 0550698111">
    <meta name="keywords" content="صيانة مواسير, تسربات مضخات, جوانات, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-piping-maintenance.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="صيانة مواسير وتوصيلات المضخات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-piping-maintenance.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-piping-maintenance-featured.webp">

    <!-- JSON-LD Article Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?= $page_title ?>",
        "datePublished": "2026-02-01",
        "dateModified": "2026-02-01",
        "author": {"@type": "Organization", "name": "مؤسسة روائع الكريستال"},
        "publisher": {
            "@type": "Organization",
            "name": "مؤسسة روائع الكريستال",
            "logo": {"@type": "ImageObject", "url": "https://brilliantserv.com/media/logo.webp"}
        }
    }
    </script>

    <!-- JSON-LD FAQ Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "كيف أعرف مكان التسريب؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "علامات: بقع رطوبة، صوت هسهسة، انخفاض الضغط، فاتورة مياه مرتفعة. نستخدم أجهزة كشف متخصصة."
                }
            },
            {
                "@type": "Question",
                "name": "كم تكلفة إصلاح التسريب؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "تسريب بسيط: 100-300 ريال. تبديل جوانات: 200-500 ريال. تبديل وصلة: 300-800 ريال."
                }
            }
        ]
    }
    </script>

    <?php include '../includes/head.php'; ?>
</head>

<body>
    <?php include '../includes/nav.php'; ?>

    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">خدمات الصيانة</span>
                <h1>صيانة مواسير المضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-piping-maintenance-featured.webp" alt="صيانة مواسير المضخات"
                        loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">صيانة مواسير وتوصيلات المضخات</h2>
                    <p>مواسير وتوصيلات المضخات تحتاج صيانة دورية لتجنب التسربات والأعطال. نقدم خدمات شاملة:</p>
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

                    <!-- Stats Grid -->
                    <div class="article-stats-grid">
                        <div class="stat-card">
                            <span class="stat-number">7+</span>
                            <span class="stat-label">أنواع مضخات</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">مشروع منجز</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">سنة خبرة</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">دعم فني</span>
                        </div>
                    </div>

                    <!-- Table of Contents -->
                    <div class="article-toc">
                        <h4>📋 محتويات المقال</h4>
                        <ol>
                            <li><a href="#section-1">1. صيانة مواسير وتوصيلات المضخات</a></li>
                            <li><a href="#section-2">2. خدماتنا</a></li>
                            <li><a href="#section-3">3. أسباب التسريب الشائعة</a></li>
                            <li><a href="#section-4">4. الوقاية</a></li>
                            <li><a href="#section-5">5. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">خدماتنا</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الخدمة</th>
                                <th>التفاصيل</th>
                                <th>السعر التقريبي</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>كشف التسربات</strong></td>
                                <td>بأجهزة متخصصة</td>
                                <td>150-300 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>تبديل جوانات</strong></td>
                                <td>Gaskets, O-Rings</td>
                                <td>200-500 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>إصلاح وصلة</strong></td>
                                <td>لحام أو تبديل</td>
                                <td>300-800 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>تمديد جديد</strong></td>
                                <td>حسب المواصفات</td>
                                <td>حسب الطول</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">أسباب التسريب الشائعة</h2>
                    <ul>
                        <li>تآكل الجوانات (الأكثر شيوعاً)</li>
                        <li>اهتزاز المضخة يفك الوصلات</li>
                        <li>صدأ أو تآكل المواسير</li>
                        <li>ضغط زائد (Water Hammer)</li>
                        <li>تركيب خاطئ</li>
                    </ul>

                    <h2 id="section-4">الوقاية</h2>
                    <ul>
                        <li>✅ فحص دوري للوصلات</li>
                        <li>✅ تثبيت جيد للمضخة (تقليل الاهتزاز)</li>
                        <li>✅ تركيب صمامات عدم رجوع</li>
                        <li>✅ <a href="pump-maintenance-contracts.php">عقود صيانة</a></li>
                    </ul>

                    <h2 id="section-5">الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>متى أحتاج تبديل المواسير كلياً؟</h3>
                            <p>عند الصدأ الشديد، تكرار التسريب، أو بعد 20-30 سنة من الاستخدام.</p>
                        </div>
                    </div>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-maintenance-riyadh.php' => 'صيانة مضخات الرياض',
                        'booster-pump-repair.php' => 'صيانة Booster'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
