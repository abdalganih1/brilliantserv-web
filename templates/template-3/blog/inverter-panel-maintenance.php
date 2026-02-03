<?php
// inverter-panel-maintenance - OPTIMIZED by Phase 6
$page_title = "صيانة لوحات الانفرتر VFD | روائع الكريستال";
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
        content="صيانة لوحات الانفرتر VFD: ABB، Schneider، Danfoss. برمجة وإصلاح. قطع غيار أصلية. 0550698111">
    <meta name="keywords" content="صيانة انفرتر, VFD repair, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/inverter-panel-maintenance.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="صيانة لوحات الانفرتر.">
    <meta property="og:url" content="https://brilliantserv.com/blog/inverter-panel-maintenance.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/inverter-panel-maintenance-featured.webp">

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
                "name": "ما هي مشاكل الانفرتر الشائعة؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "أخطاء Overcurrent، Overvoltage، Ground Fault، Overtemperature. معظمها قابل للإصلاح."
                }
            },
            {
                "@type": "Question",
                "name": "كم سعر صيانة الانفرتر؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "فحص: 200-500 ريال. إصلاح بسيط: 500-1,500 ريال. استبدال قطع: حسب القطعة."
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
                <span class="section-badge">لوحات التحكم</span>
                <h1>صيانة لوحات الانفرتر</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/inverter-panel-maintenance-featured.webp" alt="صيانة لوحات الانفرتر"
                        loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">صيانة لوحات الانفرتر VFD</h2>
                    <p>نقدم خدمات صيانة متخصصة للانفرتر: فحص، إصلاح، برمجة، استبدال قطع.</p>
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
                            <li><a href="#section-1">1. صيانة لوحات الانفرتر VFD</a></li>
                            <li><a href="#section-2">2. الأعطال الشائعة والحلول</a></li>
                            <li><a href="#section-3">3. الماركات المدعومة</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">الأعطال الشائعة والحلول</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الخطأ</th>
                                <th>السبب</th>
                                <th>الحل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Overcurrent</strong></td>
                                <td>حمل زائد أو قصر</td>
                                <td>فحص المحرك والكابلات</td>
                            </tr>
                            <tr>
                                <td><strong>Overvoltage</strong></td>
                                <td>تذبذب الكهرباء</td>
                                <td>إضافة Reactor أو Filter</td>
                            </tr>
                            <tr>
                                <td><strong>Overtemp</strong></td>
                                <td>تهوية ضعيفة</td>
                                <td>تنظيف المروحة/فلاتر</td>
                            </tr>
                            <tr>
                                <td><strong>Ground Fault</strong></td>
                                <td>تسريب كهربائي</td>
                                <td>فحص العزل</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">الماركات المدعومة</h2>
                    <ul>
                        <li>🇨🇭 ABB - ACS580، ACS880</li>
                        <li>🇫🇷 Schneider - Altivar</li>
                        <li>🇩🇰 Danfoss - VLT</li>
                        <li>🇩🇪 Siemens - Sinamics</li>
                    </ul>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'automatic-control-panels.php' => 'لوحات أوتوماتيك',
                        'pump-control-panels.php' => 'لوحات تحكم مضخات',
                        'electric-motor-winding.php' => 'لف المحركات'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
