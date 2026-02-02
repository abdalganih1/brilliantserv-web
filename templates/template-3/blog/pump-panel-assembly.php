<?php
// pump-panel-assembly - OPTIMIZED by Phase 6
$page_title = "تجميع لوحات مضخات - تصنيع محلي | روائع الكريستال";
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
        content="تجميع لوحات مضخات: مكونات Schneider، ABB. تصنيع محلي. VFD، Star-Delta، Soft Starter. 0550698111">
    <meta name="keywords" content="تجميع لوحات مضخات, تصنيع لوحات, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-panel-assembly.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="تجميع لوحات مضخات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-panel-assembly.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-panel-assembly-featured.webp">

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
                "name": "كم سعر تجميع لوحة مضخة؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Direct: 1,000-2,500 ريال. Star-Delta: 3,000-6,000 ريال. VFD: 5,000-20,000 ريال. حسب القدرة والمواصفات."
                }
            },
            {
                "@type": "Question",
                "name": "ما المكونات المستخدمة؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "نستخدم مكونات أصلية: Schneider، ABB، Siemens. مع ضمان على اللوحة والمكونات."
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
                <h1>تجميع لوحات مضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-panel-assembly-featured.webp" alt="تجميع لوحات مضخات" loading="lazy">
                </div>
                <div class="article-body">
                    <h2>تجميع لوحات المضخات</h2>
                    <p>نجمع لوحات تحكم المضخات بمواصفات عالية في ورشنا المحلية تحت إشراف مهندسين متخصصين.</p>

                    <h2>أسعار تجميع اللوحات</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>النوع</th>
                                <th>القدرة</th>
                                <th>السعر</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Direct</strong></td>
                                <td>1-10 HP</td>
                                <td>1,000-2,500 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>Star-Delta</strong></td>
                                <td>5-50 HP</td>
                                <td>3,000-6,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong>Soft Starter</strong></td>
                                <td>15-100 HP</td>
                                <td>4,000-10,000 ريال</td>
                            </tr>
                            <tr>
                                <td><strong><a href="automatic-control-panels.php">VFD</a></strong></td>
                                <td>1-200 HP</td>
                                <td>5,000-20,000 ريال</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>المكونات المستخدمة</h2>
                    <ul>
                        <li>🇫🇷 Schneider Electric - Circuit Breakers، Contactors</li>
                        <li>🇨🇭 ABB - VFDs، Soft Starters</li>
                        <li>🇩🇪 Siemens - PLCs، HMIs</li>
                    </ul>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-control-panels.php' => 'لوحات تحكم مضخات',
                        'control-panel-installation.php' => 'تركيب لوحات',
                        'pump-operation-panels.php' => 'لوحات تشغيل'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
