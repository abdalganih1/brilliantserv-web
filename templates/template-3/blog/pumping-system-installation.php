<?php
// pumping-system-installation - OPTIMIZED by Phase 6
$page_title = "تركيب أنظمة ضخ المياه | روائع الكريستال";
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
        content="تركيب أنظمة ضخ المياه: مضخات، لوحات تحكم، أنابيب. تركيب احترافي وفق المعايير. ضمان سنة. الرياض والسعودية. 0550698111">
    <meta name="keywords" content="تركيب مضخات, تركيب أنظمة ضخ, محطات ضخ, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/pumping-system-installation.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="تركيب أنظمة ضخ المياه في الرياض والسعودية.">
    <meta property="og:url" content="https://brilliantserv.com/blog/pumping-system-installation.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/pumping-system-installation-featured.webp">

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
                "name": "كم تكلفة تركيب نظام ضخ؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "فلة: 5,000-15,000 ريال. عمارة: 15,000-50,000 ريال. مشروع تجاري: 50,000+ ريال. يعتمد على حجم النظام."
                }
            },
            {
                "@type": "Question",
                "name": "كم يستغرق التركيب؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "فلة: يوم واحد. عمارة: 2-3 أيام. مشاريع كبرى: أسبوع أو أكثر حسب الحجم."
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
                <span class="section-badge">خدمات التركيب</span>
                <h1>تركيب أنظمة ضخ المياه</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/pumping-system-installation-featured.webp"
                        alt="تركيب أنظمة ضخ المياه" loading="lazy">
                </div>
                <div class="article-body">
                    <h2 id="section-1">خدمات تركيب أنظمة الضخ</h2>
                    <p>نقدم خدمات <strong>تركيب احترافية</strong> لجميع أنظمة ضخ المياه وفق المعايير الهندسية والفنية. التركيب الصحيح يضمن أداء مثالي وعمر طويل للنظام.</p>
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
                            <li><a href="#section-1">1. خدمات تركيب أنظمة الضخ</a></li>
                            <li><a href="#section-2">2. ماذا يشمل التركيب؟</a></li>
                            <li><a href="#section-3">3. مراحل التركيب</a></li>
                            <li><a href="#section-4">4. لماذا نحن؟</a></li>
                            <li><a href="#section-5">5. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>


                    <h2 id="section-2">ماذا يشمل التركيب؟</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>المكون</th>
                                <th>الأعمال</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><a href="centrifugal-pumps.php">المضخات</a></strong></td>
                                <td>تثبيت، محاذاة، توصيل</td>
                            </tr>
                            <tr>
                                <td><strong><a href="pump-control-panels.php">لوحات التحكم</a></strong></td>
                                <td>تركيب، توصيل، برمجة</td>
                            </tr>
                            <tr>
                                <td><strong>الأنابيب</strong></td>
                                <td>تمديد، لحام، اختبار ضغط</td>
                            </tr>
                            <tr>
                                <td><strong>الصمامات</strong></td>
                                <td>تركيب عدم رجوع، عزل</td>
                            </tr>
                            <tr>
                                <td><strong>الحساسات</strong></td>
                                <td>ضغط، مستوى، تدفق</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="section-3">مراحل التركيب</h2>
                    <ol>
                        <li><strong>المعاينة:</strong> زيارة الموقع ودراسة المتطلبات</li>
                        <li><strong>التصميم:</strong> إعداد المخططات والمواصفات</li>
                        <li><strong>التوريد:</strong> توفير جميع المواد والمعدات</li>
                        <li><strong>التركيب:</strong> أعمال التركيب الميكانيكي والكهربائي</li>
                        <li><strong>التشغيل:</strong> اختبار وتشغيل تجريبي</li>
                        <li><strong>التسليم:</strong> تدريب العميل وتسليم الضمان</li>
                    </ol>

                    <h2 id="section-4">لماذا نحن؟</h2>
                    <ul>
                        <li>✅ فريق مهندسين وفنيين متخصصين</li>
                        <li>✅ خبرة 15+ سنة في التركيب</li>
                        <li>✅ ضمان سنة على أعمال التركيب</li>
                        <li>✅ مواد ومعدات أصلية</li>
                        <li>✅ التزام بالمواعيد</li>
                    </ul>

                    <h2 id="section-5">الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>هل تركبون جميع الماركات؟</h3>
                            <p>نعم، نركب جميع ماركات المضخات: Grundfos، Lowara، KSB، Ebara، وغيرها.</p>
                        </div>
                        <div class="faq-item">
                            <h3>هل تقدمون ضمان على التركيب؟</h3>
                            <p>نعم، ضمان سنة كاملة على أعمال التركيب. بالإضافة لضمان المصنع على المضخات.</p>
                        </div>
                    </div>

                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'water-pumping-solutions.php' => 'حلول ضخ المياه',
                        'pump-maintenance-contracts.php' => 'عقود صيانة مضخات',
                        'pump-company-riyadh.php' => 'شركة مضخات الرياض'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
