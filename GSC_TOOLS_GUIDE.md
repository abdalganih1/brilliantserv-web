# 🔍 دليل أدوات Google Search Console للذكاء الاصطناعي

> هذا الملف مرجع لأي AI Agent يعمل على المشروع. يحتوي على كيفية استخدام أدوات التحليل.

---

## 📁 الأدوات المتاحة

| الأداة | الموقع | الوظيفة |
|--------|--------|---------|
| `gsc_analyzer.py` | الجذر | تحليل شامل + مقارنة فترات |
| `gsc_extractor.py` | الجذر | استخراج بيانات خام |
| `seo_comprehensive_audit.py` | `tools/` | تحليل SEO شامل + تغطية الكلمات المفتاحية |
| `gsc_indexing.py` | `tools/` | طلب فهرسة الصفحات الجديدة من Google |
| `gsc_performance.py` | `tools/` | **جديد** - فحص ترتيب الكلمات المفتاحية وأداء الصفحات |

---

## 🆕 أداة فحص الترتيب (4 فبراير 2026)

### gsc_performance.py

أداة لفحص ترتيب الكلمات المفتاحية وأداء الصفحات من Google Search Console.

**المميزات:**
- ✅ فحص ترتيب كلمة مفتاحية معينة
- ✅ فحص أداء صفحة معينة
- ✅ عرض أفضل الكلمات المفتاحية للموقع
- ✅ عرض Clicks, Impressions, CTR, Position
- ✅ تصدير النتائج إلى JSON

**الاستخدام:**
```bash
# فحص ترتيب كلمة مفتاحية
python tools/gsc_performance.py --keyword "لوحات التحكم الكهربائية"

# فحص أداء صفحة معينة
python tools/gsc_performance.py --url "https://brilliantserv.com/لوحات-التحكم-الكهربائية/"

# عرض أفضل 20 كلمة للموقع
python tools/gsc_performance.py --top 20

# عرض أفضل كلمات لصفحة معينة
python tools/gsc_performance.py --url "https://brilliantserv.com/blog/" --top 10

# تحديد عدد الأيام (افتراضي: 28)
python tools/gsc_performance.py --keyword "لوحات التحكم" --days 7
```

**مثال على المخرجات:**
```
📊 GSC Performance Report - Keyword Analysis
🔍 Keyword: لوحات التحكم الكهربائية
📅 Period: 2026-01-07 to 2026-02-04 (28 days)

Query                                              Position   Clicks     Impr      CTR
------------------------------------------------------------------------------------------
لوحات التحكم الكهربائية                            🟡   15.2       12      450     2.7%
لوحات التحكم الكهربائية في الرياض                   🔴   28.5        3      120     2.5%
------------------------------------------------------------------------------------------
TOTAL                                                    -       15      570
```

> [!NOTE]
> Legend: 🟢 Top 10 | 🟡 Top 20 | 🔴 Below 20

---

## 📊 أداة التحليل الشامل (4 فبراير 2026)

### seo_comprehensive_audit.py

أداة تحليل SEO متقدمة تفحص:
- ✅ تغطية الكلمات المفتاحية (مقارنة مع SEO.md)
- ✅ Meta Tags (Title, Description, Keywords)
- ✅ JSON-LD Structured Data
- ✅ Heading Structure (H1-H6)
- ✅ Images Alt Text
- ✅ Internal/External Links
- ✅ Word Count

**الاستخدام:**
```bash
# تقرير تغطية الكلمات المفتاحية
python tools/seo_comprehensive_audit.py --keyword-report

# تحليل كامل لجميع المقالات
python tools/seo_comprehensive_audit.py

# تحليل مقال واحد
python tools/seo_comprehensive_audit.py --single filename.php
```

**آخر نتائج (4 فبراير 2026):**
| المقياس | القيمة |
|---------|--------|
| إجمالي المقالات | 100 |
| تغطية الكلمات | 76.2% (61/80) |
| كلمات غير مغطاة | 19 |

---

## 🔄 أداة طلب الفهرسة

### gsc_indexing.py

تستخدم Google Indexing API لطلب فهرسة الصفحات الجديدة فوراً.

**الاستخدام:**
```bash
# فهرسة صفحة واحدة
python tools/gsc_indexing.py --url https://brilliantserv.com/blog/article.php

# فهرسة جميع المقالات الجديدة (آخر 7 أيام)
python tools/gsc_indexing.py --new-articles

# فهرسة من ملف
python tools/gsc_indexing.py --from-file urls.txt
```

> [!NOTE]
> تحتاج صلاحيات Indexing API في Service Account

---

## ⚙️ المتطلبات

### 1. ملف الصلاحيات
```
credentials/credentials.json
```
> 📋 إذا لم يكن موجوداً، راجع `GSC_SETUP_STEPS.md`

### 2. المكتبات
```bash
pip install google-api-python-client google-auth pandas
```

---

## 🚀 أوامر التشغيل

### تحليل شامل (الموصى به)
```bash
python gsc_analyzer.py
```

**المخرجات:**
- مقارنة آخر 24 ساعة مقابل 30 يوم
- أفضل 10 كلمات مفتاحية
- أفضل 10 صفحات
- تحليل الأجهزة (موبايل/كمبيوتر)
- أفضل 5 دول
- ملف JSON بالتقرير الكامل

### استخراج بيانات خام
```bash
python gsc_extractor.py
```

**المخرجات:**
- ملف CSV بالبيانات الخام

---

## 📊 تفسير النتائج

### مؤشرات إيجابية 🟢
| المؤشر | التفسير |
|--------|---------|
| تحسن الترتيب | الموقع يصعد في نتائج البحث |
| زيادة CTR | العنوان والوصف جذابان |
| زيادة النقرات | المحتوى يلبي نية البحث |

### مؤشرات سلبية 🔴
| المؤشر | التفسير | الحل |
|--------|---------|------|
| انخفاض CTR | الوصف ضعيف | تحسين Meta Description |
| تراجع الترتيب | المنافسة أو مشكلة تقنية | فحص Core Web Vitals |
| انخفاض الظهور | محتوى غير متوافق | تحديث المحتوى |

---

## 🤖 متى يستخدم الـ AI هذه الأدوات؟

1. **بداية أي جلسة SEO**: شغّل `gsc_analyzer.py` لفهم الوضع الحالي
2. **بعد تغيير كبير** (مثل الانتقال من WordPress): انتظر أسبوع ثم قارن
3. **قبل كتابة محتوى**: راجع الكلمات المفتاحية الأعلى أداءً
4. **استكشاف المشاكل**: إذا أبلغ العميل عن انخفاض الزيارات

---

## 📅 جدول المتابعة المقترح

| التاريخ | المهمة | الأمر |
|---------|--------|-------|
| كل أسبوع | تقرير أداء | `python gsc_analyzer.py` |
| بعد كل تحديث كبير | مقارنة قبل/بعد | مقارنة ملفات JSON |
| شهرياً | تقرير شامل للعميل | تصدير Excel من GSC |

---

## 🔗 ملفات ذات صلة

- [GSC_SETUP_STEPS.md](./GSC_SETUP_STEPS.md) - إعداد الصلاحيات
- [SSH_GUIDE.md](./ssh_connection/SSH_GUIDE.md) - النشر والتحديث
- [README.md](./templates/template-3/README.md) - بنية المشروع

---

*آخر تحديث: 31 يناير 2026*
