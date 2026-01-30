<?php
// Page-specific variables
$page_title = "صيانة المسابح بجدة";
$base_path = "../";
$active_page = "blog";

// Load site configuration
include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo" />
    <title>صيانة مسابح بجدة - تنظيف ومضخات - مدونة روائع الكريستال</title>
    <meta name="description"
        content="خدمة صيانة ومسابح شاملة في جدة. تنظيف، تعقيم، صيانة مضخات وفلاتر، وكشف تسربات المسابح بأيدي خبراء.">
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
                <span class="section-badge">صيانة مسابح</span>
                <h1>صيانة مسابح بجدة: مياه نقية وسباحة آمنة</h1>
                <p>20 يناير 2026 • فريق المسابح</p>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <!-- Featured Image -->
                <div class="article-image">
                    <img src="../../media/mechanic-works.webp" alt="صيانة مسابح بجدة: مياه نقية وسباحة آمنة">
                </div>

                <!-- Article Body -->
                <div class="article-body">

                    <p class="lead">المسبح هو واحة الاسترخاء في منزلك، لكن إهمال صيانته قد يحوله لمصدر للأمراض. نحن في
                        روائع الكريستال نضمن لك مسبحاً نظيفاً وآمناً طوال العام.</p>

                    <h2>خدمات صيانة المسابح التي نقدمها</h2>
                    <ul>
                        <li><strong>كنس وتنظيف المسبح:</strong> إزالة الشوائب والأتربة من القاع والجدران.</li>
                        <li><strong>وزن الكيمياء (PH & Chlorine):</strong> ضبط مستويات الكلور والرقم الهيدروجيني لضمان
                            سلامة المياه للجلد والعين.</li>
                        <li><strong>صيانة المضخات والفلاتر:</strong> التأكد من كفاءة دورة المياه وتغيير رمل الفلتر عند
                            الحاجة.</li>
                        <li><strong>كشف تسربات المسابح:</strong> معالجة نقص المياه المستمر بدون تكسير.</li>
                    </ul>

                    <h2>عقود صيانة دورية</h2>
                    <p>نوفر عقود صيانة شهرية وسنوية للفلل، الفنادق، والمنتجعات في جدة. زيارات منتظمة تضمن لك راحة البال
                        ومسبحاً جاهزاً دائماً.</p>

                </div>

                <!-- CTA Box -->
                <div class="article-cta">
                    <h3>استمتع بمسبحك دون عناء</h3>
                    <p>سجل معنا في عقود الصيانة الدورية اليوم واحصل على زيارة مجانية.</p>
                    <a href="tel:0550698111" class="btn btn-primary">اتصل بنا 0550698111</a>
                </div>

                <!-- Back Link -->
                <div class="article-back">
                    <a href="../blog.php" class="back-link">← العودة للمدونة</a>
                </div>
            </div>
        </div>
    </article>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/main.js"></script>
</body>

</html>