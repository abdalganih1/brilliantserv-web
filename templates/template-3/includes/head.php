<!-- Google Verification -->
<meta name="google-site-verification" content="<?= $google_verification ?>" />

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?= $base_path . $logo_path ?>">
<link rel="apple-touch-icon" href="<?= $base_path . $logo_path ?>">

<!-- Preconnect for Performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="<?= $base_path ?>css/style.min.css?v=2.3">
<link rel="stylesheet" href="<?= $base_path ?>css/pages.min.css?v=2.3">
<link rel="stylesheet" href="<?= $base_path ?>css/blog-premium.css?v=2.3">

<!-- Dynamic LocalBusiness + Service Schema (Auto-injected on every page) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://brilliantserv.com/#localbusiness",
    "name": "<?= $site_name_full ?>",
    "alternateName": "Brilliant Crystal Electromechanical",
    "url": "<?= $site_url ?>",
    "logo": "<?= $site_url ?>/<?= $logo_path ?>",
    "image": "<?= $site_url ?>/media/hero-electrical-work.webp",
    "description": "مؤسسة رائدة في الأعمال الكهربائية والميكانيكية بالرياض — لوحات تحكم، مضخات، لف محركات، كهرباء مصانع. +15 عام خبرة، 500+ مشروع.",
    "telephone": ["+966<?= ltrim($phone_primary, '0') ?>", "+966<?= ltrim($phone_secondary, '0') ?>"],
    "email": "<?= $email ?>",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "طريق الخرج، حي المصفاة",
        "addressLocality": "الرياض",
        "addressRegion": "منطقة الرياض",
        "postalCode": "12794",
        "addressCountry": "SA"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.5741,
        "longitude": 46.7654
    },
    "areaServed": [
        {"@type": "City", "name": "الرياض"},
        {"@type": "State", "name": "منطقة الرياض"},
        {"@type": "Country", "name": "المملكة العربية السعودية"}
    ],
    "priceRange": "$$",
    "currenciesAccepted": "SAR",
    "paymentAccepted": "Cash, Bank Transfer, Visa, Mastercard",
    "openingHoursSpecification": [
        {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"],
            "opens": "08:00",
            "closes": "18:00"
        }
    ],
    "sameAs": [
        "<?= $social_twitter ?>",
        "<?= $social_youtube ?>",
        "<?= $social_instagram ?>"
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "خدمات روائع الكريستال",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "تصنيع وتجميع لوحات التحكم الكهربائية (MDB, PLC, VFD)"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "بيع وتركيب وصيانة جميع أنواع المضخات (Grundfos, KSB, Ebara)"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "لف وإصلاح المحركات الكهربائية"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "تمديدات كهربائية سكنية وتجارية وصناعية"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "كهربنة المصانع وتصميم المخططات الكهربائية"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "إصلاح وبرمجة الإنفرتر (VFD) وأنظمة التحكم"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "أنظمة مضخات الحريق المعتمدة من الدفاع المدني"}}
        ]
    }
}
</script>