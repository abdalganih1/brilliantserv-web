<?php
// mcc-panels - OPTIMIZED by Phase 6
$page_title = "لوحات MCC - مراكز التحكم بالمحركات | روائع الكريستال";
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
        content="لوحات MCC مراكز التحكم بالمحركات للمصانع والمشاريع الكبرى. تصنيع محلي بمواصفات سعودية وعالمية. Schneider، ABB. 0550698111">
    <meta name="keywords" content="لوحات MCC, مراكز تحكم محركات, لوحات كهرباء صناعية, السعودية">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://brilliantserv.com/blog/mcc-panels.html">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="لوحات MCC للمصانع والمشاريع الكبرى في السعودية.">
    <meta property="og:url" content="https://brilliantserv.com/blog/mcc-panels.html">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/mcc-panels-featured.webp">

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
                "name": "ما هي لوحات MCC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MCC (Motor Control Center) مراكز تحكم متكاملة للمحركات. تجمع التحكم والحماية والتوزيع في وحدة واحدة للمصانع والمشاريع الكبرى."
                }
            },
            {
                "@type": "Question",
                "name": "كم سعر لوحة MCC؟",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "من 50,000 ريال للوحات الصغيرة إلى 500,000+ ريال للمشاريع الكبرى. يعتمد على عدد المحركات والمواصفات."
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
                <span class="section-badge">لوحات صناعية</span>
                <h1>لوحات MCC - مراكز التحكم بالمحركات</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/mcc-panels-featured.webp" alt="لوحات MCC مراكز التحكم" loading="lazy">
                </div>
                <div class="article-body">
                    <h2>ما هي لوحات MCC؟</h2>
                    <p>لوحات <strong>MCC (Motor Control Center)</strong> هي مراكز تحكم متكاملة للمحركات الكهربائية. تجمع
                        في وحدة واحدة: <strong>التحكم، الحماية، والتوزيع</strong> لمجموعات المحركات.</p>

                    <p>تُستخدم في المصانع، محطات المعالجة، منشآت البترول، والمشاريع الكبرى التي تحتوي على عدد كبير من
                        المحركات.</p>

                    <h2>مكونات لوحة MCC</h2>
                    <ol>
                        <li><strong>حجرة التغذية:</strong> قاطع رئيسي، قضبان التوزيع</li>
                        <li><strong>وحدات المحركات:</strong> Starters لكل محرك</li>
                        <li><strong>حماية:</strong> ريلاي حماية، فيوزات</li>
                        <li><strong>تحكم:</strong> <a href="plc-control-panels.php">PLC</a> وHMI</li>
                        <li><strong>قياس:</strong> عدادات تيار وجهد</li>
                    </ol>

                    <h2>أنواع وحدات MCC</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>النوع</th>
                                <th>طريقة البدء</th>
                                <th>الاستخدام</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>DOL Starter</strong></td>
                                <td>مباشر</td>
                                <td>محركات ≤7.5 HP</td>
                            </tr>
                            <tr>
                                <td><strong>Star-Delta</strong></td>
                                <td>تقليل تيار البدء</td>
                                <td>محركات 7.5-50 HP</td>
                            </tr>
                            <tr>
                                <td><strong>Soft Starter</strong></td>
                                <td>بدء تدريجي</td>
                                <td>أحمال حساسة</td>
                            </tr>
                            <tr>
                                <td><strong>VFD</strong></td>
                                <td>تحكم بالسرعة</td>
                                <td>مضخات، مراوح</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>المواصفات والمعايير</h2>
                    <ul>
                        <li><strong>IEC 61439:</strong> معيار اللوحات الكهربائية</li>
                        <li><strong>SEC:</strong> مواصفات الشركة السعودية للكهرباء</li>
                        <li><strong>IP Rating:</strong> IP54/IP55 للبيئات الصناعية</li>
                        <li><strong>Form:</strong> Form 2b/3b/4 حسب المتطلبات</li>
                    </ul>

                    <h2>الماركات المستخدمة</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>الماركة</th>
                                <th>المكونات</th>
                                <th>المميزات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Schneider Electric</strong></td>
                                <td>Prisma, Blokset</td>
                                <td>الأكثر انتشاراً</td>
                            </tr>
                            <tr>
                                <td><strong>ABB</strong></td>
                                <td>MNS, ArTu</td>
                                <td>جودة صناعية</td>
                            </tr>
                            <tr>
                                <td><strong>Siemens</strong></td>
                                <td>SIVACON</td>
                                <td>أتمتة متقدمة</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>خدماتنا</h2>
                    <ul>
                        <li>✅ تصميم وتصنيع لوحات MCC</li>
                        <li>✅ توريد لوحات جاهزة</li>
                        <li>✅ برمجة PLC وHMI</li>
                        <li>✅ تركيب وتشغيل</li>
                        <li>✅ صيانة وترقية</li>
                    </ul>

                    <h2>الأسئلة الشائعة</h2>
                    <div class="faq-section">
                        <div class="faq-item">
                            <h3>ما الفرق بين MCC وPCC؟</h3>
                            <p>MCC للتحكم بالمحركات، PCC (Power Control Center) للتوزيع الرئيسي. غالباً يكون PCC يغذي
                                MCC.</p>
                        </div>
                        <div class="faq-item">
                            <h3>كم سعر لوحة MCC؟</h3>
                            <p>من 50,000 ريال للصغيرة إلى 500,000+ للكبيرة. نقدم عرض سعر مفصل بعد دراسة المتطلبات.</p>
                        </div>
                    </div>

                    <div class="article-cta">
                        <h3>تحتاج لوحة MCC لمشروعك؟</h3>
                        <p>تصنيع محلي بمواصفات عالمية!</p>
                        <div class="cta-buttons">
                            <a href="tel:0550698111" class="btn btn-primary">📞 0550698111</a>
                            <a href="https://wa.me/966550698111" class="btn btn-success">💬 واتساب</a>
                        </div>
                    </div>

                    <div class="related-articles">
                        <h3>مقالات ذات صلة</h3>
                        <ul>
                            <li><a href="pump-control-panels.php">لوحات تحكم المضخات</a></li>
                            <li><a href="plc-control-panels.php">لوحات PLC</a></li>
                            <li><a href="industrial-water-pumps.php">المضخات الصناعية</a></li>
                        </ul>
                    </div>

                    <div class="article-back">
                        <a href="../blog.php" class="back-link">← العودة للمدونة</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include '../includes/footer.php'; ?>
    <script src="../js/main.min.js"></script>
</body>

</html>