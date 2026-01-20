# extract_pdf.py - استخراج الصور والنصوص من ملف PDF
import os
import sys
from pathlib import Path

# تثبيت المكتبات المطلوبة
try:
    import fitz  # PyMuPDF
except ImportError:
    os.system("pip install pymupdf")
    import fitz

# مسار الملف
PDF_PATH = "ملفات المستخدم/Brilliantcrystal Profile.pdf"
OUTPUT_DIR = "ملفات المستخدم/extracted"

def extract_pdf_content(pdf_path, output_dir):
    """استخراج الصور والنصوص من PDF"""
    
    # إنشاء مجلد الإخراج
    Path(output_dir).mkdir(parents=True, exist_ok=True)
    images_dir = Path(output_dir) / "images"
    images_dir.mkdir(exist_ok=True)
    
    # فتح ملف PDF
    doc = fitz.open(pdf_path)
    
    print(f"📄 ملف PDF: {pdf_path}")
    print(f"📃 عدد الصفحات: {doc.page_count}")
    print("-" * 50)
    
    all_text = []
    image_count = 0
    
    for page_num in range(doc.page_count):
        page = doc[page_num]
        
        # استخراج النص
        text = page.get_text()
        if text.strip():
            all_text.append(f"\n{'='*50}\n📄 الصفحة {page_num + 1}\n{'='*50}\n{text}")
        
        # استخراج الصور
        images = page.get_images(full=True)
        for img_index, img in enumerate(images):
            xref = img[0]
            try:
                base_image = doc.extract_image(xref)
                image_bytes = base_image["image"]
                image_ext = base_image["ext"]
                
                image_filename = f"page{page_num + 1}_img{img_index + 1}.{image_ext}"
                image_path = images_dir / image_filename
                
                with open(image_path, "wb") as f:
                    f.write(image_bytes)
                
                image_count += 1
                print(f"✅ صورة: {image_filename}")
            except Exception as e:
                print(f"❌ خطأ في استخراج صورة: {e}")
    
    # حفظ النصوص
    text_file = Path(output_dir) / "extracted_text.txt"
    with open(text_file, "w", encoding="utf-8") as f:
        f.write("\n".join(all_text))
    
    print("-" * 50)
    print(f"✅ تم استخراج {image_count} صورة إلى: {images_dir}")
    print(f"✅ تم حفظ النصوص في: {text_file}")
    
    # إنشاء ملخص
    summary_file = Path(output_dir) / "summary.md"
    with open(summary_file, "w", encoding="utf-8") as f:
        f.write(f"# ملخص استخراج PDF\n\n")
        f.write(f"- **الملف:** {pdf_path}\n")
        f.write(f"- **عدد الصفحات:** {doc.page_count}\n")
        f.write(f"- **عدد الصور:** {image_count}\n\n")
        f.write(f"## الصور المستخرجة\n\n")
        for img_file in sorted(images_dir.iterdir()):
            f.write(f"- {img_file.name}\n")
    
    doc.close()
    return image_count, len(all_text)

if __name__ == "__main__":
    extract_pdf_content(PDF_PATH, OUTPUT_DIR)
