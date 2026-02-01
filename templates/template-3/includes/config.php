<?php
/**
 * Site Configuration - إعدادات الموقع
 * يتم استدعاء هذا الملف في بداية كل صفحة
 */

// معلومات الموقع الأساسية
$site_name = "روائع الكريستال";
$site_name_full = "مؤسسة روائع الكريستال للمقاولات الكهروميكانيكية";
$site_url = "https://brilliantserv.com";
$site_year = "2026";

// معلومات التواصل
$phone_primary = "0550698111";
$phone_secondary = "0501870643";
$phone_landline = "0114160614";
$email = "info@brilliantcrystal.sa";
$whatsapp = "966550698111";

// العنوان
$address = "الرياض - حي المصفاة، طريق الخرج، المملكة العربية السعودية";
$geo_region = "SA-01";
$geo_placename = "Riyadh";

// مسارات الأصول
$logo_path = "media/brilliantcrystal-hd.webp";
$logo_version = "?v=1769376863";

// روابط التواصل الاجتماعي
$social_twitter = "https://twitter.com/brilliantserv";
$social_youtube = "https://youtube.com/@brilliantserv";
$social_instagram = "https://instagram.com/brilliantserv";

// Google Verification
$google_verification = "-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo";

// دالة مساعدة لتحديد الصفحة النشطة
function isActive($page, $current)
{
    return ($page === $current) ? 'active' : '';
}
?>