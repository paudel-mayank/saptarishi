<?php require_once __DIR__ . '/site-config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="theme-color" content="#223745" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700&amp;family=Libre+Caslon+Display&amp;family=Roboto+Flex:opsz,wght@8..144,300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Takshasheela Ayurveda Aashram" />
    <meta property="og:title" content="<?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($siteBaseUrl . '/assets/main.png', ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageMeta['description'], ENT_QUOTES, 'UTF-8') ?>" />
    <link rel="icon" href="assets/fav.png" type="image/png" />
    <title><?= htmlspecialchars($pageMeta['title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/align.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/fieldgroup.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/container-inline.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/clearfix.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/details.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/hidden.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/item-list.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/js.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/nowrap.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/position-container.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/reset-appearance.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/system/components/resize.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/system-status-counter1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/system-status-report-counters1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/system-status-report-general-info1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/system/components/tablesort.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="core/themes/stable9/css/views/views.module1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="core/themes/stable9/css/core/assets/vendor/normalize-css/normalize1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/action-links1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/breadcrumb1e7c.css?t33iat" />
    <link rel="stylesheet" media="all"
        href="themes/contrib/bootstrap5/css/components/container-inline1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/details1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/exposed-filters1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/field1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/form1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/icons1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/inline-form1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/item-list1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/links1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/menu1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/more-link1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/pager1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/tabledrag1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/tableselect1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/tablesort1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/textarea1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/ui-dialog1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/messages1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/contrib/bootstrap5/css/components/node1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/swiper-bundle.min1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/style1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/theme1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/custom1e7c.css?t33iat" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/page-components.css?v=1" />
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/design-system.css?v=2" />
    <script src="https://use.fontawesome.com/releases/v6.4.2/js/all.js" defer crossorigin="anonymous"
        data-search-pseudo-elements></script>
    <script src="https://use.fontawesome.com/releases/v6.4.2/js/v4-shims.js" defer crossorigin="anonymous"
        data-search-pseudo-elements></script>


    <script type="application/ld+json"><?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Takshasheela Ayurveda Aashram',
        'url' => $siteBaseUrl . '/index.php',
        'logo' => $siteBaseUrl . '/assets/main.png',
        'email' => 'info@takshasheela.com',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Kathmandu',
            'addressCountry' => 'NP',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>

<body class="<?= $isHomeHeader ? 'node-type-homepage path-frontpage page-node-type-homepage' : 'path-node page-node-type-page' ?> d-flex flex-column h-100">

    <a class="site-skip-link" href="#main-content">Skip to main content</a>

    <div class="dialog-off-canvas-main-canvas d-flex flex-column h-100" data-off-canvas-main-canvas>
        <header class="header site-header-main<?= $isHomeHeader ? '' : ' site-header-detail' ?>">
            <div class="container-fluid site-header__container">
                <div class="wrapper">
                    <div class="branding-menu-wrapper">
                        <div class="logo">
                            <div class="scroll">
                                <div class="region region-branding">
                                    <div id="block-pathretreats-branding"
                                        class="block block-system block-system-branding-block">
                                        <div class="navbar-brand d-flex align-items-center">
                                            <a href="index.php" title="Home" rel="home" class="site-logo d-block">
                                                <img src="assets/main.png" alt="Takshasheela Ayurveda Aashram" width="290" height="80" fetchpriority="high" />
                                            </a>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="default-logo">
                                <a href="index.php" title="Home" rel="home">
                                    <img src="assets/main.png" alt="Takshasheela Ayurveda Aashram" width="290" height="80" fetchpriority="high">
                                </a>
                            </div>
                        </div>
                        <div class="menus-wrapper">
                            <div class="top-header">
                                <div class="region region-top-header">
                                </div>
                            </div>
                            <div class="navigation-wrapper">
                                <div class="navigation-container">
                                    <div class="region region-nav-main">
                                        <nav role="navigation" aria-labelledby="block-pathretreats-main-navigation-menu"
                                            id="block-pathretreats-main-navigation"
                                            class="block block-menu navigation menu--main">
                                            <h5 class="visually-hidden" id="block-pathretreats-main-navigation-menu">
                                                Main navigation</h5>
                                            <ul data-block="nav_main" class="navbar-nav nav-level-0">

                                                <li class="nav-item dropdown<?= nav_is_active(['about-us.php', 'aboutayurveda.php', 'ourteams.php', 'ourapproach.php']) ? ' active' : '' ?>">
                                                    <a class="nav-link dropdown-toggle<?= nav_is_active(['about-us.php', 'aboutayurveda.php', 'ourteams.php', 'ourapproach.php']) ? ' active' : '' ?>" href="about-us.php"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Discover</a>
                                                    <div class="dropdown-menu standard-menu">
                                                        <div class="standard-menu-label">Discover Us</div>
                                                        <a href="about-us.php" class="dropdown-item<?= nav_link_attributes(['about-us.php']) ?>"><i
                                                                class="bi bi-building"></i>About Takshasheela</a>
                                                        <a href="aboutayurveda.php" class="dropdown-item<?= nav_link_attributes(['aboutayurveda.php']) ?>"><i
                                                                class="bi bi-flower1"></i>About Ayurveda</a>
                                                        <a href="ourteams.php" class="dropdown-item<?= nav_link_attributes(['ourteams.php']) ?>"><i
                                                                class="bi bi-people"></i>Our Teams</a>
                                                        <a href="ourapproach.php" class="dropdown-item<?= nav_link_attributes(['ourapproach.php']) ?>"><i
                                                                class="bi bi-compass"></i>Our Approach</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown wellness-programs-menu<?= nav_is_active(['find-retreat.php', 'packages.php', 'package-detail.php', 'services.php', 'service-detail.php']) ? ' active' : '' ?>">
                                                    <a class="nav-link dropdown-toggle<?= nav_is_active(['find-retreat.php', 'packages.php', 'package-detail.php', 'services.php', 'service-detail.php']) ? ' active' : '' ?>" href="find-retreat.php"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wellness Programs</a>
                                                    <div class="dropdown-menu wellness-menu">
                                                        <div class="wellness-menu-label">Explore Wellness</div>
                                                        <div class="wellness-submenu">
                                                            <a class="dropdown-item wellness-submenu-toggle wellness-category"
                                                                href="packages.php" aria-haspopup="true"
                                                                aria-expanded="false"><span><i class="bi bi-box-seam"></i>Packages</span></a>
                                                            <div class="dropdown-menu wellness-submenu-menu">
                                                                <div class="wellness-menu-label">Package Types</div>
                                                                <a class="small-title dropdown-item wellness-view-all<?= nav_link_attributes(['packages.php']) ?>"
                                                                    href="packages.php">View All Packages &rarr;</a>
                                                                <div class="wellness-submenu">
                                                                    <a class="dropdown-item wellness-submenu-toggle wellness-subcategory"
                                                                        href="packages.php" aria-haspopup="true"
                                                                        aria-expanded="false"><span><i class="bi bi-stars"></i>Retreat Packages</span></a>
                                                                    <div class="dropdown-menu wellness-submenu-menu wellness-item-list">
                                                                        <div class="wellness-menu-label">Retreat Packages</div>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('package-detail.php', 'program', 'panchakarma-rejuvenation') ?>"
                                                                            href="package-detail.php?program=panchakarma-rejuvenation">Panchakarma Rejuvenation</a>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('package-detail.php', 'program', 'ayurvedic-wellness-immersion') ?>"
                                                                            href="package-detail.php?program=ayurvedic-wellness-immersion">Ayurvedic Wellness Immersion</a>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('package-detail.php', 'program', 'mind-body-balance') ?>"
                                                                            href="package-detail.php?program=mind-body-balance">Mind–Body Balance Retreat</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wellness-submenu">
                                                            <a class="dropdown-item wellness-submenu-toggle wellness-category"
                                                                href="services.php" aria-haspopup="true"
                                                                aria-expanded="false"><span><i class="bi bi-heart-pulse"></i>Services</span></a>
                                                            <div class="dropdown-menu wellness-submenu-menu">
                                                                <div class="wellness-menu-label">Service Types</div>
                                                                <a class="small-title dropdown-item wellness-view-all<?= nav_link_attributes(['services.php']) ?>"
                                                                    href="services.php">View All Services &rarr;</a>
                                                                <div class="wellness-submenu">
                                                                    <a class="dropdown-item wellness-submenu-toggle wellness-subcategory"
                                                                        href="services.php" aria-haspopup="true"
                                                                        aria-expanded="false"><span><i class="bi bi-flower1"></i>Healing Services</span></a>
                                                                    <div class="dropdown-menu wellness-submenu-menu wellness-item-list">
                                                                        <div class="wellness-menu-label">Healing Services</div>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('service-detail.php', 'service', 'panchakarma-detox') ?>"
                                                                            href="service-detail.php?service=panchakarma-detox">Panchakarma &amp; Detox Therapy</a>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('service-detail.php', 'service', 'ayurvedic-wellness') ?>"
                                                                            href="service-detail.php?service=ayurvedic-wellness">Ayurvedic Wellness Retreats</a>
                                                                        <a class="dropdown-item wellness-leaf<?= detail_link_attributes('service-detail.php', 'service', 'personalized-healing') ?>"
                                                                            href="service-detail.php?service=personalized-healing">Personalized Healing Programs</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a href="accommodations.php" class="nav-link<?= nav_link_attributes(['accommodations.php', 'accomodations.php']) ?>">Accommodations</a>
                                                </li>
                                                <li class="nav-item dropdown<?= nav_is_active(['testimonials.php', 'blog.php', 'blog-detail.php', 'newsandevents.php', 'news-events-details.php', 'gallery.php']) ? ' active' : '' ?>">
                                                    <a class="nav-link dropdown-toggle<?= nav_is_active(['testimonials.php', 'blog.php', 'blog-detail.php', 'newsandevents.php', 'news-events-details.php', 'gallery.php']) ? ' active' : '' ?>" href="blog.php"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chronicles</a>
                                                    <div class="dropdown-menu standard-menu">
                                                        <div class="standard-menu-label">Explore Stories</div>
                                                        <a href="testimonials.php" class="dropdown-item<?= nav_link_attributes(['testimonials.php']) ?>"><i
                                                                class="bi bi-chat-quote"></i>Testimonials</a>
                                                        <a href="blog.php" class="dropdown-item<?= nav_link_attributes(['blog.php', 'blog-detail.php']) ?>"><i
                                                                class="bi bi-journal-text"></i>Blogs</a>
                                                        <a href="newsandevents.php" class="dropdown-item<?= nav_link_attributes(['newsandevents.php', 'news-events-details.php']) ?>"><i
                                                                class="bi bi-calendar-event"></i>News &amp; Events</a>
                                                        <a href="gallery.php" class="dropdown-item<?= nav_link_attributes(['gallery.php']) ?>"><i
                                                                class="bi bi-images"></i>Gallery</a>

                                                    </div>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="contact-us.php" class="nav-link<?= nav_link_attributes(['contact-us.php']) ?>">Contact</a>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="speek-to-advisor">
                                        <!-- <a href="discovery-call-booking-form.html"><img
                                                src="themes/custom/pathretreats/images/speak.svg">
                                            Book a
                                            Discovery Call</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hamburger-col">
                            <button class="hamburger" type="button" aria-label="Toggle main navigation" aria-expanded="false" aria-controls="block-pathretreats-main-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <script>
            (function () {
                var header = document.querySelector('.site-header-main');
                if (!header) return;

                header.addEventListener('click', function (event) {
                    var nestedToggle = event.target.closest('.wellness-submenu-toggle');
                    if (nestedToggle) {
                        event.preventDefault();
                        event.stopPropagation();

                        var submenu = nestedToggle.closest('.wellness-submenu');
                        var nestedIsOpen = !submenu.classList.contains('nested-dropdown-open');

                        Array.prototype.forEach.call(submenu.parentElement.children, function (sibling) {
                            if (sibling !== submenu && sibling.classList && sibling.classList.contains(
                                    'wellness-submenu')) {
                                sibling.classList.remove('nested-dropdown-open');
                                var siblingToggle = sibling.querySelector(':scope > .wellness-submenu-toggle');
                                if (siblingToggle) siblingToggle.setAttribute('aria-expanded', 'false');
                                sibling.querySelectorAll('.nested-dropdown-open').forEach(function (child) {
                                    child.classList.remove('nested-dropdown-open');
                                    var childToggle = child.querySelector(':scope > .wellness-submenu-toggle');
                                    if (childToggle) childToggle.setAttribute('aria-expanded', 'false');
                                });
                            }
                        });

                        submenu.classList.toggle('nested-dropdown-open', nestedIsOpen);
                        if (!nestedIsOpen) {
                            submenu.querySelectorAll('.nested-dropdown-open').forEach(function (child) {
                                child.classList.remove('nested-dropdown-open');
                                var childToggle = child.querySelector(':scope > .wellness-submenu-toggle');
                                if (childToggle) childToggle.setAttribute('aria-expanded', 'false');
                            });
                        }
                        nestedToggle.setAttribute('aria-expanded', String(nestedIsOpen));
                        return;
                    }

                    var toggle = event.target.closest('.nav-item.dropdown > .dropdown-toggle');
                    if (!toggle || window.innerWidth > 991.72) return;

                    event.preventDefault();
                    event.stopPropagation();

                    var item = toggle.closest('.nav-item.dropdown');
                    var isOpen = item.classList.contains('mobile-dropdown-open');

                    header.querySelectorAll('.nav-item.dropdown.mobile-dropdown-open').forEach(function (
                        openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove('mobile-dropdown-open');
                            var openToggle = openItem.querySelector('.dropdown-toggle');
                            if (openToggle) openToggle.setAttribute('aria-expanded', 'false');
                        }
                    });

                    item.classList.toggle('mobile-dropdown-open', !isOpen);
                    toggle.setAttribute('aria-expanded', String(!isOpen));
                }, true);

                var hamburger = header.querySelector('.hamburger');
                if (hamburger) {
                    hamburger.addEventListener('click', function () {
                        var expanded = hamburger.getAttribute('aria-expanded') === 'true';
                        hamburger.setAttribute('aria-expanded', String(!expanded));
                    });
                }

                function closeCustomMenus() {
                    header.querySelectorAll('.mobile-dropdown-open, .nested-dropdown-open').forEach(function (item) {
                        item.classList.remove('mobile-dropdown-open', 'nested-dropdown-open');
                    });
                    header.querySelectorAll('[aria-expanded="true"]').forEach(function (toggle) {
                        if (!toggle.classList.contains('hamburger')) toggle.setAttribute('aria-expanded', 'false');
                    });
                }

                document.addEventListener('click', function (event) {
                    if (!header.contains(event.target)) closeCustomMenus();
                });

                document.addEventListener('keydown', function (event) {
                    if (event.key === ' ' && event.target.closest('.dropdown-toggle, .wellness-submenu-toggle, .hamburger')) {
                        event.preventDefault();
                        event.target.closest('.dropdown-toggle, .wellness-submenu-toggle, .hamburger').click();
                        return;
                    }
                    if (event.key !== 'Escape') return;
                    closeCustomMenus();
                    var openBootstrapToggle = header.querySelector('.dropdown-toggle.show');
                    if (openBootstrapToggle && window.bootstrap) {
                        bootstrap.Dropdown.getOrCreateInstance(openBootstrapToggle).hide();
                        openBootstrapToggle.focus();
                    }
                });

                header.addEventListener('hidden.bs.dropdown', function () {
                    header.querySelectorAll('.nested-dropdown-open').forEach(function (item) {
                        item.classList.remove('nested-dropdown-open');
                    });
                    header.querySelectorAll('.wellness-submenu-toggle').forEach(function (toggle) {
                        toggle.setAttribute('aria-expanded', 'false');
                    });
                });
            })();
        </script>
