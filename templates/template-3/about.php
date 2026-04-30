<?php
// Page-specific variables
$page_title = "من نحن";
$base_path = "";
$active_page = "about";

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
    <title>من نحن | روائع الكريستال - شريكك الهندسي المعتمد منذ 2010</title>
    <meta name="title" content="من نحن | روائع الكريستال - شريكك الهندسي المعتمد منذ 2010">
    <meta name="description"
        content="تعرف على مؤسسة روائع الكريستال، خبرة 15+ عام في الأعمال الكهربائية والميكانيكية. شهادات معتمدة، 500+ مشروع ناجح. اتصل 0550698111">
    <meta name="keywords" content="مؤسسة روائع الكريستال, من نحن, شركة مقاولات كهروميكانيكية, الرياض">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/about.html">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/about.html">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/about.html">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/about.html">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/about.html">
    <meta property="og:title" content="من نحن | روائع الكريستال - شريكك الهندسي المعتمد منذ 2010">
    <meta property="og:description"
        content="تعرف على مؤسسة روائع الكريستال، خبرة 15+ عام في الأعمال الكهربائية والميكانيكية. شهادات معتمدة، 500+ مشروع ناجح. اتصل 0550698111">
    <meta property="og:image" content="https://brilliantserv.com/media/about-team-work.webp">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/about.html">
    <meta property="twitter:title" content="من نحن | روائع الكريستال - شريكك الهندسي المعتمد منذ 2010">
    <meta property="twitter:description"
        content="تعرف على مؤسسة روائع الكريستال، خبرة 15+ عام في الأعمال الكهربائية والميكانيكية. شهادات معتمدة، 500+ مشروع ناجح. اتصل 0550698111">
    <meta property="twitter:image" content="https://brilliantserv.com/media/about-team-work.webp">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.webp">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.webp">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "الرئيسية",
                        "item": "https://brilliantserv.com/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "من نحن",
                        "item": "https://brilliantserv.com/about.html"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "كم سنة خبرة لديكم في السوق السعودي؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "تمتلك مؤسسة روائع الكريستال خبرة تمتد لأكثر من 15 عاماً في مجال المقاولات الكهروميكانيكية في المملكة العربية السعودية."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "هل المؤسسة معتمدة رسمياً؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نعم، مؤسستنا نظامية ومعتمدة، ولدينا كافة التراخيص اللازمة بما في ذلك السجل التجاري وترخيص الدفاع المدني وشهادات الجودة."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "كيف يمكنني طلب عرض سعر؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "يمكنك التواصل معنا مباشرة عبر الهاتف 0550698111 أو الواتساب، أو زيارة صفحة 'تواصل معنا' لتعبئة النموذج وسنقوم بالرد عليك فوراً."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    <?php include 'includes/head.php'; ?>
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .faq-section .faq-item { cursor: pointer; transition: all 0.3s ease; overflow: hidden; }
        .faq-section .faq-item h3 { padding: 1.5rem; margin: 0; display: flex; align-items: center; justify-content: space-between; font-size: 1.1rem; user-select: none; }
        .faq-section .faq-item h3::after { content: ''; width: 12px; height: 12px; border-right: 2px solid var(--color-primary, #1e3a5f); border-bottom: 2px solid var(--color-primary, #1e3a5f); transform: rotate(45deg); transition: transform 0.3s ease; margin-right: auto; margin-left: 1rem; }
        .faq-section .faq-item.active { box-shadow: 0 15px 30px rgba(0,0,0,0.08); border-color: #2563eb; }
        .faq-section .faq-item.active h3 { background: #f8fafc; color: #2563eb; }
        .faq-section .faq-item.active h3::after { transform: rotate(225deg); border-color: #2563eb; }
        .faq-section .faq-item p { padding: 0 1.5rem 1.5rem; margin: 0; display: none; color: var(--color-text-muted, #4b5563); line-height: 1.7; border-top: 1px solid transparent; }
        .faq-section .faq-item.active p { display: block; animation: faqSlideDown 0.3s ease-out; border-top-color: rgba(0,0,0,0.05); }
        @keyframes faqSlideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">من نحن</span>
                <h1>مؤسسة روائع الكريستال</h1>
                <p>خبرة تمتد لأكثر من 15 عاماً في الأعمال الميكانيكية والكهربائية</p>
            </div>
        </div>
    </section>

    <!-- About Main -->
    <section class="about-main">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <span class="section-badge">قصتنا</span>
                    <h2>رحلة التميز والإبداع</h2>
                    <p>تأسست مؤسسة روائع الكريستال لتكون إحدى المؤسسات الرائدة في مجال الأعمال الكهربائية والميكانيكية
                        في المملكة العربية السعودية. منذ انطلاقتنا، التزمنا بتقديم أعلى معايير الجودة والاحترافية في كل
                        مشروع نتولاه.</p>
                    <p>نفخر بفريقنا من المهندسين والفنيين المتخصصين الذين يمتلكون خبرة واسعة في مختلف جوانب الأعمال
                        الهندسية، من تصميم وتنفيذ الأنظمة الكهربائية إلى صيانة المضخات والمحركات.</p>
                </div>
                <div class="about-image">
                    <div class="image-wrapper">
                        <img src="../../media/about-team-work.webp" alt="فريق العمل" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="vision-mission">
        <div class="container">
            <div class="vm-grid">
                <div class="vm-card">
                    <div class="vm-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="12" r="6" />
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>
                    <h3>رؤيتنا</h3>
                    <p>أن نكون الخيار الأول والموثوق في مجال الأعمال الكهربائية والميكانيكية في المملكة العربية
                        السعودية، مع الالتزام بأعلى معايير الجودة والابتكار.</p>
                </div>
                <div class="vm-card">
                    <div class="vm-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <h3>رسالتنا</h3>
                    <p>تقديم حلول هندسية متكاملة ومبتكرة تلبي احتياجات عملائنا، مع التركيز على الكفاءة والموثوقية
                        والاستدامة في جميع خدماتنا.</p>
                </div>
                <div class="vm-card">
                    <div class="vm-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                    </div>
                    <h3>قيمنا</h3>
                    <p>الجودة، الأمانة، الالتزام، الابتكار، والتميز في خدمة العملاء. نؤمن بأن نجاحنا يُقاس بنجاح عملائنا
                        ورضاهم.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section stats-enhanced">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item stat-card-enhanced">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">سنة خبرة</span>
                </div>
                <div class="stat-item stat-card-enhanced">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">مشروع منجز</span>
                </div>
                <div class="stat-item stat-card-enhanced">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">فني متخصص</span>
                </div>
                <div class="stat-item stat-card-enhanced">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">رضا العملاء</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">لماذا نحن</span>
                <h2>ما يميزنا عن غيرنا</h2>
                <p>نقدم خدمات متميزة تجمع بين الخبرة والتقنية الحديثة</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h4>فريق متخصص</h4>
                    <p>مهندسون وفنيون ذوو خبرة عالية في مختلف التخصصات الهندسية</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <h4>التزام بالمواعيد</h4>
                    <p>نحترم وقت عملائنا ونلتزم بتسليم المشاريع في الوقت المحدد</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h4>معايير السلامة</h4>
                    <p>نطبق أعلى معايير السلامة والأمان في جميع أعمالنا</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72" />
                        </svg>
                    </div>
                    <h4>دعم فني متواصل</h4>
                    <p>خدمة عملاء ودعم فني على مدار الساعة لمساعدتكم</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33" />
                        </svg>
                    </div>
                    <h4>تقنيات حديثة</h4>
                    <p>نستخدم أحدث المعدات والتقنيات في جميع خدماتنا</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <line x1="12" y1="1" x2="12" y2="23" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <h4>أسعار تنافسية</h4>
                    <p>نقدم أفضل الأسعار مع الحفاظ على أعلى مستويات الجودة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">شهاداتنا</span>
                <h2>اعتمادات وشهادات الجودة</h2>
                <p>نعتز بثقة عملائنا وشركائنا</p>
            </div>
            <div class="certs-grid certs-grid-expanded">
                <!-- الشهادات الرسمية -->
                <div class="cert-card">
                    <img src="media/certificates/شهادة السجل التجاري.png" alt="شهادة السجل التجاري" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/رخصة نشاط تجاري.png" alt="رخصة نشاط تجاري" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/ترخيص الدفاع المدني.png" alt="ترخيص الدفاع المدني" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادة تسجيل فرع مؤسسة فردية.png" alt="شهادة تسجيل فرع مؤسسة فردية"
                        loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/قائمة الفروع.png" alt="قائمة الفروع" loading="lazy">
                </div>

                <!-- شهادات التسليم -->
                <div class="cert-card">
                    <img src="media/certificates/شهادة تسليم.png" alt="شهادة تسليم" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادة تسليم 2.png" alt="شهادة تسليم مشروع" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادة تسليم مخططات سلامة.png" alt="شهادة تسليم مخططات سلامة"
                        loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادة تسليم مشروع برمجة كريسترون الخاصة بالقصر.png"
                        alt="شهادة تسليم مشروع برمجة كريسترون" loading="lazy">
                </div>

                <!-- شهادات وخطابات اعتماد -->
                <div class="cert-card">
                    <img src="media/certificates/شهادة.png" alt="شهادة إنجاز" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادة 2.png" alt="شهادة تقدير" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/شهادات.png" alt="شهادات متعددة" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/خطاب اعتماد وتوصية.png" alt="خطاب اعتماد وتوصية" loading="lazy">
                </div>

                <!-- أوامر الشراء والتفاصيل -->
                <div class="cert-card">
                    <img src="media/certificates/امر شراء.png" alt="أمر شراء" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/تفاصيل تسجيل.png" alt="تفاصيل تسجيل" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/DASH.png" alt="لوحة معلومات DASH" loading="lazy">
                </div>

                <!-- عملاء وشركاء -->
                <div class="cert-card">
                    <img src="media/certificates/رايات التقنية.png" alt="شركة رايات التقنية" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/زهرة الصحراء.png" alt="شركة زهرة الصحراء" loading="lazy">
                </div>
                <div class="cert-card">
                    <img src="media/certificates/مركز التميز للتوحد.png" alt="مركز التميز للتوحد" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- References / Who Trust Us -->
    <section class="references-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">مراجعنا</span>
                <h2>شركاء النجاح</h2>
                <p>نفخر بالعمل مع أبرز الجهات والمؤسسات في المملكة</p>
            </div>
            <div class="references-grid">
                <div class="reference-card">
                    <img src="media/references/12.png" alt="مرجع 1" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/13.png" alt="مرجع 2" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/14.png" alt="مرجع 3" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/15.png" alt="مرجع 4" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/16.png" alt="مرجع 5" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/17.png" alt="مرجع 6" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/18.png" alt="مرجع 7" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/19.png" alt="مرجع 8" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/20.png" alt="مرجع 9" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/21.png" alt="مرجع 10" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/22.png" alt="مرجع 11" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/23.png" alt="مرجع 12" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/24.png" alt="مرجع 13" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/25.png" alt="مرجع 14" loading="lazy">
                </div>
                <div class="reference-card">
                    <img src="media/references/26.png" alt="مرجع 15" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logos Swiper -->
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

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 4rem 0; background-color: var(--color-bg-light);">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">الأسئلة الشائعة</span>
                <h2>أسئلة حول المؤسسة</h2>
                <p>تعرف أكثر على روائع الكريستال</p>
            </div>
            <div class="faq-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">كم سنة خبرة لديكم؟</h3>
                    <p style="color: var(--color-text-muted);">تمتلك مؤسسة روائع الكريستال خبرة تمتد لأكثر من 15 عاماً
                        في مجال المقاولات الكهروميكانيكية في المملكة العربية السعودية.</p>
                </div>
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">هل المؤسسة معتمدة رسمياً؟</h3>
                    <p style="color: var(--color-text-muted);">نعم، مؤسستنا نظامية ومعتمدة، ولدينا كافة التراخيص اللازمة
                        بما في ذلك السجل التجاري وترخيص الدفاع المدني وشهادات الجودة.</p>
                </div>
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">كيف يمكنني طلب عرض سعر؟</h3>
                    <p style="color: var(--color-text-muted);">يمكنك التواصل معنا مباشرة عبر الهاتف 0550698111 أو
                        الواتساب، أو زيارة صفحة 'تواصل معنا' لتعبئة النموذج وسنقوم بالرد عليك فوراً.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>هل تحتاج استشارة هندسية؟</h2>
                <p>فريقنا من الخبراء جاهز لمساعدتك في جميع احتياجاتك الهندسية</p>
                <div class="cta-actions">
                    <a href="tel:0550698111" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="20" height="20">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72" />
                        </svg>
                        0550698111
                    </a>
                    <a href="https://wa.me/966550698111?text=مرحباً، أود الاستفسار عن خدماتكم" target="_blank"
                        class="btn btn-outline-light">واتساب مباشر</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.min.js"></script>
    <script>
        // Initialize Swiper with touch-enabled configuration
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
        new Swiper('.clients-swiper', swiperOptions);
    </script>
    <script>
        document.querySelectorAll('.faq-section .faq-item').forEach(item => {
            const header = item.querySelector('h3');
            if (header) {
                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    document.querySelectorAll('.faq-section .faq-item').forEach(other => {
                        if (other !== item) other.classList.remove('active');
                    });
                    item.classList.toggle('active', !isActive);
                });
            }
        });
    </script>
</body>

</html>