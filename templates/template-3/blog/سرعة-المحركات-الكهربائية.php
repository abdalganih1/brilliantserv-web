<?php
// سرعة المحركات الكهربائية
// URL: /سرعة-المحركات-الكهربائية/

$page_title = "كيف تحسب سرعة المحرك الكهربائي؟ المعادلة + جدول السرعات 2026";
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

    <title>كيف تحسب سرعة المحرك الكهربائي؟ المعادلة + جدول السرعات 2026</title>
    <meta name="description"
        content="تعلم حساب سرعة المحركات الكهربائية بمعادلات بسيطة. جدول سرعات جاهز لجميع الأقطاب. التحكم بالانفرتر يوفر 50% طاقة! للفنيين والمهندسين">
    <meta name="keywords" content="سرعة المحركات الكهربائية, حساب RPM, التحكم في سرعة المحرك, عدد أقطاب المحرك, VFD">
    <meta name="robots" content="index, follow">

    <link rel="canonical"
        href="https://brilliantserv.com/%D8%B3%D8%B1%D8%B9%D8%A9-%D8%A7%D9%84%D9%85%D8%AD%D8%B1%D9%83%D8%A7%D8%AA-%D8%A7%D9%84%D9%83%D9%87%D8%B1%D8%A8%D8%A7%D8%A6%D9%8A%D8%A9/">

    <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "سرعة المحركات الكهربائية",
    "datePublished": "2024-06-01",
    "dateModified": "2026-02-01",
    "author": {"@type": "Organization", "name": "مؤسسة روائع الكريستال"}
}</script>
    <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "كيف أحسب سرعة المحرك الكهربائي؟",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "سرعة المحرك = (120 × التردد) ÷ عدد الأقطاب. مثلاً: محرك 4 أقطاب على تردد 50Hz = (120 × 50) ÷ 4 = 1500 RPM (السرعة التزامنية). السرعة الفعلية أقل بقليل بسبب الانزلاق."
            }
        },
        {
            "@type": "Question",
            "name": "كيف أغير سرعة المحرك؟",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "يمكن تغيير سرعة المحرك عن طريق: تغيير التردد باستخدام الانفرتر (الطريقة الأكثر شيوعاً)، أو استخدام محرك متعدد السرعات (Dahlander)، أو استخدام بكرات بأحجام مختلفة."
            }
        }
    ]
}</script>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <?php include '../includes/nav.php'; ?>

    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">المحركات الكهربائية</span>
                <h1>سرعة المحركات الكهربائية</h1>
                <p>آخر تحديث: 1 فبراير 2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-body">
                    <p class="lead">فهم سرعة المحركات الكهربائية وكيفية التحكم بها أمر أساسي لكل فني ومهندس. هذا الدليل
                        يشرح المفاهيم الأساسية وطرق التحكم.</p>

                    <h2>معادلة حساب السرعة</h2>

                    <div class="info-box">
                        <h4>📐 المعادلة الأساسية</h4>
                        <p><code>N (RPM) = (120 × f) ÷ P</code></p>
                        <p>حيث:</p>
                        <ul>
                            <li>N = السرعة بوحدة دورة/دقيقة (RPM)</li>
                            <li>f = التردد (50Hz في السعودية)</li>
                            <li>P = عدد الأقطاب</li>
                        </ul>
                    </div>

                    <h2>السرعات القياسية للمحركات</h2>
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>عدد الأقطاب</th>
                                <th>السرعة التزامنية</th>
                                <th>السرعة الفعلية (تقريباً)</th>
                                <th>الاستخدام الشائع</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2 قطب</td>
                                <td>3000 RPM</td>
                                <td>2900 RPM</td>
                                <td>مراوح، مضخات صغيرة</td>
                            </tr>
                            <tr>
                                <td>4 قطب</td>
                                <td>1500 RPM</td>
                                <td>1450 RPM</td>
                                <td>الأكثر شيوعاً (مضخات، ضواغط)</td>
                            </tr>
                            <tr>
                                <td>6 قطب</td>
                                <td>1000 RPM</td>
                                <td>960 RPM</td>
                                <td>خلاطات، ناقلات</td>
                            </tr>
                            <tr>
                                <td>8 قطب</td>
                                <td>750 RPM</td>
                                <td>720 RPM</td>
                                <td>معدات ثقيلة</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>ما هو الانزلاق (Slip)؟</h2>
                    <p>الانزلاق هو الفرق بين السرعة التزامنية (النظرية) والسرعة الفعلية للمحرك. المحركات الحثية تحتاج
                        لهذا الفرق لتولد العزم.</p>

                    <div class="info-box">
                        <h4>📐 معادلة الانزلاق</h4>
                        <p><code>Slip % = ((Ns - Nr) ÷ Ns) × 100</code></p>
                        <p>الانزلاق الطبيعي: 2-5%</p>
                    </div>

                    <h2>طرق التحكم في السرعة</h2>

                    <h3>1. الانفرتر (VFD)</h3>
                    <p><strong>الطريقة الأفضل والأكثر كفاءة:</strong></p>
                    <ul>
                        <li>يغير التردد من 0 إلى 60Hz أو أكثر</li>
                        <li>تحكم دقيق وسلس</li>
                        <li>يوفر الطاقة</li>
                        <li>يحمي المحرك</li>
                    </ul>

                    <h3>2. محركات متعددة السرعات (Dahlander)</h3>
                    <ul>
                        <li>سرعتين أو ثلاث سرعات ثابتة</li>
                        <li>يتم تغيير عدد الأقطاب كهربائياً</li>
                        <li>أقل تكلفة من الانفرتر</li>
                    </ul>

                    <h3>3. البكرات والسيور</h3>
                    <ul>
                        <li>تغيير ميكانيكي للسرعة</li>
                        <li>بسيط لكن أقل كفاءة</li>
                        <li>يُستخدم في المعدات القديمة</li>
                    </ul>

                    <h2>تأثير تغيير السرعة على الأداء</h2>
                    <ul>
                        <li>📊 <strong>التدفق (Flow)</strong>: يتناسب طردياً مع السرعة</li>
                        <li>📊 <strong>الضغط (Head)</strong>: يتناسب مع مربع السرعة</li>
                        <li>📊 <strong>القدرة (Power)</strong>: تتناسب مع مكعب السرعة</li>
                    </ul>

                    <div class="info-box warning">
                        <h4>⚠️ تنبيه مهم</h4>
                        <p>تخفيض السرعة 20% يخفض استهلاك الطاقة بنسبة 50%! لذلك الانفرتر استثمار يسترد تكلفته سريعاً.
                        </p>
                    </div>

                    
                    
                    <?php 
                    // Article data for CTA
                    $article = ['title' => $page_title];
                    
                    // Related articles
                    $related_articles = [
                        'لف-المحركات-الكهربائية.php' => 'لف المحركات الكهربائية',
                        '3-phase-motor-winding-rules.php' => 'قواعد لف المحركات ثلاثية الفاز'
                    ];
                    
                    include '../includes/blog-article-footer.php';
                    ?>
