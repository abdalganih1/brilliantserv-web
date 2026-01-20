// download-media.mjs - Downloads all media files from brilliantserv.export.json
import fs from "fs/promises";
import path from "path";
import { createWriteStream, existsSync, mkdirSync } from "fs";
import { pipeline } from "stream/promises";

const OUTPUT_DIR = "./media";

async function downloadFile(url, dest) {
    try {
        const res = await fetch(url);
        if (!res.ok) throw new Error(`HTTP ${res.status}`);
        const fileStream = createWriteStream(dest);
        await pipeline(res.body, fileStream);
        return true;
    } catch (err) {
        console.error(`❌ Failed: ${url} - ${err.message}`);
        return false;
    }
}

async function main() {
    // Ensure output directory exists
    if (!existsSync(OUTPUT_DIR)) {
        mkdirSync(OUTPUT_DIR, { recursive: true });
    }

    // Load export data
    const data = JSON.parse(await fs.readFile("brilliantserv.export.json", "utf8"));
    const mediaItems = data.media || [];

    console.log(`\n📦 Found ${mediaItems.length} media items to download...\n`);

    let success = 0;
    let failed = 0;

    for (let i = 0; i < mediaItems.length; i++) {
        const item = mediaItems[i];
        const url = item.source_url;
        if (!url) continue;

        // Extract filename from URL
        const urlPath = new URL(url).pathname;
        const filename = path.basename(decodeURIComponent(urlPath));
        const dest = path.join(OUTPUT_DIR, filename);

        // Skip if already exists
        if (existsSync(dest)) {
            console.log(`⏭️  [${i + 1}/${mediaItems.length}] Skipped (exists): ${filename}`);
            success++;
            continue;
        }

        console.log(`⬇️  [${i + 1}/${mediaItems.length}] Downloading: ${filename}`);
        const ok = await downloadFile(url, dest);
        if (ok) success++;
        else failed++;

        // Small delay to avoid rate limiting
        await new Promise(r => setTimeout(r, 100));
    }

    console.log(`\n✅ Download complete!`);
    console.log(`   Success: ${success}`);
    console.log(`   Failed: ${failed}`);
}

main().catch(console.error);
