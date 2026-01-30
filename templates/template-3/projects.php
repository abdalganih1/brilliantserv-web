<?php
// Page-specific variables
$page_title = "أعمالنا";
$base_path = "";
$active_page = "projects";

// Load site configuration
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo" />
    <!-- Primary Meta Tags -->
    <title>أعمالنا | مشاريع كهربائية وميكانيكية منجزة - روائع الكريستال</title>
    <meta name="title" content="أعمالنا | مشاريع كهربائية وميكانيكية منجزة - روائع الكريستال">
    <meta name="description"
        content="معرض صور لأكثر من 500 مشروع كهربائي وميكانيكي منفذ في السعودية. لوحات توزيع، مضخات، أنظمة تحكم">
    <meta name="keywords" content="مشاريع كهربائية, مشاريع ميكانيكية, أعمال منجزة, معرض أعمال">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/projects.html">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/projects.html">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/projects.html">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/projects.html">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/projects.html">
    <meta property="og:title" content="أعمالنا | مشاريع كهربائية وميكانيكية منجزة - روائع الكريستال">
    <meta property="og:description"
        content="معرض صور لأكثر من 500 مشروع كهربائي وميكانيكي منفذ في السعودية. لوحات توزيع، مضخات، أنظمة تحكم">
    <meta property="og:image" content="https://brilliantserv.com/media/electrical/p17_img4.jpeg">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/projects.html">
    <meta property="twitter:title" content="أعمالنا | مشاريع كهربائية وميكانيكية منجزة - روائع الكريستال">
    <meta property="twitter:description"
        content="معرض صور لأكثر من 500 مشروع كهربائي وميكانيكي منفذ في السعودية. لوحات توزيع، مضخات، أنظمة تحكم">
    <meta property="twitter:image" content="https://brilliantserv.com/media/electrical/p17_img4.jpeg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.png">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.png">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">معرض الأعمال</span>
                <h1>مشاريعنا الناجحة</h1>
                <p>نفخر بسجل حافل من المشاريع المنفذة بأعلى معايير الجودة</p>
            </div>
        </div>
    </section>

    <!-- Projects Filter -->
    <section class="projects-filter">
        <div class="container">
            <div class="filter-buttons"
                style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
                <button class="filter-btn active" data-filter="all"
                    style="padding: 0.5rem 1.5rem; border: 1px solid var(--color-primary); background: var(--color-primary); color: white; border-radius: 2rem; cursor: pointer; transition: all 0.3s;">الكل</button>
                <button class="filter-btn" data-filter="electrical"
                    style="padding: 0.5rem 1.5rem; border: 1px solid var(--color-primary); background: transparent; color: var(--color-primary); border-radius: 2rem; cursor: pointer; transition: all 0.3s;">أعمال
                    كهربائية</button>
                <button class="filter-btn" data-filter="mechanical"
                    style="padding: 0.5rem 1.5rem; border: 1px solid var(--color-primary); background: transparent; color: var(--color-primary); border-radius: 2rem; cursor: pointer; transition: all 0.3s;">أعمال
                    ميكانيكية</button>
                <button class="filter-btn" data-filter="winding"
                    style="padding: 0.5rem 1.5rem; border: 1px solid var(--color-primary); background: transparent; color: var(--color-primary); border-radius: 2rem; cursor: pointer; transition: all 0.3s;">لف
                    محركات</button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="projects-page">
        <div class="container">
            <div class="projects-full-grid" id="projects-grid">
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-1.webp?v=1769376863" alt="تمديدات كهربائية صناعية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات كهربائية صناعية</h4>
                        <span>المنطقة الصناعية - الرياض</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-2.webp?v=1769376863" alt="تنفيذ شبكات الضغط المنخفض"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تنفيذ شبكات الضغط المنخفض</h4>
                        <span>مشاريع سكنية المملكة</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-3.webp?v=1769376863" alt="لوحات توزيع كهربائية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع كهربائية</h4>
                        <span>مصنع تجميع - القصيم</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-4.webp?v=1769376863" alt="صيانة كهرباء مصانع"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة كهرباء مصانع</h4>
                        <span>المنطقة الصناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-5.webp?v=1769376863" alt="تمديدات إضاءة صناعية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات إضاءة صناعية</h4>
                        <span>مستودعات تخزين</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-6.webp?v=1769376863" alt="برمجة أنظمة تحكم" loading="lazy">
                    <div class="project-overlay">
                        <h4>برمجة أنظمة تحكم</h4>
                        <span>خطوط إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-7.webp?v=1769376863" alt="لوحات كهرباء MDB" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات كهرباء MDB</h4>
                        <span>مجمعات تجارية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/اعمال-كهرباء-8.webp?v=1769376863" alt="تركيب محولات كهربائية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب محولات كهربائية</h4>
                        <span>محطات توليد</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p13_img4.jpeg?v=1769376863" alt="تركيبات لوحات التحكم" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيبات لوحات التحكم</h4>
                        <span>مصنع صناعي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p15_img4.jpeg?v=1769376863" alt="أعمال كهربائية متكاملة" loading="lazy">
                    <div class="project-overlay">
                        <h4>أعمال كهربائية متكاملة</h4>
                        <span>مجمع تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p17_img4.jpeg?v=1769376863" alt="تمديدات ضغط عالي" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات ضغط عالي</h4>
                        <span>محطة كهرباء</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p17_img5.jpeg?v=1769376863" alt="لوحات توزيع رئيسية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع رئيسية</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p18_img4.jpeg?v=1769376863" alt="صيانة كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة كهربائية</h4>
                        <span>مصنع إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p18_img5.jpeg?v=1769376863" alt="تركيب كيابل كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب كيابل كهربائية</h4>
                        <span>مشروع سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p19_img4.jpeg?v=1769376863" alt="أنظمة إضاءة صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة إضاءة صناعية</h4>
                        <span>مستودعات</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p19_img5.jpeg?v=1769376863" alt="لوحات تحكم PLC" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم PLC</h4>
                        <span>خط إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p20_img4.jpeg?v=1769376863" alt="تمديدات كهرباء مصانع" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات كهرباء مصانع</h4>
                        <span>المنطقة الصناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p20_img5.jpeg?v=1769376863" alt="صيانة محولات" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة محولات</h4>
                        <span>محطة توليد</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p21_img4.jpeg?v=1769376863" alt="أعمال كهرباء متوسط" loading="lazy">
                    <div class="project-overlay">
                        <h4>أعمال كهرباء متوسط</h4>
                        <span>مبنى تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p21_img5.jpeg?v=1769376863" alt="تركيبات كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيبات كهربائية</h4>
                        <span>برج سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p22_img4.jpeg?v=1769376863" alt="لوحات توزيع فرعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع فرعية</h4>
                        <span>مجمع صناعي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p22_img5.jpeg?v=1769376863" alt="كيابل ضغط منخفض" loading="lazy">
                    <div class="project-overlay">
                        <h4>كيابل ضغط منخفض</h4>
                        <span>مشروع إنشائي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img4.jpeg?v=1769376863" alt="تمديدات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات صناعية</h4>
                        <span>مصنع أغذية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img5.jpeg?v=1769376863" alt="أنظمة تحكم كهربائي" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة تحكم كهربائي</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img6.jpeg?v=1769376863" alt="صيانة لوحات MDB" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة لوحات MDB</h4>
                        <span>مجمع تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img7.jpeg?v=1769376863" alt="تركيب محولات جهد" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب محولات جهد</h4>
                        <span>محطة فرعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-1.webp?v=1769376863" alt="إشراف هندسي وتنفيذ ميكانيكي"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>إشراف هندسي وتنفيذ ميكانيكي</h4>
                        <span>مبنى تجاري - جدة</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-2.webp?v=1769376863" alt="تركيب مضخات مياه"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب مضخات مياه</h4>
                        <span>محطة ضخ رئيسية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-3.webp?v=1769376863" alt="صيانة أنظمة التبريد"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة أنظمة التبريد</h4>
                        <span>مصنع أغذية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-4.webp?v=1769376863" alt="تركيب شبكات أنابيب"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب شبكات أنابيب</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-5.webp?v=1769376863" alt="صيانة مضخات KSB" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات KSB</h4>
                        <span>محطة معالجة</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-6.webp?v=1769376863" alt="أنظمة التهوية والدكت"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة التهوية والدكت</h4>
                        <span>مول تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-7.webp?v=1769376863" alt="صيانة مضخات حريق"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات حريق</h4>
                        <span>برج سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/اعمال-ميكانيكا-8.webp?v=1769376863" alt="تركيب غلايات صناعية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب غلايات صناعية</h4>
                        <span>مصنع نسيج</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p9_img4.jpeg?v=1769376863" alt="صيانة مضخات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات صناعية</h4>
                        <span>محطة ضخ</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p9_img5.jpeg?v=1769376863" alt="تركيب أنظمة ضخ" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب أنظمة ضخ</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p10_img4.jpeg?v=1769376863" alt="صيانة معدات ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة معدات ميكانيكية</h4>
                        <span>مصنع إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p10_img5.jpeg?v=1769376863" alt="تركيب مضخات ديزل" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب مضخات ديزل</h4>
                        <span>موقع إنشائي</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p11_img4.jpeg?v=1769376863" alt="أنظمة تكييف مركزي" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة تكييف مركزي</h4>
                        <span>مول تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p11_img5.jpeg?v=1769376863" alt="صيانة أنظمة HVAC" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة أنظمة HVAC</h4>
                        <span>برج إداري</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p12_img4.jpeg?v=1769376863" alt="تركيب شبكات تبريد" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب شبكات تبريد</h4>
                        <span>مستودع تبريد</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p12_img5.jpeg?v=1769376863" alt="صيانة مبردات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مبردات صناعية</h4>
                        <span>مصنع أغذية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p13_img5.jpeg?v=1769376863" alt="تركيب مضخات حريق" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب مضخات حريق</h4>
                        <span>مجمع سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p14_img4.jpeg?v=1769376863" alt="صيانة مضخات جراندفوس" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات جراندفوس</h4>
                        <span>محطة معالجة مياه</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p14_img5.jpeg?v=1769376863" alt="أنظمة ضخ متكاملة" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة ضخ متكاملة</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p15_img5.jpeg?v=1769376863" alt="تركيب خطوط أنابيب" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب خطوط أنابيب</h4>
                        <span>مشروع بنية تحتية</span>
                    </div>
                </div>
                <div class="project-card" data-category="winding">
                    <img src="media/winding/لف-مواتير-1.webp?v=1769376863" alt="إعادة لف محرك 50 حصان" loading="lazy">
                    <div class="project-overlay">
                        <h4>إعادة لف محرك 50 حصان</h4>
                        <span>ورشة الصيانة</span>
                    </div>
                </div>
                <div class="project-card" data-category="winding">
                    <img src="media/winding/لف-مواتير-2.webp?v=1769376863" alt="صيانة عازلية المحركات" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة عازلية المحركات</h4>
                        <span>مصنع بلاستيك</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>ترغب في مناقشة مشروعك؟</h2>
                <p>فريقنا جاهز لتقديم أفضل الحلول الهندسية لمشروعك</p>
                <div class="cta-actions">
                    <a href="contact.html" class="btn btn-light">تواصل معنا الآن</a>
                    <a href="https://wa.me/966550698111" class="btn btn-outline-light">واتساب مباشر</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js?v=1769376863"></script>
    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            const filterBtns = document.querySelectorAll('.filter-btn');
            let data;

            // Hybrid: Try fetch, fallback to embedded
            try {
                const response = await fetch('media/projects.json');
                data = await response.json();
                console.log('✓ Loaded from JSON');
            } catch (e) {
                data = embeddedProjectsData;
                console.log('✓ Using embedded data (file:// mode)');
            }

            // Render all projects by category with progressive loading
            ['electrical', 'mechanical', 'winding'].forEach(category => {
                data[category].forEach(project => {
                    const card = document.createElement('div');
                    card.className = 'project-card';
                    card.setAttribute('data-category', category);
                    card.style.cursor = 'pointer';

                    // Create placeholder with gradient background
                    const placeholder = category === 'electrical' ? '#1a365d' :
                        category === 'mechanical' ? '#2d3748' : '#4a5568';

                    card.innerHTML = `
                        <div class="img-placeholder" style="background: ${placeholder}; position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">
                            <div style="color: rgba(255,255,255,0.3); font-size: 3rem;">⚡</div>
                        </div>
                        <img src="media/${category}/${project.image}" alt="${project.title}" loading="lazy" style="opacity: 0; transition: opacity 0.3s;">
                        <div class="project-overlay">
                            <h4>${project.title}</h4>
                            <span>${project.location}</span>
                        </div>
                    `;

                    // When image loads, fade it in and hide placeholder
                    const img = card.querySelector('img');
                    img.onload = function () {
                        this.style.opacity = '1';
                        const ph = card.querySelector('.img-placeholder');
                        if (ph) ph.style.display = 'none';
                    };

                    grid.appendChild(card);
                });
            });

            // Initialize filtering
            const projectCards = document.querySelectorAll('.project-card');

            function filterProjects(category) {
                filterBtns.forEach(b => {
                    const btnFilter = b.getAttribute('data-filter');
                    if (btnFilter === category) {
                        b.classList.add('active');
                        b.style.background = 'var(--color-primary)';
                        b.style.color = 'white';
                    } else {
                        b.classList.remove('active');
                        b.style.background = 'transparent';
                        b.style.color = 'var(--color-primary)';
                    }
                });

                projectCards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (category !== 'all') {
                    history.replaceState(null, null, '#' + category);
                } else {
                    history.replaceState(null, null, window.location.pathname);
                }
            }

            const hash = window.location.hash.replace('#', '');
            if (hash) filterProjects(hash);

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => filterProjects(btn.getAttribute('data-filter')));
            });

            projectCards.forEach(card => {
                card.addEventListener('click', () => {
                    const category = card.getAttribute('data-category');
                    if (category) {
                        filterProjects(category);
                        document.querySelector('.projects-filter').scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        });
    </script>
</body>

</html>