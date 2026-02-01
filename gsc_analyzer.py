#!/usr/bin/env python3
"""
🔍 GSC Performance Analyzer - BrilliantServ
يقارن أداء الموقع بين آخر 24 ساعة وآخر 30 يوم
"""

import pandas as pd
from googleapiclient.discovery import build
from google.oauth2 import service_account
from datetime import datetime, timedelta
import os
import json

# Configuration
SCOPES = ['https://www.googleapis.com/auth/webmasters.readonly']
SITE_URL = 'https://brilliantserv.com/'

# Find credentials file
POSSIBLE_KEYS = [
    'credentials.json',
    'credentials/credentials.json',
    'client_secret.json',
    'service_account.json',
    'gsc_credentials.json'
]

def find_credentials():
    """البحث عن ملف الصلاحيات"""
    for key in POSSIBLE_KEYS:
        if os.path.exists(key):
            return key
    return None


def get_gsc_service():
    """إنشاء خدمة GSC"""
    key_file = find_credentials()
    if not key_file:
        print("❌ ERROR: لم يتم العثور على credentials.json")
        print("📋 يرجى تحميل ملف Service Account Key من Google Cloud Console")
        return None
    
    print(f"✅ Using credentials: {key_file}")
    creds = service_account.Credentials.from_service_account_file(key_file, scopes=SCOPES)
    return build('searchconsole', 'v1', credentials=creds)


def fetch_performance_data(service, start_date, end_date, dimensions=['query', 'page']):
    """جلب بيانات الأداء من GSC"""
    request = {
        'startDate': start_date,
        'endDate': end_date,
        'dimensions': dimensions,
        'rowLimit': 1000
    }
    
    try:
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        return response.get('rows', [])
    except Exception as e:
        print(f"❌ Error fetching data: {e}")
        return []


def fetch_date_comparison(service):
    """مقارنة آخر 24 ساعة مقابل آخر 30 يوم"""
    today = datetime.now()
    
    # آخر 24 ساعة (أمس لأن GSC يتأخر يوم)
    yesterday = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    day_before = (today - timedelta(days=2)).strftime('%Y-%m-%d')
    
    # آخر 30 يوم
    end_30 = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    start_30 = (today - timedelta(days=30)).strftime('%Y-%m-%d')
    
    print(f"\n📅 فترة 24 ساعة: {day_before} إلى {yesterday}")
    print(f"📅 فترة 30 يوم: {start_30} إلى {end_30}")
    
    # جلب البيانات الإجمالية (بدون dimensions للحصول على الإحصائيات الكلية)
    request_24h = {
        'startDate': day_before,
        'endDate': yesterday,
        'rowLimit': 1
    }
    
    request_30d = {
        'startDate': start_30,
        'endDate': end_30,
        'rowLimit': 1
    }
    
    try:
        response_24h = service.searchanalytics().query(siteUrl=SITE_URL, body=request_24h).execute()
        response_30d = service.searchanalytics().query(siteUrl=SITE_URL, body=request_30d).execute()
        
        return {
            'last_24h': response_24h.get('rows', [{}])[0] if response_24h.get('rows') else {},
            'last_30d': response_30d.get('rows', [{}])[0] if response_30d.get('rows') else {},
            'period_24h': f"{day_before} - {yesterday}",
            'period_30d': f"{start_30} - {end_30}"
        }
    except Exception as e:
        print(f"❌ Error: {e}")
        return None


def fetch_top_queries(service, days=30, limit=50):
    """جلب أفضل الكلمات المفتاحية"""
    today = datetime.now()
    end_date = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    start_date = (today - timedelta(days=days)).strftime('%Y-%m-%d')
    
    request = {
        'startDate': start_date,
        'endDate': end_date,
        'dimensions': ['query'],
        'rowLimit': limit
    }
    
    try:
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        return response.get('rows', [])
    except Exception as e:
        print(f"❌ Error fetching queries: {e}")
        return []


def fetch_top_pages(service, days=30, limit=50):
    """جلب أفضل الصفحات"""
    today = datetime.now()
    end_date = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    start_date = (today - timedelta(days=days)).strftime('%Y-%m-%d')
    
    request = {
        'startDate': start_date,
        'endDate': end_date,
        'dimensions': ['page'],
        'rowLimit': limit
    }
    
    try:
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        return response.get('rows', [])
    except Exception as e:
        print(f"❌ Error fetching pages: {e}")
        return []


def fetch_devices_breakdown(service, days=30):
    """تحليل حسب نوع الجهاز"""
    today = datetime.now()
    end_date = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    start_date = (today - timedelta(days=days)).strftime('%Y-%m-%d')
    
    request = {
        'startDate': start_date,
        'endDate': end_date,
        'dimensions': ['device'],
        'rowLimit': 10
    }
    
    try:
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        return response.get('rows', [])
    except Exception as e:
        print(f"❌ Error fetching devices: {e}")
        return []


def fetch_countries(service, days=30):
    """تحليل حسب البلد"""
    today = datetime.now()
    end_date = (today - timedelta(days=1)).strftime('%Y-%m-%d')
    start_date = (today - timedelta(days=days)).strftime('%Y-%m-%d')
    
    request = {
        'startDate': start_date,
        'endDate': end_date,
        'dimensions': ['country'],
        'rowLimit': 20
    }
    
    try:
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        return response.get('rows', [])
    except Exception as e:
        print(f"❌ Error fetching countries: {e}")
        return []


def generate_report(service):
    """إنشاء التقرير الكامل"""
    print("\n" + "="*60)
    print("🔍 GSC Performance Report - BrilliantServ")
    print("="*60)
    
    report = {
        'generated_at': datetime.now().isoformat(),
        'site': SITE_URL
    }
    
    # 1. مقارنة الفترات
    print("\n📊 جاري مقارنة الفترات...")
    comparison = fetch_date_comparison(service)
    if comparison:
        report['comparison'] = comparison
        
        data_24h = comparison['last_24h']
        data_30d = comparison['last_30d']
        
        print("\n" + "-"*50)
        print("📈 مقارنة الأداء:")
        print("-"*50)
        
        if data_24h and data_30d:
            # حساب المتوسط اليومي لآخر 30 يوم
            clicks_30d_daily = data_30d.get('clicks', 0) / 30
            impressions_30d_daily = data_30d.get('impressions', 0) / 30
            
            clicks_24h = data_24h.get('clicks', 0)
            impressions_24h = data_24h.get('impressions', 0)
            ctr_24h = data_24h.get('ctr', 0) * 100
            position_24h = data_24h.get('position', 0)
            
            ctr_30d = data_30d.get('ctr', 0) * 100
            position_30d = data_30d.get('position', 0)
            
            print(f"\n{'المقياس':<20} {'آخر 24 ساعة':>15} {'متوسط 30 يوم':>15} {'التغيير':>15}")
            print("-"*65)
            
            # النقرات
            click_change = ((clicks_24h - clicks_30d_daily) / clicks_30d_daily * 100) if clicks_30d_daily > 0 else 0
            click_emoji = "🟢" if click_change >= 0 else "🔴"
            print(f"{'النقرات':<20} {clicks_24h:>15.0f} {clicks_30d_daily:>15.1f} {click_emoji} {click_change:>+.1f}%")
            
            # الظهور
            imp_change = ((impressions_24h - impressions_30d_daily) / impressions_30d_daily * 100) if impressions_30d_daily > 0 else 0
            imp_emoji = "🟢" if imp_change >= 0 else "🔴"
            print(f"{'الظهور':<20} {impressions_24h:>15.0f} {impressions_30d_daily:>15.1f} {imp_emoji} {imp_change:>+.1f}%")
            
            # CTR
            ctr_change = ctr_24h - ctr_30d
            ctr_emoji = "🟢" if ctr_change >= 0 else "🔴"
            print(f"{'نسبة النقر CTR':<20} {ctr_24h:>14.2f}% {ctr_30d:>14.2f}% {ctr_emoji} {ctr_change:>+.2f}%")
            
            # الترتيب (أقل أفضل)
            pos_change = position_30d - position_24h
            pos_emoji = "🟢" if pos_change >= 0 else "🔴"
            print(f"{'متوسط الترتيب':<20} {position_24h:>15.1f} {position_30d:>15.1f} {pos_emoji} {pos_change:>+.1f}")
    
    # 2. أفضل الكلمات المفتاحية
    print("\n\n📝 أفضل 10 كلمات مفتاحية:")
    print("-"*50)
    queries = fetch_top_queries(service, limit=10)
    report['top_queries'] = queries
    for i, q in enumerate(queries[:10], 1):
        query = q.get('keys', [''])[0]
        clicks = q.get('clicks', 0)
        impressions = q.get('impressions', 0)
        ctr = q.get('ctr', 0) * 100
        position = q.get('position', 0)
        print(f"{i:2}. {query[:40]:<40} | نقرات: {clicks:>4} | ظهور: {impressions:>6} | CTR: {ctr:.1f}% | ترتيب: {position:.1f}")
    
    # 3. أفضل الصفحات
    print("\n\n📄 أفضل 10 صفحات:")
    print("-"*50)
    pages = fetch_top_pages(service, limit=10)
    report['top_pages'] = pages
    for i, p in enumerate(pages[:10], 1):
        page = p.get('keys', [''])[0].replace(SITE_URL, '/')
        clicks = p.get('clicks', 0)
        impressions = p.get('impressions', 0)
        print(f"{i:2}. {page[:50]:<50} | نقرات: {clicks:>4} | ظهور: {impressions:>6}")
    
    # 4. تحليل الأجهزة
    print("\n\n📱 تحليل حسب الجهاز:")
    print("-"*50)
    devices = fetch_devices_breakdown(service)
    report['devices'] = devices
    for d in devices:
        device = d.get('keys', [''])[0]
        clicks = d.get('clicks', 0)
        impressions = d.get('impressions', 0)
        ctr = d.get('ctr', 0) * 100
        device_ar = {'MOBILE': '📱 موبايل', 'DESKTOP': '💻 كمبيوتر', 'TABLET': '📲 تابلت'}.get(device, device)
        print(f"  {device_ar:<15} | نقرات: {clicks:>5} | ظهور: {impressions:>7} | CTR: {ctr:.2f}%")
    
    # 5. أفضل الدول
    print("\n\n🌍 أفضل 5 دول:")
    print("-"*50)
    countries = fetch_countries(service)
    report['countries'] = countries[:5]
    for i, c in enumerate(countries[:5], 1):
        country = c.get('keys', [''])[0]
        clicks = c.get('clicks', 0)
        impressions = c.get('impressions', 0)
        print(f"{i}. {country:<5} | نقرات: {clicks:>5} | ظهور: {impressions:>7}")
    
    # حفظ التقرير
    report_file = f"gsc_report_{datetime.now().strftime('%Y%m%d_%H%M%S')}.json"
    with open(report_file, 'w', encoding='utf-8') as f:
        json.dump(report, f, ensure_ascii=False, indent=2)
    print(f"\n\n✅ تم حفظ التقرير في: {report_file}")
    
    # تحليل المشاكل والإيجابيات
    print("\n" + "="*60)
    print("📋 ملخص التحليل:")
    print("="*60)
    
    analyze_issues_and_positives(report)
    
    return report


def analyze_issues_and_positives(report):
    """تحليل المشاكل والإيجابيات"""
    
    positives = []
    issues = []
    
    comparison = report.get('comparison', {})
    data_24h = comparison.get('last_24h', {})
    data_30d = comparison.get('last_30d', {})
    
    if data_24h and data_30d:
        clicks_30d_daily = data_30d.get('clicks', 0) / 30
        clicks_24h = data_24h.get('clicks', 0)
        
        impressions_30d_daily = data_30d.get('impressions', 0) / 30
        impressions_24h = data_24h.get('impressions', 0)
        
        ctr_24h = data_24h.get('ctr', 0)
        ctr_30d = data_30d.get('ctr', 0)
        
        position_24h = data_24h.get('position', 0)
        position_30d = data_30d.get('position', 0)
        
        # تحليل النقرات
        if clicks_24h > clicks_30d_daily:
            positives.append(f"🟢 النقرات اليومية تحسنت! ({clicks_24h:.0f} مقابل متوسط {clicks_30d_daily:.1f})")
        elif clicks_24h < clicks_30d_daily * 0.7:
            issues.append(f"🔴 انخفاض حاد في النقرات ({clicks_24h:.0f} مقابل {clicks_30d_daily:.1f})")
        
        # تحليل الظهور
        if impressions_24h > impressions_30d_daily:
            positives.append(f"🟢 الظهور تحسن! ({impressions_24h:.0f} مقابل متوسط {impressions_30d_daily:.1f})")
        elif impressions_24h < impressions_30d_daily * 0.7:
            issues.append(f"🔴 انخفاض في الظهور ({impressions_24h:.0f} مقابل {impressions_30d_daily:.1f})")
        
        # تحليل CTR
        if ctr_24h > ctr_30d:
            positives.append(f"🟢 نسبة النقر (CTR) تحسنت! ({ctr_24h*100:.2f}% مقابل {ctr_30d*100:.2f}%)")
        elif ctr_24h < ctr_30d * 0.8:
            issues.append(f"🔴 انخفاض في CTR ({ctr_24h*100:.2f}% مقابل {ctr_30d*100:.2f}%)")
        
        # تحليل الترتيب
        if position_24h < position_30d:
            positives.append(f"🟢 الترتيب تحسن! (الآن: {position_24h:.1f}، كان: {position_30d:.1f})")
        elif position_24h > position_30d + 2:
            issues.append(f"🔴 تراجع الترتيب (الآن: {position_24h:.1f}، كان: {position_30d:.1f})")
    
    # تحليل الصفحات
    pages = report.get('top_pages', [])
    if pages:
        top_page = pages[0]
        top_clicks = top_page.get('clicks', 0)
        if top_clicks > 50:
            positives.append(f"🟢 صفحة رائدة قوية ({top_clicks} نقرة)")
    
    # تحليل الأجهزة
    devices = report.get('devices', [])
    mobile_data = next((d for d in devices if d.get('keys', [''])[0] == 'MOBILE'), None)
    if mobile_data:
        mobile_ctr = mobile_data.get('ctr', 0) * 100
        if mobile_ctr < 1:
            issues.append(f"⚠️ CTR ضعيف على الموبايل ({mobile_ctr:.2f}%) - تحسين تجربة المستخدم مطلوب")
        elif mobile_ctr > 3:
            positives.append(f"🟢 أداء ممتاز على الموبايل (CTR: {mobile_ctr:.2f}%)")
    
    # طباعة النتائج
    print("\n✅ الإيجابيات:")
    if positives:
        for p in positives:
            print(f"   {p}")
    else:
        print("   لا توجد تحسينات ملحوظة")
    
    print("\n⚠️ المشاكل والتحسينات المطلوبة:")
    if issues:
        for i in issues:
            print(f"   {i}")
    else:
        print("   لا توجد مشاكل حرجة - أداء مستقر!")
    
    # توصيات بناءً على الانتقال من WordPress إلى HTML
    print("\n\n💡 توصيات خاصة بالانتقال من WordPress إلى HTML:")
    print("-"*50)
    print("""
   1. تأكد من وجود redirects 301 للروابط القديمة
   2. راجع ملف sitemap.xml وتأكد من إرساله لـ GSC
   3. تحقق من سرعة الموقع الجديد عبر PageSpeed Insights
   4. راقب أخطاء الـ 404 في تقرير Coverage
   5. تأكد من أن الـ canonical URLs صحيحة
   6. راجع structured data (JSON-LD) إن وجدت
    """)


if __name__ == '__main__':
    service = get_gsc_service()
    if service:
        generate_report(service)
    else:
        print("\n⚠️ لتشغيل هذا السكربت، تحتاج ملف credentials.json")
        print("راجع GSC_SETUP_STEPS.md للحصول على التعليمات")
