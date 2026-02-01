<?php
// 403 Forbidden - Access denied
$page_title = "الوصول محظور (403)";
$base_path = "/";
$active_page = "403";

http_response_code(403);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الوصول محظور - روائع الكريستال</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- Stylesheets with absolute paths -->
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/pages.min.css">

    <style>
        .error-section {
            padding: 8rem 0;
            text-align: center;
            background: linear-gradient(135deg, #2d1f3d 0%, #1a1a2e 100%);
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 800;
            background: linear-gradient(135deg, #dc3545 0%, #ff6b6b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 1rem;
        }

        .error-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .error-message {
            font-size: 1.2rem;
            color: #b0b0b0;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-outline {
            border: 2px solid #667eea;
            color: #667eea;
            background: transparent;
        }

        .btn-outline:hover {
            background: #667eea;
            color: white;
        }

        .contact-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem 3rem;
            border-radius: 1rem;
            display: inline-block;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-box p {
            margin-bottom: 0.5rem;
            color: #ccc;
        }

        .contact-box a {
            color: #ff6b6b;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .contact-box a:hover {
            color: #dc3545;
        }
    </style>
</head>

<body style="margin: 0; font-family: 'Tajawal', sans-serif;">
    <section class="error-section">
        <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div class="error-code">403</div>
            <h1 class="error-title">عذراً، الوصول إلى هذه الصفحة محظور</h1>
            <p class="error-message">ليس لديك الصلاحية للوصول إلى هذا المحتوى.</p>

            <div class="actions">
                <a href="/" class="btn btn-primary">🏠 الصفحة الرئيسية</a>
                <a href="/contact.php" class="btn btn-outline">📧 تواصل معنا</a>
            </div>

            <div class="contact-box">
                <p>هل تعتقد أن هناك خطأ؟ تواصل معنا:</p>
                <a href="tel:0550698111">📞 0550698111</a>
            </div>
        </div>
    </section>
</body>

</html>