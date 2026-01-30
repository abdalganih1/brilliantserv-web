import json
import os
import datetime

# List of topics from CONTENT_PLAN.md
topics = [
    {
        "slug": "booster-pump-repair",
        "title": "تصليح مضخات الدفع (Booster) في الرياض",
        "category": "مضخات المياه",
        "keyword": "تصليح مضخات الدفع",
        "image": "pump-repair-north-riyadh.webp" # Placeholder or reuse
    },
    {
        "slug": "submersible-pump-problems",
        "title": "مشاكل الغطاسات وحلها: دليل شامل",
        "category": "مضخات المياه",
        "keyword": "مشاكل الغطاسات",
        "image": "weak-water-pressure.webp"
    },
    {
        "slug": "star-delta-panel-manufacturing",
        "title": "تصنيع لوحات ستار دلتا للمصانع والمزارع",
        "category": "لوحات التحكم",
        "keyword": "لوحات ستار دلتا",
        "image": "control-panel-prices-2026.webp"
    },
    {
        "slug": "vfd-programming-pumps",
        "title": "برمجة انفرتر VFD للمضخات: توفير الطاقة والمال",
        "category": "لوحات التحكم",
        "keyword": "برمجة انفرتر VFD",
        "image": "vfd-programming.webp"
    },
    {
        "slug": "control-panel-prices-2026",
        "title": "أسعار لوحات التحكم الكهربائية 2026 في السعودية",
        "category": "لوحات التحكم",
        "keyword": "أسعار لوحات التحكم",
        "image": "control-panel-prices.webp"
    },
    {
        "slug": "central-chiller-maintenance",
        "title": "صيانة تشيلرات مركزي: خطوات تضمن كفاءة التبريد",
        "category": "التكييف والتهوية",
        "keyword": "صيانة تشيلرات",
        "image": "chiller-maintenance.webp"
    },
    {
        "slug": "ac-duct-cleaning",
        "title": "تنظيف دكت مكيفات بالرياض: تنفس هواءً نقياً",
        "category": "التكييف والتهوية",
        "keyword": "تنظيف دكت مكيفات",
        "image": "duct-cleaning.webp"
    },
    {
        "slug": "industrial-exhaust-fan-installation",
        "title": "تركيب مراوح شفط صناعية للمستودعات والمطابخ",
        "category": "التكييف والتهوية",
        "keyword": "مراوح شفط صناعية",
        "image": "industrial-fans.webp"
    },
    {
        "slug": "jockey-fire-pump-maintenance",
        "title": "صيانة مضخات الحريق جوكي (Jockey Pump)",
        "category": "أنظمة الحريق",
        "keyword": "صيانة مضخات الحريق",
        "image": "fire-pump-maintenance.webp"
    },
    {
        "slug": "fire-network-filling",
        "title": "تعبئة شبكة الحريق واختبار الضغط",
        "category": "أنظمة الحريق",
        "keyword": "تعبئة شبكة الحريق",
        "image": "fire-network.webp"
    }
]

# Helper to generate dummy content structure
def generate_content(topic):
    return {
        "slug": topic['slug'],
        "title": topic['title'],
        "h1": topic['title'],
        "meta_title": f"{topic['title']} - روائع الكريستال",
        "meta_description": f"مقالة شاملة عن {topic['title']}. نقدم أفضل خدمات {topic['keyword']} في الرياض وجدة. اتصل بنا 0550698111.",
        "keywords": f"{topic['keyword']}, صيانة, تركيب, السعودية",
        "keyword": topic['keyword'],
        "category": topic['category'],
        "image_filename": topic['image'], # Generator expects just filename
        "image_alt": topic['title'],
        "cta_title": "هل تحتاج مساعدة؟",
        "cta_text": "تواصل مع خبرائنا الآن للحصول على استشارة مجانية وعرض سعر.",
        "content_structure": [
            {
                "type": "paragraph",
                "content": f"<p class='lead'>تعتبر {topic['keyword']} من الخدمات الأساسية التي نقدمها في مؤسسة روائع الكريستال. في هذا المقال، سنناقش أهم الجوانب التقنية.</p>"
            },
            {
                "type": "h2",
                "content": "لماذا تختار خدماتنا؟"
            },
            {
                "type": "list",
                "items": [
                    "فريق فني متخصص ومدرب.",
                    "استخدام قطع غيار أصلية.",
                    "ضمان على العمل والتنفيذ."
                ]
            },
            {
                "type": "h2",
                "content": "تفاصيل الخدمة"
            },
            {
                "type": "paragraph",
                "content": "نحن نضمن لك جودة عالية وسرعة في الإنجاز. تواصل معنا اليوم لمعرفة المزيد."
            }
        ],
        "faq": [
            {
                "question": f"ما هو سعر {topic['keyword']}؟",
                "answer": "الأسعار تعتمد على حجم العمل ونوع المعدات. اتصل بنا للحصول على معاينة مجانية."
            },
            {
                "question": "هل تقدمون ضمان؟",
                "answer": "نعم، نقدم ضمان شامل على جميع أعمالنا."
            }
        ]
    }

new_articles_data = [generate_content(t) for t in topics]

# Load existing
path = r"c:\Users\Abdalgani\Documents\BrilliantServ\tools\content_engine\articles.json"
if os.path.exists(path):
    with open(path, 'r', encoding='utf-8') as f:
        existing = json.load(f)
else:
    existing = []

# Merge
slugs = {a['slug'] for a in existing}
count = 0
for a in new_articles_data:
    if a['slug'] not in slugs:
        existing.append(a)
        slugs.add(a['slug'])
        count += 1

# Save
with open(path, 'w', encoding='utf-8') as f:
    json.dump(existing, f, ensure_ascii=False, indent=4)

print(f"Added {count} new articles to articles.json")
