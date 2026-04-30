# 🧠 Agent.md - BrilliantServ

## 📊 نظرة عامة
- **نوع المشروع:** موقع شركة خدمات هندسية (كهروميكانيكية)
- **اللغة:** PHP/HTML/CSS/JS
- **الإطار:** Static PHP (No CMS — migrated from WordPress)
- **الاستضافة:** Hostinger VPS → SSH: `u571469569@76.13.12.6:65002`
- **الدومين:** brilliantserv.com
- **نقطة الدخول:** `templates/template-3/index.php`

## 🌲 المخطط الشجري
```
BrilliantServ/
├── templates/template-3/     # ← الكود الحي (يُرفع للسيرفر)
│   ├── .htaccess             # قواعد الـ redirect و rewrite
│   ├── robots.txt            # تعليمات الزحف
│   ├── sitemap.xml           # خريطة الموقع (666 سطر)
│   ├── 404.php               # معالجة 404 + Smart Redirect Map
│   ├── index.php / blog.php  # الصفحات الرئيسية
│   ├── blog/                 # مقالات المدونة (100+ مقال PHP)
│   ├── css/ / js/ / media/   # الأصول الثابتة
│   └── includes/             # Components مشتركة
├── credentials/              # Google Service Account credentials
├── tools/                    # أدوات SEO و GSC
│   ├── gsc_performance.py    # فحص ترتيب الكلمات المفتاحية
│   ├── gsc_indexing.py       # طلب فهرسة صفحات
│   └── seo_comprehensive_audit.py  # تحليل SEO شامل
├── gsc_analyzer.py           # تحليل شامل لـ GSC
├── GSC_TOOLS_GUIDE.md        # دليل أدوات GSC
└── ssh_connection/           # ملفات SSH و deploy
```

## 🛠️ أوامر التشغيل
| الأمر | الوظيفة |
|-------|---------|
| `python gsc_analyzer.py` | تقرير GSC شامل (24h vs 30d) |
| `python tools/gsc_performance.py --top 50` | أفضل 50 كلمة مفتاحية |
| `python tools/gsc_performance.py --keyword "X"` | فحص ترتيب كلمة معينة |
| `python tools/gsc_performance.py --url "URL"` | أداء صفحة معينة |
| `python tools/seo_comprehensive_audit.py` | تحليل SEO لكل المقالات |
| `ssh -p 65002 u571469569@76.13.12.6` | SSH للسيرفر (يحتاج password) |
| `git push` ثم `ssh ... "cd domains/.../public_html && git pull"` | النشر |

## 📦 البيانات الحالية من GSC (29 مارس 2026)
| المقياس | آخر 30 يوم |
|---------|------------|
| النقرات | 265 |
| الظهور | 13,997 |
| CTR | 1.89% |
| متوسط الترتيب | 6.4 |

### أفضل الكلمات (ترتيب + فرص)
| الكلمة | ترتيب | ظهور | نقرات | CTR | الحالة |
|--------|-------|------|-------|-----|--------|
| انواع المضخات | 1.9 🟢 | 887 | 22 | 2.5% | **CTR ضعيف رغم الترتيب!** |
| أنواع لوحات التحكم الكهربائية | 7.8 🟢 | 241 | 0 | **0%** 🔴 | **كارثة CTR!** |
| لوحات التحكم الكهربائية أنواع | 7.2 🟢 | 148 | 0 | **0%** 🔴 | نفس الصفحة |
| أسباب تعطل مضخة المازوت | — | 99 | 0 | 0% | **لا يوجد مقال مخصص!** |
| كهربنة الصناعة | — | 56 | 0 | 0% | **لا يوجد مقال!** |
| مضخات الرياض | ❌ | 0 | 0 | — | **لا بيانات = لا صفحة مخصصة** |

### أفضل الصفحات
| الصفحة | نقرات | ظهور | CTR |
|--------|-------|------|-----|
| /لف-المحركات-الكهربائية/ | 97 | 3,703 | 2.6% |
| /انواع-المضخات/ | 26 | 2,401 | 1.1% 🔴 |
| /لوحات-التحكم-الكهربائية/ | 17 | 1,461 | 1.1% 🔴 |
| /المخططات-الكهربائية-للمباني/ | 21 | 903 | 2.3% |

## ✅ ما تم إنجازه (29 مارس 2026)

### إصلاحات تقنية (Git commit: 3aaf15e)
1. **robots.txt** — إزالة حظر /tag/, /category/, /feed/ (كانت تمنع Google من رؤية 410)
2. **.htaccess** — إضافة 10 redirects + إصلاح nested URLs + Clean URLs بدون .php
3. **404.php** — توسيع redirect map بـ 6 روابط جديدة

### ⚠️ ما لم يُنفذ بعد (الجلسة القادمة)
1. **تحسين CTR** — إعادة كتابة Title/Description لأعلى 5 صفحات ظهوراً
2. **إنشاء 5 مقالات جديدة كاملة (2000+ كلمة لكل مقال):**
   - `blog/diesel-pump-failure-causes.php` — أسباب تعطل مضخة المازوت
   - `blog/factory-electrification.php` — كهربنة الصناعة / كهرباء المصانع
   - `blog/vfd-drive-repair.php` — إصلاح كروت الرفودرايف / VFD
   - `blog/electrical-contractor-best.php` — أفضل مقاول كهرباء بالرياض
   - `services/pumps-riyadh.php` — مضخات في الرياض (صفحة مدينة Local SEO)
3. **إضافة LocalBusiness Schema** في index.php
4. **تحديث sitemap.xml** بالصفحات الجديدة + تحديث lastmod
5. **بناء Internal Links** بين المقالات
6. **رفع التعديلات للسيرفر** عبر SSH (SSH timeout حالياً — يحتاج password)
7. **إرسال sitemap لـ GSC** عبر `tools/gsc_indexing.py`

## ⚠️ المشاكل المعروفة والحلول
| المشكلة | السبب | الحل | التاريخ |
|---------|-------|------|---------|
| 161 صفحة 404 في GSC | روابط WordPress + nested URLs | ✅ تم حلها في .htaccess | 29/03/2026 |
| 20 صفحة محظورة robots.txt | حظر /tag/ في robots.txt | ✅ تم إزالة الحظر | 29/03/2026 |
| 70 redirect في GSC | .html→.php + URLs بدون extension | ✅ Clean URLs + redirect fix | 29/03/2026 |
| GBP مصنف "Souvenir store" | خطأ في التصنيف | ❌ يحتاج تغيير يدوي من Dashboard | 29/03/2026 |
| SSH timeout | كلمة سر مطلوبة أو VPN | — | 29/03/2026 |
| CTR 0% على كلمات عالية الظهور | عناوين/أوصاف ضعيفة | ❌ يحتاج إعادة كتابة | 29/03/2026 |

## 🚫 أنماط يجب تجنبها
- لا تستخدم `npx wrangler` (ممنوع — راجع القواعد)
- لا تضع روابط نسبية في المقالات (تسبب nested URLs: `/صيانة/blog/article`)
- لا تحذف قاعدة 410 للخدمات المحذوفة (البوردات، الكروت، الانفرتر)
- لا تضف URLs بـ redirect في sitemap.xml

## 🔗 ملاحظات البيئة
- **Credentials:** `credentials/credentials.json` (Google Service Account)
- **GSC Site:** `https://brilliantserv.com/` (must include trailing slash)
- **GBP:** موجود — "روائع الكريستال للأعمال الكهروميكانيكية" — الرياض، حي المصفاة، طريق الخرج
- **العنوان:** الرياض - حي المصفاة، طريق الخرج
- **الهاتف:** 0550698111

## 📚 خطة الخطوة التالية (جلسة جديدة)
1. اقرأ هذا الملف أولاً
2. اقرأ `implementation_plan.md` في artifacts
3. شغّل `python gsc_analyzer.py` لتحديث البيانات
4. ابدأ بتحسين CTR (الأسرع أثراً)
5. ثم أنشئ المقالات الخمسة
6. ارفع للسيرفر + أرسل sitemap

## 🧹 آخر تنظيف: 2026-03-29
