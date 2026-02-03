<?php
// Page-specific variables
$page_title = "المقالات";
$base_path = "";
$active_page = "blog";

// Load site configuration
include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="-4dWOJlQukPPTSz-ABTrob2Oe_vkEdm_y1_xFVryJTo" />
    <!-- Primary Meta Tags -->
    <title>المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال</title>
    <meta name="title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta name="description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta name="keywords" content="مدونة, مقالات كهرباء, صيانة, نصائح تقنية">
    <meta name="author" content="مؤسسة روائع الكريستال">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Arabic">
    <meta name="geo.region" content="SA-01">
    <meta name="geo.placename" content="Riyadh">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://brilliantserv.com/blog.php">

    <!-- Alternate Language -->
    <link rel="alternate" hreflang="ar-SA" href="https://brilliantserv.com/blog.php">
    <link rel="alternate" hreflang="ar" href="https://brilliantserv.com/blog.php">
    <link rel="alternate" hreflang="x-default" href="https://brilliantserv.com/blog.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://brilliantserv.com/blog.php">
    <meta property="og:title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta property="og:description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta property="og:image" content="https://brilliantserv.com/media/hero-mechanic-pumps.webp">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:site_name" content="روائع الكريستال">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://brilliantserv.com/blog.php">
    <meta property="twitter:title" content="المدونة | نصائح الصيانة والأعمال الهندسية - روائع الكريستال">
    <meta property="twitter:description"
        content="مقالات ونصائح متخصصة في صيانة التكييف، كشف التسربات، عزل الخزانات والأسطح. دليلك للحفاظ على منشأتك">
    <meta property="twitter:image" content="https://brilliantserv.com/media/hero-mechanic-pumps.webp">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/brilliantcrystal-hd.webp">
    <link rel="apple-touch-icon" href="media/brilliantcrystal-hd.webp">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "الرئيسية",
                        "item": "https://brilliantserv.com/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "المدونة",
                        "item": "https://brilliantserv.com/blog.php"
                    }
                ]
            },
            {
                "@type": "CollectionPage",
                "headline": "المدونة الهندسية - نصائح وحلول الصيانة",
                "description": "اكتشف أحدث المقالات والنصائح في مجال صيانة المضخات، كشف التسربات، والأعمال الكهربائية من خبراء روائع الكريستال.",
                "url": "https://brilliantserv.com/blog.php",
                "provider": {
                    "@type": "Organization",
                    "name": "روائع الكريستال",
                    "url": "https://brilliantserv.com",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://brilliantserv.com/media/brilliantcrystal-hd.webp"
                    }
                }
            }
        ]
    }
    </script>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-badge">المدونة</span>
                <h1>مقالات ونصائح هندسية</h1>
                <p>نشارككم خبرتنا الممتدة لسنوات في مجالات الصيانة والتشغيل والحلول الذكية</p>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="blog-section">
        <div class="container">
            <!-- شريط البحث -->
            <div class="blog-search-wrapper">
                <div class="blog-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input type="text" id="blogSearch" placeholder="ابحث في المقالات..." autocomplete="off">
                    <button type="button" id="clearSearch" class="clear-btn" style="display:none;">✕</button>
                </div>
                <p class="search-results-count" id="searchResultsCount" style="display:none;"></p>
            </div>

            <div class="blog-main-grid">
                <?php
                // 1. Load Blog Index
                $blog_index_path = 'media/blog_index.json';
                $articles = [];

                if (file_exists($blog_index_path)) {
                    $json_data = file_get_contents($blog_index_path);
                    $articles = json_decode($json_data, true);
                    if ($articles === null) {
                        $articles = []; // Fallback if JSON error
                        echo "<!-- Error decoding blog_index.json -->";
                    }
                } else {
                    echo "<!-- blog_index.json not found -->";
                }

                // 2. Pagination Logic
                $items_per_page = 6;
                $total_articles = count($articles);
                $total_pages = ceil($total_articles / $items_per_page);

                // Get current page from URL, validate it
                $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                if ($current_page < 1)
                    $current_page = 1;
                if ($current_page > $total_pages && $total_pages > 0)
                    $current_page = $total_pages;

                // Slice array for current page
                $offset = ($current_page - 1) * $items_per_page;
                $current_articles = array_slice($articles, $offset, $items_per_page);

                // 3. Display Articles
                if (count($current_articles) > 0) {
                    foreach ($current_articles as $article):
                        // Fix relative paths for image if needed
                        // The JSON has "image_filename", we need "media/blog/..." or check where it is
                        // Old loop used: ../../media/ or ../../media/blog/
                        // Generator output says: article['image_filename']
                        // Let's assume standard path "media/blog/" unless it's a root image.
                        // However, migration kept root images as filenames too.
                        // Let's try to detect if it's in root media or blog folder or just use the link if provided?
                        // No, the JSON 'image' field holds the filename.
                        // Let's assume most are in media/blog/ but some legacy ones might be elsewhere.
                        // Actually, let's just use a smart variable.
                
                        $img_src = "media/blog/" . $article['image'];
                        // Fallback check for root media (legacy)
                        // If file doesn't exist there, maybe it's in media/ directly?
                        // But verifying via PHP file_exists might be slow for remote, but this is local.
                        // Let's stick to a robust simple path for now, maybe checking typical paths.
                
                        // NOTE: detailed check
                        if (!file_exists($img_src) && file_exists("media/" . $article['image'])) {
                            $img_src = "media/" . $article['image'];
                        }
                        // Also check for the hardcoded ../../media paths from the old array
                        // The migration script extracted filename logic: raw_img.split('/')[-1]
                        // So we lost the path.
                        // Most old ones were in ../../media/ i.e. root media.
                        // New ones are in media/blog/.
                        // I will try media/blog/ first, then media/.
                        ?>
                        <article class="blog-card">
                            <div class="blog-image">
                                <!-- Use a placeholder or reliable path -->
                                <img src="<?php echo htmlspecialchars($img_src); ?>" loading="lazy"
                                    alt="<?php echo htmlspecialchars($article['alt']); ?>">
                            </div>
                            <div class="blog-content">
                                <span class="blog-date">
                                    <?php echo htmlspecialchars($article['date']); ?>
                                </span>
                                <h3>
                                    <?php echo htmlspecialchars($article['title']); ?>
                                </h3>
                                <p>
                                    <?php echo htmlspecialchars($article['desc']); ?>
                                </p>
                                <a href="<?php echo htmlspecialchars($article['link']); ?>" class="read-more">قراءة المزيد</a>
                            </div>
                        </article>
                    <?php endforeach;
                } else {
                    echo '<p class="text-center">لا توجد مقالات حالياً.</p>';
                }
                ?>
            </div>

            <!-- Pagination Controls -->
            <?php if ($total_pages > 1): ?>
                <div class="pagination">
                    <?php if ($current_page > 1): ?>
                        <a href="?page=<?php echo $current_page - 1; ?>" class="page-link prev">السابق</a>
                    <?php endif; ?>

                    <div class="page-numbers">
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <a href="?page=<?php echo $i; ?>"
                                class="page-link <?php echo ($i === $current_page) ? 'active' : ''; ?>">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>
                    </div>

                    <?php if ($current_page < $total_pages): ?>
                        <a href="?page=<?php echo $current_page + 1; ?>" class="page-link next">التالي</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Style for pagination -->
            <style>
                .pagination {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 40px;
                    gap: 10px;
                    flex-wrap: wrap;
                }

                .page-link {
                    padding: 8px 16px;
                    border: 1px solid #e0e0e0;
                    border-radius: 4px;
                    color: #333;
                    text-decoration: none;
                    transition: all 0.3s ease;
                }

                .page-link:hover,
                .page-link.active {
                    background-color: #2b5c9b;
                    /* Main theme color */
                    color: #fff;
                    border-color: #2b5c9b;
                }

                .page-link.prev,
                .page-link.next {
                    font-weight: bold;
                }

                /* Search Bar Styles */
                .blog-search-wrapper {
                    margin-bottom: 2rem;
                    text-align: center;
                }

                .blog-search {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    max-width: 500px;
                    margin: 0 auto;
                    padding: 12px 20px;
                    background: #fff;
                    border: 2px solid #e0e0e0;
                    border-radius: 50px;
                    transition: all 0.3s ease;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                }

                .blog-search:focus-within {
                    border-color: #2b5c9b;
                    box-shadow: 0 4px 20px rgba(43, 92, 155, 0.15);
                }

                .blog-search svg {
                    color: #888;
                    flex-shrink: 0;
                }

                .blog-search input {
                    flex: 1;
                    border: none;
                    outline: none;
                    font-size: 1rem;
                    font-family: inherit;
                    background: transparent;
                    text-align: right;
                }

                .blog-search input::placeholder {
                    color: #999;
                }

                .blog-search .clear-btn {
                    background: none;
                    border: none;
                    color: #888;
                    cursor: pointer;
                    font-size: 1.1rem;
                    padding: 0 5px;
                }

                .blog-search .clear-btn:hover {
                    color: #333;
                }

                .search-results-count {
                    margin-top: 0.75rem;
                    color: #666;
                    font-size: 0.9rem;
                }

                .blog-card.hidden {
                    display: none !important;
                }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const searchInput = document.getElementById('blogSearch');
                    const clearBtn = document.getElementById('clearSearch');
                    const resultsCount = document.getElementById('searchResultsCount');
                    const blogCards = document.querySelectorAll('.blog-card');

                    // Arabic Stemming & Fuzzy Matching
                    function arabicStem(word) {
                        if (!word) return word;
                        // Remove common Arabic prefixes
                        word = word.replace(/^(ال|وال|بال|كال|فال|لل)/, '');
                        // Create multiple forms for matching
                        return word;
                    }

                    function generateWordVariants(word) {
                        let variants = [word];
                        const stem = arabicStem(word);
                        variants.push(stem);

                        // Common Arabic plural patterns
                        // لوحة -> لوحات (Sound feminine plural: ة -> ات)
                        if (word.endsWith('ة')) {
                            variants.push(word.slice(0, -1) + 'ات');
                        }
                        // لوحات -> لوحة (Reverse: ات -> ة)
                        if (word.endsWith('ات')) {
                            variants.push(word.slice(0, -2) + 'ة');
                        }
                        // مضخة -> مضخات
                        if (stem.endsWith('ة')) {
                            variants.push(stem.slice(0, -1) + 'ات');
                        }
                        if (stem.endsWith('ات')) {
                            variants.push(stem.slice(0, -2) + 'ة');
                        }
                        // Sound masculine plural: ون/ين
                        if (word.endsWith('ون') || word.endsWith('ين')) {
                            variants.push(word.slice(0, -2));
                        }
                        // Broken plurals (common patterns)
                        // فعل -> أفعال (e.g., عمل -> أعمال)
                        // Can't cover all, but let's add common ones

                        return [...new Set(variants)]; // Remove duplicates
                    }

                    function matchesQuery(text, query) {
                        if (!query || !text) return !query;

                        // Direct match first
                        if (text.includes(query)) return true;

                        // Split query into words and check each
                        const queryWords = query.split(/\s+/).filter(w => w.length > 0);

                        for (const queryWord of queryWords) {
                            const variants = generateWordVariants(queryWord);
                            let found = false;

                            for (const variant of variants) {
                                if (variant.length > 1 && text.includes(variant)) {
                                    found = true;
                                    break;
                                }
                            }

                            if (!found) return false;
                        }

                        return queryWords.length > 0;
                    }

                    searchInput.addEventListener('input', function () {
                        const query = this.value.trim().toLowerCase();
                        let visibleCount = 0;

                        clearBtn.style.display = query ? 'block' : 'none';

                        blogCards.forEach(card => {
                            const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
                            const desc = card.querySelector('p')?.textContent.toLowerCase() || '';
                            const content = title + ' ' + desc;

                            if (query === '' || matchesQuery(content, query)) {
                                card.classList.remove('hidden');
                                visibleCount++;
                            } else {
                                card.classList.add('hidden');
                            }
                        });

                        if (query) {
                            resultsCount.textContent = `تم العثور على ${visibleCount} مقال`;
                            resultsCount.style.display = 'block';
                        } else {
                            resultsCount.style.display = 'none';
                        }
                    });

                    clearBtn.addEventListener('click', function () {
                        searchInput.value = '';
                        searchInput.dispatchEvent(new Event('input'));
                        searchInput.focus();
                    });
                });
            </script>

        </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>هل تحتاج استشارة هندسية؟</h2>
                <p>فريقنا من الخبراء جاهز لمساعدتك في جميع احتياجاتك الهندسية</p>
                <div class="cta-actions">
                    <a href="tel:0550698111" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" width="20" height="20">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72" />
                        </svg>
                        0550698111
                    </a>
                    <a href="contact.html" class="btn btn-outline-light">أرسل استفسارك</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.min.js"></script>
</body>

</html>