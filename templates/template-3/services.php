<?php
// Page-specific variables
$page_title = "خدماتنا";
$base_path = "";
$active_page = "services";

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
    <title>خدماتنا | أعمال كهرباء وميكانيكا احترافية - روائع الكريستال</title>
    <meta name="title" content="خدماتنا | أعمال كهرباء وميكانيكا احترافية - روائع الكريستال">
    <meta name="description"
        content="لوحات تحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف محركات كهربائية، صيانة مصانع. خدمات متكاملة بضمان شامل في السعودية">
    <meta name="keywords" content="خدمات كهربائية, خدمات ميكانيكية, لوحات MDB, مضخات KSB, لف محركات">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/services.html">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/services.html">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/services.html">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/services.html">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/services.html">
    <meta property="og:title" content="خدماتنا | أعمال كهرباء وميكانيكا احترافية - روائع الكريستال">
    <meta property="og:description"
        content="لوحات تحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف محركات كهربائية، صيانة مصانع. خدمات متكاملة بضمان شامل في السعودية">
    <meta property="og:image" content="https://brilliantserv.com/media/hero-electrical-work.webp">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/services.html">
    <meta property="twitter:title" content="خدماتنا | أعمال كهرباء وميكانيكا احترافية - روائع الكريستال">
    <meta property="twitter:description"
        content="لوحات تحكم MDB وPLC، صيانة مضخات KSB وGrundfos، لف محركات كهربائية، صيانة مصانع. خدمات متكاملة بضمان شامل في السعودية">
    <meta property="twitter:image" content="https://brilliantserv.com/media/hero-electrical-work.webp">

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
                        "name": "خدماتنا",
                        "item": "https://brilliantserv.com/services.html"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "ما هي الخدمات التي تقدمونها؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نقدم خدمات متكاملة تشمل تصنيع لوحات التحكم MDB و PLC، صيانة مضخات المياه والحريق (KSB، Grundfos)، لف المحركات الكهربائية، وصيانة المصانع."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "هل تقدمون عقود صيانة دورية؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نعم، نوفر عقود صيانة سنوية وشهرية للمصانع والمباني التجارية لضمان استمرارية العمل وكفاءة المعدات."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "هل تتوفر لديكم قطع غيار أصلية؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نعم، نستخدم قطع غيار أصلية ومعتمدة لجميع عمليات الصيانة لضمان الجودة والعمر الافتراضي الطويل."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "ما هي مناطق تغطية خدمتكم؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "مركزنا الرئيسي في الرياض، ونقدم خدماتنا في جميع أنحاء المملكة العربية السعودية، مع فرق متنقلة للوصول إلى المواقع البعيدة."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">خدماتنا</span>
                <h1>الحلول الهندسية المتقدمة</h1>
                <p>نقدم مجموعة واسعة من الخدمات الفنية المتخصصة لتلبية احتياجات المصانع والمنشآت</p>
            </div>
        </div>
    </section>

    <section class="services-intro" style="padding: 4rem 0 2rem;">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">خدمات متكاملة</span>
                <h2>خبرتنا في خدمتكم</h2>
                <p>نقدم حلولاً هندسية متخصصة تغطي كافة الاحتياجات الصناعية والإنشائية</p>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="projects-page">
        <div class="container">
            <div class="projects-full-grid" id="services-grid">
                <a href="/services/mdb-control-panels" class="project-card">
                    <img src="media/services/تصنيع-وتوريد-لوحات-MDB.webp?v=1769376863" alt="لوحات تحكم MDB"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم MDB</h4>
                        <span>تصنيع وتوريد | مصنع صناعي</span>
                    </div>
                </a>
                <a href="/services/ksb-pumps" class="project-card">
                    <img src="media/services/صيانة-مضخات-KSB-_1_.webp?v=1769376863" alt="مضخات صناعية KSB"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>مضخات صناعية KSB</h4>
                        <span>تركيب وصيانة | محطة معالجة مياه</span>
                    </div>
                </a>
                <a href="/services/electrical-works" class="project-card">
                    <img src="media/services/أفضل-مؤسسة-تنفيذ-أعمال-كهرباء-في-المملكة.webp?v=1769376863"
                        alt="أعمال كهربائية" loading="lazy">
                    <div class="project-overlay">
                        <h4>أعمال كهربائية</h4>
                        <span>تنفيذ أعمال كهرباء | مشاريع المملكة</span>
                    </div>
                </a>
                <a href="/services/plc-control-panels" class="project-card">
                    <img src="media/services/تجميع-لوحات-التحكم.webp?v=1769376863" alt="لوحات تحكم PLC" loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم PLC</h4>
                        <span>تجميع وبرمجة | مصانع أغذية</span>
                    </div>
                </a>

                <a href="/services/motor-winding" class="project-card">
                    <img src="media/services/لف-المحركات-الكهربائية.webp?v=1769376863" alt="لف المحركات الكهربائية"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>لف المحركات الكهربائية</h4>
                        <span>إعادة لف وصيانة | ورشة متخصصة</span>
                    </div>
                </a>
                <a href="/services/fire-pumps" class="project-card">
                    <img src="media/services/صيانة-مضخات-الحريق.webp?v=1769376863" alt="مضخات حريق UL/FM"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>مضخات حريق UL/FM</h4>
                        <span>صيانة وتركيب | أبراج إدارية</span>
                    </div>
                </a>

                <a href="/services/grundfos-pumps" class="project-card">
                    <img src="media/services/صيانة-مضخات-جراندفوس.webp?v=1769376863" alt="مضخات جراندفوس"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>مضخات جراندفوس</h4>
                        <span>وكيل صيانة معتمد | مركز خدمة</span>
                    </div>
                </a>

                <a href="/services/hvac-control-panels" class="project-card">
                    <img src="media/services/تجميع-لوحات-التحكم.webp?v=1769376863" alt="لوحات تحكم التكييف"
                        loading="lazy">
                    <div class="project-overlay">
                        <h4>لوحات تحكم التكييف</h4>
                        <span>تصميم وتجميع HVAC</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 4rem 0; background-color: var(--color-bg-light);">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">الأسئلة الشائعة</span>
                <h2>أسئلة يتكرر طرحها</h2>
                <p>إجابات على استفساراتكم حول خدماتنا وسياسات العمل</p>
            </div>
            <div class="faq-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">ما هي الخدمات التي تقدمونها؟</h3>
                    <p style="color: var(--color-text-muted);">نقدم خدمات متكاملة تشمل تصنيع لوحات التحكم MDB و PLC،
                        صيانة مضخات المياه والحريق (KSB، Grundfos)، لف المحركات الكهربائية، وصيانة المصانع.</p>
                </div>
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">هل تقدمون عقود صيانة دورية؟</h3>
                    <p style="color: var(--color-text-muted);">نعم، نوفر عقود صيانة سنوية وشهرية للمصانع والمباني
                        التجارية لضمان استمرارية العمل وكفاءة المعدات.</p>
                </div>
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">هل تتوفر لديكم قطع غيار أصلية؟</h3>
                    <p style="color: var(--color-text-muted);">نعم، نستخدم قطع غيار أصلية ومعتمدة لجميع عمليات الصيانة
                        لضمان الجودة والعمر الافتراضي الطويل.</p>
                </div>
                <div class="faq-item"
                    style="background: var(--color-surface); padding: 2rem; border-radius: 12px; border: 1px solid var(--color-border);">
                    <h3 style="margin-bottom: 1rem; color: var(--color-primary);">ما هي مناطق تغطية خدمتكم؟</h3>
                    <p style="color: var(--color-text-muted);">مركزنا الرئيسي في الرياض، ونقدم خدماتنا في جميع أنحاء
                        المملكة العربية السعودية، مع فرق متنقلة للوصول إلى المواقع البعيدة.</p>
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
</body>

</html>