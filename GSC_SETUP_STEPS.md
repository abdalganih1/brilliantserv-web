# 🔐 خطوات استخراج ملف الصلاحيات (credentials.json)

للحصول على الملف الذي يسمح للذكاء الاصطناعي (AI Analysis) بقراءة بيانات Google Search Console، يجب أن نمر عبر "Google Cloud Platform" لأنها هي المسؤولة عن الصلاحيات البرمجية (API).

**⚠️ ملاحظة مهمة:** إذا وجدت هذه الخطوات طويلة، يمكنك ببساطة الذهاب لصفحة Search Console والضغط على **Export** (أعلى اليمين) ثم إرسال ملف Excel لي. لكن الخطوات التالية أفضل لأنها تجعلني أحدث البيانات تلقائياً مستقبلاً!

---

### الخطوة 1: إنشاء مشروع وتفعيل الـ API
1. افتح صفحة [Google Cloud Console](https://console.cloud.google.com/) (في تبويب جديد).
2. من الشريط العلوي، اختر مشروعاً موجوداً أو اضغط **"New Project"** وسمّه مثلاً `BrilliantServ-SEO`.
3. في مربع البحث بالأعلى، اكتب: `Google Search Console API`.
4. اضغط على النتيجة، ثم اضغط زر **ENABLE** (تفعيل).

### الخطوة 2: إنشاء حساب خدمة (Service Account)
1. بعد التفعيل، اذهب للقائمة الجانبية: **APIs & Services** > **Credentials**.
2. اضغط **+ CREATE CREDENTIALS** (أعلى الصفحة) واختار **Service Account**.
3. املأ الاسم (مثلاً: `seo-agent`) ثم اضغط **Create and Continue**.
4. في خانة Role، اختر **Owner** (أو Project > Viewer تكفي)، ثم اضغط **Done**.

### الخطوة 3: تحميل ملف المفتاح (JSON)
1. في صفحة Credentials، ستجد بريداً إلكترونياً جديداً ظهر تحت قسم "Service Accounts" (يشبه هذا: `seo-agent@project-id.iam.gserviceaccount.com`).
2. 📋 **انسخ هذا البريد الآن! سنحتاجه في الخطوة 4.**
3. اضغط على أيقونة القلم (Edit) أو اضغط على اسم الحساب للدخول لإعداداته.
4. اذهب لتبويب **KEYS** (بالأعلى).
5. اضغط **ADD KEY** > **Create new key**.
6. اختر **JSON** ثم اضغط **Create**.
7. ✅ **سيتم تحميل ملف `json` تلقائياً لجهازك.** هذا هو الملف المطلوب!
   *   اعد تسميته إلى `credentials.json`.
   *   ضعه في مجلد المشروع الرئيسي: `c:\Users\Abdalgani\Documents\BrilliantServ\`

### الخطوة 4: (الأهم) ربط الحساب بـ Search Console
بدون هذه الخطوة، الملف لن يعمل حتى لو حملته!

1. ارجع لموقع [Google Search Console](https://search.google.com/search-console).
2. اختر موقع `brilliantserv.com` من القائمة.
3. اذهب إلى **Settings** (الإعدادات) في القائمة اليسرى.
4. اضغط على **Users and permissions** (المستخدمون والأذونات).
5. اضغط زر **ADD USER** (إضافة مستخدم).
6. 📋 ألصق **البريد الإلكتروني الطويل** الذي نسخته في الخطوة 3 (الذي ينتهي بـ `iam.gserviceaccount.com`).
7. اختر الصلاحية: **Full** (أو Restricted، لكن Full أضمن).
8. اضغط **Add**.

---

**🎉 انتهينا!**
الآن، فقط تأكد أن ملف `credentials.json` موجود بجانب الملفات، وأخبرني لأقوم بتشغيل التحليل.
