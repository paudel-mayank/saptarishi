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
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700&amp;family=Libre+Caslon+Display&amp;family=Roboto+Flex:opsz,wght@8..144,400;500;600;700&amp;display=swap" rel="stylesheet" />
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
    <link rel="stylesheet" media="all" href="themes/custom/pathretreats/css/design-system.css?v=1" />
    <script src="https://use.fontawesome.com/releases/v6.4.2/js/all.js" defer crossorigin="anonymous"
        data-search-pseudo-elements></script>
    <script src="https://use.fontawesome.com/releases/v6.4.2/js/v4-shims.js" defer crossorigin="anonymous"
        data-search-pseudo-elements></script>

    <style>
        .items {
            min-width: 480px
        }

        .nav-link.dropdown-toggle::after {
            display: block;
            border-width: 0 1px 1px 0;
            /* border-color: var(--changecolor, var(--c-black)); */
            padding: 3px;
            /* border-style: solid; */
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            margin-left: 10px;
            margin-bottom: 3px;
        }


        .header .wellness-programs-menu>.wellness-menu {
            min-width: 340px !important;
            padding: 14px !important;
            border: 1px solid rgba(34, 55, 69, 0.08);
            border-radius: 12px;
            box-shadow: 0 18px 45px rgba(34, 55, 69, 0.16);
            background: #ffffff;
        }

        .header .wellness-programs-menu .wellness-submenu {
            position: relative;
        }

        .header .wellness-programs-menu .wellness-submenu-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 46px;
            font-weight: 600;
        }

        .header .wellness-programs-menu .wellness-submenu-toggle>span {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .wellness-programs-menu .wellness-submenu-toggle i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 8px;
            color: var(--c-primary, #78ad27);
            background: rgba(145, 204, 51, 0.12);
            font-size: 0.95rem;
        }

        .header .wellness-programs-menu .wellness-submenu-toggle::after {
            content: '';
            width: 7px;
            height: 7px;
            margin-left: 16px;
            border-top: 1px solid currentColor;
            border-right: 1px solid currentColor;
            transform: rotate(135deg);
        }

        .header .wellness-programs-menu .wellness-submenu-menu {
            position: static;
            display: none;
            width: auto;
            min-width: 0;
            padding: 8px 0 10px 14px;
            margin: 5px 0 7px 16px;
            border: 0;
            border-left: 2px solid rgba(145, 204, 51, 0.32);
            border-radius: 0;
            box-shadow: none;
            background: rgba(247, 249, 243, 0.72);
        }

        .header .wellness-programs-menu .wellness-submenu.nested-dropdown-open>.wellness-submenu-menu {
            display: block;
        }

        .header .wellness-programs-menu .wellness-submenu.nested-dropdown-open>.wellness-submenu-toggle::after {
            transform: rotate(-45deg);
        }

        .header .wellness-programs-menu .wellness-submenu.nested-dropdown-open>.wellness-submenu-toggle {
            color: var(--c-title, #223745);
            background: rgba(145, 204, 51, 0.14);
        }

        .header .wellness-programs-menu .dropdown-item {
            margin: 2px 0;
            border-radius: 8px;
            padding: 10px 12px;
            line-height: 1.35;
            white-space: normal;
            transition: color 0.2s ease, background 0.2s ease, transform 0.2s ease;
        }

        .header .wellness-programs-menu .dropdown-item:hover,
        .header .wellness-programs-menu .dropdown-item:focus {
            background: rgba(145, 204, 51, 0.12);
            color: var(--c-title, #2f2f2f);
        }

        .header .wellness-programs-menu .small-title {
            color: var(--c-primary, #91cc33);
            font-weight: 700;
        }

        .header .wellness-programs-menu .wellness-menu-label {
            padding: 5px 12px 10px;
            color: #7c878d;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .header .wellness-programs-menu .wellness-category,
        .header .wellness-programs-menu .wellness-subcategory {
            color: var(--c-title, #223745);
        }

        .header .wellness-programs-menu .wellness-leaf {
            position: relative;
            padding-left: 30px;
            color: #48585f;
            font-size: 0.92rem;
        }

        .header .wellness-programs-menu .wellness-leaf::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 12px;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--c-primary, #91cc33);
            transform: translateY(-50%);
        }

        .header .wellness-programs-menu .wellness-leaf:hover,
        .header .wellness-programs-menu .wellness-leaf:focus {
            transform: translateX(2px);
        }

        .header .wellness-programs-menu .wellness-view-all {
            margin: 0 0 7px;
            padding: 9px 12px 12px;
            border-bottom: 1px solid rgba(34, 55, 69, 0.1);
            border-radius: 0;
            font-size: 0.82rem;
        }

        .header .standard-menu {
            min-width: 260px !important;
            padding: 12px !important;
            border: 1px solid rgba(34, 55, 69, 0.08);
            border-radius: 12px;
            box-shadow: 0 18px 45px rgba(34, 55, 69, 0.16);
            background: #ffffff;
        }

        .header .standard-menu .standard-menu-label {
            padding: 5px 12px 10px;
            color: #7c878d;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .header .standard-menu .dropdown-item {
            display: flex;
            align-items: center;
            gap: 11px;
            min-height: 44px;
            margin: 2px 0;
            padding: 9px 11px;
            border-radius: 8px;
            color: var(--c-title, #223745);
            line-height: 1.35;
            white-space: normal;
            transition: color 0.2s ease, background 0.2s ease, transform 0.2s ease;
        }

        .header .standard-menu .dropdown-item i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 32px;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            color: var(--c-primary, #78ad27);
            background: rgba(145, 204, 51, 0.12);
            font-size: 0.92rem;
        }

        .header .standard-menu .dropdown-item:hover,
        .header .standard-menu .dropdown-item:focus {
            color: var(--c-title, #223745);
            background: rgba(145, 204, 51, 0.12);
            transform: translateX(2px);
        }

        @media (min-width: 992px) {
            .header .wellness-programs-menu>.wellness-menu {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
                margin-top: 0 !important;
            }

            .header .wellness-programs-menu>.wellness-menu.show {
                display: grid;
            }

            .header .wellness-programs-menu>.wellness-menu>.wellness-menu-label {
                grid-column: 1 / -1;
            }

            .header .wellness-programs-menu>.wellness-menu>.wellness-submenu {
                position: static;
            }

            .header .wellness-programs-menu>.wellness-menu>.wellness-submenu>.wellness-submenu-menu {
                position: absolute;
                top: calc(100% - 2px);
                right: 0;
                left: 0;
                width: 100%;
                margin: 0;
                padding: 16px;
                border: 1px solid rgba(34, 55, 69, 0.08);
                border-radius: 0 0 12px 12px;
                box-shadow: 0 18px 45px rgba(34, 55, 69, 0.16);
                background: #ffffff;
            }

            .header .wellness-programs-menu .wellness-category {
                justify-content: center;
                padding: 10px 12px;
            }

            .header .wellness-programs-menu .wellness-category::after {
                display: none;
            }
        }

        @media (max-width: 991.72px) {
            .header.site-header-main .navigation-wrapper {
                z-index: 1000;
                padding: 12px 18px 24px;
                background: #ffffff;
            }

            .header.site-header-main .navbar-nav {
                gap: 8px;
            }

            .header.site-header-main .navbar-nav>li {
                display: block;
                padding: 0;
                overflow: hidden;
            }

            .header.site-header-main .navbar-nav>li>a.nav-link {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                padding: 15px 16px;
                color: var(--c-title, #2f2f2f);
                font-weight: 500;
            }

            .header.site-header-main .navbar-nav>li>a.dropdown-toggle::after {
                display: block;
                transition: transform 0.24s ease;
            }

            .header.site-header-main .navbar-nav>li.mobile-dropdown-open>a.dropdown-toggle::after {
                transform: rotate(225deg);
                margin-bottom: -2px;
            }

            .header.site-header-main .navbar-nav>li .dropdown-menu {
                position: static !important;
                width: 100%;
                min-width: 0 !important;
                transform: none !important;
                display: none;
                padding: 0 14px 14px !important;
                margin: 0;
                border: 0;
                border-radius: 0;
                box-shadow: none;
                background: #f7f3eb;
            }

            .header.site-header-main .navbar-nav>li.mobile-dropdown-open>.dropdown-menu {
                display: block;
            }

            .header.site-header-main .dropdown-menu .row {
                display: block;
                margin: 0;
            }

            .header.site-header-main .dropdown-menu [class*="col-"] {
                width: 100%;
                max-width: 100%;
                padding: 10px 0 0;
            }

            .header.site-header-main .wellness-programs-menu>.wellness-menu {
                min-width: 0 !important;
                padding: 6px 14px 14px !important;
                background: #f7f3eb;
            }

            .header.site-header-main .wellness-programs-menu .wellness-submenu-menu {
                position: static;
                display: none;
                min-width: 0;
                width: auto;
                padding: 5px 0 7px 12px !important;
                margin: 3px 0 5px 14px;
                border: 0;
                border-left: 2px solid rgba(145, 204, 51, 0.32);
                border-radius: 0;
                box-shadow: none;
                background: transparent;
            }

            .header.site-header-main .wellness-programs-menu .wellness-menu-label {
                padding: 7px 10px 5px;
            }

            .header.site-header-main .wellness-programs-menu .wellness-submenu-toggle {
                min-height: 44px;
            }

            .header.site-header-main .wellness-programs-menu .wellness-submenu.nested-dropdown-open>.wellness-submenu-menu {
                display: block;
            }

            .header.site-header-main .wellness-programs-menu .wellness-submenu.nested-dropdown-open>.wellness-submenu-toggle::after {
                transform: rotate(-45deg);
            }

            .header.site-header-main .dropdown-menu .dropdown-header {
                padding: 10px 0 6px;
                font-size: 0.78rem;
                letter-spacing: 0.08em;
                text-transform: uppercase;
            }

            .header.site-header-main .dropdown-menu .dropdown-item {
                padding: 10px 12px;
                border-radius: 6px;
                white-space: normal;
                line-height: 1.35;
            }

            .header.site-header-main .standard-menu {
                min-width: 0 !important;
                padding: 8px 14px 14px !important;
                border: 0;
                border-radius: 0;
                box-shadow: none;
                background: #f7f3eb;
            }

            .header.site-header-main .navbar-nav>li:last-child {
                border: 0;
                background: transparent;
                padding-top: 6px;
            }
        }
    </style>

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
            <div class="container-fluid" style="padding: 0px 30px;">
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
