<?php
/**
 * Service Detail Page Template
 * Dynamically loads service data from JSON and displays with full SEO
 */

// Get service slug from URL
$service_slug = isset($_GET['service']) ? preg_replace('/[^a-z0-9-]/', '', $_GET['service']) : '';

// Load services data
$services_json = file_get_contents('media/services_data.json');
$services_data = json_decode($services_json, true);

// Find the requested service
$service = null;
foreach ($services_data['services'] as $s) {
    if ($s['slug'] === $service_slug) {
        $service = $s;
        break;
    }
}

// If service not found, redirect to services page
if (!$service) {
    header('Location: services.php');
    exit;
}

// Page variables
$page_title = $service['title'];
$page_description = $service['meta_description'];
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
    
    <!-- Primary Meta Tags -->
    <title><?= htmlspecialchars($service['meta_title']) ?></title>
    <meta name="title" content="<?= htmlspecialchars($service['meta_title']) ?>">
    <meta name="description" content="<?= htmlspecialchars($service['meta_description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($service['keywords']) ?>">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($service['meta_title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($service['meta_description']) ?>">
    <meta property="og:image" content="https://brilliantserv.com/media/<?= htmlspecialchars($service['hero_image']) ?>">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/services/<?= htmlspecialchars($service['slug']) ?>">
    <meta property="twitter:title" content="<?= htmlspecialchars($service['meta_title']) ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($service['meta_description']) ?>">
    <meta property="twitter:image" content="https://brilliantserv.com/media/<?= htmlspecialchars($service['hero_image']) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.webp">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.webp">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Service",
                "@id": "https://brilliantserv.com/services/<?= $service['slug'] ?>#service",
                "name": "<?= $service['title'] ?>",
                "description": "<?= $service['meta_description'] ?>",
                "provider": {
                    "@type": "LocalBusiness",
                    "@id": "https://brilliantserv.com/#localbusiness",
                    "name": "مؤسسة روائع الكريستال"
                },
                "areaServed": {
                    "@type": "Country",
                    "name": "المملكة العربية السعودية"
                },
                "image": "https://brilliantserv.com/media/<?= $service['hero_image'] ?>"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "https://brilliantserv.com/services/<?= $service['slug'] ?>#breadcrumb",
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
                        "name": "الخدمات",
                        "item": "https://brilliantserv.com/services.php"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "<?= $service['title'] ?>",
                        "item": "https://brilliantserv.com/services/<?= $service['slug'] ?>"
                    }
                ]
            }
            <?php if (!empty($service['faqs'])): ?>,
            {
                "@type": "FAQPage",
                "@id": "https://brilliantserv.com/services/<?= $service['slug'] ?>#faq",
                "mainEntity": [
                    <?php foreach ($service['faqs'] as $i => $faq): ?>
                    {
                        "@type": "Question",
                        "name": "<?= htmlspecialchars($faq['question']) ?>",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "<?= htmlspecialchars($faq['answer']) ?>"
                        }
                    }<?= ($i < count($service['faqs']) - 1) ? ',' : '' ?>
                    <?php endforeach; ?>
                ]
            }
            <?php endif; ?>
        ]
    }
    </script>

    <?php include 'includes/head.php'; ?>

    <style>
        /* Service Detail Page Styles */
        .service-hero {
            background: linear-gradient(135deg, var(--color-bg-alt) 0%, var(--color-bg) 100%);
            padding: 6rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .service-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('media/<?= htmlspecialchars($service['hero_image']) ?>') center/cover no-repeat;
            opacity: 0.1;
        }

        .service-hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .service-hero-text h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--color-text) 0%, var(--color-primary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .service-hero-text p {
            font-size: 1.2rem;
            color: var(--color-text-muted);
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .service-hero-image img {
            width: 100%;
            border-radius: 1rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .breadcrumb {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: var(--color-primary);
            text-decoration: none;
        }

        .breadcrumb span {
            color: var(--color-text-muted);
        }

        /* Content Section */
        .service-content-section {
            padding: 4rem 0;
        }

        .service-content {
            max-width: 800px;
            margin: 0 auto 3rem;
        }

        .service-content h3 {
            font-size: 1.5rem;
            margin: 2rem 0 1rem;
            color: var(--color-primary);
        }

        .service-content ul {
            padding-right: 1.5rem;
            margin: 1rem 0;
        }

        .service-content li {
            margin-bottom: 0.5rem;
            line-height: 1.7;
        }

        /* Features Grid */
        .features-section {
            background: var(--color-bg-alt);
            padding: 4rem 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: var(--color-bg);
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }

        .feature-card h4 {
            margin-bottom: 0.5rem;
            color: var(--color-text);
        }

        .feature-card p {
            color: var(--color-text-muted);
            font-size: 0.95rem;
        }

        /* FAQ Section */
        .faq-section {
            padding: 4rem 0;
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--color-bg-alt);
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .faq-question {
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        .faq-question:hover {
            background: rgba(var(--color-primary-rgb), 0.1);
        }

        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--color-primary);
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.5rem;
            max-height: 500px;
        }

        .faq-answer p {
            color: var(--color-text-muted);
            line-height: 1.7;
        }

        /* Related Articles */
        .related-section {
            background: var(--color-bg-alt);
            padding: 4rem 0;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 4rem 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item {
            border-radius: 1rem;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.02);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .service-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .service-hero-text h1 {
                font-size: 2rem;
            }

            .service-hero-image {
                order: -1;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Service Hero -->
    <section class="service-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="index.php">الرئيسية</a>
                <span>/</span>
                <a href="services.php">الخدمات</a>
                <span>/</span>
                <span><?= htmlspecialchars($service['title']) ?></span>
            </nav>

            <div class="service-hero-content">
                <div class="service-hero-text">
                    <span class="section-badge">خدماتنا</span>
                    <h1><?= htmlspecialchars($service['title']) ?></h1>
                    <p><?= htmlspecialchars($service['short_description']) ?></p>
                    <div class="hero-actions">
                        <a href="https://wa.me/966501870643?text=مرحباً، أود الاستفسار عن خدمة <?= urlencode($service['title']) ?>" class="btn btn-primary" style="background: #25D366; border-color: #25D366;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            واتساب
                        </a>
                        <a href="tel:0550698111" class="btn btn-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72"></path>
                            </svg>
                            0550698111
                        </a>
                    </div>
                </div>
                <div class="service-hero-image">
                    <img src="media/<?= htmlspecialchars($service['hero_image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="service-content-section">
        <div class="container">
            <div class="service-content">
                <?= $service['content'] ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <?php if (!empty($service['features'])): ?>
    <section class="features-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">المميزات</span>
                <h2>لماذا تختار خدمتنا؟</h2>
            </div>
            <div class="features-grid">
                <?php foreach ($service['features'] as $feature): ?>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h4><?= htmlspecialchars($feature['title']) ?></h4>
                    <p><?= htmlspecialchars($feature['description']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Gallery Section -->
    <?php if (!empty($service['gallery'])): ?>
    <section class="gallery-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">معرض الصور</span>
                <h2>نماذج من أعمالنا</h2>
            </div>
            <div class="gallery-grid">
                <?php foreach ($service['gallery'] as $image): ?>
                <div class="gallery-item" onclick="openLightbox('media/<?= htmlspecialchars($image) ?>')">
                    <img src="media/<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($service['title']) ?>" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- FAQ Section -->
    <?php if (!empty($service['faqs'])): ?>
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">الأسئلة الشائعة</span>
                <h2>إجابات على استفساراتكم</h2>
            </div>
            <div class="faq-list">
                <?php foreach ($service['faqs'] as $faq): ?>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <?= htmlspecialchars($faq['question']) ?>
                    </div>
                    <div class="faq-answer">
                        <p><?= htmlspecialchars($faq['answer']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>جاهز للبدء؟</h2>
                <p>تواصل معنا اليوم للحصول على استشارة مجانية وعرض سعر</p>
                <div class="cta-actions">
                    <a href="https://wa.me/966501870643?text=مرحباً، أود الاستفسار عن خدمة <?= urlencode($service['title']) ?>" class="btn btn-light" style="background: #25D366; border-color: #25D366; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        واتساب 0501870643
                    </a>
                    <a href="tel:0550698111" class="btn btn-outline-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        اتصال 0550698111
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.9); z-index: 9999; cursor: pointer;" onclick="closeLightbox()">
        <button style="position: absolute; top: 20px; right: 20px; background: none; border: none; color: white; font-size: 2rem; cursor: pointer;">&times;</button>
        <img id="lightbox-image" src="" alt="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 90%; max-height: 90%; border-radius: 0.5rem;">
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.min.js"></script>
    <script>
        // FAQ Toggle
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            faqItem.classList.toggle('active');
        }

        // Lightbox Functions
        function openLightbox(imageSrc) {
            document.getElementById('lightbox-image').src = imageSrc;
            document.getElementById('lightbox-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox-modal').style.display = 'none';
            document.body.style.overflow = '';
        }

        // Close on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeLightbox();
        });
    </script>
</body>

</html>
