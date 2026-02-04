<?php
// Page-specific variables
$page_title = "الرئيسية";
$page_description = "خبراء في لوحات التحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف المحركات الكهربائية. +15 عام خبرة، 500+ مشروع ناجح في السعودية";
$base_path = "";
$active_page = "home";

// Load site configuration
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $site_name_full ?>
    </title>
    <meta name="google-site-verification" content="<?= $google_verification ?>" />
    <meta name="description"
        content="خبراء في لوحات التحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف المحركات الكهربائية. +15 عام خبرة، 500+ مشروع ناجح في السعودية. اتصل الآن 0550698111">
    <meta name="keywords"
        content="لوحات تحكم MDB, مضخات KSB, مضخات Grundfos, لف محركات, أعمال كهربائية الرياض, صيانة مصانع, مقاول كهرباء, أعمال ميكانيكية">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">
    <meta name="geo.position" content="24.7136;46.6753">
    <meta name="ICBM" content="24.7136, 46.6753">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/">
    <meta property="og:title" content="مؤسسة روائع الكريستال | أعمال كهربائية وميكانيكية بالرياض">
    <meta property="og:description"
        content="خبراء في لوحات التحكم MDB، صيانة مضخات KSB وGrundfos، لف المحركات. +15 عام خبرة في السعودية">
    <meta property="og:image" content="https://brilliantserv.com/media/hero-electrical-work.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/">
    <meta property="twitter:title" content="مؤسسة روائع الكريستال | أعمال كهربائية وميكانيكية بالرياض">
    <meta property="twitter:description" content="خبراء في لوحات التحكم MDB، صيانة مضخات، لف المحركات. +15 عام خبرة">
    <meta property="twitter:image" content="https://brilliantserv.com/media/hero-electrical-work.webp">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.webp">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.webp">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <?php include 'includes/head.php'; ?>
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "LocalBusiness",
                "vatID": "300186771400003",
                "taxID": "300186771400003",
                "leiCode": "1010729734",
                "@id": "https://brilliantserv.com/#localbusiness",
                "name": "مؤسسة روائع الكريستال للمقاولات الكهروميكانيكية",
                "alternateName": "Brilliant Crystal Electromechanical",
                "url": "https://brilliantserv.com",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://brilliantserv.com/media/brilliantcrystal-hd.webp",
                    "width": 200,
                    "height": 200
                },
                "image": [
                    "https://brilliantserv.com/media/hero-electrical-work.webp",
                    "https://brilliantserv.com/media/hero-mechanic-pumps.webp",
                    "https://brilliantserv.com/media/hero-motor-winding.webp"
                ],
                "description": "مؤسسة رائدة في الأعمال الكهربائية والميكانيكية، متخصصة في لوحات التحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف المحركات الكهربائية، وصيانة المصانع في السعودية",
                "telephone": ["+966550698111", "+966501870643"],
                "email": "info@brilliantserv.com",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "الرياض",
                    "addressLocality": "الرياض",
                    "addressRegion": "منطقة الرياض",
                    "postalCode": "12345",
                    "addressCountry": {
                        "@type": "Country",
                        "name": "SA"
                    }
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 24.7136,
                    "longitude": 46.6753
                },
                "areaServed": [
                    {"@type": "City", "name": "الرياض"},
                    {"@type": "City", "name": "جدة"},
                    {"@type": "City", "name": "الدمام"},
                    {"@type": "City", "name": "مكة المكرمة"},
                    {"@type": "Country", "name": "المملكة العربية السعودية"}
                ],
                "serviceType": [
                    "أعمال كهربائية",
                    "أعمال ميكانيكية",
                    "لف محركات كهربائية",
                    "صيانة مصانع",
                    "لوحات تحكم MDB",
                    "لوحات PLC",
                    "صيانة مضخات KSB",
                    "صيانة مضخات Grundfos"
                ],
                "priceRange": "$$",
                "currenciesAccepted": "SAR",
                "paymentAccepted": "Cash, Bank Transfer",
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"],
                        "opens": "08:00",
                        "closes": "18:00"
                    }
                ],
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "127",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "founder": {
                    "@type": "Person",
                    "name": "عبد العزيز فهد عز الدين الاسعد"
                },
                "foundingDate": "2010",
                "numberOfEmployees": {
                    "@type": "QuantitativeValue",
                    "minValue": 10,
                    "maxValue": 50
                }
            },
            {
                "@type": "WebSite",
                "@id": "https://brilliantserv.com/#website",
                "url": "https://brilliantserv.com",
                "name": "مؤسسة روائع الكريستال",
                "description": "الموقع الرسمي لمؤسسة روائع الكريستال للمقاولات الكهروميكانيكية",
                "publisher": {"@id": "https://brilliantserv.com/#localbusiness"},
                "inLanguage": "ar-SA",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://brilliantserv.com/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }
            },
            {
                "@type": "WebPage",
                "@id": "https://brilliantserv.com/#webpage",
                "url": "https://brilliantserv.com/",
                "name": "الرئيسية - مؤسسة روائع الكريستال",
                "isPartOf": {"@id": "https://brilliantserv.com/#website"},
                "about": {"@id": "https://brilliantserv.com/#localbusiness"},
                "description": "الصفحة الرئيسية لمؤسسة روائع الكريستال - خبراء الأعمال الكهربائية والميكانيكية في السعودية",
                "inLanguage": "ar-SA",
                "primaryImageOfPage": {
                    "@type": "ImageObject",
                    "url": "https://brilliantserv.com/media/hero-electrical-work.webp"
                },
                "breadcrumb": {"@id": "https://brilliantserv.com/#breadcrumb"}
            },
            {
                "@type": "BreadcrumbList",
                "@id": "https://brilliantserv.com/#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "الرئيسية",
                        "item": "https://brilliantserv.com/"
                    }
                ]
            }
        ]
    }
    </script>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content"
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; text-align: right;">
                <div>
                    <span class="hero-badge">شريكك الهندسي المعتمد</span>
                    <h1
                        style="background: linear-gradient(135deg, var(--color-text) 0%, var(--color-primary-dark) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        روائع الكريستال للأعمال الكهروميكانيكية وصيانة المصانع</h1>
                    <p class="hero-subtitle" style="text-align: right;">نقدم حلولاً هندسية متكاملة في الأعمال
                        الميكانيكية والكهربائية بأعلى معايير الجودة والاحترافية</p>
                    <div class="hero-actions" style="justify-content: flex-start;">
                        <a href="contact.html" class="btn btn-primary">اطلب استشارة مجانية</a>
                        <a href="projects.html" class="btn btn-outline">تصفح أعمالنا</a>
                    </div>
                    <div class="hero-stats" style="justify-content: flex-start; margin-top: 2rem;">
                        <div class="stat">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">عام من الخبرة</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">مشروع ناجح</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">دعم متواصل</span>
                        </div>
                    </div>

                    <!-- Download Company Profile Section (Added) -->
                    <div class="download-profile-hero"
                        style="margin-top: 2rem; background: rgba(255,255,255,0.05); border: 2px solid var(--color-primary); border-radius: 16px; padding: 1.5rem; display: flex; align-items: center; gap: 1rem; text-align: right;">
                        <div style="font-size: 2.5rem;">📄</div>
                        <div style="flex: 1;">
                            <h3 style="color: var(--color-primary); font-size: 1.1rem; margin-bottom: 0.25rem;">ملف
                                تعريف الشركة</h3>
                            <p style="font-size: 0.9rem; color: var(--color-text-muted);">تحميل البروفايل الكامل (PDF -
                                115 MB)</p>
                        </div>
                        <a href="downloads/Brilliantcrystal%20Profile.pdf" class="btn btn-primary" download
                            style="padding: 0.8rem 1.5rem; font-size: 0.9rem;">
                            ⬇️ تحميل
                        </a>
                    </div>
                </div>
                <div style="position: relative;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div style="grid-row: 1 / 3;">
                            <img src="../../media/hero-electrical-work.webp" alt="أعمال كهربائية"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 1rem; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
                        </div>
                        <div>
                            <img src="../../media/hero-mechanic-pumps.webp" alt="أعمال ميكانيكية"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                        </div>
                        <div>
                            <img src="../../media/hero-motor-winding.webp" alt="لف مواتير"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <span>اكتشف المزيد</span>
            <div class="scroll-indicator"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">خدماتنا المتميزة</span>
                <h2>حلول متكاملة لاحتياجاتك</h2>
                <p>نغطي جميع جوانب الصيانه والتنفيذ الهندسي بدقة واحترافية</p>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <article class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                    </div>
                    <h3>لوحات تحكم MDB</h3>
                    <p>تصنيع وتوريد لوحات التحكم الكهربائية MDB و PLC بأعلى معايير الجودة الصناعية.</p>
                    <a href="services/mdb-control-panels" class="service-link">تفاصيل الخدمة <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </article>

                <!-- Service 2 (Featured) -->
                <article class="service-card featured">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                        </svg>
                    </div>
                    <h3>مضخات KSB و جراندفوس</h3>
                    <p>صيانة وتركيب مضخات المياه والحريق والصرف الصحي من كبرى الماركات العالمية.</p>
                    <a href="services/ksb-grundfos-pumps" class="service-link">تفاصيل الخدمة <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </article>

                <!-- Service 3 -->
                <article class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg>
                    </div>
                    <h3>لوحات تحكم التكييف</h3>
                    <p>تصميم وتجميع لوحات التحكم الكهربائية لأنظمة التكييف المركزي والمضخات الصناعية.</p>
                    <a href="services/hvac-control-panels" class="service-link">تفاصيل الخدمة <svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="16" height="16">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></a>
                </article>
            </div>
        </div>
    </section>

    <!-- About Preview -->
    <section class="about-preview">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <span class="section-badge">لماذا تختارنا</span>
                    <h2>نجمع بين الخبرة والجودة</h2>
                    <p>في روائع الكريستال، لا نقدم مجرد خدمات، بل نقدم حلولاً مستدامة وموثوقة. فريقنا الهندسي يمتلك خبرة
                        تتجاوز 15 عاماً في السوق السعودي، مما جعلنا الخيار الأول لكبرى الشركات.</p>
                    <ul class="about-features">
                        <li>تنفيذ دقيق حسب المواصفات القياسية</li>
                        <li>استخدام قطع غيار أصلية ومواد عالية الجودة</li>
                        <li>ضمان شامل على جميع الأعمال المنفذة</li>
                        <li>سرعة في الاستجابة والتنفيذ</li>
                    </ul>
                    <a href="about.html" class="btn btn-primary">تعرف علينا أكثر</a>
                </div>
                <div class="about-image">
                    <div class="image-wrapper">
                        <img src="../../media/about-team-work.webp" alt="فريق العمل" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="projects-preview">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">معرض الأعمال</span>
                <h2>مشاريع نفخر بها</h2>
                <p>نماذج من أعمالنا التي تعكس التزامنا بالجودة والاتقان</p>
            </div>
            <div class="projects-grid" style="grid-template-columns: repeat(4, 1fr);">
                <!-- صور جديدة - فبراير 2026 -->
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/وحدة-مضخات-معزز-ضغط-1.jpeg', 'وحدة مضخات معزز ضغط', 'تجميع وحدات Booster لرفع ضغط المياه - تصنيع محلي بمكونات أوروبية')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/وحدة-مضخات-معزز-ضغط-1.jpeg" alt="وحدة مضخات معزز ضغط" loading="lazy">
                    <div class="project-overlay">
                        <h4>وحدة مضخات معزز ضغط</h4>
                        <span>تجميع وحدات Booster</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/وحدة-مضخات-معزز-ضغط-2.jpeg', 'وحدة ضخ معززة جاهزة', 'وحدة ضخ جاهزة للتسليم والتشغيل مع لوحة تحكم ذكية')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/وحدة-مضخات-معزز-ضغط-2.jpeg" alt="وحدة ضخ معززة جاهزة" loading="lazy">
                    <div class="project-overlay">
                        <h4>وحدة ضخ معززة جاهزة</h4>
                        <span>جاهزة للتسليم</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/ورشة-تجميع-المضخات.jpeg', 'ورشة تجميع المضخات', 'ورشتنا المتخصصة في تجميع وصيانة المضخات بأحدث الأدوات')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/ورشة-تجميع-المضخات.jpeg" alt="ورشة تجميع المضخات" loading="lazy">
                    <div class="project-overlay">
                        <h4>ورشة تجميع المضخات</h4>
                        <span>ورشة الصيانة</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/مبنى-ورشة-الصيانة.jpeg', 'مبنى ورشة الصيانة', 'ورشة روائع الكريستال - الرياض - مجهزة بالكامل لخدمة المضخات والمحركات')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/مبنى-ورشة-الصيانة.jpeg" alt="مبنى ورشة الصيانة" loading="lazy">
                    <div class="project-overlay">
                        <h4>مبنى ورشة الصيانة</h4>
                        <span>مقر الورشة - الرياض</span>
                    </div>
                </div>
                <!-- الصور الأصلية -->
                <div class="project-card"
                    onclick="openProjectModal('media/electrical/p17_img4.webp', 'لوحات توزيع كهربائية', 'تصنيع وتركيب لوحات التوزيع الكهربائية الرئيسية والفرعية بمكونات شنايدر وABB الأصلية')"
                    style="cursor: pointer;">
                    <img src="media/electrical/p17_img4.webp" alt="أعمال كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات توزيع كهربائية</h4>
                        <span>أعمال كهربائية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/p9_img4.webp', 'تركيب مضخات صناعية', 'توريد وتركيب مضخات KSB وGrundfos للمشاريع الصناعية والتجارية')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/p9_img4.webp" alt="أعمال ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب مضخات صناعية</h4>
                        <span>أعمال ميكانيكية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/electrical/p21_img4.webp', 'تمديدات كهربائية متكاملة', 'تنفيذ أعمال التمديدات الكهربائية للمباني والمصانع وفق أعلى المعايير')"
                    style="cursor: pointer;">
                    <img src="media/electrical/p21_img4.webp" alt="أعمال كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تمديدات كهربائية متكاملة</h4>
                        <span>أعمال كهربائية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/p10_img4.webp', 'صيانة أنظمة الضخ', 'صيانة شاملة لأنظمة الضخ والمحطات مع قطع غيار أصلية وضمان')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/p10_img4.webp" alt="أعمال ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>صيانة أنظمة الضخ</h4>
                        <span>أعمال ميكانيكية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/electrical/p18_img4.webp', 'لوحات تحكم PLC', 'برمجة وتصنيع لوحات PLC للتحكم الآلي في المصانع والمحطات')"
                    style="cursor: pointer;">
                    <img src="media/electrical/p18_img4.webp" alt="أعمال كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم PLC</h4>
                        <span>أعمال كهربائية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/p11_img4.webp', 'تركيب خطوط أنابيب', 'تركيب ولحام خطوط الأنابيب للمياه والتكييف والصرف')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/p11_img4.webp" alt="أعمال ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>تركيب خطوط أنابيب</h4>
                        <span>أعمال ميكانيكية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/electrical/p23_img4.webp', 'أنظمة التحكم الآلي', 'تصميم وتنفيذ أنظمة التحكم الآلي للمصانع بأحدث التقنيات')"
                    style="cursor: pointer;">
                    <img src="media/electrical/p23_img4.webp" alt="أعمال كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>أنظمة التحكم الآلي</h4>
                        <span>أعمال كهربائية</span>
                    </div>
                </div>
                <div class="project-card"
                    onclick="openProjectModal('media/mechanical/p12_img4.webp', 'محطات ضخ مياه', 'تصميم وتنفيذ محطات ضخ المياه للمباني والمشاريع الكبرى')"
                    style="cursor: pointer;">
                    <img src="media/mechanical/p12_img4.webp" alt="أعمال ميكانيكية" loading="lazy">
                    <div class="project-overlay">
                        <h4>محطات ضخ مياه</h4>
                        <span>أعمال ميكانيكية</span>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="projects.php" class="btn btn-outline">مشاهدة كل المشاريع</a>
            </div>
        </div>
    </section>

    <!-- References / Success Partners Section -->
    <section class="references-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">مراجعنا</span>
                <h2>شركاء النجاح</h2>
                <p>نفخر بالعمل مع أبرز الجهات والمؤسسات في المملكة</p>
            </div>
            <div class="swiper references-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/12.png" alt="مرجع 1" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/13.png" alt="مرجع 2" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/14.png" alt="مرجع 3" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/15.png" alt="مرجع 4" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/16.png" alt="مرجع 5" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/17.png" alt="مرجع 6" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/18.png" alt="مرجع 7" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/19.png" alt="مرجع 8" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/20.png" alt="مرجع 9" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/21.png" alt="مرجع 10" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/22.png" alt="مرجع 11" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/23.png" alt="مرجع 12" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/24.png" alt="مرجع 13" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/25.png" alt="مرجع 14" loading="lazy"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-logo"><img src="media/references/26.png" alt="مرجع 15" loading="lazy"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners / Who Trust Us Section -->
    <section class="clients-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">عملاؤنا</span>
                <h2>شركاء نفخر بثقتهم</h2>
            </div>
        </div>
        <div class="swiper clients-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/1.png" alt="عميل 1" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/2.png" alt="عميل 2" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/3.png" alt="عميل 3" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/4.png" alt="عميل 4" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/5.png" alt="عميل 5" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/6.png" alt="عميل 6" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/7.png" alt="عميل 7" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/8.png" alt="عميل 8" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/9.png" alt="عميل 9" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/10.png" alt="عميل 10" loading="lazy"></div>
                </div>
                <div class="swiper-slide">
                    <div class="client-logo"><img src="media/clients/11.png" alt="عميل 11" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles (Dynamic Section) -->
    <section class="latest-blog" style="padding: 4rem 0; background: var(--color-bg);">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">المدونة</span>
                <h2>أحدث المقالات</h2>
                <p>نصائح وإرشادات للحفاظ على منزلك ومنشأتك</p>
            </div>
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <?php
                // Load blog index and get latest 3 articles
                $blogIndexPath = __DIR__ . '/media/blog_index.json';
                $latestArticles = [];

                if (file_exists($blogIndexPath)) {
                    $blogData = json_decode(file_get_contents($blogIndexPath), true);
                    if ($blogData) {
                        // Sort by date descending (newest first)
                        usort($blogData, function ($a, $b) {
                            $dateA = isset($a['date']) ? strtotime(str_replace(['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'], ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], $a['date'])) : 0;
                            $dateB = isset($b['date']) ? strtotime(str_replace(['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'], ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], $b['date'])) : 0;
                            return $dateB - $dateA;
                        });
                        $latestArticles = array_slice($blogData, 0, 3);
                    }
                }

                foreach ($latestArticles as $article):
                    $title = htmlspecialchars($article['title'] ?? 'مقالة');
                    $desc = htmlspecialchars($article['desc'] ?? '');
                    $link = $article['link'] ?? '#';
                    $image = 'media/blog/' . ($article['image'] ?? 'default-article.webp');
                    $date = $article['date'] ?? '';
                    ?>
                    <!-- Blog Card -->
                    <article class="service-card" style="text-align: right; padding: 0; overflow: hidden;">
                        <img src="<?= $image ?>" alt="<?= $title ?>" style="width: 100%; height: 200px; object-fit: cover;"
                            loading="lazy">
                        <div style="padding: 1.5rem;">
                            <span
                                style="font-size: 0.9rem; color: var(--color-primary); display: block; margin-bottom: 0.5rem;"><?= $date ?></span>
                            <h3 style="margin-bottom: 1rem; font-size: 1.1rem; line-height: 1.6;"><?= $title ?></h3>
                            <a href="<?= $link ?>" class="service-link">اقرأ المزيد <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16"
                                    height="16">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <!-- View All Articles Button -->
            <div class="section-footer" style="margin-top: 2.5rem;">
                <a href="blog.php" class="btn btn-outline">مشاهدة كل المقالات</a>
            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="location-map" style="padding: 4rem 0; background: var(--color-bg-alt);">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
                <span class="section-badge">موقعنا</span>
                <h2>زورونا في ورشتنا</h2>
                <p>الرياض - حي المصفاة، طريق الخرج</p>
            </div>
            <div class="map-container"
                style="border-radius: 1rem; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                <iframe src="https://maps.google.com/maps?q=24.508528,46.884278&hl=ar&z=17&output=embed" width="100%"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div style="display: flex; justify-content: center; gap: 1.5rem; margin-top: 2rem; flex-wrap: wrap;">
                <a href="https://www.google.com/maps/place/24%C2%B030'30.7%22N+46%C2%B053'03.4%22E/@24.508528,46.884278,17z"
                    target="_blank" class="btn btn-primary"
                    style="display: inline-flex; align-items: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    احصل على الاتجاهات
                </a>
                <a href="tel:0550698111" class="btn btn-outline"
                    style="display: inline-flex; align-items: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72">
                        </path>
                    </svg>
                    اتصل بنا
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>جاهز لبدء مشروعك القادم؟</h2>
                <p>دعنا نساعدك في تحويل أفكارك إلى واقع بأفضل الحلول الهندسية</p>
                <div class="cta-actions">
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/966501870643?text=مرحباً، أود الاستفسار عن خدماتكم" class="btn btn-light"
                        style="background: #25D366; border-color: #25D366; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        واتساب 0501870643
                    </a>
                    <!-- Phone Call Button -->
                    <a href="tel:0550698111" class="btn btn-outline-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        اتصال 0550698111
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.min.js"></script>
    <script>
        const swiperOptions = {
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 5000,
            slidesPerView: 'auto',
            spaceBetween: 32,
            allowTouchMove: true, // Enable touch swipe on mobile
            freeMode: {
                enabled: true,
                sticky: false,
            },
            grabCursor: true,
            touchRatio: 1,
            touchReleaseOnEdges: true,
            // Responsive breakpoints
            breakpoints: {
                // On mobile, slower speed for better touch experience
                0: {
                    speed: 3000,
                    spaceBetween: 16,
                },
                768: {
                    speed: 5000,
                    spaceBetween: 32,
                },
            },
        };
        new Swiper('.references-swiper', swiperOptions);
        new Swiper('.clients-swiper', swiperOptions);

        // Project Modal / Lightbox
        function openProjectModal(imageSrc, title, description) {
            // Create modal if it doesn't exist
            let modal = document.getElementById('project-modal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'project-modal';
                modal.style.cssText = 'display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.92); z-index: 9999; padding: 20px; overflow-y: auto;';
                modal.innerHTML = `
                    <button onclick="closeProjectModal()" style="position: fixed; top: 20px; right: 20px; background: rgba(255,255,255,0.1); border: none; color: white; font-size: 2rem; cursor: pointer; width: 50px; height: 50px; border-radius: 50%; z-index: 10000; transition: background 0.3s;">&times;</button>
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100%; padding: 40px 20px;">
                        <img id="modal-image" src="" alt="" style="max-width: 90%; max-height: 70vh; border-radius: 12px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
                        <h3 id="modal-title" style="color: white; margin-top: 1.5rem; font-size: 1.5rem; text-align: center;"></h3>
                        <p id="modal-description" style="color: rgba(255,255,255,0.8); margin-top: 0.75rem; max-width: 600px; text-align: center; line-height: 1.7;"></p>
                        <a id="modal-cta" href="https://wa.me/966501870643?text=مرحباً، أود الاستفسار عن هذا المشروع" target="_blank" style="margin-top: 1.5rem; background: #25D366; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-weight: 600;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            استفسر عن مشروع مشابه
                        </a>
                    </div>
                `;
                document.body.appendChild(modal);
            }

            document.getElementById('modal-image').src = imageSrc;
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-description').textContent = description;
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            const modal = document.getElementById('project-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }
        }

        // Close on Escape key  
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeProjectModal();
        });

        // Close on backdrop click
        document.addEventListener('click', function (e) {
            if (e.target.id === 'project-modal') closeProjectModal();
        });
    </script>
</body>

</html>