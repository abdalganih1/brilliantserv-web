<?php
// pump-handover - OPTIMIZED by Phase 6
$page_title = "تشغيل وتسليم المضخات | روائع الكريستال";
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
    <meta name="description" content="تشغيل وتسليم المضخات للمشاريع: اختبارات، توثيق، تدريب، شهادات معتمدة. 0550698111">
    <meta name="keywords" content="تسليم المضخات, تشغيل مضخات, handover, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-handover.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="تشغيل وتسليم المضخات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-handover.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-handover-featured.webp">

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
                "name": "ماذا يشمل تسليم المضخات؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "اختبارات نهائية، تقارير موثقة، تدريب المشغلين، شهادات التسليم، كتالوجات، قطع غيار أساسية."
                }
            },
            {
                "@type": "Question",
                "name": "كم مدة التسليم؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "مضخة واحدة: نصف يوم. نظام كامل: 1-3 أيام. حسب حجم المشروع وعدد الأنظمة."
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
                <h1>تشغيل وتسليم المضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-handover-featured.webp" alt="تسليم المضخات" loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">تشغيل وتسليم المضخات</h2>
                    <p>نقدم خدمات <strong>تسليم المضخات</strong> بشكل احترافي للمشاريع: اختبارات، توثيق، وتدريب العميل.
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
                            <li><a href="#section-1">1. تشغيل وتسليم المضخات</a></li>
                            <li><a href="#section-2">2. مراحل التسليم</a></li>
                            <li><a href="#section-3">3. ما نسلمه للعميل</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">مراحل التسليم</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>المرحلة</th>
                                <th>الوصف</th>
                                <th>المخرجات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><a href="pump-commissioning.php">Commissioning</a></strong></td>
                                <td>فحص واختبارات نهائية</td>
                                <td>تقرير الفحص</td>
                            </tr>
                            <tr>
                                <td><strong>التوثيق</strong></td>
                                <td>إعداد الملفات والرسومات</td>
                                <td>As-Built، O&M Manual</td>
                            </tr>
                            <tr>
                                <td><strong>التدريب</strong></td>
                                <td>تدريب المشغلين</td>
                                <td>شهادة تدريب</td>
                            </tr>
                            <tr>
                                <td><strong>التسليم</strong></td>
                                <td>محضر تسليم رسمي</td>
                                <td>شهادة التسليم</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">ما نسلمه للعميل</h2>
                    <ul>
                        <li>✅ تقرير <a href="pump-commissioning.php">Commissioning</a></li>
                        <li>✅ دليل التشغيل والصيانة (O&M)</li>
                        <li>✅ رسومات As-Built</li>
                        <li>✅ كتالوجات المضخات</li>
                        <li>✅ قطع غيار أساسية</li>
                        <li>✅ شهادات الضمان</li>
                    </ul>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-commissioning.php' => 'فحص وتشغيل',
                        'pumping-system-installation.php' => 'تركيب أنظمة الضخ',
                        'pump-maintenance-contracts.php' => 'عقود صيانة'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
