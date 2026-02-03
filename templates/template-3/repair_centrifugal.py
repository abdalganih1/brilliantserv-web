
import os

path = r"c:\Users\Abdalgani\Documents\BrilliantServ\templates\template-3\blog\centrifugal-pumps.php"

try:
    with open(path, 'r', encoding='utf-8') as f:
        lines = f.readlines()

    # Construct new content by slicing
    # 1. Header (Lines 1-51) -> Indices 0-50
    part1 = lines[0:51]
    
    # 2. Skip Header JSON (Lines 52-99)
    # 3. Rest of Header (Lines 100-128) -> Indices 99-127
    part2 = lines[99:128]
    
    # 4. Skip Bad Block (Lines 129-511)
    # 5. Good AI Content (Lines 512-672) -> Indices 511-671
    # Note: Python slice end is exclusive. So to include index 671 (Line 672), we use 672.
    part3 = lines[511:672]
    
    # 6. Gap + Original Content (Lines 673-874) -> Indices 672-873
    # Use 874 as end index to include 873.
    part4 = lines[672:874]
    
    # 7. Skip Trailing Garbage (Lines 875-1213)
    # 8. Footer (Lines 1214-End) -> Indices 1213-End
    part5 = lines[1213:]

    new_content = part1 + part2 + part3 + part4 + part5

    with open(path, 'w', encoding='utf-8') as f:
        f.writelines(new_content)
        
    print(f"Successfully repaired {path}. Original lines: {len(lines)}, New lines: {len(new_content)}")

except Exception as e:
    print(f"Error repairing file: {e}")
