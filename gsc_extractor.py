import pandas as pd
from googleapiclient.discovery import build
from google.oauth2 import service_account
import os
import sys

# Configuration
SCOPES = ['https://www.googleapis.com/auth/webmasters.readonly']
# Try to find credentials in common locations
possible_keys = [
    'credentials.json',
    'credentials/credentials.json',
    'client_secret.json', 
    'service_account.json',
    'gsc_credentials.json'
]

key_file_location = None
for key in possible_keys:
    if os.path.exists(key):
        key_file_location = key
        break

SITE_URL = 'https://brilliantserv.com/'

def get_gsc_data():
    if not key_file_location:
        print("ERROR: No credentials.json found in the current directory.")
        print("Please download your Service Account Key from Google Cloud Console")
        print("and save it as 'credentials.json' in this folder.")
        return

    print(f"Using credentials file: {key_file_location}")
    
    try:
        creds = service_account.Credentials.from_service_account_file(key_file_location, scopes=SCOPES)
        service = build('searchconsole', 'v1', credentials=creds)

        # Request data for the last 30 days
        request = {
            'startDate': '2025-01-01', 
            'endDate': '2025-01-30', # Adjusted to current time approximately or recent past
            'dimensions': ['query', 'page'],
            'rowLimit': 100
        }
        
        print(f"Fetching GSC data for {SITE_URL}...")
        response = service.searchanalytics().query(siteUrl=SITE_URL, body=request).execute()
        
        if 'rows' in response:
            df = pd.DataFrame(response['rows'])
            # Save to CSV
            output_file = 'gsc_analytics_data.csv'
            df.to_csv(output_file, index=False)
            print(f"SUCCESS: Data saved to {output_file}")
            print("\nPreview of data:")
            print(df.head())
        else:
            print("No data found for this period.")
            
    except Exception as e:
        print(f"An error occurred: {e}")

if __name__ == '__main__':
    get_gsc_data()
