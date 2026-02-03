<?php
// hvac-control-panels - OPTIMIZED by Phase 6
$page_title = "لوحات تحكم HVAC - التكييف المركزي | روائع الكريستال";
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
        content="لوحات تحكم HVAC للتكييف المركزي: VFD، Star-Delta، Soft Starter. تصنيع محلي بمعايير عالمية. Schneider، ABB. 0550698111">
    <meta name="keywords" content="لوحات HVAC, لوحات تكييف, VFD, تكييف مركزي, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/hvac-control-panels.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="لوحات تحكم HVAC للتكييف المركزي.">
    <meta property="og:url" content="https://brilliantserv.com/blog/hvac-control-panels.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/hvac-control-panels-featured.webp">

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
                "name": "ما الفرق بين لوحة VFD و Star-Delta؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "VFD: تحكم كامل بالسرعة، توفير طاقة 30-50%، سعر أعلى. Star-Delta: تقليل تيار البدء فقط، أرخص، لكن بدون تحكم بالسرعة."
                }
            },
            {
                "@type": "Question",
                "name": "كم سعر لوحة HVAC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Direct: 2,000-5,000 ريال. Star-Delta: 5,000-15,000 ريال. VFD: 10,000-50,000 ريال. يعتمد على القدرة والمكونات."
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
                <h1>لوحات تحكم HVAC</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/hvac-control-panels-featured.webp" alt="لوحات HVAC" loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">لوحات تحكم التكييف والتبريد</h2>
                    <p><strong>لوحات HVAC</strong> هي أنظمة تحكم متخصصة لإدارة أنظمة التكييف والتبريد المركزية. تتحكم
                        في:</p>
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
                            <li><a href="#section-1">1. لوحات تحكم التكييف والتبريد</a></li>
                            <li><a href="#section-2">2. أنواع لوحات HVAC</a></li>
                            <li><a href="#section-3">3. مميزات لوحاتنا</a></li>
                            <li><a href="#section-4">4. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>

                    <ul>
                        <li>مضخات المياه المبردة (Chilled Water)</li>
                        <li>مضخات المكثف (Condenser)</li>
                        <li>مراوح التبريد (Cooling Towers)</li>
                        <li>وحدات مناولة الهواء (AHU)</li>
                    </ul>

                    <h2 id="section-2">أنواع لوحات HVAC</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>النوع</th>
                                <th>المميزات</th>
                                <th>الاستخدام</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>VFD</strong></td>
                                <td>تحكم بالسرعة، توفير طاقة</td>
                                <td>مشاريع كبرى</td>
                            </tr>
                            <tr>
                                <td><strong>Star-Delta</strong></td>
                                <td>تقليل تيار البدء</td>
                                <td>محركات كبيرة</td>
                            </tr>
                            <tr>
                                <td><strong>Soft Starter</strong></td>
                                <td>بدء تدريجي</td>
                                <td>حماية المحرك</td>
                            </tr>
                            <tr>
                                <td><strong>Direct</strong></td>
                                <td>بسيط، اقتصادي</td>
                                <td>محركات صغيرة</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">مميزات لوحاتنا</h2>
                    <ul>
                        <li>✅ تصنيع محلي بمعايير عالمية</li>
                        <li>✅ مكونات Schneider / ABB</li>
                        <li>✅ حماية كاملة: Overload, Phase Failure, Earth Fault</li>
                        <li>✅ شاشة HMI للمراقبة (اختياري)</li>
                        <li>✅ <a href="plc-control-panels.php">تحكم PLC</a> للأنظمة المعقدة</li>
                    </ul>

                    <h2 id="section-4">الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>كم مدة التصنيع؟</h3>
                            <p>لوحة بسيطة: 3-5 أيام. لوحة VFD: أسبوع. مشاريع كبرى: 2-4 أسابيع.</p>
                        </div>
                        <div class="faq-item">
                            <h3>هل تقدمون ضمان؟</h3>
                            <p>نعم، سنة كاملة على التصنيع + ضمان المكونات من الشركات المصنعة.</p>
                        </div>
                    </div>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'hvac-panel-manufacturing.php' => 'تصنيع لوحات HVAC',
                        'mcc-panels.php' => 'لوحات MCC',
                        'automatic-control-panels.php' => 'لوحات أوتوماتيك'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
