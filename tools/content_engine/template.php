<?php
// AUTO-GENERATED FILE - DO NOT EDIT DIRECTLY
// Page-specific variables
$page_title = "{{TITLE}}";
$base_path = "../";
$active_page = "blog";

include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo" />

    <!-- SEO Meta Tags -->
    <title>{{META_TITLE}}</title>
    <meta name="description" content="{{META_DESCRIPTION}}">
    <meta name="keywords" content="{{KEYWORDS}}">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/blog/{{SLUG}}.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{OG_TITLE}}">
    <meta property="og:description" content="{{OG_DESCRIPTION}}">
    <meta property="og:image" content="{{OG_IMAGE}}">
    <meta property="og:url" content="https://brilliantserv.com/blog/{{SLUG}}.php">
    <meta property="og:site_name" content="روائع الكريستال">
    <meta property="article:published_time" content="{{PUBLISH_DATE}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{OG_TITLE}}">
    <meta property="twitter:description" content="{{OG_DESCRIPTION}}">
    <meta property="twitter:image" content="{{OG_IMAGE}}">

    <!-- JSON-LD Schema -->
    {{SCHEMA_JSON}}

    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <?php include '../includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">{{CATEGORY}}</span>
                <h1>{{H1_TITLE}}</h1>
                <p>{{PUBLISH_DATE_AR}} • {{AUTHOR_NAME}}</p>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <!-- Featured Image -->
                <div class="article-image">
                    <img src="{{IMAGE_PATH}}" alt="{{IMAGE_ALT}}" loading="lazy">
                </div>

                <!-- Article Body -->
                <div class="article-body">
                    {{CONTENT_BODY}}

                    <!-- Call to Action -->
                    <div class="article-cta">
                        <h3>{{CTA_TITLE}}</h3>
                        <p>{{CTA_TEXT}}</p>
                        <a href="tel:0550698111" class="btn btn-primary">اتصل الآن 0550698111</a>
                    </div>

                    <!-- Back Link -->
                    <div class="article-back">
                        <a href="../blog.php" class="back-link">← العودة للمدونة</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include '../includes/footer.php'; ?>
    <script src="../js/main.js"></script>
</body>

</html>