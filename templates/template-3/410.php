<?php
// 410 Gone - Resource permanently removed
$page_title = "الصفحة محذوفة نهائياً (410)";
$base_path = "";
$active_page = "410";

http_response_code(410);
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة غير متاحة - روائع الكريستال</title>
    <meta name="robots" content="noindex, nofollow">
    <?php include 'includes/head.php'; ?>
    <style>
        .error-section {
            padding: 8rem 0;
            text-align: center;
            background: var(--color-bg-light);
            min-height: 60vh;
            display: flex;
            align-items: center;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 800;
            color: var(--color-primary);
            line-height: 1;
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: var(--color-text-muted);
            margin-bottom: 2rem;
        }

        .contact-info {
            background: var(--color-bg-dark);
            color: white;
            padding: 2rem;
            border-radius: 1rem;
            margin-top: 2rem;
            display: inline-block;
        }

        .contact-info a {
            color: var(--color-primary);
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <section class="error-section">
        <div class="container">
            <div class="error-code">410</div>
            <h1>هذه الصفحة لم تعد متاحة</h1>
            <p class="error-message">تم إزالة هذا المحتوى نهائياً من الموقع. قد يكون المحتوى قد نُقل أو دُمج مع صفحة
                أخرى.</p>

            <div class="actions">
                <a href="/" class="btn btn-primary">الصفحة الرئيسية</a>
                <a href="/blog.php" class="btn btn-outline">تصفح المدونة</a>
            </div>

            <div class="contact-info">
                <p>تحتاج مساعدة؟ تواصل معنا:</p>
                <a href="tel:0550698111">📞 0550698111</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>