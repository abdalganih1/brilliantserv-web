#!/usr/bin/env python3
"""
AI-Powered Blog Article Enhancer
Uses Gemini API to generate custom content for each article
With multi-model rotation to avoid rate limits
"""

import os
import re
import json
import time
import requests
from pathlib import Path
from datetime import datetime
from itertools import cycle

# ============================================
# CONFIGURATION
# ============================================

GEMINI_API_KEY = "AIzaSyA2a9cGs6oJ85G6a1cQ2KNt6PtJiyIs57A"

# Multiple models for rotation to avoid rate limits
GEMINI_MODELS = [
    "gemini-3-flash-preview",
    "gemini-3-pro-preview",
    "gemini-2.5-pro",
    "gemini-flash-latest",
    "gemini-flash-lite-latest",
    "gemini-2.5-flash",
    "gemini-2.5-flash-lite",
]

# Create a cycle iterator for model rotation
model_cycle = cycle(GEMINI_MODELS)
current_model_idx = 0

BLOG_DIR = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog")
OUTPUT_LOG = Path(r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\ai_enhancement_log.json")

# PlantUML server
PLANTUML_SERVER = "http://www.plantuml.com/plantuml/svg/"

# ============================================
# GEMINI API FUNCTIONS
# ============================================

def get_next_model():
    """Get the next model in rotation"""
    global current_model_idx
    model = GEMINI_MODELS[current_model_idx % len(GEMINI_MODELS)]
    current_model_idx += 1
    return model

def call_gemini(prompt: str, max_retries: int = 3) -> str:
    """Call Gemini API with retry logic and model rotation"""
    
    for attempt in range(max_retries):
        model = get_next_model()
        endpoint = f"https://generativelanguage.googleapis.com/v1beta/models/{model}:generateContent"
        
        headers = {
            "Content-Type": "application/json",
            "X-goog-api-key": GEMINI_API_KEY
        }
        
        payload = {
            "contents": [{
                "parts": [{
                    "text": prompt
                }]
            }],
            "generationConfig": {
                "temperature": 0.8,
                "maxOutputTokens": 4096
            }
        }
        
        try:
            response = requests.post(endpoint, headers=headers, json=payload, timeout=90)
            
            if response.status_code == 429:  # Rate limited
                print(f"  ⚠️ Rate limited on {model}, switching model...")
                time.sleep(2)
                continue
                
            response.raise_for_status()
            
            data = response.json()
            if "candidates" in data and len(data["candidates"]) > 0:
                print(f"  🔄 Used: {model}")
                raw_text = data["candidates"][0]["content"]["parts"][0]["text"]
                return clean_response(raw_text)
            else:
                print(f"  ⚠️ Empty response from {model}")
                continue
                
        except requests.exceptions.RequestException as e:
            print(f"  ⚠️ Attempt {attempt + 1} ({model}) failed: {e}")
            if attempt < max_retries - 1:
                time.sleep(3)  # Longer wait between retries
    
    return ""

def clean_response(text: str) -> str:
    """Clean Gemini response from Markdown code blocks"""
    # Remove ```html, ```json, ```xml, ```
    text = re.sub(r'^```\w*\s*', '', text, flags=re.MULTILINE)
    text = re.sub(r'^```\s*', '', text, flags=re.MULTILINE)
    return text.strip()

# ============================================
# CONTENT ANALYSIS
# ============================================

def extract_article_info(filepath: Path) -> dict:
    """Extract key information from article"""
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract title
    title_match = re.search(r'\$page_title\s*=\s*["\']([^"\']+)["\']', content)
    title = title_match.group(1) if title_match else filepath.stem
    
    # Extract meta description
    desc_match = re.search(r'<meta name="description" content="([^"]+)"', content)
    description = desc_match.group(1) if desc_match else ""
    
    # Extract H2 headings
    headings = re.findall(r'<h2[^>]*>([^<]+)</h2>', content)
    
    # Count words (rough estimate)
    text_only = re.sub(r'<[^>]+>', '', content)
    word_count = len(text_only.split())
    
    # Detect article type
    filename_lower = filepath.name.lower()
    if any(x in filename_lower for x in ['pump', 'مضخ', 'booster', 'centrifugal', 'sewage']):
        article_type = "pump"
    elif any(x in filename_lower for x in ['motor', 'محرك', 'لف', 'winding']):
        article_type = "motor"
    elif any(x in filename_lower for x in ['fire', 'حريق', 'jockey']):
        article_type = "fire"
    elif any(x in filename_lower for x in ['panel', 'لوحة', 'control', 'plc', 'vfd']):
        article_type = "panel"
    else:
        article_type = "general"
    
    return {
        "filepath": str(filepath),
        "filename": filepath.name,
        "title": title,
        "description": description,
        "headings": headings,
        "word_count": word_count,
        "article_type": article_type,
        "content": content
    }

# ============================================
# CONTENT GENERATION PROMPTS
# ============================================

def generate_enhanced_content_prompt(article_info: dict) -> str:
    """Generate prompt for content enhancement"""
    return f"""أنت كاتب محتوى SEO متخصص في المجال الهندسي والكهروميكانيكي. مطلوب منك تحسين مقال موجود.

## معلومات المقال:
- العنوان: {article_info['title']}
- النوع: {article_info['article_type']}
- العناوين الفرعية الحالية: {', '.join(article_info['headings'][:5])}
- عدد الكلمات الحالي: {article_info['word_count']}

## المطلوب:
أنشئ المحتوى التالي بالعربية الفصحى مع مراعاة السوق السعودي:

### 1. فقرة افتتاحية قوية (100-150 كلمة)
- تبدأ بإحصائية أو سؤال جذاب
- تذكر "مؤسسة روائع الكريستال" كمرجع موثوق
- تتضمن الكلمات المفتاحية الرئيسية

### 2. قسم "لماذا هذا مهم؟" (150-200 كلمة)
- نقاط عملية ومفيدة
- أمثلة من الواقع السعودي
- ربط بخدمات الشركة

### 3. قسم "خطوات عملية" (200-250 كلمة)
- 5-7 خطوات مرقمة
- نصائح تقنية دقيقة
- تحذيرات مهمة

### 4. جدول مقارنة (HTML)
- 4-5 صفوف
- أعمدة: النوع | المميزات | الاستخدام | السعر التقريبي

### 5. قسم FAQ (5 أسئلة)
- أسئلة شائعة فعلية
- إجابات مختصرة ومفيدة
- متوافق مع Schema FAQ

## التنسيق:
- استخدم HTML مباشرة (h2, h3, p, ul, li, strong, table)
- لا تستخدم Markdown
- اجعل المحتوى جاهز للنسخ مباشرة

## ملاحظات:
- الجمهور: أصحاب المباني، المقاولين، الشركات في السعودية
- النبرة: مهنية ولكن ودية
- الهدف: إقناع القارئ بالتواصل مع روائع الكريستال
"""

def generate_faq_schema_prompt(article_info: dict) -> str:
    """Generate prompt for FAQ Schema"""
    return f"""أنت خبير SEO. أنشئ 5 أسئلة FAQ مع إجاباتها للمقال التالي:

العنوان: {article_info['title']}
النوع: {article_info['article_type']}

المطلوب:
1. 5 أسئلة شائعة وواقعية
2. إجابات مختصرة (50-100 كلمة لكل إجابة)
3. تضمين كلمات مفتاحية بشكل طبيعي
4. مناسب للسوق السعودي

أعطني الناتج بصيغة JSON فقط:
{{
    "faqs": [
        {{"question": "...", "answer": "..."}},
        ...
    ]
}}
"""

def generate_plantuml_prompt(article_info: dict) -> str:
    """Generate prompt for PlantUML diagram code"""
    return f"""أنت مهندس تقني. أنشئ كود PlantUML لمخطط توضيحي للمقال التالي:

العنوان: {article_info['title']}
النوع: {article_info['article_type']}

المطلوب:
- مخطط انسيابي (flowchart) أو مكونات (component diagram)
- يوضح العملية أو الأجزاء الرئيسية
- باللغة العربية
- بسيط وواضح

أعطني كود PlantUML فقط، بدون شرح:
@startuml
...
@enduml
"""

# ============================================
# PLANTUML DIAGRAM GENERATION
# ============================================

def encode_plantuml(plantuml_code: str) -> str:
    """Encode PlantUML code for URL"""
    import zlib
    import base64
    
    # PlantUML uses a custom encoding
    compressed = zlib.compress(plantuml_code.encode('utf-8'))
    
    # Custom base64 encoding for PlantUML
    plantuml_alphabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_"
    standard_alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/"
    
    b64 = base64.b64encode(compressed).decode('utf-8')
    encoded = b64.translate(str.maketrans(standard_alphabet, plantuml_alphabet))
    
    return encoded

def generate_diagram_svg(plantuml_code: str, output_path: Path) -> bool:
    """Generate SVG from PlantUML code"""
    try:
        encoded = encode_plantuml(plantuml_code)
        url = f"{PLANTUML_SERVER}~1{encoded}"
        
        response = requests.get(url, timeout=30)
        if response.status_code == 200:
            with open(output_path, 'w', encoding='utf-8') as f:
                f.write(response.text)
            return True
    except Exception as e:
        print(f"  ⚠️ Diagram generation failed: {e}")
    
    return False

# ============================================
# ARTICLE ENHANCEMENT
# ============================================

def enhance_article(filepath: Path, dry_run: bool = False) -> dict:
    """Enhance a single article with AI-generated content"""
    result = {
        "filename": filepath.name,
        "status": "pending",
        "changes": [],
        "error": None
    }
    
    try:
        # Extract article info
        article_info = extract_article_info(filepath)
        print(f"\n📝 Processing: {article_info['title'][:50]}...")
        
        # 1. Generate enhanced content
        print("  🤖 Generating enhanced content...")
        content_prompt = generate_enhanced_content_prompt(article_info)
        enhanced_content = call_gemini(content_prompt)
        
        if not enhanced_content:
            result["status"] = "failed"
            result["error"] = "Content generation failed"
            return result
        
        result["changes"].append("content_enhanced")
        
        # 2. Generate FAQ with Schema
        print("  📋 Generating FAQ...")
        faq_prompt = generate_faq_schema_prompt(article_info)
        faq_response = call_gemini(faq_prompt)
        
        if faq_response:
            result["changes"].append("faq_generated")
        
        # 3. Generate PlantUML diagram
        print("  📊 Generating diagram...")
        diagram_prompt = generate_plantuml_prompt(article_info)
        plantuml_code = call_gemini(diagram_prompt)
        
        if plantuml_code and "@startuml" in plantuml_code:
            # Extract just the PlantUML code
            match = re.search(r'@startuml.*?@enduml', plantuml_code, re.DOTALL)
            if match:
                plantuml_code = match.group(0)
                diagram_path = BLOG_DIR / "diagrams" / f"{filepath.stem}.svg"
                diagram_path.parent.mkdir(exist_ok=True)
                
                if generate_diagram_svg(plantuml_code, diagram_path):
                    result["changes"].append("diagram_created")
        
        # 4. Merge content into article
        if not dry_run:
            updated_content = merge_enhanced_content(
                article_info["content"],
                enhanced_content,
                faq_response
            )
            
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(updated_content)
            
            result["changes"].append("file_updated")
        
        result["status"] = "success"
        print(f"  ✅ Done: {', '.join(result['changes'])}")
        
    except Exception as e:
        result["status"] = "error"
        result["error"] = str(e)
        print(f"  ❌ Error: {e}")
    
    return result

def merge_enhanced_content(original: str, enhanced: str, faq_json: str) -> str:
    """Merge AI-generated content into article"""
    content = original
    
    # Find insertion point (after first </p> in article-body)
    body_match = re.search(r'(class="article-body"[^>]*>.*?</p>)', content, re.DOTALL)
    if body_match:
        insertion_point = body_match.end()
        
        # Create enhanced section
        enhanced_section = f'''
                    <!-- AI-Enhanced Content -->
                    <div class="ai-enhanced-content">
                        {enhanced}
                    </div>
'''
        content = content[:insertion_point] + enhanced_section + content[insertion_point:]
    
    # Add FAQ if available
    if faq_json:
        try:
            # Extract JSON from response
            json_match = re.search(r'\{[\s\S]*\}', faq_json)
            if json_match:
                faq_data = json.loads(json_match.group(0))
                if "faqs" in faq_data:
                    faq_html = generate_faq_html(faq_data["faqs"])
                    
                    # Insert before footer include
                    footer_pattern = r"(\s*<\?php\s*\n?\s*//?\s*Article data)"
                    content = re.sub(footer_pattern, faq_html + r'\1', content)
        except json.JSONDecodeError:
            pass
    
    return content

def generate_faq_html(faqs: list) -> str:
    """Generate FAQ HTML with Schema markup"""
    faq_items = ""
    schema_items = []
    
    for faq in faqs:
        faq_items += f'''
                        <div class="faq-item">
                            <h3>{faq["question"]}</h3>
                            <p>{faq["answer"]}</p>
                        </div>'''
        
        schema_items.append({
            "@type": "Question",
            "name": faq["question"],
            "acceptedAnswer": {
                "@type": "Answer",
                "text": faq["answer"]
            }
        })
    
    schema_json = json.dumps({
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": schema_items
    }, ensure_ascii=False, indent=2)
    
    return f'''
                    <!-- AI-Generated FAQ Section -->
                    <section class="faq-section">
                        <h2>❓ الأسئلة الشائعة</h2>
                        <div class="faq-list">{faq_items}
                        </div>
                    </section>
                    
                    <script type="application/ld+json">
                    {schema_json}
                    </script>
'''

# ============================================
# MAIN EXECUTION
# ============================================

def main():
    print("=" * 60)
    print("🤖 AI-Powered Blog Article Enhancer")
    print("=" * 60)
    
    # Get all PHP files
    php_files = sorted(BLOG_DIR.glob("*.php"))
    
    # Filter already processed
    processed = set()
    if OUTPUT_LOG.exists():
        with open(OUTPUT_LOG, 'r', encoding='utf-8') as f:
            log_data = json.load(f)
            processed = {r["filename"] for r in log_data.get("results", []) if r["status"] == "success"}
    
    # Filter files to process
    files_to_process = [f for f in php_files if f.name not in processed]
    
    print(f"\n📊 Found {len(php_files)} articles, {len(files_to_process)} need processing")
    
    # Limit for testing
    test_limit = int(os.environ.get("TEST_LIMIT", 5))
    if test_limit > 0:
        files_to_process = files_to_process[:test_limit]
        print(f"🧪 Test mode: Processing only {test_limit} articles")
    
    results = []
    
    for i, filepath in enumerate(files_to_process, 1):
        print(f"\n[{i}/{len(files_to_process)}] Processing {filepath.name}...")
        result = enhance_article(filepath, dry_run=False)
        results.append(result)
        
        # Rate limiting - increased delay for model rotation
        time.sleep(3)
    
    # Save log
    log_data = {
        "timestamp": datetime.now().isoformat(),
        "total_processed": len(results),
        "success": sum(1 for r in results if r["status"] == "success"),
        "failed": sum(1 for r in results if r["status"] != "success"),
        "results": results
    }
    
    with open(OUTPUT_LOG, 'w', encoding='utf-8') as f:
        json.dump(log_data, f, ensure_ascii=False, indent=2)
    
    # Summary
    print("\n" + "=" * 60)
    print("📊 Summary:")
    print(f"  ✅ Success: {log_data['success']}")
    print(f"  ❌ Failed: {log_data['failed']}")
    print(f"  📁 Log saved: {OUTPUT_LOG}")
    print("=" * 60)

if __name__ == "__main__":
    main()
