import os
import re

CERT_DIR = r"c:/Users/Abdalgani/Documents/BrilliantServ/templates/template-3/media/certificates"
files = [f for f in os.listdir(CERT_DIR) if f.endswith('.png')]

print(f"Analyzing {len(files)} certificates...")

for filename in files:
    filepath = os.path.join(CERT_DIR, filename)
    try:
        with open(filepath, 'rb') as f:
            data = f.read()
            # Try to decode as latin1 to find strings
            decoded = data.decode('latin1', errors='ignore')
            # Look for 10-digit numbers starting with 1 (Riyadh CR) or 7 (SME/Unified)
            matches = re.findall(r'[17][0-9]{9}', decoded)
            if matches:
                 print(f"File: {filename} -> Potential CRs: {list(set(matches))}")
            
            # Also check for VAT-like 15 digits
            vat_matches = re.findall(r'3[0-9]{14}', decoded)
            if vat_matches:
                 print(f"File: {filename} -> Potential VATs: {list(set(vat_matches))}")
    except Exception as e:
        print(f"Error reading {filename}: {e}")
