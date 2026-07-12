<?php include __DIR__ . '/includes/header.php'; ?>

<style>
    /* ===== NEWSLETTER BAND ===== */
    .nl-band {
        background: var(--footer-bg);
        padding: 52px 120px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        flex-wrap: wrap;
    }

    .nl-left {
        flex: 1;
        min-width: 220px;
    }

    .nl-tag {
        font-family: var(--tag-font-family);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--c-primary);
        margin-bottom: 12px;
    }

    .nl-heading {
        font-family: var(--header-font-family);
        font-size: 32px;
        line-height: 1.2;
        color: #fff;
        margin-bottom: 10px;
    }

    .nl-sub {
        font-size: 14px;
        font-weight: 300;
        color: #8fa5b3;
        line-height: 1.7;
        max-width: 340px;
    }

    .nl-right {
        flex: 1;
        min-width: 260px;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .nl-row {
        display: flex;
        gap: 0;
    }

    .nl-input {
        flex: 1;
        background: transparent;
        border: 1px solid #3a5160;
        border-right: none;
        color: #fff;
        font-family: var(--body-font-family);
        font-size: 14px;
        padding: 13px 18px;
        outline: none;
    }

    .nl-input::placeholder {
        color: #4a6070;
    }

    .nl-input:focus {
        border-color: var(--c-primary);
    }

    .nl-btn {
        background: var(--c-primary);
        border: 1px solid var(--c-primary);
        color: var(--c-title);
        font-family: var(--tag-font-family);
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 13px 24px;
        cursor: pointer;
        white-space: nowrap;
        transition: background 0.2s;
    }

    .nl-btn:hover {
        background: var(--c-secondary);
        border-color: var(--c-secondary);
    }

    .nl-checks {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .nl-check {
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 12px;
        color: #5a7585;
        font-family: var(--tag-font-family);
    }

    .nl-check-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--c-primary);
        flex-shrink: 0;
    }

    /* ===== EVENTS SECTION ===== */
    .ev-section {
        background: var(--c-bg-light);
        padding: 60px 48px;
    }

    .ev-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 36px;
        flex-wrap: wrap;
        gap: 16px;
    }

    .ev-tag {
        font-family: var(--tag-font-family);
        font-size: 11px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--c-primary);
        margin-bottom: 10px;
    }

    .ev-title {
        font-family: var(--header-font-family);
        font-size: 34px;
        color: var(--c-title);
        line-height: 1.2;
    }

    .ev-all-link {
        font-family: var(--tag-font-family);
        font-size: 13px;
        font-weight: 500;
        color: var(--c-secondary);
        text-decoration: none;
        border-bottom: 1px solid var(--c-primary);
        padding-bottom: 2px;
        white-space: nowrap;
    }

    .ev-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
    }

    /* Event Card */
    .ev-card {
        background: #fff;
        border: 1px solid var(--border-color);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .ev-card-img {
        height: 160px;
        position: relative;
        overflow: hidden;
    }

    .ev-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .ev-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        font-family: var(--tag-font-family);
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 4px 10px;
    }

    .badge-retreat {
        background: var(--c-primary);
        color: var(--c-title);
    }

    .badge-workshop {
        background: var(--orange-bg);
        color: #fff;
    }

    .badge-online {
        background: var(--c-title);
        color: #fff;
    }

    .ev-date-strip {
        background: var(--c-title);
        color: #fff;
        font-family: var(--tag-font-family);
        font-size: 11px;
        letter-spacing: 1px;
        padding: 7px 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .ev-date-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--c-primary);
        flex-shrink: 0;
    }

    .ev-card-body {
        padding: 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .ev-card-title {
        font-family: var(--header-font-family);
        font-size: 17px;
        color: var(--c-title);
        line-height: 1.3;
    }

    .ev-card-loc {
        font-family: var(--tag-font-family);
        font-size: 11px;
        color: #888;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .ev-card-desc {
        font-size: 13px;
        color: #555;
        line-height: 1.6;
        flex: 1;
    }

    .ev-card-footer {
        padding: 14px 18px;
        border-top: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .ev-price {
        font-family: var(--tag-font-family);
        font-size: 13px;
        font-weight: 500;
        color: var(--c-title);
    }

    .ev-price span {
        font-size: 11px;
        font-weight: 400;
        color: #888;
        margin-left: 2px;
    }

    .ev-register {
        font-family: var(--tag-font-family);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--c-secondary);
        border: 1px solid var(--c-primary);
        padding: 7px 14px;
        background: transparent;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
    }

    .ev-register:hover {
        background: var(--c-primary);
        color: var(--c-title);
    }

    /* Featured spans 2 columns */
    .ev-card.featured {
        grid-column: span 2;
    }

    .ev-card.featured .ev-card-img {
        height: 220px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {

        .nl-band,
        .ev-section {
            padding: 40px 20px;
        }

        .nl-heading {
            font-size: 24px;
        }

        .ev-title {
            font-size: 26px;
        }

        .ev-card.featured {
            grid-column: span 1;
        }
    }

    /* ===== MOBILE RESPONSIVE — Newsletter & Events ===== */

    @media (max-width: 1024px) {
        .ev-card.featured {
            grid-column: span 2;
        }
    }

    @media (max-width: 768px) {

        /* --- Newsletter Band --- */
        .nl-band {
            flex-direction: column;
            align-items: flex-start;
            padding: 40px 24px;
            gap: 28px;
        }

        .nl-left {
            min-width: unset;
            width: 100%;
        }

        .nl-heading {
            font-size: 26px;
        }

        .nl-sub {
            max-width: 100%;
            font-size: 14px;
        }

        .nl-right {
            min-width: unset;
            width: 100%;
        }

        .nl-row {
            flex-direction: column;
            gap: 0;
        }

        .nl-input {
            border-right: 1px solid #3a5160;
            border-bottom: none;
            width: 100%;
        }

        .nl-input:focus {
            border-color: var(--c-primary);
        }

        .nl-btn {
            width: 100%;
            text-align: center;
            padding: 14px;
        }

        .nl-checks {
            flex-direction: column;
            gap: 10px;
        }

        /* --- Events Section --- */
        .ev-section {
            padding: 40px 24px;
        }

        .ev-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 24px;
        }

        .ev-title {
            font-size: 26px;
        }

        .ev-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .ev-card.featured {
            grid-column: span 1;
        }

        .ev-card.featured .ev-card-img {
            height: 180px;
        }

        .ev-card-img {
            height: 180px;
        }

        .ev-card-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .ev-register {
            width: 100%;
            text-align: center;
            padding: 12px;
        }
    }

    @media (max-width: 480px) {

        /* --- Newsletter --- */
        .nl-band {
            padding: 32px 16px;
        }

        .nl-heading {
            font-size: 22px;
        }

        .nl-tag {
            font-size: 10px;
            letter-spacing: 2px;
        }

        .nl-sub {
            font-size: 13px;
        }

        .nl-checks {
            gap: 8px;
        }

        .nl-check {
            font-size: 11px;
        }

        /* --- Events --- */
        .ev-section {
            padding: 32px 16px;
        }

        .ev-title {
            font-size: 22px;
        }

        .ev-tag {
            font-size: 10px;
            letter-spacing: 2px;
        }

        .ev-all-link {
            font-size: 12px;
        }

        .ev-card-img {
            height: 160px;
        }

        .ev-card.featured .ev-card-img {
            height: 160px;
        }

        .ev-card-title {
            font-size: 15px;
        }

        .ev-card-desc {
            font-size: 13px;
        }

        .ev-date-strip {
            font-size: 10px;
            padding: 6px 12px;
        }

        .ev-badge {
            font-size: 9px;
            padding: 3px 8px;
        }

        .ev-price {
            font-size: 13px;
        }

        .ev-register {
            font-size: 11px;
            letter-spacing: 1px;
            padding: 11px;
        }

        .ev-card-body {
            padding: 14px;
        }

        .ev-card-footer {
            padding: 12px 14px;
        }
    }
</style>
<div class="main-content">
    <!-- <a id="main-content" tabindex="-1"></a> -->
    <div class="region region-content">
        <!-- <div data-drupal-messages-fallback class="hidden"></div> -->
        <div id="block-pathretreats-content" class="block block-system block-system-main-block">
            <article data-history-node-id="1" class="node node--type-homepage node--view-mode-full">
                <div class="node__content">
                    <div
                        class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">
                        <div class="field__item">
                            <div class="paragraph paragraph--type--home-slider-banner paragraph--view-mode--default">
                                <div class="banner-outer">
                                    <div class="banner-container">
                                        <div
                                            class="field field--name-field-banner-slide-items field--type-entity-reference-revisions field--label-hidden field__items">
                                            <div class="swiper homebannerSwiper">
                                                <div class="swiper-wrapper">
                                                    <div class="field__item swiper-slide"
                                                        style="height:100vh; width:100%;">
                                                        <div
                                                            class="paragraph paragraph--type--banner-slide-item paragraph--view-mode--default">
                                                            <div class="">
                                                                <video muted loop playsinline preload="none"
                                                                    poster="sites/default/files/2025-03/homepagebanner1.webp"
                                                                    class="background-video" data-hero-video>
                                                                    <source data-src="assets/Homepage-big-page-video-final-.mp4" type="video/mp4">
                                                                </video>
                                                            </div>
                                                            <div class="banner-captions">
                                                                <div class="container">
                                                                    <h1>
                                                                        <div style="z-index:999;"
                                                                            class="clearfix text-formatted field field--name-field-long-title field--type-text field--label-hidden field__item">
                                                                            A JOURNEY AWAITS
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom-caption">
                                            <div class="container">
                                                <div class="banner-caption-wrapper">
                                                    <div class="text">
                                                        <div
                                                            class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                        </div>
                                                    </div>
                                                    <div class="banner-links">
                                                        <!-- <div style="padding-bottom: 25px;"
                                    class="field field--name-field-banner-links field--type-link field--label-hidden field__items">
                                    <div class="field__item"><a href="discovery-call-booking-form.html">Free discovery
                                        call</a></div>
                                    <div class="field__item"><a href="personal-growth-retreat-workshop.html">What is the
                                        Path of Love?</a></div>
                                  </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="journey-container">
                          <div class="container">
                            <div class="journey-outer">
                              <div class="start-your">
                                <div class="trigger"><span>Start your Journey →</span>
                                  <div class="icon"></div>
                                </div>
                                <div class="show-start">
                                  <h4>Start your Journey</h4>
                                  <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                      <a href="find-retreat.html" class="nav-link"
                                        data-drupal-link-system-path="node/11">Book a Retreat →</a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="science-and-spirituality-retreats.html" class="nav-link"
                                        data-drupal-link-system-path="node/14">Request Information Pack →</a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="discovery-call-booking-form.html" class="nav-link"
                                        data-drupal-link-system-path="node/111">Schedule a Call Back →</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="line-icon">
                              </div>
                            </div>
                          </div>
                        </div> -->
                                </div>
                                <!-- <div class="bg-svg-logo">
                  </div> -->
                            </div>
                        </div>
                        <div class="field__item">
                            <div class="paragraph paragraph--type--image-and-content paragraph--view-mode--default">
                                <div class="container type-col">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                <img loading="lazy" src="assets/indexabout.png" width="977" height="956"
                                                    alt="Participants on the Path of Love"
                                                    style="height:400px; width:100%; object-fit:cover;" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 intro-type-1">
                                            <div class="small-title"></div>
                                            <!-- <div class="content">
                          <div
                            class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                            <h4>We inspire people to live life with genuine connection, igniting their spiritual
                              growth and courage to reclaim parts of themselves that have been lost—to meet and live
                              their truth.</h4>
                          </div>
                        </div> -->
                                            <div class="content">

                                                <div
                                                    class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                    <p>We are proud of our extraordinary reputation for facilitating
                                                        profound transformational
                                                        work. Our retreats also address emotional trauma and pain,
                                                        depression, anxiety, fear,
                                                        grief, addiction, loneliness, separation, and relationship
                                                        problems, and can therefore
                                                        radically reduce physical conditions such as stress and
                                                        burnout.
                                                        We are proud of our extraordinary reputation for facilitating
                                                        profound transformational
                                                        work. Our retreats also address emotional trauma and pain,
                                                        depression, anxiety, fear,
                                                        grief, addiction, loneliness, separation, and relationship
                                                        problems, and can therefore
                                                        radically reduce physical conditions such as stress and
                                                        burnout.</p>
                                                </div>
                                            </div>
                                            <div class="link">
                                                <div
                                                    class="field field--name-field-link field--type-link field--label-hidden field__item">
                                                    <a href="about-us.php">About Takshashelaa</a>
                                                </div>
                                            </div>
                                            <div class="spacer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paragraph paragraph--type--retreats-section paragraph--view-mode--default">
                            <div class="our-retreats">
                                <div class="container">
                                    <div class="small-title">
                                        <div
                                            class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                                            Packages</div>
                                    </div>
                                    <div class="title">
                                        <h2>
                                            <div
                                                class="clearfix text-formatted field field--name-field-long-title field--type-text field--label-hidden field__item">
                                                Our packages that heal <br>the past and open the future</div>
                                        </h2>
                                    </div>
                                    <div class="cards">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div
                                                    class="paragraph paragraph--type--card paragraph--view-mode--default">
                                                    <div class="card-image">
                                                        <div
                                                            class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                            <img loading="lazy"
                                                                src="sites/default/files/2025-03/introductory%20courses.jpg"
                                                                width="629" height="574" alt="Awakening of love"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="card-info">
                                                        <div class="small-title">
                                                            <div
                                                                class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                                                                1-2 Day Courses</div>
                                                        </div>
                                                        <h4 class="card-title">
                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Introductory Courses</div>
                                                        </h4>
                                                        <div class="content">
                                                            <div
                                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                                <p>These 1 and 2 day courses open your heart and
                                                                    introduce you to the Path of Love
                                                                    retreat, while helping you to find meaningful and
                                                                    lasting change in your life.</p>
                                                            </div>
                                                        </div>
                                                        <div class="link small">
                                                            <div
                                                                class="field field--name-field-link field--type-link field--label-hidden field__item">
                                                                <a href="package-detail.php">Learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
                                                <div
                                                    class="paragraph paragraph--type--card paragraph--view-mode--default">
                                                    <div class="card-image">

                                                        <div
                                                            class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                            <img loading="lazy"
                                                                src="sites/default/files/2025-03/path%20of%20love%20homepage.jpg"
                                                                width="633" height="577" alt="Path of love cover"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="card-info">
                                                        <div class="small-title">

                                                            <div
                                                                class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                                                                7-Day retreat</div>
                                                        </div>
                                                        <h4 class="card-title">

                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Path of Love Process</div>
                                                        </h4>
                                                        <div class="content">
                                                            <div
                                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                                <p>The Path of Love process is a unique,
                                                                    revolutionary, and life transforming personal
                                                                    growth and meditation retreat that will alter your
                                                                    life in a substantial and enduring
                                                                    way.</p>
                                                            </div>
                                                        </div>
                                                        <div class="link small">

                                                            <div
                                                                class="field field--name-field-link field--type-link field--label-hidden field__item">
                                                                <a href="package-detail.php">Learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
                                            </div>
                                            <div class="col-md-4">
                                                <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
                                                <div
                                                    class="paragraph paragraph--type--card paragraph--view-mode--default">
                                                    <div class="card-image">

                                                        <div
                                                            class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                            <img loading="lazy"
                                                                src="sites/default/files/2025-03/path%20of%20love%20homepage.jpg"
                                                                width="422" height="385" alt="Advanced spiritual work"
                                                                class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="card-info">
                                                        <div class="small-title">

                                                            <div
                                                                class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                                                                3-5 day retreats</div>
                                                        </div>
                                                        <h4 class="card-title">

                                                            <div
                                                                class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                Advanced Work</div>
                                                        </h4>
                                                        <div class="content">
                                                            <div
                                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                                <p>Extensive ongoing support, integration and advanced
                                                                    retreats for Path of Love
                                                                    graduates, including residential, weekend and
                                                                    conscious relating courses.</p>
                                                            </div>
                                                        </div>
                                                        <div class="link small">

                                                            <div
                                                                class="field field--name-field-link field--type-link field--label-hidden field__item">
                                                                <a href="package-detail.php">Learn more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
                                            </div>
                                        </div>
                                        <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field--paragraph--field-retreats-cards.html.twig' -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="py-5 bg-white" id="services">
                            <div class="container">
                                <!-- Section Heading -->
                                <div class="text-center mb-3">
                                    <div style="margin:30px 0px;">
                                        <div class="small-title">
                                            <h6
                                                class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                                                Services</h6>
                                        </div>
                                        <div class="title">
                                            <h2>
                                                <div
                                                    class="clearfix text-formatted field field--name-field-long-title field--type-text field--label-hidden field__item">
                                                    Transformative services designed <br>to support your healing
                                                    journey
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                    <!-- Services Grid -->
                                    <div class="field__item">
                                        <div class="container">
                                            <div>
                                                <div class="view-content">
                                                    <!-- Takshasheela Ayurveda Aashram Services -->
                                                    <div class="row gy-2">

                                                        <!-- Service 1 -->
                                                        <div class="col-md-6 col-lg-4 views-row">
                                                            <article
                                                                class="node node--type-walking-the-path node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                <div class="retreat-inner card-body p-0">
                                                                    <div class="retreat-image-type-sold card-img-top">
                                                                        <div class="retreat-overview-image">
                                                                            <div
                                                                                class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                <a href="service-detail.php">
                                                                                    <img loading="lazy"
                                                                                        src="sites/default/files/2025-03/polusa.png"
                                                                                        width="464" height="344"
                                                                                        alt="Panchakarma Therapy"
                                                                                        class="img-fluid w-100" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="retreat-caption p-3">
                                                                        <h4 class="my-2 mb-4">
                                                                            <span
                                                                                class="field field--name-title field--type-string field--label-hidden">
                                                                                Panchakarma & Detox Therapy
                                                                            </span>
                                                                        </h4>

                                                                        <div
                                                                            class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                            <p style="height:100px;">
                                                                                Experience authentic Panchakarma
                                                                                therapies designed to cleanse the
                                                                                body,
                                                                                eliminate toxins, and restore internal
                                                                                balance through classical Ayurvedic
                                                                                treatments ..
                                                                            </p>
                                                                        </div>

                                                                        <div class="dink">
                                                                            <a class="w-100" href="service-detail.php">
                                                                                View Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <!-- Service 2 -->
                                                        <div class="col-md-6 col-lg-4 views-row">
                                                            <article
                                                                class="node node--type-path-of-love node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                <div class="retreat-inner card-body p-0">
                                                                    <div
                                                                        class="retreat-image-type-sold card-img-top position-relative">
                                                                        <div class="retreat-overview-image">
                                                                            <div
                                                                                class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                <a href="service-detail.php">
                                                                                    <img loading="lazy"
                                                                                        src="sites/default/files/2025-03/polusa.png"
                                                                                        width="464" height="344"
                                                                                        alt="Ayurvedic Wellness Retreats"
                                                                                        class="img-fluid w-100" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="retreat-caption p-3">
                                                                        <h4 class="my-2 mb-4">
                                                                            <span
                                                                                class="field field--name-title field--type-string field--label-hidden">
                                                                                Ayurvedic Wellness Retreats
                                                                            </span>
                                                                        </h4>

                                                                        <div
                                                                            class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                            <p style="height:100px;">
                                                                                Immerse yourself in holistic wellness
                                                                                retreats combining Ayurvedic
                                                                                therapies, yoga, meditation, and
                                                                                mindful living practices to promote
                                                                                long-term health, vitality..
                                                                            </p>
                                                                        </div>

                                                                        <div class="dink">
                                                                            <a class="w-100" href="service-detail.php">
                                                                                View Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <!-- Service 3 -->
                                                        <div class="col-md-6 col-lg-4 views-row">
                                                            <article
                                                                class="node node--type-path-of-love node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                <div class="retreat-inner card-body p-0">
                                                                    <div class="retreat-image-type-sold card-img-top">
                                                                        <div class="retreat-overview-image">
                                                                            <div
                                                                                class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                <a href="service-detail.php">
                                                                                    <img loading="lazy"
                                                                                        src="sites/default/files/2025-04/Grytsberg_Explore%20retreat.jpg"
                                                                                        width="464" height="344"
                                                                                        alt="Personalized Healing Programs"
                                                                                        class="img-fluid w-100" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="retreat-caption p-3">
                                                                        <h4 class="my-2 mb-4">
                                                                            <span
                                                                                class="field field--name-title field--type-string field--label-hidden">
                                                                                Personalized Healing Programs
                                                                            </span>
                                                                        </h4>

                                                                        <div
                                                                            class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                            <p style="height:100px;">
                                                                                Receive individualized Ayurvedic
                                                                                healing programs based on your unique
                                                                                body constitution (Dosha), health
                                                                                conditions, and lifestyle—guided by
                                                                                experienced Ayurvedic ..
                                                                            </p>
                                                                        </div>

                                                                        <div class="dink">
                                                                            <a class="w-100" href="service-detail.php">
                                                                                View Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div style="max-width: 200px; margin: 30px auto; text-align: center;">
                                            <p class="button-contact">See More</p>
                                        </div>
                        </section>
                    </div>

                    <div class="testimonial-container">
                        <div
                            class=" small-title field field--name-field-small-title field--type-string field--label-hidden field__item text-center">
                            TESTIMONIAL</div>
                        <h2 class="testimonial-title">What our Clients Say About Us </h2>
                        <div class="slider-wrapper">
                            <button class="nav-button prev-btn">&#10094;</button>
                            <div class="testimonial-content">
                                <img loading="lazy" src="assets/p.jpg" width="200" height="200"
                                    alt="Student" class="profile-image">
                                <div class="student-name" id="studentName">Jedd Horowitz</div>
                                <div class="student-location" id="studentLocation">USA</div>
                                <p class="testimonial-text" id="testimonialText">
                                    The Kathmandu Meditation School is the greatest place in the world. What makes it
                                    so special is the
                                    quality of the people — they are so kind and smart, and do everything they can so
                                    that you have a
                                    comfortable experience, yet learn and grow in every way possible. The food is
                                    absolutely delicious,
                                    the facilities are very clean and nice, and the offerings are excellent. As there
                                    are many centers
                                    like this in Nepal, you should feel confident that this is the best one to attend.
                                    Don't think
                                    twice, book it!
                                </p>
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                            <button class="nav-button next-btn">&#10095;</button>
                        </div>
                    </div>
                    <!-- ===== NEWSLETTER BAND ===== -->
                    <div class="field__item ">
                        <div class="nl-band">
                            <div class="nl-left">
                                <div class="nl-tag">Newsletter</div>
                                <h2 class="nl-heading">Wisdom delivered<br>to your inbox</h2>
                                <p class="nl-sub">Retreat dates, healing insights, Ayurvedic tips, and stories from
                                    our
                                    community — sent monthly.</p>
                            </div>
                            <div class="nl-right">
                                <form class="nl-row" action="https://pathretreats.us18.list-manage.com/subscribe/post?u=a3106ca66b6dbaa171683ae30&amp;id=90a6f3c136" method="post" target="_blank">
                                    <label class="visually-hidden" for="homepage-newsletter-email">Email address</label>
                                    <input class="nl-input" id="homepage-newsletter-email" name="EMAIL" type="email" autocomplete="email" placeholder="Your email address" required />
                                    <button class="nl-btn" type="submit">Subscribe</button>
                                </form>
                                <div class="nl-checks">
                                    <div class="nl-check">
                                        <div class="nl-check-dot"></div>Monthly digest
                                    </div>
                                    <div class="nl-check">
                                        <div class="nl-check-dot"></div>Retreat announcements
                                    </div>
                                    <div class="nl-check">
                                        <div class="nl-check-dot"></div>No spam, ever
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ===== EVENTS SECTION ===== -->
                        <div class="ev-section">
                            <div class="container">
                                <div class="ev-header">
                                    <div>
                                        <div class="ev-tag">Upcoming</div>
                                        <h2 class="ev-title">Events &amp; Retreats</h2>
                                    </div>
                                    <a class="ev-all-link" href="newsandevents.php">View all events →</a>
                                </div>

                                <div class="ev-grid">

                                    <!-- Featured Card (spans 2 cols) -->
                                    <div class="ev-card featured">
                                        <div class="ev-card-img">
                                            <img loading="lazy" src="sites/default/files/2025-03/path%20of%20love%20homepage.jpg" width="633" height="577"
                                                alt="Path of Love Summer Immersion" />
                                            <div class="ev-badge badge-retreat">7-Day Retreat</div>
                                        </div>
                                        <div class="ev-date-strip">
                                            <div class="ev-date-dot"></div>June 14 – 21, 2025 &nbsp;·&nbsp; Kathmandu,
                                            Nepal
                                        </div>
                                        <div class="ev-card-body">
                                            <div class="ev-card-title">Path of Love — Summer Immersion</div>
                                            <div class="ev-card-loc">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M6 1a3.5 3.5 0 0 1 3.5 3.5C9.5 7.5 6 11 6 11S2.5 7.5 2.5 4.5A3.5 3.5 0 0 1 6 1z"
                                                        stroke="#91cc33" stroke-width="1" />
                                                    <circle cx="6" cy="4.5" r="1" fill="#91cc33" />
                                                </svg>
                                                Takshashelaa Aashram, Kathmandu
                                            </div>
                                            <div class="ev-card-desc">Our flagship 7-day transformational retreat
                                                designed
                                                to
                                                strip away layers of conditioning, heal emotional trauma, and
                                                reconnect
                                                you
                                                with your deepest self. Includes Panchakarma, daily meditation, and
                                                group
                                                process work.</div>
                                        </div>
                                        <div class="ev-card-footer">
                                            <div class="ev-price">NPR 85,000 <span>/ person</span></div>
                                            <button class="ev-register">Register Now</button>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="ev-card">
                                        <div class="ev-card-img">
                                            <img loading="lazy" src="sites/default/files/2025-03/homepagebanner1.webp" width="2877" height="1856" alt="Introductory Heart Opening" />
                                            <div class="ev-badge badge-workshop">Workshop</div>
                                        </div>
                                        <div class="ev-date-strip">
                                            <div class="ev-date-dot"></div>May 10 – 11, 2025
                                        </div>
                                        <div class="ev-card-body">
                                            <div class="ev-card-title">Introductory Heart Opening</div>
                                            <div class="ev-card-loc">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M6 1a3.5 3.5 0 0 1 3.5 3.5C9.5 7.5 6 11 6 11S2.5 7.5 2.5 4.5A3.5 3.5 0 0 1 6 1z"
                                                        stroke="#91cc33" stroke-width="1" />
                                                    <circle cx="6" cy="4.5" r="1" fill="#91cc33" />
                                                </svg>
                                                Kathmandu
                                            </div>
                                            <div class="ev-card-desc">A 2-day introduction to the Path of Love — open
                                                your
                                                heart and discover what's possible.</div>
                                        </div>
                                        <div class="ev-card-footer">
                                            <div class="ev-price">NPR 12,000 <span>/ person</span></div>
                                            <button class="ev-register">Register</button>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="ev-card">
                                        <div class="ev-card-img">
                                            <img loading="lazy" src="sites/default/files/2025-03/homepagebanner2.webp" width="2880" height="1799" alt="Ayurveda Webinar" />
                                            <div class="ev-badge badge-online">Online</div>
                                        </div>
                                        <div class="ev-date-strip">
                                            <div class="ev-date-dot"></div>May 25, 2025 · Zoom
                                        </div>
                                        <div class="ev-card-body">
                                            <div class="ev-card-title">Ayurveda &amp; Your Dosha — Free Webinar</div>
                                            <div class="ev-card-loc">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <rect x="1" y="3" width="10" height="7" rx="1" stroke="#91cc33"
                                                        stroke-width="1" />
                                                    <path d="M1 5h10" stroke="#91cc33" stroke-width="1" />
                                                </svg>
                                                Online — Zoom
                                            </div>
                                            <div class="ev-card-desc">Discover your body constitution and learn
                                                practical
                                                Ayurvedic routines with our lead practitioner.</div>
                                        </div>
                                        <div class="ev-card-footer">
                                            <div class="ev-price">Free</div>
                                            <button class="ev-register">Join Free</button>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="ev-card">
                                        <div class="ev-card-img">
                                            <img loading="lazy" src="sites/default/files/2025-03/homepagebanner3.webp" width="2880" height="1799" alt="Panchakarma Weekend" />
                                            <div class="ev-badge badge-retreat">3-Day Detox</div>
                                        </div>
                                        <div class="ev-date-strip">
                                            <div class="ev-date-dot"></div>July 4 – 6, 2025
                                        </div>
                                        <div class="ev-card-body">
                                            <div class="ev-card-title">Panchakarma Weekend Detox</div>
                                            <div class="ev-card-loc">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                    <path
                                                        d="M6 1a3.5 3.5 0 0 1 3.5 3.5C9.5 7.5 6 11 6 11S2.5 7.5 2.5 4.5A3.5 3.5 0 0 1 6 1z"
                                                        stroke="#91cc33" stroke-width="1" />
                                                    <circle cx="6" cy="4.5" r="1" fill="#91cc33" />
                                                </svg>
                                                Takshashelaa Aashram
                                            </div>
                                            <div class="ev-card-desc">A concentrated 3-day classical Panchakarma
                                                cleanse
                                                to
                                                eliminate toxins and restore balance.</div>
                                        </div>
                                        <div class="ev-card-footer">
                                            <div class="ev-price">NPR 28,000 <span>/ person</span></div>
                                            <button class="ev-register">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field__item">
                        <div class="paragraph paragraph--type--blogs-articles paragraph--view-mode--default">
                            <div class="container">
                                <div class="blog-article">
                                    <div class="toptitle-link-wrap">
                                        <div class="title">
                                            <h2>
                                                <div
                                                    class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                    Blogs </div>
                                            </h2>
                                        </div>
                                        <div class="top-link">
                                            <div
                                                class="field field--name-field-top-link field--type-link field--label-hidden field__item">
                                                <a href="about-us.php">Discover more about us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-article-view">
                                        <div class="views-element-container">
                                            <div
                                                class="view view-blogs-articles view-id-blogs_articles view-display-id-block_1 js-view-dom-id-78bf665569783f243163c75ba9a8acbd2a965728f5e2979c7a13a3d21bfafb89">
                                                <div class="view-content">
                                                    <div class="row">
                                                        <div class="views-row col-md-4">
                                                            <article data-history-node-id="359"
                                                                class="node node--type-blog node--view-mode-home-blogs">
                                                                <div class="bolg-article-overview">
                                                                    <div class="blog-card">
                                                                        <div class="blog-article-image">
                                                                            <div
                                                                                class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                                <img loading="eager"
                                                                                    src="assets/2025-06/Untitled%20design%20(5)_01392.png?itok=-82Eya0G"
                                                                                    width="1060" height="550" alt=""
                                                                                    class="img-fluid image-style-wide" />
                                                                                <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-style.html.twig' -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="blog-article-content">
                                                                            <h4><a href="blog-detail.php"
                                                                                    rel="bookmark">
                                                                                    <span
                                                                                        class="field field--name-title field--type-string field--label-hidden">Vulnerability
                                                                                        is not Fragility. It is the
                                                                                        Entrance — Reflections by
                                                                                        Laura
                                                                                        Seiler</span>
                                                                                </a></h4>
                                                                            <div class="blog-text">
                                                                                Public Speaker, best-selling author
                                                                                and podcaster, Laura Seiler shares
                                                                                about her Path of Love journey
                                                                            </div>
                                                                            <div class="normal-link">
                                                                                <a href="blog-detail.php">Read
                                                                                    More</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node--blog--home-blogs.html.twig' -->
                                                        </div>
                                                        <div class="views-row col-md-4">
                                                            <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node--blog--home-blogs.html.twig' -->
                                                            <article data-history-node-id="264"
                                                                class="node node--type-blog node--view-mode-home-blogs">
                                                                <div class="bolg-article-overview">
                                                                    <div class="blog-card">
                                                                        <div class="blog-article-image">
                                                                            <div
                                                                                class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                                <img loading="eager"
                                                                                    src="assets/2025-03/Rectangle%20128_474135.png?itok=SJWBPuM9"
                                                                                    width="1060" height="550" alt=""
                                                                                    class="img-fluid image-style-wide" />
                                                                                <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-style.html.twig' -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="blog-article-content">
                                                                            <h4><a href="blog-detail.php"
                                                                                    rel="bookmark">
                                                                                    <span
                                                                                        class="field field--name-title field--type-string field--label-hidden">The
                                                                                        Path of Love: A Transformative
                                                                                        Journey to Your True
                                                                                        Self</span>
                                                                                </a></h4>
                                                                            <div class="blog-text">
                                                                                Path of Love is a 7-day immersive
                                                                                experience of deep inner work. It is a
                                                                                transformative journey designed to
                                                                                strip away…
                                                                            </div>
                                                                            <div class="normal-link">
                                                                                <a href="blog-detail.php">Read
                                                                                    More</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node--blog--home-blogs.html.twig' -->
                                                        </div>
                                                        <div class="views-row col-md-4">
                                                            <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node--blog--home-blogs.html.twig' -->
                                                            <article data-history-node-id="263"
                                                                class="node node--type-blog node--view-mode-home-blogs">
                                                                <div class="bolg-article-overview">
                                                                    <div class="blog-card">
                                                                        <div class="blog-article-image">
                                                                            <div
                                                                                class="field field--name-field-image field--type-image field--label-hidden field__item">
                                                                                <img loading="eager"
                                                                                    src="assets/2025-03/Rectangle%20128_45b654.png?itok=kTxXwSj9"
                                                                                    width="1065" height="550" alt=""
                                                                                    class="img-fluid image-style-wide" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="blog-article-content">
                                                                            <h4><a href="blog-detail.php"
                                                                                    rel="bookmark">
                                                                                    <span
                                                                                        class="field field--name-title field--type-string field--label-hidden">Coming
                                                                                        Home to Yourself: Turiya
                                                                                        Hanover on the World of Wisdom
                                                                                        Podcast</span>
                                                                                </a></h4>
                                                                            <div class="blog-text">
                                                                                We are delighted to share a recent
                                                                                episode of the World of Wisdom podcast
                                                                                featuring our co-founder, Turiya
                                                                                Hanover. In…
                                                                            </div>
                                                                            <div class="normal-link">
                                                                                <a href="blog-detail.php">Read
                                                                                    More</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-link link">

                                        <div
                                            class="field field--name-field-all-articles field--type-link field--label-hidden field__item">
                                            <a href="blog.php">All articles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </div>
</div>
<script>
    const testimonials = [{
        name: "Jedd Horowitz",
        location: "USA",
        image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop",
        text: "The Kathmandu Meditation School is the greatest place in the world...",
        rating: 5
    },
    {
        name: "Sarah Mitchell",
        location: "Canada",
        image: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop",
        text: "An absolutely transformative experience! The instructors...",
        rating: 5
    },
    {
        name: "Marcus Johnson",
        location: "UK",
        image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop",
        text: "Outstanding program with exceptional attention to detail...",
        rating: 5
    },
    {
        name: "Emma Rodriguez",
        location: "Spain",
        image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop",
        text: "A life-changing journey! The combination of meditation practice...",
        rating: 5
    }
    ];
    let currentIndex = 0;

    function updateTestimonial(index) {
        const t = testimonials[index];
        document.getElementById('studentName').textContent = t.name;
        document.getElementById('studentLocation').textContent = t.location;
        document.getElementById('testimonialText').textContent = t.text;
        document.querySelector('.profile-image').src = t.image;
    }
    document.querySelector('.prev-btn').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial(currentIndex);
    });
    document.querySelector('.next-btn').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
    });
    // Initialize first testimonial
    updateTestimonial(currentIndex);
    // 🔁 Auto Loop Every 5 Seconds
    setInterval(() => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
    }, 3000);
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/layout/html.html.twig' -->
