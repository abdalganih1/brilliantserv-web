<?php
// hvac-panel-manufacturing - OPTIMIZED by Phase 6
$page_title = "تصنيع لوحات HVAC - تكييف مركزي | روائع الكريستال";
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
        content="تصنيع لوحات HVAC للتكييف المركزي والمبردات: Chillers، AHU، FCU. مواصفات سعودية. 0550698111">
    <meta name="keywords" content="تصنيع لوحات HVAC, لوحات تكييف, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/hvac-panel-manufacturing.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="تصنيع لوحات HVAC.">
    <meta property="og:url" content="https://brilliantserv.com/blog/hvac-panel-manufacturing.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/hvac-panel-manufacturing-featured.webp">

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
                "name": "ما أنواع لوحات HVAC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "لوحات Chiller (مبردات)، لوحات AHU (وحدات مناولة الهواء)، لوحات FCU (وحدات المروحة)، لوحات Pump House."
                }
            },
            {
                "@type": "Question",
                "name": "كم سعر لوحة HVAC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "يعتمد على الحجم: FCU: 2,000-5,000 ريال. AHU: 5,000-15,000 ريال. Chiller: 15,000-50,000 ريال."
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
                <h1>تصنيع لوحات HVAC</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/hvac-panel-manufacturing-featured.webp" alt="تصنيع لوحات HVAC"
                        loading="lazy">
                </div>
                <div class="article-body">
                    <h2>تصنيع لوحات HVAC</h2>
                    <p>نصنع لوحات HVAC للتكييف المركزي بمواصفات عالية تلائم جميع أنظمة التكييف.</p>

                    <h2>أنواع لوحات HVAC</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>النوع</th>
                                <th>الاستخدام</th>
                                <th>السعر</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>FCU</strong></td>
                                <td>وحدات المروحة</td>
                                <td>2,000-5,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>AHU</strong></td>
                                <td>مناولة الهواء</td>
                                <td>5,000-15,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>Chiller</strong></td>
                                <td>المبردات</td>
                                <td>15,000-50,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>Pump House</strong></td>
                                <td>مضخات التكييف</td>
                                <td>10,000-30,000 ريال</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>المواصفات</h2>
                    <ul>
                        <li>✅ مكونات Schneider / ABB أصلية</li>
                        <li>✅ تحكم VFD لتوفير الطاقة</li>
                        <li>✅ BMS Integration جاهز</li>
                        <li>✅ IP54-IP65 للبيئات القاسية</li>
                    </ul>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'hvac-control-panels.php' => 'لوحات HVAC',
                        'pump-panel-assembly.php' => 'تجميع لوحات',
                        'inverter-panel-maintenance.php' => 'صيانة انفرتر'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
