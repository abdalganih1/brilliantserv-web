import pdfplumber
import re

pdf_path = r"c:\Users\Abdalgani\Documents\BrilliantServ\ملفات المستخدم\بيان انشاء فاتورة ضريبة للعميل.pdf"

try:
    with pdfplumber.open(pdf_path) as pdf:
        text = ""
        for page in pdf.pages:
            text += page.extract_text() or ""
            
    print("--- CONTENT EXTRACTED ---")
    print(text)
    print("--- ANALYSIS ---")
    
    # Try to find specific patterns
    vat_pattern = r'[0-9]{15}'
    vat_matches = re.findall(vat_pattern, text)
    if vat_matches:
        print(f"Potential VAT Numbers: {vat_matches}")
        
    cr_pattern = r'[0-9]{10}'
    cr_matches = re.findall(cr_pattern, text)
    if cr_matches:
        print(f"Potential CR Numbers: {cr_matches}")

except Exception as e:
    print(f"Error: {e}")
