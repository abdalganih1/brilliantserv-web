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
    <meta property="og:image" content="https://brilliantserv.com/media/electrical/p17_img4.webp">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/projects.html">
    <meta property="twitter:title" content="أعمالنا | مشاريع كهربائية وميكانيكية منجزة - روائع الكريستال">
    <meta property="twitter:description"
        content="معرض صور لأكثر من 500 مشروع كهربائي وميكانيكي منفذ في السعودية. لوحات توزيع، مضخات، أنظمة تحكم">
    <meta property="twitter:image" content="https://brilliantserv.com/media/electrical/p17_img4.webp">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.webp">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.webp">

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
                    <img src="media/electrical/p13_img4.webp?v=1769376863" alt="تركيبات لوحات التحكم" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيبات لوحات التحكم</h4>
                        <span>مصنع صناعي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p15_img4.webp?v=1769376863" alt="أعمال كهربائية متكاملة" loading="lazy">
                    <div class="project-overlay">
                        <h4>أعمال كهربائية متكاملة</h4>
                        <span>مجمع تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p17_img4.webp?v=1769376863" alt="تمديدات ضغط عالي" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات ضغط عالي</h4>
                        <span>محطة كهرباء</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p17_img5.webp?v=1769376863" alt="لوحات توزيع رئيسية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع رئيسية</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p18_img4.webp?v=1769376863" alt="صيانة كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة كهربائية</h4>
                        <span>مصنع إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p18_img5.webp?v=1769376863" alt="تركيب كيابل كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب كيابل كهربائية</h4>
                        <span>مشروع سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p19_img4.webp?v=1769376863" alt="أنظمة إضاءة صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة إضاءة صناعية</h4>
                        <span>مستودعات</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p19_img5.webp?v=1769376863" alt="لوحات تحكم PLC" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم PLC</h4>
                        <span>خط إنتاج</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p20_img4.webp?v=1769376863" alt="تمديدات كهرباء مصانع" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات كهرباء مصانع</h4>
                        <span>المنطقة الصناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p20_img5.webp?v=1769376863" alt="صيانة محولات" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة محولات</h4>
                        <span>محطة توليد</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p21_img4.webp?v=1769376863" alt="أعمال كهرباء متوسط" loading="lazy">
                    <div class="project-overlay">
                        <h4>أعمال كهرباء متوسط</h4>
                        <span>مبنى تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p21_img5.webp?v=1769376863" alt="تركيبات كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيبات كهربائية</h4>
                        <span>برج سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p22_img4.webp?v=1769376863" alt="لوحات توزيع فرعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع فرعية</h4>
                        <span>مجمع صناعي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p22_img5.webp?v=1769376863" alt="كيابل ضغط منخفض" loading="lazy">
                    <div class="project-overlay">
                        <h4>كيابل ضغط منخفض</h4>
                        <span>مشروع إنشائي</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img4.webp?v=1769376863" alt="تمديدات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات صناعية</h4>
                        <span>مصنع أغذية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img5.webp?v=1769376863" alt="أنظمة تحكم كهربائي" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة تحكم كهربائي</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img6.webp?v=1769376863" alt="صيانة لوحات MDB" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة لوحات MDB</h4>
                        <span>مجمع تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="electrical">
                    <img src="media/electrical/p23_img7.webp?v=1769376863" alt="تركيب محولات جهد" loading="lazy">
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
                    <img src="media/mechanical/p9_img4.webp?v=1769376863" alt="صيانة مضخات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات صناعية</h4>
                        <span>محطة ضخ</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p9_img5.webp?v=1769376863" alt="تركيب أنظمة ضخ" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب أنظمة ضخ</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p10_img4.webp?v=1769376863" alt="صيانة معدات ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة معدات ميكانيكية</h4>
                        <span>مصنع إنتاج</span>
                    </div>
                </div>

                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p11_img4.webp?v=1769376863" alt="أنظمة تكييف مركزي" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة تكييف مركزي</h4>
                        <span>مول تجاري</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p11_img5.webp?v=1769376863" alt="صيانة أنظمة HVAC" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة أنظمة HVAC</h4>
                        <span>برج إداري</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p12_img4.webp?v=1769376863" alt="تركيب شبكات تبريد" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب شبكات تبريد</h4>
                        <span>مستودع تبريد</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p12_img5.webp?v=1769376863" alt="صيانة مبردات صناعية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مبردات صناعية</h4>
                        <span>مصنع أغذية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p13_img5.webp?v=1769376863" alt="تركيب مضخات حريق" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب مضخات حريق</h4>
                        <span>مجمع سكني</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p14_img4.webp?v=1769376863" alt="صيانة مضخات جراندفوس" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة مضخات جراندفوس</h4>
                        <span>محطة معالجة مياه</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p14_img5.webp?v=1769376863" alt="أنظمة ضخ متكاملة" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة ضخ متكاملة</h4>
                        <span>منشأة صناعية</span>
                    </div>
                </div>
                <div class="project-card" data-category="mechanical">
                    <img src="media/mechanical/p15_img5.webp?v=1769376863" alt="تركيب خطوط أنابيب" loading="lazy">
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
                    <a href="contact.php" class="btn btn-light">تواصل معنا الآن</a>
                    <a href="https://wa.me/966501870643?text=مرحباً، أود الاستفسار عن خدماتكم" target="_blank"
                        class="btn btn-outline-light">واتساب مباشر</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Lightbox Modal -->
    <div id="project-modal"
        style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.95); z-index: 9999; overflow-y: auto;">
        <button onclick="closeProjectModal()"
            style="position: fixed; top: 20px; right: 20px; background: none; border: none; color: white; font-size: 2.5rem; cursor: pointer; z-index: 10000; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">&times;</button>
        <div
            style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; padding: 2rem;">
            <img id="modal-image" src="" alt=""
                style="max-width: 90%; max-height: 70vh; border-radius: 1rem; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
            <div style="text-align: center; margin-top: 2rem; color: white;">
                <h3 id="modal-title" style="font-size: 1.8rem; margin-bottom: 0.5rem;"></h3>
                <p id="modal-location" style="color: rgba(255,255,255,0.7); font-size: 1.1rem;"></p>
            </div>
            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <a id="modal-whatsapp" href="#" target="_blank" class="btn"
                    style="background: #25D366; color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    استفسر عن مشروع مماثل
                </a>
                <a href="tel:0550698111" class="btn"
                    style="background: var(--color-primary); color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg>
                    اتصل الآن
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js?v=1769376863"></script>
    <script>
        // Project Modal Functions
        function openProjectModal(imageSrc, title, location) {
            document.getElementById('modal-image').src = imageSrc;
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-location').textContent = location;
            document.getElementById('modal-whatsapp').href = 'https://wa.me/966501870643?text=' + encodeURIComponent('مرحباً، أود الاستفسار عن مشروع: ' + title);
            document.getElementById('project-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            document.getElementById('project-modal').style.display = 'none';
            document.body.style.overflow = '';
        }

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeProjectModal();
        });

        // Close on background click
        document.getElementById('project-modal').addEventListener('click', function (e) {
            if (e.target === this || e.target.parentElement === this) {
                closeProjectModal();
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            function filterProjects(category) {
                // Update buttons state
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

                // Filter cards
                projectCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    if (category === 'all' || cardCategory === category) {
                        card.style.display = 'block';
                        card.style.opacity = '1';
                    } else {
                        card.style.display = 'none';
                        card.style.opacity = '0';
                    }
                });

                // Update URL hash without scrolling
                if (category !== 'all') {
                    history.replaceState(null, null, '#' + category);
                } else {
                    history.replaceState(null, null, window.location.pathname + window.location.search);
                }
            }

            // Handle initial Hash
            const hash = window.location.hash.replace('#', '');
            if (hash && ['electrical', 'mechanical', 'winding'].includes(hash)) {
                filterProjects(hash);
                const filterSection = document.querySelector('.projects-filter');
                if (filterSection) {
                    setTimeout(() => {
                        filterSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                }
            }

            // Button Click Events
            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    filterProjects(btn.getAttribute('data-filter'));
                });
            });

            // Card Click Events - Open Modal
            projectCards.forEach(card => {
                card.style.cursor = 'pointer';
                card.addEventListener('click', () => {
                    const img = card.querySelector('img');
                    const title = card.querySelector('h4').textContent;
                    const location = card.querySelector('span').textContent;
                    openProjectModal(img.src, title, location);
                });
            });
        });
    </script>
</body>

</html>