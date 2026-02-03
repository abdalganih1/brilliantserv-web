<?php
// automatic-control-panels - OPTIMIZED by Phase 6
$page_title = "لوحات التحكم الأوتوماتيكية للمضخات | روائع الكريستال";
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
        content="لوحات تحكم أوتوماتيكية للمضخات: تشغيل/إيقاف تلقائي، حماية شاملة، توفير طاقة. تصنيع وتركيب في الرياض. 0550698111">
    <meta name="keywords" content="لوحات تحكم أوتوماتيكية, تحكم مضخات, حماية محركات, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/automatic-control-panels.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="لوحات تحكم أوتوماتيكية للمضخات في السعودية.">
    <meta property="og:url" content="https://brilliantserv.com/blog/automatic-control-panels.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/automatic-control-panels-featured.webp">

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
                "name": "ما هي اللوحات الأوتوماتيكية؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "لوحات تتحكم في المضخة تلقائياً بناءً على: مستوى الخزان، الضغط، أو التوقيت. بدون تدخل يدوي."
                }
            },
            {
                "@type": "Question",
                "name": "ما أنواع التحكم الأوتوماتيكي؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "تحكم بالمستوى (عوامة)، تحكم بالضغط (مفتاح أو حساس)، تحكم بالوقت (Timer)، أو مزيج منها."
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
                <h1>لوحات التحكم الأوتوماتيكية للمضخات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/automatic-control-panels-featured.webp" alt="لوحة تحكم أوتوماتيكية للمضخات"
                        loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">ما هي اللوحات الأوتوماتيكية؟</h2>
                    <p>لوحات التحكم الأوتوماتيكية تدير المضخات <strong>بدون تدخل يدوي</strong>. تشغّل وتوقف المضخة
                        تلقائياً بناءً على شروط محددة: مستوى المياه، الضغط، أو جدول زمني.</p>
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
                            <li><a href="#section-1">1. ما هي اللوحات الأوتوماتيكية؟</a></li>
                            <li><a href="#section-2">2. أنواع التحكم الأوتوماتيكي</a></li>
                            <li><a href="#section-3">3. مميزات التحكم الأوتوماتيكي</a></li>
                            <li><a href="#section-4">4. مكونات اللوحة الأوتوماتيكية</a></li>
                            <li><a href="#section-5">5. خدماتنا</a></li>
                            <li><a href="#section-6">6. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>


                    <p>توفر حماية شاملة للمحرك وتقلل الأعطال والاستهلاك.</p>

                    <h2 id="section-2">أنواع التحكم الأوتوماتيكي</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>النوع</th>
                                <th>الحساس/المدخل</th>
                                <th>التطبيق</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>تحكم بالمستوى</strong></td>
                                <td>عوامة، حساس مستوى</td>
                                <td>خزانات، آبار</td>
                            </tr>
                            <tr>
                                <td><strong>تحكم بالضغط</strong></td>
                                <td>مفتاح/حساس ضغط</td>
                                <td><a href="water-booster-systems.php">Booster</a></td>
                            </tr>
                            <tr>
                                <td><strong>تحكم بالوقت</strong></td>
                                <td>Timer</td>
                                <td>ري، تصريف</td>
                            </tr>
                            <tr>
                                <td><strong>تحكم مركب</strong></td>
                                <td>PLC مع عدة مدخلات</td>
                                <td>محطات معقدة</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">مميزات التحكم الأوتوماتيكي</h2>
                    <ul>
                        <li>✅ <strong>توفير الوقت:</strong> لا حاجة للتشغيل اليدوي</li>
                        <li>✅ <strong>حماية من الجفاف:</strong> إيقاف عند انخفاض المستوى</li>
                        <li>✅ <strong>حماية من الفيضان:</strong> إيقاف عند امتلاء الخزان</li>
                        <li>✅ <strong>توفير الطاقة:</strong> تشغيل عند الحاجة فقط</li>
                        <li>✅ <strong>إطالة العمر:</strong> تقليل دورات التشغيل</li>
                    </ul>

                    <h2 id="section-4">مكونات اللوحة الأوتوماتيكية</h2>
                    <ol>
                        <li><strong>القاطع الرئيسي:</strong> MCCB أو MCB</li>
                        <li><strong>الكونتاكتور:</strong> تشغيل المحرك</li>
                        <li><strong>ريلاي الحماية:</strong> Overload Relay</li>
                        <li><strong>وحدة التحكم:</strong> Timer أو <a href="plc-control-panels.php">PLC</a></li>
                        <li><strong>مداخل الحساسات:</strong> مستوى، ضغط</li>
                    </ol>

                    <h2 id="section-5">خدماتنا</h2>
                    <ul>
                        <li>✅ تصنيع لوحات أوتوماتيكية حسب الطلب</li>
                        <li>✅ ترقية اللوحات اليدوية لأوتوماتيكية</li>
                        <li>✅ تركيب حساسات ومستوى</li>
                        <li>✅ برمجة وضبط</li>
                        <li>✅ صيانة دورية</li>
                    </ul>

                    <h2 id="section-6">الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>كم سعر لوحة أوتوماتيكية؟</h3>
                            <p>من 2,000 ريال للبسيطة (عوامة) إلى 15,000+ ريال للمتقدمة (VFD+حساسات).</p>
                        </div>
                        <div class="faq-item">
                            <h3>هل يمكن ترقية لوحتي الحالية؟</h3>
                            <p>نعم، نضيف وحدة تحكم وحساسات للوحات اليدوية لتصبح أوتوماتيكية.</p>
                        </div>
                    </div>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'pump-control-panels.php' => 'لوحات تحكم المضخات',
                        'pressure-control-panels.php' => 'لوحات تحكم الضغط',
                        'plc-control-panels.php' => 'لوحات PLC'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
