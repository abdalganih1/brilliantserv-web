import json
import os

JSON_PATH = r"C:\\Users\\Abdalgani\\Documents\\BrilliantServ\\tools\\content_engine\\articles.json"

# High-Quality Content Dictionary
CONTENT_UPDATES = {
    "booster-pump-repair": {
        "content_structure": [
            {
                "type": "paragraph",
                "content": "<p class='lead'>مضخات الدفع (Booster Pumps) هي عصب شبكة المياه في المباني الشاهقة والفنادق. تعطلها يعني انقطاع المياه عن الأدوار العليا. في روائع الكريستال، نقدم خدمة تصليح فورية لضمان استمرار تدفق المياه.</p>"
            },
            {
                "type": "h2",
                "content": "أشهر أعطال مضخات البوستر"
            },
            {
                "type": "paragraph",
                "content": "من خلال خبرتنا الميدانية، تواجه هذه المضخات مشاكل متكررة مثل:"
            },
            {
                "type": "list",
                "items": [
                    "<strong>تلف البالونات (Pressure Tanks):</strong> يؤدي إلى تشغيل المضخة وإيقافها بشكل متكرر وسريع (Tcycling)، مما يحرق المحرك.",
                    "<strong>تسريب في الصوفة (Mechanical Seal):</strong> يظهر على شكل ماء يقطر أسفل المضخة.",
                    "<strong>مشاكل لوحة التحكم:</strong> عدم التبديل بين المضخات (Alternation) مما يستهلك مضخة واحدة ويترك الأخرى."
                ]
            },
            {
                "type": "h2",
                "content": "لماذا يجب صيانة البوستر فوراً؟"
            },
            {
                "type": "paragraph",
                "content": "إهمال صيانة نظام البوستر لا يؤدي فقط لانقطاع المياه، بل قد يسبب انفجار في المواسير القديمة بسبب اختلال الضغط (Water Hammer). صيانتنا تشمل فحص ضغط البالونات، ضبط مفاتيح الضغط (Pressure Switches)، وفحص الامبيرات."
            },
            {
                "type": "paragraph",
                "content": "نستخدم قطع غيار أصلية من ماركات عالمية مثل <strong>Grundfos</strong> و <strong>Ebara</strong> و <strong>KSB</strong> لضمان أطول عمر افتراضي."
            }
        ],
        "meta_description": "تصليح وصيانة مضخات البوستر (Booster) بالرياض. حل مشاكل ضعف الضغط، استبدال البالونات، وصيانة لوحات التحكم بأيدي مهندسين مختصين. اتصل 0550698111"
    },
    "submersible-pump-problems": {
        "content_structure": [
            {
                "type": "paragraph",
                "content": "<p class='lead'>الغطاسات (Submersible Pumps) تعمل في ظروف قاسية تحت الماء، مما يجعل صيانتها تحدياً خاصاً. هل توقف الغطاس فجأة؟ أو أصبح صوته عالياً؟ إليك الدليل الشامل لتشخيص المشكلة.</p>"
            },
            {
                "type": "h2",
                "content": "5 علامات تدل على قرب احتراق الغطاس"
            },
            {
                "type": "list",
                "items": [
                    "<strong>نزول القاطع الكهربائي (Ttrip):</strong> بمجرد تشغيل الغطاس يفصل الكهرباء، وهذا يعني وجود تماس داخلي (Short Circuit).",
                    "<strong>ضعف ضخ المياه:</strong> قد يكون بسبب انسداد مصفاة السحب بالأتربة أو تآكل الريش (Impellers).",
                    "<strong>حرارة زائدة في الكابل:</strong> تدل على سحب تيار عالي (High Ampere) نتيجة حمل زائد أو مشكلة ميكانيكية.",
                    "<strong>وجود زيت في الخزان:</strong> يعني تلف غرفة الزيت وتسرب زيت التبريد إلى مياه الشرب."
                ]
            },
            {
                "type": "h2",
                "content": "كيف نحمي الغطاس من التلف؟"
            },
            {
                "type": "paragraph",
                "content": "ننصح دائماً بتركيب <strong>لوحة حماية</strong> تحتوي على (Overload) و (Phase Failure) لحماية الغطاس من نقص الكهرباء أو سقوط إحدى الفازات. كما يجب تنظيف الخزان دورياً لمنع تراكم الطين الذي يخنق الغطاس."
            },
             {
                "type": "paragraph",
                "content": "فريقنا مختص في سحب الغطاسات وفحصها ولف المحركات المحروقة مع الضمان."
            }
        ],
        "meta_description": "دليل حل مشاكل الغطاسات: أسباب نزول القاطع، ضعف الضخ، واحتراق المحرك. خدمة سحب وصيانة الغطاسات في الرياض مع الضمان. اتصل 0550698111"
    },
    "star-delta-panel-manufacturing": {
        "content_structure": [
            {
                "type": "paragraph",
                "content": "<p class='lead'>لوحات ستار دلتا (Star-Delta) هي الحل الأمثل لتشغيل المحركات الكبيرة (فوق 15 حصان) لحمايتها من تيار البدء العالي. نحن في روائع الكريستال نصمم ونجمع أفضل اللوحات الصناعية.</p>"
            },
            {
                "type": "h2",
                "content": "مكونات لوحة الستار دلتا القياسية"
            },
            {
                "type": "paragraph",
                "content": "نحرص على استخدام مكونات أوروبية (Schneider, ABB) لضمان الاستدامة:"
            },
            {
                "type": "list",
                "items": [
                    "<strong>3 كونتاكتورات رئيسية:</strong> (Main, Delta, Star) تتحمل الحمل الكامل.",
                    "<strong>مؤقت زمني (Timer):</strong> للتحويل الدقيق من ستار إلى دلتا.",
                    "<strong>قواطع حماية (Overload Relay):</strong> لحماية المحرك من الحمل الزائد.",
                    "<strong>فاز فيلير (Phase Sequence):</strong> لمنع تشغيل المحرك في حال نقص أو قلب الفازات."
                ]
            },
            {
                "type": "h2",
                "content": "لماذا تختار لوحاتنا؟"
            },
            {
                "type": "paragraph",
                "content": "نقدم تصميم هندسي يراعي التهوية الجيدة للوحة، وترتيب الأسلاك (Cable Management)، مع مخطط كهربائي (Diagram) ملصق على الباب لسهولة الصيانة مستقبلاً. لوحاتنا مناسبة للمزارع، المصانع، ومضخات الحريق."
            }
        ],
        "meta_description": "تصنيع وصيانة لوحات ستار دلتا (Star-Delta) للمضخات والمصانع. مكونات أوروبية أصلية (Schneider/ABB) مع ضمان وضبط هندسي دقيق. اتصل 0550698111"
    }
}

def upgrade_articles():
    print("🚀 Upgrading Articles Content...")
    
    with open(JSON_PATH, 'r', encoding='utf-8') as f:
        articles = json.load(f)
    
    updated_count = 0
    
    for article in articles:
        slug = article.get('slug')
        if slug in CONTENT_UPDATES:
            print(f"🔹 Updating content for: {slug}")
            # Merge updates
            update_data = CONTENT_UPDATES[slug]
            article['content_structure'] = update_data['content_structure']
            article['meta_description'] = update_data['meta_description']
            # Ensure skip is false so it generates
            article['skip_page_generation'] = False
            updated_count += 1
            
    if updated_count > 0:
        with open(JSON_PATH, 'w', encoding='utf-8') as f:
            json.dump(articles, f, indent=4, ensure_ascii=False)
        print(f"✅ Successfully upgraded {updated_count} articles.")
    else:
        print("⚠️ No articles needed upgrading.")

if __name__ == "__main__":
    upgrade_articles()
