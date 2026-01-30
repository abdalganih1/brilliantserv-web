
import urllib.parse
import pandas as pd
import os

# Read the CSV
try:
    df = pd.read_csv('gsc_analytics_data.csv')
    print("Columns:", df.columns)
    
    # keys column looks like "['Query', 'URL']" - it's a string representation of a list
    # We need to parse it or just extract the URL part
    
    print("\n--- DECODED TOP URLS ---")
    
    unique_urls = set()
    
    for index, row in df.iterrows():
        key_str = row['keys']
        # Rough parsing: find 'http' and go until just before the closing '
        if 'http' in key_str:
            start = key_str.find('http')
            end = key_str.rfind("'")
            if end == -1: end = key_str.rfind('"')
            
            url_encoded = key_str[start:end]
            url_decoded = urllib.parse.unquote(url_encoded)
            
            # Clean trailing slash for consistency
            if url_decoded.endswith('/'):
                url_decoded = url_decoded[:-1]
                
            unique_urls.add(url_decoded)
            
            # Print significant ones (more than 10 impressions)
            if row['impressions'] > 10:
                print(f"Impressions: {row['impressions']} | Decoded: {url_decoded}")

    print("\n--- ALL UNIQUE DECODED URLS ---")
    for u in sorted(unique_urls):
        print(u)

except Exception as e:
    print(f"Error: {e}")
