<?php
// pump-commissioning - OPTIMIZED by Phase 6
$page_title = "فحص وتشغيل المضخات - Commissioning | روائع الكريستال";
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
        content="فحص وتشغيل المضخات (Commissioning): اختبار الأداء، الضغط، التدفق. شهادات معتمدة. 0550698111">
    <meta name="keywords" content="فحص المضخات, تشغيل المضخات, commissioning, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-commissioning.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="فحص وتشغيل المضخات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-commissioning.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-commissioning-featured.webp">

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
                "name": "ما هو Commissioning للمضخات؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "فحص شامل للمضخة قبل التسليم: اختبار الضغط، التدفق، استهلاك الطاقة، الاهتزاز. للتأكد من مطابقة المواصفات."
                }
            },
            {
                "@type": "Question",
                "name": "كم تكلفة Commissioning؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "مضخة صغيرة: 500-1,000 ريال. نظام كامل: 2,000-5,000 ريال. حسب الحجم والتعقيد."
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
                <h1>فحص وتشغيل المضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-commissioning-featured.webp" alt="فحص وتشغيل المضخات" loading="lazy">
                </div>
                <div class="article-body">
                    <h2>ما هو فحص وتشغيل المضخات؟</h2>
                    <p><strong>Commissioning</strong> هو فحص شامل للمضخة قبل التسليم للتأكد من مطابقتها للمواصفات
                        وجاهزيتها للعمل.</p>

                    <h2>اختبارات الـ Commissioning</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الاختبار</th>
                                <th>الوصف</th>
                                <th>المعيار</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>الضغط</strong></td>
                                <td>قياس Head عند نقاط مختلفة</td>
                                <td>±5% من التصميم</td>
                            </tr>
                            <tr>
                                <td><strong>التدفق</strong></td>
                                <td>قياس Flow Rate</td>
                                <td>±5% من التصميم</td>
                            </tr>
                            <tr>
                                <td><strong>الطاقة</strong></td>
                                <td>استهلاك الأمبير والكيلوواط</td>
                                <td>ضمن Nameplate</td>
                            </tr>
                            <tr>
                                <td><strong>الاهتزاز</strong></td>
                                <td>قياس Vibration</td>
                                <td>
                                    < 4.5 mm/s</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>خطوات Commissioning</h2>
                    <ol>
                        <li>فحص ميكانيكي (Alignment، صواميل)</li>
                        <li>فحص كهربائي (عزل، توصيلات)</li>
                        <li>ملء المضخة بالماء (Priming)</li>
                        <li>تشغيل تجريبي + قياسات</li>
                        <li>توثيق النتائج في تقرير</li>
                    </ol>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-handover.php' => 'تسليم المضخات',
                        'pumping-system-installation.php' => 'تركيب أنظمة الضخ',
                        'pump-pressure-calibration.php' => 'معايرة الضغط'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
