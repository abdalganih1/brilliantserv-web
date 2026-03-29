<?php
// 404 Not Found
$page_title = "الصفحة غير موجودة (404)";
$base_path = "/";
$active_page = "404";

// Attempt Smart Recover (Migration Logic)
$request_uri = $_SERVER['REQUEST_URI'];
$clean_slug = urldecode(basename(parse_url($request_uri, PHP_URL_PATH)));

// 1. GSC Recovery Map (Old Arabic Slugs -> New English Paths)
$redirect_map = [
    'انواع-المضخات' => '/blog/types-of-water-pumps',
    'صيانة-مضخات-المياه-الاحترافية' => '/blog/pump-repair-north-riyadh',
    'لف-المحركات-الكهربائية' => '/blog/electric-motor-winding',
    'صيانة-غرف-التبريد-والتجميد' => '/blog/cold-room-maintenance',
    'صيانة-مضخات-الحريق' => '/blog/jockey-fire-pump-maintenance',
    'تصنيع-لوحات-التوزيع-الكهربائية' => '/blog/star-delta-panel-manufacturing',
    'تصنيع-وتوريد-لوحات-mdb' => '/blog/control-panel-prices-2026',
    'صيانة-كهرباء-المصانع' => '/blog/production-line-maintenance',
    'دور-الكهرباء-الصناعية-في-تطوير-المصان' => '/blog/production-line-maintenance',
    'سرعة-المحركات-الكهربائية' => '/blog/vfd-programming-pumps',
    'افضل-مقاول-كهرباء' => '/blog/electrical-contractor-best',
    'المخططات-الكهربائية-للمباني' => '/blog/electrical-layouts-for-buildings',
    // New GSC 404 fixes (March 2026)
    'إصلاح-وصيانة-كروت-الرفودرايف' => '/blog/vfd-drive-repair',
    'مؤسسة-تنفيذ-أعمال-كهرباء' => '/blog/electrical-layouts-for-buildings',
    'خبراء-في-برمجة-plc' => '/blog/plc-control-panels',
    'about' => '/about.html',
    'contact-us' => '/contact.html',
    'contact' => '/contact.html',
];

if (array_key_exists($clean_slug, $redirect_map)) {
    header("Location: " . $redirect_map[$clean_slug], true, 301);
    exit();
}

// 2. Check if this slug exists as a blog post
if (file_exists(__DIR__ . "/blog/" . $clean_slug . ".php")) {
    header("Location: /blog/" . $clean_slug . ".php", true, 301);
    exit();
}

http_response_code(404);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة غير موجودة - روائع الكريستال</title>
    <meta name="robots" content="noindex, follow">

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
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .error-code {
            font-size: 10rem;
            font-weight: 800;
            background: linear-gradient(135deg, #f39c12 0%, #e74c3c 100%);
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
            color: #f39c12;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .contact-box a:hover {
            color: #e74c3c;
        }

        .suggestions {
            margin-top: 3rem;
            text-align: right;
        }

        .suggestions h3 {
            color: #fff;
            margin-bottom: 1rem;
        }

        .suggestion-cards {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .suggestion-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 1rem;
            text-align: center;
            min-width: 200px;
        }

        .suggestion-card h4 {
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .suggestion-card a {
            color: #667eea;
            text-decoration: none;
        }
    </style>
</head>

<body style="margin: 0; font-family: 'Tajawal', sans-serif;">
    <section class="error-section">
        <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div class="error-code">404</div>
            <h1 class="error-title">عذراً، الصفحة التي تبحث عنها غير موجودة</h1>
            <p class="error-message">ربما تم نقل الصفحة أو حذفها أثناء تحديث الموقع.</p>

            <div class="actions">
                <a href="/" class="btn btn-primary">🏠 الصفحة الرئيسية</a>
                <a href="/blog.php" class="btn btn-outline">📚 تصفح المدونة</a>
            </div>

            <div class="contact-box">
                <p>تحتاج مساعدة؟ تواصل معنا:</p>
                <a href="tel:0550698111">📞 0550698111</a>
            </div>

            <div class="suggestions">
                <h3 style="text-align: center;">قد يهمك قراءة:</h3>
                <div class="suggestion-cards">
                    <div class="suggestion-card">
                        <h4>صيانة مضخات</h4>
                        <a href="/صيانة-مضخات-الديزل/">اقرأ المزيد</a>
                    </div>
                    <div class="suggestion-card">
                        <h4>لف المحركات</h4>
                        <a href="/لف-المحركات-الكهربائية/">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>