<?php
// plc-control-panels - OPTIMIZED by Phase 6
$page_title = "لوحات PLC - التحكم المبرمج للمضخات | روائع الكريستال";
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
        content="لوحات PLC للتحكم المبرمج في المضخات والمحطات. Siemens، Allen Bradley، Schneider. برمجة وتصنيع في الرياض. 0550698111">
    <meta name="keywords" content="لوحات PLC, تحكم مبرمج, Siemens, Allen Bradley, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/plc-control-panels.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="لوحات PLC للتحكم المبرمج في المضخات والمحطات.">
    <meta property="og:url" content="https://brilliantserv.com/blog/plc-control-panels.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/plc-control-panels-featured.webp">

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
                "name": "ما هي لوحات PLC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "PLC (Programmable Logic Controller) متحكم منطقي قابل للبرمجة. يتحكم في تشغيل المضخات والعمليات المعقدة بناءً على برنامج مخصص."
                }
            },
            {
                "@type": "Question",
                "name": "ما أفضل ماركة PLC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Siemens S7 الأكثر انتشاراً عالمياً. Allen Bradley للمشاريع الأمريكية. Schneider Modicon للتكلفة المتوسطة."
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
                <span class="section-badge">أتمتة صناعية</span>
                <h1>لوحات PLC - التحكم المبرمج للمضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/plc-control-panels-featured.webp" alt="لوحات PLC Siemens" loading="lazy">
                </div>
                <div class="article-body">
                    <h2>ما هي لوحات PLC؟</h2>
                    <p><strong>PLC (Programmable Logic Controller)</strong> هو متحكم منطقي قابل للبرمجة يُستخدم لأتمتة
                        العمليات الصناعية. في مجال المضخات، يتحكم PLC في:</p>
                    <ul>
                        <li>تشغيل/إيقاف تلقائي حسب الشروط</li>
                        <li>تبديل المضخات (Lead/Lag)</li>
                        <li>مراقبة الأعطال والإنذارات</li>
                        <li>اتصال SCADA للمراقبة عن بعد</li>
                    </ul>

                    <h2>ماركات PLC المدعومة</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الماركة</th>
                                <th>الموديلات</th>
                                <th>المميزات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Siemens</strong></td>
                                <td>S7-1200, S7-1500</td>
                                <td>الأكثر انتشاراً</td>
                            </tr>
                            <tr>
                                <td><strong>Allen Bradley</strong></td>
                                <td>CompactLogix, MicroLogix</td>
                                <td>مشاريع أمريكية</td>
                            </tr>
                            <tr>
                                <td><strong>Schneider</strong></td>
                                <td>Modicon M340, M580</td>
                                <td>تكلفة متوسطة</td>
                            </tr>
                            <tr>
                                <td><strong>Mitsubishi</strong></td>
                                <td>FX, iQ-R</td>
                                <td>سرعة عالية</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>تطبيقات PLC في المضخات</h2>
                    <ul>
                        <li><a href="water-pumping-solutions.php">محطات ضخ متعددة المضخات</a></li>
                        <li><a href="water-booster-systems.php">أنظمة Booster</a> متقدمة</li>
                        <li><a href="fire-pumps.php">أنظمة الحريق</a> المعقدة</li>
                        <li>محطات معالجة المياه</li>
                        <li><a href="mcc-panels.php">لوحات MCC</a> الذكية</li>
                    </ul>

                    <h2>خدماتنا</h2>
                    <ul>
                        <li>✅ تصميم وتصنيع لوحات PLC</li>
                        <li>✅ برمجة Siemens TIA Portal</li>
                        <li>✅ برمجة Allen Bradley Studio 5000</li>
                        <li>✅ تصميم شاشات HMI</li>
                        <li>✅ ربط SCADA</li>
                        <li>✅ صيانة وتطوير</li>
                    </ul>

                    <h2>الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>متى أحتاج PLC بدلاً من VFD؟</h3>
                            <p>PLC للتحكم المتقدم: عدة مضخات، شروط معقدة، مراقبة عن بعد. VFD كافي للتحكم البسيط بالسرعة.
                            </p>
                        </div>
                        <div class="faq-item">
                            <h3>كم سعر لوحة PLC؟</h3>
                            <p>من 15,000 ريال (بسيطة) إلى 100,000+ ريال (معقدة). يعتمد على الماركة وعدد المداخل/المخارج.
                            </p>
                        </div>
                    </div>

                    <div class="article-cta">
                        <h3>تحتاج نظام PLC لمحطتك؟</h3>
                        <p>برمجة وتصنيع احترافي!</p>
                        <div class="cta-buttons">
                            <a href="tel:0550698111" class="btn btn-primary">📞 0550698111</a>
                            <a href="https://wa.me/966550698111" class="btn btn-success">💬 واتساب</a>
                        </div>
                    </div>

                    <div class="related-articles">
                        <h3>مقالات ذات صلة</h3>
                        <ul>
                            <li><a href="pump-control-panels.php">لوحات تحكم المضخات</a></li>
                            <li><a href="mcc-panels.php">لوحات MCC</a></li>
                            <li><a href="automatic-control-panels.php">لوحات أوتوماتيكية</a></li>
                        </ul>
                    </div>

                    
                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-control-panels.php' => 'لوحات تحكم المضخات',
                        'mcc-panels.php' => 'لوحات MCC',
                        'automatic-control-panels.php' => 'لوحات أوتوماتيكية'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
