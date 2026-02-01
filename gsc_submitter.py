#!/usr/bin/env python3
"""
Submit sitemap to Google Search Console to request re-indexing.
"""

import os
import sys
from google.oauth2 import service_account
from googleapiclient.discovery import build

# Configuration
KEY_FILE = 'credentials/credentials.json'
SITE_URL = 'https://brilliantserv.com/'
SITEMAP_URL = 'https://brilliantserv.com/sitemap.xml'

def submit_sitemap():
    if not os.path.exists(KEY_FILE):
        print(f"❌ Error: Credentials file not found at {KEY_FILE}")
        return

    try:
        # Authenticate
        SCOPES = ['https://www.googleapis.com/auth/webmasters']
        creds = service_account.Credentials.from_service_account_file(
            KEY_FILE, scopes=SCOPES)
        service = build('searchconsole', 'v1', credentials=creds)

        print(f"Submitting sitemap for {SITE_URL}...")
        
        # Submit
        service.sitemaps().submit(siteUrl=SITE_URL, feedpath=SITEMAP_URL).execute()
        
        print(f"✅ Successfully submitted sitemap: {SITEMAP_URL}")
        print("Google has been notified to re-crawl the site.")
        
    except Exception as e:
        print(f"❌ Error submitting sitemap: {e}")

if __name__ == '__main__':
    submit_sitemap()
