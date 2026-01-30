<!-- Header -->
<header class="header" id="header">
    <div class="container">
        <nav class="nav">
            <a href="<?= $base_path ?>index.php" class="logo">
                <img src="<?= $base_path . $logo_path . $logo_version ?>" alt="<?= $site_name ?>" class="logo-img">
                <span class="logo-text">
                    <?= $site_name ?>
                </span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="<?= $base_path ?>index.php" class="<?= isActive('home', $active_page) ?>">الرئيسية</a></li>
                <li><a href="<?= $base_path ?>about.php" class="<?= isActive('about', $active_page) ?>">من نحن</a></li>
                <li><a href="<?= $base_path ?>services.php"
                        class="<?= isActive('services', $active_page) ?>">خدماتنا</a></li>
                <li class="dropdown">
                    <a href="<?= $base_path ?>projects.php"
                        class="<?= isActive('projects', $active_page) ?>">أعمالنا</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $base_path ?>projects.php#mechanical">أعمال ميكانيكية</a></li>
                        <li><a href="<?= $base_path ?>projects.php#electrical">أعمال كهربائية</a></li>
                        <li><a href="<?= $base_path ?>projects.php#winding">لف محركات</a></li>
                    </ul>
                </li>
                <li><a href="<?= $base_path ?>blog.php" class="<?= isActive('blog', $active_page) ?>">المقالات</a></li>
                <li><a href="<?= $base_path ?>contact.php" class="<?= isActive('contact', $active_page) ?>">تواصل
                        معنا</a></li>
            </ul>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </div>
</header>