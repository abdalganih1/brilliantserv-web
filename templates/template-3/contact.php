<?php
// Page-specific variables
$page_title = "تواصل معنا";
$base_path = "";
$active_page = "contact";

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
    <title>تواصل معنا | اطلب استشارة مجانية - روائع الكريستال</title>
    <meta name="title" content="تواصل معنا | اطلب استشارة مجانية - روائع الكريستال">
    <meta name="description"
        content="اتصل الآن 0550698111 أو راسلنا. مؤسسة روائع الكريستال للأعمال الكهربائية والميكانيكية، الرياض">
    <meta name="keywords" content="تواصل معنا, اتصل بنا, روائع الكريستال, الرياض">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/contact.php">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/contact.php">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/contact.php">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/contact.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/contact.php">
    <meta property="og:title" content="تواصل معنا | اطلب استشارة مجانية - روائع الكريستال">
    <meta property="og:description"
        content="اتصل الآن 0550698111 أو راسلنا. مؤسسة روائع الكريستال للأعمال الكهربائية والميكانيكية، الرياض">
    <meta property="og:image" content="https://brilliantserv.com/media/brilliantcrystal-hd.webp">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/contact.php">
    <meta property="twitter:title" content="تواصل معنا | اطلب استشارة مجانية - روائع الكريستال">
    <meta property="twitter:description"
        content="اتصل الآن 0550698111 أو راسلنا. مؤسسة روائع الكريستال للأعمال الكهربائية والميكانيكية، الرياض">
    <meta property="twitter:image" content="https://brilliantserv.com/media/brilliantcrystal-hd.webp">

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
                        "name": "تواصل معنا",
                        "item": "https://brilliantserv.com/contact.php"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "ما هي ساعات العمل؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نعمل من السبت إلى الخميس من الساعة 8:00 صباحاً وحتى 6:00 مساءً. فرق الطوارئ متوفرة 24/7."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "كيف يمكنني الوصول إليكم؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "يقع مقرنا الرئيسي في الرياض - حي المصفاة، طريق الخرج. يمكنك استخدام خريطة جوجل للوصول إلينا."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "هل تقدمون خدمات الطوارئ؟",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "نعم، لدينا فريق متخصص للحالات الطارئة يعمل على مدار 24 ساعة لخدمة المصانع والمنشآت الحيوية."
                        }
                    }
                ]
            }
        ]
    }
    </script>

    <?php include 'includes/head.php'; ?>

    <style>
        /* Creative Contact Page Styles */
        .contact-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
            color: var(--color-primary-dark);
            animation: pulse-badge 2s ease-in-out infinite;
        }

        @keyframes pulse-badge {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }
        }

        .contact-info-card {
            background: linear-gradient(145deg, var(--color-bg-card) 0%, var(--color-bg-elevated) 100%);
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--color-border);
            transition: all 0.3s ease;
        }

        .contact-info-card:hover {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
            transform: translateY(-5px);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1.25rem;
            margin-bottom: 1rem;
            border-radius: 1rem;
            background: rgba(16, 185, 129, 0.03);
            border: 1px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact-info-item:hover {
            background: rgba(16, 185, 129, 0.08);
            border-color: rgba(16, 185, 129, 0.2);
            transform: translateX(-5px);
        }

        .contact-info-item .icon {
            width: 48px;
            height: 48px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .contact-info-item .icon svg {
            width: 24px;
            height: 24px;
            color: white;
        }

        .contact-info-item h4 {
            font-weight: 700;
            color: var(--color-text);
            margin-bottom: 0.25rem;
        }

        .contact-info-item p {
            color: var(--color-text-muted);
            margin: 0;
            font-size: 0.95rem;
        }

        .contact-info-item a {
            color: var(--color-primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info-item a:hover {
            color: var(--color-primary-dark);
        }

        /* Quick Action Buttons */
        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .quick-action-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1rem 1.5rem;
            border-radius: 1rem;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .quick-action-btn.whatsapp {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
        }

        .quick-action-btn.whatsapp:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
        }

        .quick-action-btn.call {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }

        .quick-action-btn.call:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.5);
        }

        /* Contact Form Card */
        .contact-form-card {
            background: var(--color-bg-card);
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--color-border);
        }

        .contact-form-card input,
        .contact-form-card textarea,
        .contact-form-card select {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid var(--color-border);
            border-radius: 0.75rem;
            background: var(--color-bg);
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .contact-form-card input:focus,
        .contact-form-card textarea:focus,
        .contact-form-card select:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--color-text);
            margin-bottom: 0.5rem;
        }

        /* FAQ Accordion */
        .faq-accordion {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-item-accordion {
            background: var(--color-bg-card);
            border: 1px solid var(--color-border);
            border-radius: 1rem;
            margin-bottom: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item-accordion:hover {
            border-color: var(--color-primary-light);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem;
            cursor: pointer;
            font-weight: 700;
            color: var(--color-text);
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            color: var(--color-primary);
        }

        .faq-question .icon {
            width: 32px;
            height: 32px;
            background: rgba(16, 185, 129, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .faq-question .icon svg {
            width: 16px;
            height: 16px;
            color: var(--color-primary);
            transition: transform 0.3s ease;
        }

        .faq-item-accordion.active .faq-question .icon {
            background: var(--color-primary);
        }

        .faq-item-accordion.active .faq-question .icon svg {
            color: white;
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer-content {
            padding: 0 1.5rem 1.5rem;
            color: var(--color-text-muted);
            line-height: 1.8;
        }

        .faq-item-accordion.active .faq-answer {
            max-height: 500px;
        }

        /* Map Section Enhanced */
        .map-section-enhanced {
            padding: 4rem 0;
            background: var(--color-bg);
        }

        .map-container {
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .map-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
        }

        .map-actions {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        /* Floating Contact Widget */
        .floating-contact {
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .floating-btn {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .floating-btn:hover {
            transform: scale(1.1);
        }

        .floating-btn.whatsapp {
            background: #25D366;
        }

        .floating-btn.phone {
            background: var(--color-primary);
        }

        .floating-btn svg {
            width: 28px;
            height: 28px;
            color: white;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: start;
        }

        @media (max-width: 900px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .quick-actions {
                grid-template-columns: 1fr;
            }

            .floating-contact {
                bottom: 20px;
                left: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="contact-hero-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72">
                        </path>
                    </svg>
                    متاحون 24/7 للطوارئ
                </span>
                <h1>نحن هنا لخدمتك</h1>
                <p>يسعدنا استقبال استفساراتكم واقتراحاتكم على مدار الساعة</p>
            </div>
        </div>
    </section>

    <!-- Contact Main -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info-card">
                    <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">بيانات التواصل</h2>
                    <p style="color: var(--color-text-muted); margin-bottom: 2rem;">نحن متواجدون لمساعدتك في جميع
                        احتياجاتك الهندسية</p>

                    <a href="tel:0550698111" class="contact-info-item" style="text-decoration: none;">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4>📞 اتصل بنا</h4>
                            <p style="font-size: 1.1rem; font-weight: 600; color: var(--color-primary);">0550698111</p>
                        </div>
                    </a>

                    <a href="https://wa.me/966550698111?text=مرحباً، أود الاستفسار عن خدماتكم" target="_blank"
                        class="contact-info-item" style="text-decoration: none;">
                        <div class="icon" style="background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24"
                                height="24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </div>
                        <div>
                            <h4>💬 واتساب</h4>
                            <p style="font-size: 1.1rem; font-weight: 600; color: #25D366;">0550698111</p>
                        </div>
                    </a>

                    <div class="contact-info-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h4>📍 العنوان</h4>
                            <p>الرياض - حي المصفاة، طريق الخرج</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4>🕐 ساعات العمل</h4>
                            <p>السبت - الخميس: 8:00 ص - 6:00 م</p>
                            <p style="color: var(--color-primary); font-weight: 600;">الطوارئ متاحة 24/7</p>
                        </div>
                    </div>

                    <a href="mailto:info@brilliantserv.com" class="contact-info-item" style="text-decoration: none;">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4>📧 البريد الإلكتروني</h4>
                            <p style="color: var(--color-primary);">info@brilliantserv.com</p>
                        </div>
                    </a>

                    <!-- Quick Action Buttons -->
                    <div class="quick-actions">
                        <a href="https://wa.me/966550698111?text=مرحباً، أود الاستفسار عن خدماتكم" target="_blank"
                            class="quick-action-btn whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            واتساب
                        </a>
                        <a href="tel:0550698111" class="quick-action-btn call">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72">
                                </path>
                            </svg>
                            اتصل الآن
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-card">
                    <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">أرسل رسالتك</h2>
                    <p style="color: var(--color-text-muted); margin-bottom: 2rem;">سنتواصل معك خلال ساعات العمل</p>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">الاسم الكامل *</label>
                            <input type="text" id="name" name="name" placeholder="أدخل اسمك الكريم" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">رقم الجوال *</label>
                            <input type="tel" id="phone" name="phone" placeholder="05xxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label for="service">نوع الخدمة</label>
                            <select id="service" name="service">
                                <option value="">اختر نوع الخدمة</option>
                                <option value="أعمال كهربائية">أعمال كهربائية</option>
                                <option value="أعمال ميكانيكية">أعمال ميكانيكية</option>
                                <option value="لف مواتير ومحولات">لف مواتير ومحولات</option>
                                <option value="صيانة مضخات">صيانة مضخات</option>
                                <option value="لوحات تحكم">لوحات تحكم</option>
                                <option value="استشارات هندسية">استشارات هندسية</option>
                                <option value="أخرى">أخرى</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">تفاصيل الطلب</label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="اكتب تفاصيل استفسارك أو طلبك هنا..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"
                            style="width: 100%; padding: 1rem; font-size: 1.1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="currentColor" style="margin-left: 8px;">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            إرسال عبر واتساب
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 4rem 0; background-color: var(--color-bg-elevated);">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">الأسئلة الشائعة</span>
                <h2>استفسارات التواصل</h2>
            </div>
            <div class="faq-accordion">
                <div class="faq-item-accordion">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>ما هي ساعات العمل؟</span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            نعمل من السبت إلى الخميس من الساعة 8:00 صباحاً وحتى 6:00 مساءً. فرق الطوارئ متوفرة على مدار
                            الساعة 24/7 لخدمة المصانع والمنشآت الحيوية.
                        </div>
                    </div>
                </div>

                <div class="faq-item-accordion">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>هل تقدمون خدمات الطوارئ؟</span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            نعم، لدينا فريق متخصص للحالات الطارئة يعمل على مدار 24 ساعة لخدمة المصانع والمنشآت الحيوية.
                            اتصل على الرقم <strong dir="ltr">0550698111</strong> في أي وقت.
                        </div>
                    </div>
                </div>

                <div class="faq-item-accordion">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>كيف يمكنني الوصول إليكم؟</span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            يقع مقرنا الرئيسي في الرياض - حي المصفاة، طريق الخرج. يمكنك استخدام خريطة جوجل الموجودة في
                            أسفل الصفحة للوصول إلينا بسهولة، أو الضغط على زر "احصل على الاتجاهات".
                        </div>
                    </div>
                </div>

                <div class="faq-item-accordion">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <span>ما هي مناطق الخدمة؟</span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            نقدم خدماتنا في جميع أنحاء المملكة العربية السعودية، مع التركيز على الرياض والمنطقة الوسطى.
                            كما نوفر خدمات التوريد والصيانة لجميع المناطق.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section-enhanced">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 2rem;">
                <span class="section-badge">موقعنا</span>
                <h2>زورونا في ورشتنا</h2>
                <p>الرياض - حي المصفاة، طريق الخرج</p>
            </div>
            <div class="map-container">
                <iframe src="https://maps.google.com/maps?q=24.508528,46.884278&hl=ar&z=17&output=embed"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="map-actions">
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

    <!-- Floating Contact Widget -->
    <div class="floating-contact">
        <a href="https://wa.me/966550698111?text=مرحباً، أود الاستفسار عن خدماتكم" target="_blank"
            class="floating-btn whatsapp" title="تواصل عبر واتساب">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
        </a>
        <a href="tel:0550698111" class="floating-btn phone" title="اتصل بنا">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
            </svg>
        </a>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.min.js"></script>
    <script>
        // FAQ Accordion Toggle
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const isActive = faqItem.classList.contains('active');

            // Close all FAQ items
            document.querySelectorAll('.faq-item-accordion').forEach(item => {
                item.classList.remove('active');
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }

        // Contact Form - Send via WhatsApp
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;

            // Build WhatsApp message
            let whatsappMessage = `مرحباً، أنا ${name}`;
            whatsappMessage += `\n📱 رقم الجوال: ${phone}`;
            if (service) {
                whatsappMessage += `\n🔧 نوع الخدمة: ${service}`;
            }
            if (message) {
                whatsappMessage += `\n📝 التفاصيل: ${message}`;
            }

            // Encode and open WhatsApp
            const encodedMessage = encodeURIComponent(whatsappMessage);
            window.open(`https://wa.me/966550698111?text=${encodedMessage}`, '_blank');
        });
    </script>
</body>

</html>