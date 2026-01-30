import os

articles = [
    {
        "filename": "شركة-مضخات-مياه-بالرياض.html",
        "title": "أفضل شركة مضخات مياه بالرياض - توريد وصيانة",
        "badge": "مضخات مياه",
        "h1": "أفضل شركة مضخات مياه في الرياض: حلول متكاملة للتوريد والتركيب",
        "description": "تبحث عن أفضل شركة مضخات مياه في الرياض؟ نوفر لك أحدث أنواع المضخات (Grundfos, KSB, Lowara) مع خدمات التركيب والصيانة المعتمدة.",
        "keywords": "شركة مضخات مياه الرياض, توريد مضخات مياه, تركيب مضخات مياه, صيانة مضخات مياه الرياض",
        "content": """
            <p class="lead">تعتبر أنظمة ضخ المياه عصب الحياة في المباني السكنية والتجارية والصناعية. في مؤسسة روائع الكريستال، نفخر بكوننا الشركة الرائدة في الرياض لتقديم حلول ضخ مياه متكاملة.</p>
            
            <h2>لماذا تختار روائع الكريستال لمضخات المياه؟</h2>
            <p>نحن لا نوفر فقط المعدات، بل نقدم حلولاً هندسية تضمن استدامة وكفاءة أنظمة المياه لديك:</p>
            <ul>
                <li><strong>توريد ماركات عالمية:</strong> نحن موزعون معتمدون لمضخات Grundfos، KSB، و Lowara الأصلية.</li>
                <li><strong>تركيب احترافي:</strong> فريقنا الهندسي يضمن تركيب المضخات وفق أعلى المعايير لضمان طول العمر الافتراضي.</li>
                <li><strong>صيانة دورية:</strong> عقود صيانة سنوية تضمن بقاء أنظمتك تعمل بكفاءة 24/7.</li>
            </ul>

            <h2>أنواع المضخات التي نوفرها في الرياض</h2>
            <p>سواء كنت تحتاج لمضخات صغيرة للمنزل أو أنظمة ضخ ضخمة للمصانع، فلدينا الحل:</p>
            <ul>
                <li>مضخات تعزيز الضغط (Booster Pumps).</li>
                <li>مضخات الحريق المعتمدة من الدفاع المدني.</li>
                <li>مضخات الصرف الصحي والغاطسة.</li>
                <li>مضخات الطرد المركزي الأفقية والرأسية.</li>
            </ul>

            <h2>تواصل معنا اليوم</h2>
            <p>لا تتردد في طلب استشارة مجانية لفحص نظام الضخ لديك وتحديد احتياجاتك الفعلية.</p>
        """
    },
    {
        "filename": "صيانة-مضخات-KSB-الرياض.html",
        "title": "مركز صيانة مضخات KSB المعتمد بالرياض - قطع غيار أصلية",
        "badge": "صيانة مضخات",
        "h1": "صيانة مضخات KSB في الرياض: دقة متناهية وقطع غيار أصلية",
        "description": "نحن متخصصون في صيانة وإصلاح مضخات KSB بالرياض. فريق فني خبير يضمن عودة مضختك للعمل بكفاءة المصنع مع ضمان شامل.",
        "keywords": "صيانة مضخات KSB, اصلاح مضخات KSB الرياض, قطع غيار KSB, فني مضخات KSB",
        "content": """
            <p class="lead">تعتبر مضخات KSB من أدق وأقوى المضخات عالمياً، لذا فهي تتطلب صيانة متخصصة للحفاظ على كفاءتها الهيدروليكية. نحن في روائع الكريستال نوفر لك هذه الخبرة في قلب الرياض.</p>
            
            <h2>أهمية الصيانة الدورية لمضخات KSB</h2>
            <p>إهمال الصيانة قد يؤدي إلى تلف ميكانيكي يكلف الكثير. خدماتنا تشمل:</p>
            <ul>
                <li><strong>معايرة الأداء:</strong> التأكد من أن المضخة تعطي التدفق والضغط المطلوب.</li>
                <li><strong>فحص الميكانيكال سيل:</strong> منع التسريبات قبل حدوث أضرار جسيمة.</li>
                <li><strong>تشحيم وتزييت الرولمان بلي:</strong> لتقليل الاحتكاك والضجيج.</li>
            </ul>

            <h2>ماذا يميز خدمتنا؟</h2>
            <p>نحن نستخدم أدوات تشخيص متطورة لتحديد الأعطال بدقة، كما نوفر قطع الغيار الأصلية من المصنع مباشرة لضمان أعلى مستوى من الجودة والأداء.</p>

            <h2>خدمة طوارئ 24/7</h2>
            <p>نعلم أن توقف المضخة يعني توقف العمل، لذا نوفر فريق طوارئ لخدمة المواقع الحيوية والمصانع في الرياض.</p>
        """
    },
    {
        "filename": "توريد-لوحات-تحكم-مضخات.html",
        "title": "توريد وتصنيع لوحات تحكم مضخات (MDB, PLC, VFD) بالرياض",
        "badge": "لوحات تحكم",
        "h1": "تصنيع وتوريد لوحات تحكم مضخات مياه وحريق بمواصفات عالمية",
        "description": "تصميم وتصنيع لوحات تحكم MDB و PLC للمضخات (عادية, ستار دلتا, انفرتر VFD). توريد Schneider و ABB مع ضمان كامل في السعودية.",
        "keywords": "لوحات تحكم مضخات, تصنيع لوحات MDB, لوحات PLC, لوحات VFD, شنايدر, ABB",
        "content": """
            <p class="lead">اللوحة الكهربائية هي العقل المدبر لنظام الضخ. أي خلل فيها قد يؤدي لاحتراق المحركات أو فشل النظام بالكامل. نحن نصمم لوحات تحكم ذكية تحمي استثماراتك.</p>
            
            <h2>أنواع اللوحات التي نقوم بتصنيعها</h2>
            <p>نلبي جميع المتطلبات التقنية للمشاريع:</p>
            <ul>
                <li><strong>لوحات VFD (Inverter):</strong> لتوفير استهلاك الكهرباء وتنظيم ضغط المياه بدقة.</li>
                <li><strong>لوحات ستار دلتا (Star-Delta):</strong> للبدء الآمن للمحركات الكبيرة وتقليل تيار البدء.</li>
                <li><strong>لوحات PLC:</strong> للتحكم الآلي الكامل والربط مع أنظمة BMS.</li>
                <li><strong>لوحات ATS:</strong> للتحويل التلقائي بين المولد والكهرباء العامة.</li>
            </ul>

            <h2>مكونات ذات جودة عالية</h2>
            <p>نعتمد في تصنيعنا على أفضل الماركات العالمية مثل Schneider Electric, ABB, و LS، لضمان استقرار الأداء وسهولة الصيانة مستقبلاً.</p>

            <h2>طلب عرض سعر</h2>
            <p>تواصل معنا لتزويدنا بالمواصفات الفنية المطلوبة للوحة التحكم، وسنقوم بتوفير عرض سعر منافس خلال 24 ساعة.</p>
        """
    }
]

template = """<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title}</title>
    <meta name="description" content="{description}">
    <meta name="keywords" content="{keywords}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="../index.html" class="logo">
                    <img src="../media/brilliantcrystal-hd.png?v=1769376863" alt="روائع الكريستال" class="logo-img">
                    <span class="logo-text">روائع الكريستال</span>
                </a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="../index.html">الرئيسية</a></li>
                    <li><a href="../about.html">من نحن</a></li>
                    <li class="dropdown">
                        <a href="../services.html">خدماتنا</a>
                        <ul class="dropdown-menu">
                            <li><a href="../services.html#mechanical">أعمال ميكانيكية</a></li>
                            <li><a href="../services.html#electrical">أعمال كهربائية</a></li>
                            <li><a href="../services.html#winding">لف محركات</a></li>
                        </ul>
                    </li>
                    <li><a href="../projects.html">أعمالنا</a></li>
                    <li><a href="../blog.html" class="active">المقالات</a></li>
                    <li><a href="../contact.html">تواصل معنا</a></li>
                </ul>
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                    <span></span><span></span><span></span>
                </button>
            </nav>
        </div>
    </header>

    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">{badge}</span>
                <h1>{h1}</h1>
                <p>30 يناير 2026 • فريق روائع الكريستال</p>
            </div>
        </div>
    </section>

    <article class="blog-article">
        <div class="container">
            <div class="article-wrapper">
                <div class="article-image">
                    <img src="../media/hero-mechanic-pumps.png" alt="{h1}">
                </div>
                <div class="article-body">
                    {content}
                </div>
                <div class="article-cta">
                    <h3>هل تحتاج لمساعدة متخصصة؟</h3>
                    <p>فريقنا الهندسي جاهز لتقديم أفضل الحلول لمشروعك.</p>
                    <a href="tel:0550698111" class="btn btn-primary">اتصل الآن 0550698111</a>
                </div>
                <div class="article-back">
                    <a href="../blog.html" class="back-link">← العودة للمدونة</a>
                </div>
            </div>
        </div>
    </article>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">
                        <img src="../media/brilliantcrystal-hd.png?v=1769376863" alt="روائع الكريستال" class="logo-img">
                        <span class="logo-text" style="color: white;">روائع الكريستال</span>
                    </div>
                    <p>مؤسسة رائدة في مجال المقاولات الكهروميكانيكية، نسعى دائماً لتقديم أفضل الخدمات والحلول المبتكرة لعملائنا.</p>
                    <div class="social-links">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>روابط سريعة</h4>
                    <ul>
                        <li><a href="../index.html">الرئيسية</a></li>
                        <li><a href="../about.html">من نحن</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2026 مؤسسة روائع الكريستال. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>
"""

os.makedirs("blog", exist_ok=True)
for art in articles:
    with open(os.path.join("blog", art["filename"]), "w", encoding="utf-8") as f:
        f.write(template.format(**art))
    print(f"Generated: {art['filename']}")
