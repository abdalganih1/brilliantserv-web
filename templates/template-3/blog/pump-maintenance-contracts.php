<?php
// pump-maintenance-contracts - OPTIMIZED by Phase 6
$page_title = "عقود صيانة مضخات - سنوية ودورية | روائع الكريستال";
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
        content="عقود صيانة مضخات سنوية: زيارات دورية، صيانة وقائية، إصلاحات طارئة. خصومات على قطع الغيار. 0550698111">
    <meta name="keywords" content="عقود صيانة مضخات, صيانة دورية, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-maintenance-contracts.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="عقود صيانة مضخات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-maintenance-contracts.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-maintenance-contracts-featured.webp">

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
                "name": "كم سعر عقد صيانة مضخات سنوي؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "يعتمد على عدد المضخات وحجمها. مضخة واحدة: 2,000-4,000 ريال/سنة. نظام كامل: 8,000-20,000 ريال/سنة."
                }
            },
            {
                "@type": "Question",
                "name": "ما يشمل عقد الصيانة؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "زيارات دورية (4-12 مرة/سنة)، صيانة وقائية، استجابة طوارئ، خصم على قطع الغيار، تقارير دورية."
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
                <span class="section-badge">خدمات فنية</span>
                <h1>عقود صيانة مضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-maintenance-contracts-featured.webp" alt="عقود صيانة مضخات"
                        loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">عقود صيانة المضخات</h2>
                    <p>نقدم عقود صيانة شاملة لمضخات المياه للمشاريع والمباني: زيارات دورية، صيانة وقائية، إصلاحات طارئة.
                    </p>
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
                            <li><a href="#section-1">1. عقود صيانة المضخات</a></li>
                            <li><a href="#section-2">2. باقات العقود</a></li>
                            <li><a href="#section-3">3. مميزات العقود</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">باقات العقود</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الباقة</th>
                                <th>الزيارات</th>
                                <th>السعر/سنة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>أساسية</strong></td>
                                <td>4 زيارات</td>
                                <td>2,000-4,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>متوسطة</strong></td>
                                <td>6 زيارات</td>
                                <td>4,000-8,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>شاملة</strong></td>
                                <td>12 زيارة + طوارئ</td>
                                <td>8,000-15,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>VIP</strong></td>
                                <td>غير محدود + قطع غيار</td>
                                <td>15,000-30,000 ريال</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">مميزات العقود</h2>
                    <ul>
                        <li>✅ زيارات دورية مجدولة</li>
                        <li>✅ صيانة وقائية شاملة</li>
                        <li>✅ استجابة طوارئ خلال 4 ساعات</li>
                        <li>✅ خصم 20% على قطع الغيار</li>
                        <li>✅ تقارير صيانة شهرية</li>
                    </ul>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-maintenance-riyadh.php' => 'صيانة مضخات الرياض',
                        'pump-services-riyadh.php' => 'خدمات مضخات',
                        'fire-pump-specialist.php' => 'شركة متخصصة'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
