<?php
// pump-services-riyadh - OPTIMIZED by Phase 6
$page_title = "خدمات مضخات المياه في الرياض | روائع الكريستال";
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
        content="خدمات مضخات المياه في الرياض: توريد، تركيب، صيانة، لوحات تحكم. خبرة 15+ سنة. جميع الماركات. 0550698111">
    <meta name="keywords" content="خدمات مضخات الرياض, تركيب مضخات, صيانة مضخات, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pump-services-riyadh.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="خدمات مضخات المياه في الرياض - روائع الكريستال.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pump-services-riyadh.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pump-services-riyadh-featured.webp">

    <!-- JSON-LD Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "خدمات مضخات المياه",
        "provider": {
            "@type": "LocalBusiness",
            "name": "روائع الكريستال",
            "telephone": "+966550698111"
        },
        "areaServed": "الرياض",
        "description": "خدمات متكاملة للمضخات: توريد، تركيب، صيانة"
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
                "name": "ما الخدمات التي تقدمونها؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "توريد مضخات، تركيب، صيانة دورية وطوارئ، تصنيع لوحات تحكم، قطع غيار أصلية."
                }
            },
            {
                "@type": "Question",
                "name": "هل تخدمون خارج الرياض؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "نعم، نخدم المنطقة الوسطى (الخرج، الدلم، المزاحمية) وننفذ مشاريع في جميع مناطق المملكة."
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
                <span class="section-badge">خدماتنا</span>
                <h1>خدمات مضخات المياه في الرياض</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pump-services-riyadh-featured.webp" alt="خدمات مضخات الرياض" loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">خدمات متكاملة للمضخات</h2>
                    <p><strong>روائع الكريستال</strong> تقدم جميع خدمات المضخات في <strong>الرياض</strong> والمنطقة
                        الوسطى. خبرة 15+ سنة في المجال.</p>
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
                            <li><a href="#section-1">1. خدمات متكاملة للمضخات</a></li>
                            <li><a href="#section-2">2. خدماتنا</a></li>
                            <li><a href="#section-3">3. لماذا تختارنا؟</a></li>
                            <li><a href="#section-4">4. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">خدماتنا</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الخدمة</th>
                                <th>التفاصيل</th>
                                <th>الرابط</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>توريد</strong></td>
                                <td>مضخات أصلية جميع الماركات</td>
                                <td><a href="authorized-pump-distributor.php">التفاصيل</a></td>
                            </tr>
                            <tr>
                                <td><strong>تركيب</strong></td>
                                <td>تركيب احترافي مع ضمان</td>
                                <td><a href="pumping-system-installation.php">التفاصيل</a></td>
                            </tr>
                            <tr>
                                <td><strong>صيانة</strong></td>
                                <td>دورية وطوارئ 24/7</td>
                                <td><a href="pump-maintenance-riyadh.php">التفاصيل</a></td>
                            </tr>
                            <tr>
                                <td><strong>لوحات تحكم</strong></td>
                                <td>تصنيع وبرمجة</td>
                                <td><a href="pump-control-panels.php">التفاصيل</a></td>
                            </tr>
                            <tr>
                                <td><strong>قطع غيار</strong></td>
                                <td>أصلية بضمان</td>
                                <td><a href="original-water-pumps.php">التفاصيل</a></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">لماذا تختارنا؟</h2>
                    <ul>
                        <li>✅ خبرة 15+ سنة</li>
                        <li>✅ فريق مهندسين وفنيين</li>
                        <li>✅ قطع غيار أصلية</li>
                        <li>✅ ضمان على جميع الأعمال</li>
                        <li>✅ خدمة طوارئ 24/7</li>
                        <li>✅ أسعار تنافسية</li>
                    </ul>

                    <h2 id="section-4">الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>كيف أحصل على عرض سعر؟</h3>
                            <p>تواصل معنا بالهاتف أو واتساب. سنرسل فني للمعاينة (مجاناً للمشاريع الكبيرة) ونقدم عرض سعر
                                مفصل.</p>
                        </div>
                        <div class="faq-item">
                            <h3>هل تقدمون عقود صيانة؟</h3>
                            <p>نعم! <a href="pump-maintenance-contracts.php">عقود صيانة</a> سنوية بخصومات.</p>
                        </div>
                    </div>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-company-riyadh.php' => 'شركة مضخات الرياض',
                        'best-pump-company-saudi.php' => 'أفضل شركة مضخات',
                        'pump-maintenance-riyadh.php' => 'صيانة مضخات الرياض'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
