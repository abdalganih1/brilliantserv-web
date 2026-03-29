<?php
// إصلاح الإنفرتر / VFD
// URL: /اصلاح-الانفرتر/
// الكلمات المستهدفة: إصلاح كروت الانفرتر, صيانة VFD, أعطال الانفرتر

$page_title = "إصلاح الإنفرتر VFD: 7 أعطال شائعة + دليل الصيانة الكامل 2026";
$base_path = "../";
$active_page = "blog";

include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="<?= $google_verification ?>" />

    <!-- SEO Meta Tags -->
    <title>إصلاح الإنفرتر VFD: 7 أعطال شائعة + دليل الصيانة الكامل 2026</title>
    <meta name="description"
        content="🔧 دليل إصلاح الإنفرتر (VFD/Variable Frequency Drive) الشامل: 7 أعطال شائعة وحلولها، أكواد الأخطاء، برمجة الإنفرتر خطوة بخطوة. وفّر 60% من تكلفة الاستبدال. خدمة إصلاح في الرياض ☎️ 0550698111">
    <meta name="keywords"
        content="إصلاح الإنفرتر, صيانة VFD, أعطال الانفرتر, Variable Frequency Drive, برمجة الانفرتر, إصلاح كروت الانفرتر, صيانة الدرايف, أكواد أخطاء VFD, إصلاح انفرتر الرياض">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/%D8%A7%D8%B5%D9%84%D8%A7%D8%AD-%D8%A7%D9%84%D8%A7%D9%86%D9%81%D8%B1%D8%AA%D8%B1/">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="إصلاح الإنفرتر VFD: 7 أعطال شائعة + دليل الصيانة الكامل 2026">
    <meta property="og:description"
        content="دليل إصلاح الإنفرتر الشامل: أعطال شائعة، أكواد أخطاء، برمجة، صيانة وقائية. وفّر 60% من تكلفة الاستبدال.">
    <meta property="og:url" content="https://brilliantserv.com/اصلاح-الانفرتر/">
    <meta property="og:image" content="https://brilliantserv.com/media/blog/vfd-inverter-repair.webp">
    <meta property="og:site_name" content="روائع الكريستال">
    <meta property="article:published_time" content="2026-03-29">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="إصلاح الإنفرتر VFD: 7 أعطال شائعة وحلولها 2026">
    <meta property="twitter:description" content="دليل شامل لإصلاح وصيانة الإنفرتر. أكواد الأخطاء وحلولها.">

    <!-- JSON-LD Article -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "إصلاح الإنفرتر VFD: 7 أعطال شائعة وحلولها",
        "description": "دليل شامل لتشخيص وإصلاح أعطال الإنفرتر (Variable Frequency Drive) مع أكواد الأخطاء والحلول",
        "image": "https://brilliantserv.com/media/blog/vfd-inverter-repair.webp",
        "author": {"@type": "Organization", "name": "مؤسسة روائع الكريستال", "url": "https://brilliantserv.com"},
        "publisher": {"@type": "Organization", "name": "مؤسسة روائع الكريستال", "logo": {"@type": "ImageObject", "url": "https://brilliantserv.com/media/logo.webp"}},
        "datePublished": "2026-03-29",
        "dateModified": "2026-03-29",
        "mainEntityOfPage": "https://brilliantserv.com/اصلاح-الانفرتر/"
    }
    </script>

    <!-- JSON-LD FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "ما هو الإنفرتر VFD وما وظيفته؟",
                "acceptedAnswer": {"@type": "Answer", "text": "الإنفرتر (VFD - Variable Frequency Drive) هو جهاز إلكتروني يتحكم في سرعة المحرك الكهربائي عن طريق تغيير تردد وجهد التيار المغذي. يوفر 30-50% من استهلاك الطاقة ويحمي المحرك من الأحمال الزائدة."}
            },
            {
                "@type": "Question",
                "name": "كم تكلفة إصلاح الإنفرتر في السعودية؟",
                "acceptedAnswer": {"@type": "Answer", "text": "تتراوح تكلفة إصلاح الإنفرتر بين 500-8,000 ريال حسب الحجم والعطل: إصلاح كرت التحكم (1,000-3,000 ريال)، تغيير IGBTs (2,000-5,000 ريال)، تغيير مكثفات DC Bus (800-2,500 ريال). الإصلاح يوفر 40-70% مقارنة بشراء إنفرتر جديد."}
            },
            {
                "@type": "Question",
                "name": "ما هي أشهر أعطال الإنفرتر؟",
                "acceptedAnswer": {"@type": "Answer", "text": "أشهر أعطال الإنفرتر: Over Current (تيار زائد)، Over Voltage (جهد زائد)، Under Voltage (جهد منخفض)، Over Temperature (حرارة عالية)، Ground Fault (تسريب أرضي)، تلف IGBTs، وتلف مكثفات DC Bus."}
            },
            {
                "@type": "Question",
                "name": "كيف أعرف أن الإنفرتر تالف؟",
                "acceptedAnswer": {"@type": "Answer", "text": "علامات تلف الإنفرتر: ظهور أكواد خطأ على الشاشة، المحرك لا يدور، سرعة غير مستقرة، صوت طنين عالي، رائحة احتراق، ارتفاع حرارة غير طبيعي، أو إعادة تشغيل متكررة تلقائياً."}
            },
            {
                "@type": "Question",
                "name": "هل يمكن إصلاح كرت الإنفرتر بدل الاستبدال؟",
                "acceptedAnswer": {"@type": "Answer", "text": "نعم، في أغلب الحالات يمكن إصلاح كرت الإنفرتر بتكلفة 30-50% فقط من سعر الكرت الجديد. في مؤسسة روائع الكريستال نصلح كروت التحكم ودوائر القدرة (IGBTs, Capacitors, Rectifiers) لجميع الماركات: ABB, Schneider, Siemens, Danfoss."}
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
                <span class="section-badge">الأتمتة الصناعية</span>
                <h1>إصلاح الإنفرتر VFD: دليل شامل لتشخيص وإصلاح الأعطال</h1>
                <p>آخر تحديث: 29/03/2026</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/blog/vfd-inverter-repair.webp" alt="إصلاح إنفرتر VFD في ورشة روائع الكريستال"
                        fetchpriority="high" loading="eager" width="800" height="450"
                        onerror="this.src='../media/blog/control-panel-generic.webp'">
                </div>
                <div class="article-body">

                    <div class="article-meta">
                        <img src="../media/team/engineer-avatar.webp" alt="فريق روائع الكريستال" class="author-avatar"
                            onerror="this.style.display='none'">
                        <div class="meta-info">
                            <span class="author-name">فريق روائع الكريستال الهندسي</span>
                            <div class="meta-details">
                                <span class="article-date">آخر تحديث: <?= date('j F Y', filemtime(__FILE__)) ?></span>
                                <span class="reading-time">⏱️ وقت القراءة: <?= ceil(str_word_count(strip_tags(file_get_contents(__FILE__))) / 200) ?> دقائق</span>
                            </div>
                        </div>
                    </div>

                    <div class="article-stats-grid">
                        <div class="stat-card"><span class="stat-number">7</span><span class="stat-label">أعطال شائعة</span></div>
                        <div class="stat-card"><span class="stat-number">60%</span><span class="stat-label">توفير عن الشراء</span></div>
                        <div class="stat-card"><span class="stat-number">15+</span><span class="stat-label">سنة خبرة</span></div>
                        <div class="stat-card"><span class="stat-number">24/7</span><span class="stat-label">خدمة طوارئ</span></div>
                    </div>

                    <div class="article-toc">
                        <h4>📋 محتويات المقال</h4>
                        <ol>
                            <li><a href="#what-is-vfd">1. ما هو الإنفرتر VFD؟</a></li>
                            <li><a href="#vfd-components">2. مكونات الإنفرتر الداخلية</a></li>
                            <li><a href="#vfd-faults">3. الأعطال السبعة الشائعة وحلولها</a></li>
                            <li><a href="#error-codes">4. أكواد أخطاء الإنفرتر (Error Codes)</a></li>
                            <li><a href="#vfd-repair-cost">5. تكلفة إصلاح الإنفرتر</a></li>
                            <li><a href="#vfd-maintenance">6. جدول الصيانة الوقائية</a></li>
                            <li><a href="#vfd-brands">7. مقارنة ماركات الإنفرتر</a></li>
                            <li><a href="#vfd-programming">8. أساسيات برمجة الإنفرتر</a></li>
                            <li><a href="#section-faq">9. الأسئلة الشائعة</a></li>
                        </ol>
                    </div>

                    <h2 id="what-is-vfd">ما هو الإنفرتر VFD ولماذا هو مهم؟</h2>
                    <p class="lead">الإنفرتر أو <strong>VFD (Variable Frequency Drive)</strong> — يُعرف أيضاً بالدرايف أو محوّل التردد — هو جهاز إلكتروني يتحكم في <strong>سرعة وعزم المحرك الكهربائي</strong> عن طريق تغيير تردد التيار المغذي من 0 إلى 60 هرتز (أو أكثر). يعتبر من أهم الأجهزة في الأتمتة الصناعية الحديثة.</p>

                    <h3>فوائد استخدام الإنفرتر:</h3>
                    <ul>
                        <li><strong>توفير الطاقة 30-50%:</strong> بدل تشغيل المحرك بسرعة كاملة وخنق التدفق بالصمامات، الإنفرتر يقلل السرعة مباشرة</li>
                        <li><strong>بداية تشغيل ناعمة:</strong> يبدأ المحرك تدريجياً بدل الصدمة الكهربائية التي تسبب تلف الأجزاء الميكانيكية</li>
                        <li><strong>حماية المحرك:</strong> حماية مدمجة ضد التيار الزائد، الجهد الزائد، الحرارة، وفقدان الفاز</li>
                        <li><strong>تحكم دقيق:</strong> إمكانية ضبط السرعة بدقة 0.1% لتطبيقات حساسة</li>
                        <li><strong>إطالة عمر المعدات:</strong> التشغيل الناعم يقلل الاهتزاز والصدمات الميكانيكية</li>
                    </ul>

                    <h3>تطبيقات الإنفرتر في السعودية:</h3>
                    <ul>
                        <li><strong>المضخات:</strong> تحكم في ضغط وتدفق المياه (أكثر تطبيق شائع — 45% من السوق)</li>
                        <li><strong>التكييف المركزي:</strong> تحكم في مراوح ومضخات أنظمة HVAC</li>
                        <li><strong>الصناعة:</strong> سيور ناقلة، ماكينات CNC، خلاطات، ضاغطات</li>
                        <li><strong>معالجة المياه:</strong> محطات تحلية، محطات معالجة صرف صحي</li>
                    </ul>

                    <h2 id="vfd-components">مكونات الإنفرتر الداخلية</h2>
                    <p>لفهم الأعطال، يجب أولاً فهم المكونات الرئيسية:</p>
                    <table>
                        <thead>
                            <tr>
                                <th>المكوّن</th>
                                <th>الوظيفة</th>
                                <th>أشهر الأعطال</th>
                                <th>عمره المتوقع</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Rectifier (موحّد)</strong></td>
                                <td>تحويل AC إلى DC</td>
                                <td>قصر دارة، تلف Diodes</td>
                                <td>10-15 سنة</td>
                            </tr>
                            <tr>
                                <td><strong>DC Bus Capacitors</strong></td>
                                <td>تنعيم الجهد المستمر</td>
                                <td>جفاف، انتفاخ، انخفاض سعة</td>
                                <td>5-8 سنوات</td>
                            </tr>
                            <tr>
                                <td><strong>IGBTs (ترانزستورات)</strong></td>
                                <td>تحويل DC إلى AC بتردد متغير</td>
                                <td>قصر دارة، فتح دارة</td>
                                <td>8-12 سنة</td>
                            </tr>
                            <tr>
                                <td><strong>كرت التحكم (Control Board)</strong></td>
                                <td>دماغ الإنفرتر — المعالجة والبرمجة</td>
                                <td>تلف مكونات إلكترونية</td>
                                <td>10-20 سنة</td>
                            </tr>
                            <tr>
                                <td><strong>مروحة التبريد</strong></td>
                                <td>تبريد المكونات الداخلية</td>
                                <td>توقف، ضعف التدفق</td>
                                <td>3-5 سنوات</td>
                            </tr>
                            <tr>
                                <td><strong>مقاومة الفرملة (Braking Resistor)</strong></td>
                                <td>تفريغ الطاقة عند التباطؤ</td>
                                <td>احتراق، قطع</td>
                                <td>5-10 سنوات</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="vfd-faults">الأعطال السبعة الشائعة في الإنفرتر وحلولها</h2>

                    <h3>1. Over Current (OC) — تيار زائد</h3>
                    <p>أكثر عطل شائع — يمثل <strong>30%</strong> من جميع أعطال الإنفرتر.</p>
                    <h4>الأسباب:</h4>
                    <ul>
                        <li>قصر دارة في كابلات المحرك أو داخل المحرك نفسه</li>
                        <li>تلف IGBT (قصر داخلي)</li>
                        <li>حمل ميكانيكي مفاجئ على المحرك</li>
                        <li>تسارع سريع جداً (Acceleration Time قصير)</li>
                        <li>عدم تطابق حجم الإنفرتر مع المحرك</li>
                    </ul>
                    <h4>الحل:</h4>
                    <ol>
                        <li>افصل كابلات المحرك وشغّل الإنفرتر — إذا اختفى الخطأ، المشكلة في المحرك أو الكابلات</li>
                        <li>قس مقاومة عزل المحرك (يجب أن تكون أعلى من 1 MΩ)</li>
                        <li>افحص IGBTs بجهاز الملتيميتر (Diode Test)</li>
                        <li>زِد Acceleration Time تدريجياً (15-30 ثانية)</li>
                    </ol>

                    <h3>2. Over Voltage (OV) — جهد زائد</h3>
                    <p>DC Bus Voltage يتجاوز الحد المسموح (عادة 800V لإنفرتر 380V).</p>
                    <h4>الأسباب:</h4>
                    <ul>
                        <li><strong>تباطؤ سريع:</strong> الطاقة تعود من المحرك للإنفرتر (Regenerative Energy)</li>
                        <li><strong>جهد شبكة عالي:</strong> تقلبات في الجهد المغذي</li>
                        <li><strong>عدم وجود Braking Resistor:</strong> الطاقة الراجعة لا تجد مكان للتفريغ</li>
                    </ul>
                    <h4>الحل:</h4>
                    <ul>
                        <li>زِد Deceleration Time (وقت التباطؤ)</li>
                        <li>ركّب Braking Resistor مناسب</li>
                        <li>فعّل وظيفة Coast to Stop بدل Ramp Stop للأحمال ذات القصور الذاتي العالي</li>
                    </ul>

                    <h3>3. Under Voltage (UV) — جهد منخفض</h3>
                    <ul>
                        <li>انخفاض جهد الشبكة عن الحد الأدنى</li>
                        <li>جفاف مكثفات DC Bus (السبب الأكثر شيوعاً في الإنفرترات القديمة)</li>
                        <li>تلف مقاومة الشحن (Charge Resistor)</li>
                    </ul>
                    <p><strong>الحل:</strong> قس جهد DC Bus — يجب أن يكون √2 × جهد الشبكة (≈540V لشبكة 380V). إذا كان منخفض مع جهد شبكة طبيعي، غالباً المكثفات تحتاج استبدال.</p>

                    <h3>4. Over Temperature (OH) — حرارة عالية</h3>
                    <ul>
                        <li>مروحة تبريد متوقفة أو ضعيفة</li>
                        <li>فلتر هواء مسدود</li>
                        <li>درجة حرارة البيئة عالية (أعلى من 40°C)</li>
                        <li>حمل مستمر أعلى من المصنّف</li>
                    </ul>
                    <p><strong>الحل:</strong> استبدل المروحة (تكلفة 150-500 ريال)، نظّف الفلتر، تأكد من تهوية كافية حول الإنفرتر (مسافة 10cm على الأقل من كل جانب).</p>

                    <h3>5. Ground Fault (GF) — تسريب أرضي</h3>
                    <ul>
                        <li>تلف عزل كابل المحرك</li>
                        <li>رطوبة في صندوق توصيل المحرك</li>
                        <li>تلف عزل لفات المحرك</li>
                    </ul>
                    <p><strong>الحل:</strong> قس مقاومة العزل بـ Megger (يجب &gt; 1 MΩ). افحص الكابلات بصرياً. جفف المحرك إذا كان رطباً.</p>

                    <h3>6. تلف IGBTs</h3>
                    <p>IGBTs هي مفاتيح القدرة الإلكترونية — أغلى مكوّن في الإنفرتر.</p>
                    <h4>علامات التلف:</h4>
                    <ul>
                        <li>إنفرتر لا يشتغل نهائياً (قصر دارة → يفصل الفيوز فوراً)</li>
                        <li>خرج غير متوازن (فاز مفقود أو ضعيف)</li>
                        <li>أصوات غريبة من المحرك + اهتزاز</li>
                    </ul>
                    <h4>كيفية الفحص:</h4>
                    <p>استخدم Diode Test في الملتيميتر. كل IGBT يجب أن يعطي قراءة ~0.4V في اتجاه واحد و OL في الاتجاه العكسي. قراءة 0V = قصر. قراءة OL في الاتجاهين = فتح.</p>

                    <h3>7. تلف مكثفات DC Bus</h3>
                    <p>المكثفات لها عمر محدود (5-8 سنوات) وهي أكثر مكوّن يحتاج استبدال دوري.</p>
                    <h4>علامات التلف:</h4>
                    <ul>
                        <li>انتفاخ في الجزء العلوي للمكثف</li>
                        <li>تسريب سائل (إلكتروليت)</li>
                        <li>خطأ Under Voltage متكرر</li>
                        <li>تذبذب في جهد DC Bus</li>
                    </ul>
                    <p><strong>تكلفة الاستبدال:</strong> 800-2,500 ريال شاملة القطع والعمالة.</p>

                    <h2 id="error-codes">أكواد أخطاء الإنفرتر — دليل سريع</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>الكود</th>
                                <th>المعنى</th>
                                <th>ABB</th>
                                <th>Schneider</th>
                                <th>Siemens</th>
                                <th>الحل السريع</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>OC</strong></td>
                                <td>تيار زائد</td>
                                <td>F001</td>
                                <td>OCF</td>
                                <td>F001</td>
                                <td>افحص المحرك + كابلات + IGBTs</td>
                            </tr>
                            <tr>
                                <td><strong>OV</strong></td>
                                <td>جهد زائد</td>
                                <td>F002</td>
                                <td>ObF</td>
                                <td>F002</td>
                                <td>زد Deceleration Time + ركّب Braking Resistor</td>
                            </tr>
                            <tr>
                                <td><strong>UV</strong></td>
                                <td>جهد منخفض</td>
                                <td>F003</td>
                                <td>USF</td>
                                <td>F003</td>
                                <td>افحص جهد الشبكة + مكثفات DC Bus</td>
                            </tr>
                            <tr>
                                <td><strong>OH</strong></td>
                                <td>حرارة عالية</td>
                                <td>F007</td>
                                <td>OHF</td>
                                <td>F004</td>
                                <td>استبدل المروحة + نظف الفلتر + حسّن التهوية</td>
                            </tr>
                            <tr>
                                <td><strong>GF</strong></td>
                                <td>تسريب أرضي</td>
                                <td>F005</td>
                                <td>EtF</td>
                                <td>F005</td>
                                <td>قس عزل المحرك والكابلات</td>
                            </tr>
                            <tr>
                                <td><strong>SC</strong></td>
                                <td>قصر دارة</td>
                                <td>F006</td>
                                <td>SCF</td>
                                <td>F006</td>
                                <td>افحص IGBTs + كابلات المحرك</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="vfd-repair-cost">تكلفة إصلاح الإنفرتر في السعودية</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>نوع الإصلاح</th>
                                <th>التكلفة</th>
                                <th>الوقت</th>
                                <th>مقارنة بالجديد</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>تغيير مروحة تبريد</td>
                                <td>150 - 500 ريال</td>
                                <td>30 دقيقة</td>
                                <td>توفير 95%</td>
                            </tr>
                            <tr>
                                <td>تغيير مكثفات DC Bus</td>
                                <td>800 - 2,500 ريال</td>
                                <td>2-4 ساعات</td>
                                <td>توفير 70%</td>
                            </tr>
                            <tr>
                                <td>إصلاح/تغيير IGBTs</td>
                                <td>2,000 - 5,000 ريال</td>
                                <td>1-3 أيام</td>
                                <td>توفير 50-60%</td>
                            </tr>
                            <tr>
                                <td>إصلاح كرت التحكم</td>
                                <td>1,000 - 3,000 ريال</td>
                                <td>2-5 أيام</td>
                                <td>توفير 60-80%</td>
                            </tr>
                            <tr>
                                <td>صيانة شاملة + برمجة</td>
                                <td>500 - 1,500 ريال</td>
                                <td>2-4 ساعات</td>
                                <td>يطيل العمر 3-5 سنوات</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="vfd-maintenance">جدول الصيانة الوقائية للإنفرتر</h2>
                    <table>
                        <thead>
                            <tr><th>الفترة</th><th>الإجراءات</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>شهرياً</strong></td><td>تنظيف فلاتر الهواء، فحص بصري للمكثفات (انتفاخ/تسريب)، قراءة سجل الأخطاء</td></tr>
                            <tr><td><strong>كل 3 أشهر</strong></td><td>تنظيف داخلي بالهواء المضغوط، فحص شد الوصلات، قياس الحرارة بالكاميرا الحرارية</td></tr>
                            <tr><td><strong>كل 6 أشهر</strong></td><td>فحص المروحة (تيار السحب، صوت)، قياس جهد DC Bus، فحص عزل المحرك</td></tr>
                            <tr><td><strong>سنوياً</strong></td><td>فحص شامل: IGBTs، مكثفات (ESR meter)، مقاومات، كرت التحكم. استبدال المروحة إذا بدأت تضعف</td></tr>
                            <tr><td><strong>كل 5 سنوات</strong></td><td>استبدال مكثفات DC Bus (استباقي حتى لو تبدو سليمة)</td></tr>
                        </tbody>
                    </table>

                    <h2 id="vfd-brands">مقارنة أفضل ماركات الإنفرتر في السعودية</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>الماركة</th>
                                <th>المنشأ</th>
                                <th>نطاق القدرة</th>
                                <th>السعر (7.5kW)</th>
                                <th>التقييم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>ABB (ACS580)</strong></td>
                                <td>سويسرا</td>
                                <td>0.37 - 500 kW</td>
                                <td>4,500 - 6,000 ريال</td>
                                <td>⭐⭐⭐⭐⭐</td>
                            </tr>
                            <tr>
                                <td><strong>Schneider (ATV320)</strong></td>
                                <td>فرنسا</td>
                                <td>0.18 - 15 kW</td>
                                <td>3,500 - 5,000 ريال</td>
                                <td>⭐⭐⭐⭐⭐</td>
                            </tr>
                            <tr>
                                <td><strong>Siemens (G120)</strong></td>
                                <td>ألمانيا</td>
                                <td>0.12 - 250 kW</td>
                                <td>5,000 - 7,000 ريال</td>
                                <td>⭐⭐⭐⭐⭐</td>
                            </tr>
                            <tr>
                                <td><strong>Danfoss (FC102)</strong></td>
                                <td>الدنمارك</td>
                                <td>0.25 - 90 kW</td>
                                <td>4,000 - 5,500 ريال</td>
                                <td>⭐⭐⭐⭐</td>
                            </tr>
                            <tr>
                                <td><strong>LS (iG5A)</strong></td>
                                <td>كوريا</td>
                                <td>0.37 - 22 kW</td>
                                <td>2,000 - 3,500 ريال</td>
                                <td>⭐⭐⭐⭐</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 id="vfd-programming">أساسيات برمجة الإنفرتر</h2>
                    <p>البرمجة الأساسية تشمل ضبط المعلمات (Parameters) التالية:</p>
                    <table>
                        <thead>
                            <tr><th>المعلمة</th><th>الوظيفة</th><th>القيمة النموذجية</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Motor Rated Voltage</strong></td><td>جهد المحرك الاسمي</td><td>380V</td></tr>
                            <tr><td><strong>Motor Rated Current</strong></td><td>تيار المحرك الاسمي</td><td>من لوحة المحرك</td></tr>
                            <tr><td><strong>Motor Rated Frequency</strong></td><td>تردد المحرك</td><td>50 Hz</td></tr>
                            <tr><td><strong>Motor Rated RPM</strong></td><td>سرعة المحرك</td><td>1450 RPM (4 أقطاب)</td></tr>
                            <tr><td><strong>Acceleration Time</strong></td><td>وقت التسارع</td><td>10-30 ثانية</td></tr>
                            <tr><td><strong>Deceleration Time</strong></td><td>وقت التباطؤ</td><td>10-30 ثانية</td></tr>
                            <tr><td><strong>Max Frequency</strong></td><td>أقصى تردد</td><td>50-60 Hz</td></tr>
                            <tr><td><strong>Min Frequency</strong></td><td>أقل تردد</td><td>10-20 Hz</td></tr>
                        </tbody>
                    </table>
                    <p><strong>⚠️ تحذير:</strong> برمجة الإنفرتر الخاطئة قد تدمر المحرك! استعن بفني متخصص. في روائع الكريستال نقدم خدمة <a href="/لوحات-التحكم-الكهربائية/">برمجة لوحات التحكم</a> والإنفرترات لجميع الماركات.</p>

                    <h2>لماذا تختار روائع الكريستال لإصلاح الإنفرتر؟</h2>
                    <ul>
                        <li>✅ <strong>ورشة متخصصة</strong> مجهزة بأجهزة فحص إلكتروني متقدمة (Oscilloscope, ESR Meter, Megger)</li>
                        <li>✅ <strong>خبرة في جميع الماركات:</strong> ABB, Schneider, Siemens, Danfoss, LS, Mitsubishi</li>
                        <li>✅ <strong>قطع غيار أصلية</strong> مع ضمان المصنع</li>
                        <li>✅ <strong>إصلاح كروت التحكم</strong> على مستوى المكوّن (Component Level Repair)</li>
                        <li>✅ <strong>ضمان 6 أشهر — سنة</strong> على جميع أعمال الإصلاح</li>
                        <li>✅ <strong>خدمة استلام وتسليم</strong> في الرياض والمنطقة الوسطى</li>
                    </ul>

                    <p><strong>📞 اتصل الآن: <a href="tel:0550698111">0550698111</a> — استشارة مجانية + تقدير سعر خلال 24 ساعة</strong></p>

                    <section class="faq-section" id="section-faq">
                        <h2>❓ الأسئلة الشائعة عن إصلاح الإنفرتر</h2>
                        <div class="faq-list">
                            <div class="faq-item">
                                <h3>هل يمكن إصلاح إنفرتر قديم عمره 10 سنوات؟</h3>
                                <p>نعم في أغلب الحالات. الإنفرترات من ماركات مثل ABB وSchneider وSiemens مصممة لعمر 15-20 سنة. إذا كان الهيكل والمكونات الرئيسية سليمة، نستطيع استبدال المكثفات والـ IGBTs التالفة بتكلفة 30-50% من سعر إنفرتر جديد.</p>
                            </div>
                            <div class="faq-item">
                                <h3>كم يستغرق إصلاح الإنفرتر؟</h3>
                                <p>يعتمد على نوع العطل: تغيير مروحة (30 دقيقة)، تغيير مكثفات (2-4 ساعات)، إصلاح IGBTs أو كرت التحكم (1-5 أيام). نوفر خدمة إنفرتر بديل مؤقت للأعطال التي تحتاج وقت.</p>
                            </div>
                            <div class="faq-item">
                                <h3>ما هي أفضل ماركة إنفرتر للمضخات؟</h3>
                                <p>للمضخات ننصح بـ ABB ACS580 أو Danfoss FC102 — مصممة خصيصاً للمضخات مع وظائف مثل كشف الجفاف (Dry Run Protection) وتعويض الضغط التلقائي (PID Control) وتوفير طاقة ذكي.</p>
                            </div>
                            <div class="faq-item">
                                <h3>هل يوفر الإنفرتر فعلاً في فاتورة الكهرباء؟</h3>
                                <p>نعم بالتأكيد! في تطبيقات المضخات والمراوح، الإنفرتر يوفر 30-50% من استهلاك الكهرباء. مثال: مضخة 15kW تعمل 24/7 بدون إنفرتر تستهلك ~130,000 كيلوواط/سنة. مع إنفرتر تستهلك ~78,000 كيلوواط — توفير ~10,400 ريال سنوياً.</p>
                            </div>
                            <div class="faq-item">
                                <h3>كيف أحمي الإنفرتر من التلف؟</h3>
                                <p>5 نصائح ذهبية: 1) ركّب مانعة صواعق (Surge Protector)، 2) تأكد من تهوية كافية (درجة حرارة أقل من 40°C)، 3) نظف الفلاتر شهرياً، 4) ركب فلتر تيار متدفق (EMC Filter)، 5) برمج Acceleration/Deceleration Time مناسب لتجنب أحمال مفاجئة.</p>
                            </div>
                        </div>
                    </section>

                    <?php
                    $article = ['title' => $page_title];
                    $related_articles = [
                        'vfd-control-panels-guide.php' => 'دليل لوحات VFD',
                        'vfd-programming-pumps.php' => 'برمجة VFD للمضخات',
                        'inverter-maintenance-programming.php' => 'صيانة وبرمجة الإنفرتر',
                        'لوحات-التحكم-الكهربائية.php' => 'أنواع لوحات التحكم الكهربائية',
                        'لف-المحركات-الكهربائية.php' => 'لف المحركات الكهربائية'
                    ];
                    include '../includes/blog-article-footer.php';
                    ?>
