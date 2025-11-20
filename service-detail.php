<?php include 'includes/header.php' ?>
<style>
    /* ============ Root Variables & Base Styles ============ */
    :root {
        --primary-green: #2d5016;
        --accent-gold: #c9a961;
        --light-cream: #f5f1e8;
        --dark-text: #2c2c2c;
        --border-light: #e8e4db;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        /* color: var(--primary-green); */
        margin: 30px 0 20px 0;
        position: relative;
        padding-bottom: 15px;
    }

    .section-title:first-child {
        margin-top: 0;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--accent-gold);
    }

    .service-description {
        flex: 2;
    }

    .service-description p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 15px;
    }

    .service-benefits,
    .service-includes {
        list-style: none;
        margin: 25px 0;
        padding: 0;
    }

    .service-benefits li,
    .service-includes li {
        padding: 12px 0 12px 40px;
        position: relative;
        font-size: 1.05rem;
        color: #555;
        border-bottom: 1px solid var(--border-light);
    }

    .service-benefits li::before,
    .service-includes li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--accent-gold);
        font-weight: bold;
        font-size: 1.3rem;
    }

    .service-benefits li:last-child,
    .service-includes li:last-child {
        border-bottom: none;
    }

    /* ============ CTA Button ============ */
    .cta-button {
        margin-top: 40px;
    }

    .btn-primary {
        background: var(--primary-green);
        border: none;
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        color: white !important;
    }

    .btn-primary:hover {
        background: var(--accent-gold);
        color: var(--primary-green) !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(201, 169, 97, 0.3);
    }

    /* ============ Sidebar Section ============ */
    .service-sidebar {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .sidebar-card {
        background: var(--light-cream);
        padding: 25px;
        border-radius: 10px;
        border-left: 4px solid var(--accent-gold);
        transition: all 0.3s ease;
    }

    .sidebar-card:hover {
        box-shadow: 0 8px 20px rgba(45, 80, 22, 0.1);
        transform: translateY(-5px);
    }

    .sidebar-card h4 {
        /* color: var(--primary-green); */
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .sidebar-card ul {
        list-style: none;
        padding: 0;
    }

    .sidebar-card li {
        padding: 8px 0;
        color: #555;
        border-bottom: 1px solid rgba(201, 169, 97, 0.2);
    }

    .sidebar-card li:last-child {
        border-bottom: none;
    }

    .sidebar-card strong {
        /* color: var(--primary-green); */
    }

    /* ============ Related Retreats Section ============ */
    #related-retreats {
        background: linear-gradient(135deg, var(--light-cream) 0%, #fafaf8 100%);
        padding: 60px 0;
        margin-top: 40px;
    }

    .lasting-benefits-heading {
        margin-bottom: 40px;
    }

    .small-title {
        font-size: 0.9rem;
        letter-spacing: 2px;
        color: var(--accent-gold);
        font-weight: 700;
    }

    .lasting-benefits-heading h5 {
        font-size: 2.5rem;
        /* color: var(--primary-green); */
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    .lasting-benefits-heading h5::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: var(--accent-gold);
    }

    /* ============ Retreat Cards ============ */
    .retreat-inner {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .retreat-inner:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(45, 80, 22, 0.15);
    }

    .retreat-overview-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
        background: var(--light-cream);
    }

    .retreat-overview-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .retreat-inner:hover .retreat-overview-image img {
        transform: scale(1.05);
    }

    .retreat-caption {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .retreat-caption h4 {
        /* color: var(--primary-green); */
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .retreat-caption p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .link {
        margin-top: auto;
    }

    .link a {
        color: var(--accent-gold);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .link a:hover {
        /* color: var(--primary-green); */
        margin-left: 5px;
    }

    /* ============ Container & Layout ============ */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* .row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    } */
    .col-lg-12 {
        grid-column: 1 / -1;
    }

    .col-lg-4 {
        grid-column: span 1;
    }

    .mt-4 {
        margin-top: 30px;
    }

    .text-center {
        text-align: center;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        display: block;
    }

    /* ============ Responsive Design ============ */
    @media (max-width: 768px) {
        .service-title {
            font-size: 2rem;
        }

        .service-subtitle {
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .service-detail-wrapper {
            flex-direction: column;
        }

        .service-sidebar {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .sidebar-card {
            flex: 1;
            min-width: 200px;
        }

        .inner-banner {
            height: 250px;
        }

        .retreat-caption h4 {
            font-size: 1.1rem;
        }

        .lasting-benefits-heading h5 {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        .service-title {
            font-size: 1.5rem;
        }

        .inner-banner-caption {
            padding: 40px 15px;
        }

        .service-detail {
            padding: 30px 0;
        }

        .section-title {
            font-size: 1.3rem;
        }

        .btn-primary {
            width: 100%;
            text-align: center;
        }
    }
</style>
<div class="main-content">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-content">
        <div data-drupal-messages-fallback class="hidden"></div>
        <div id="block-pathretreats-content" class="block block-system block-system-main-block">
            <article data-history-node-id="11" class="node node--type-page node--view-mode-full">
                <div class="node__content">
                    <div
                        class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">
                        <div class="field__item">
                            <div class="paragraph background-greenish-bg paragraph--type--banner paragraph--view-mode--default">
                                <div class="inner-banner">
                                    <div class="background-img">
                                        <img src="sites/default/files/2024-04/inner-banner_0.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="inner-banner-caption">
                                        <div class="container container-l">
                                            <div class="col-12">
                                                <h1>
                                                    <div class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                        Panchachakram Meditation</div>
                                                    <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->
                                                </h1>
                                                <div
                                                    class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                    <p data-pm-slice="1 1 [&quot;blockquote&quot;,{}]">At Takshasheela Ayurveda Aashram, we offer
                                                        powerful, soul-nourishing retreats inspired by authentic Ayurvedic tradition. Staying true
                                                        to our motto Nature Heals — We Guide, our signature 7-day healing process and focused
                                                        wellness workshops bring deep purification, emotional harmony, and holistic transformation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--banner--default.html.twig' -->
                        </div>
                        <div class="field__item">
                            <div class="paragraph paragraph--type--find-your-retreat paragraph--view-mode--default"
                                id="find-your-retreat">
                                <div class="container">
                                    <div class="service-detail-wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="service-description">
                                                    <h2 class="section-title">About Panchakram Meditation</h2>
                                                    <p>
                                                        At Takshasheela Ayurveda Aashram, our Holistic Ayurveda Therapy helps restore your natural balance through ancient healing methods rooted in authentic Vedic wisdom.
                                                    </p>
                                                    <p>
                                                        Combining detoxification, herbal treatments, meditation, and mindful nutrition, this service supports:
                                                    </p>
                                                    <ul class="service-benefits">
                                                        <li>Reducing stress and anxiety</li>
                                                        <li>Strengthening immunity</li>
                                                        <li>Enhancing emotional clarity</li>
                                                        <li>Balancing Doshas for inner harmony</li>
                                                        <li>Relieving chronic pain and inflammation</li>
                                                    </ul>
                                                    <h3 class="section-title">What's Included</h3>
                                                    <ul class="service-includes">
                                                        <li>Personal Ayurveda consultation</li>
                                                        <li>Daily herbal steam therapy</li>
                                                        <li>Guided meditation and breathwork</li>
                                                        <li>Tailored Ayurvedic meals</li>
                                                        <li>Dosha-specific herbal supplements</li>
                                                    </ul>
                                                    <div class=" mt-4">
                                                        <a href="#" class="">Book This Service</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sidebar Section -->
                                    <div class="field__item">
                                        <div class="paragraph paragraph--type--find-your-retreat paragraph--view-mode--default"
                                            id="find-your-retreat">
                                            <div class="row">
                                                <!-- Service Details -->
                                                <div class="col-md-4 views-row">
                                                    <div class="sidebar-card">
                                                        <h4>Service Details</h4>
                                                        <ul>
                                                            <li><strong>Duration:</strong> 90 minutes</li>
                                                            <li><strong>Location:</strong> Takshasheela Ayurveda Aashram</li>
                                                            <li><strong>Price:</strong> ₹4,500</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Recommended For -->
                                                <div class="col-md-4 views-row">
                                                    <div class="sidebar-card">
                                                        <h4>Recommended For</h4>
                                                        <ul>
                                                            <li>Stress relief</li>
                                                            <li>Emotional balance</li>
                                                            <li>Detox and cleansing</li>
                                                            <li>Holistic wellness</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Languages Offered -->
                                                <div class="col-md-4 views-row">
                                                    <div class="sidebar-card">
                                                        <h4>Languages Offered</h4>
                                                        <ul>
                                                            <li>English</li>
                                                            <li>Hindi</li>
                                                            <li>Kannada</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field__item" style="margin-bottom:110px;">
                            <!-- <div class="paragraph paragraph--type--find-your-retreat paragraph--view-mode--default"
                                id="find-your-retreat"> -->
                                <div class="container">
                                    <div class="find-your-retreat">
                                        <div class="find-your-retreat-content">
                                            <div class="views-element-container">
                                                <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/views/views-view--find-your-retreat.html.twig' -->
                                                <div
                                                    class="view view-find-your-retreat view-id-find_your_retreat view-display-id-block_1 js-view-dom-id-5a8b5e3de7482d2d4179d148642a8466520ef1af5d73365d654454c5fbaae00b">
                                                    <div class="view-content">
                                                        <!-- Updated retreat cards for Takshasheela Ayurveda Aashram -->
                                                        <!-- Updated version with card classes applied -->
                                                        <div class="row gy-2">
                                                            <div class="col-md-6 col-lg-4 views-row">
                                                                <article data-history-node-id="79"
                                                                    class="node node--type-walking-the-path node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                    <div class="retreat-inner card-body p-0">
                                                                        <div
                                                                            class="retreat-image-type-sold card-img-top">
                                                                            <div class="retreat-overview-image">
                                                                                <div
                                                                                    class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                    <a href="advanced-retreat/usa/9-2025.html"
                                                                                        hreflang="en">
                                                                                        <img loading="lazy"
                                                                                            src="sites/default/files/2025-03/polusa.png"
                                                                                            width="464" height="344"
                                                                                            alt="Walking the path USA"
                                                                                            class="img-fluid w-100" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="retreat-caption p-3">
                                                                            <h4 class="fw-bold mb-2">
                                                                                <span
                                                                                    class="field field--name-title field--type-string field--label-hidden">Walking
                                                                                    the Path USA</span>
                                                                            </h4>
                                                                            <div
                                                                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                                <p style="height:100px;">Path of Love
                                                                                    graduates, find utter peace in an
                                                                                    experience that encourages deep
                                                                                    reflection among the rolling hills
                                                                                    of Boulder.&nbsp;</p>
                                                                            </div>
                                                                            <div class='dink'><a class=" w-100"
                                                                                    href="advanced-retreat/usa/9-2025.html">Find
                                                                                    out more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <div class="col-md-6 col-lg-4 views-row">
                                                                <article data-history-node-id="164"
                                                                    class="node node--type-path-of-love node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                    <div class="retreat-inner card-body p-0">
                                                                        <div
                                                                            class="retreat-image-type-sold sold-gradient card-img-top position-relative">
                                                                            <!-- <div
                                                                                class="retreat-type position-absolute top-2 left-2 bg-white px-3 py-1 rounded-full text-sm fw-bold">
                                                                                <p>7-day retreat</p>
                                                                            </div> -->
                                                                            <div class="retreat-overview-image">
                                                                                <div
                                                                                    class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                    <a href="wellness-retreat/deutschland/9-2025.html"
                                                                                        hreflang="en">
                                                                                        <img loading="lazy"
                                                                                            src="sites/default/files/2025-03/Rectangle%20224_3.png"
                                                                                            width="464" height="344"
                                                                                            alt=""
                                                                                            class="img-fluid w-100" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div
                                                                                class="sold-out position-absolute bottom-2 right-2 bg-danger text-white px-3 py-1 rounded-full fw-bold">
                                                                                <p>SOLD OUT</p>
                                                                            </div> -->
                                                                        </div>
                                                                        <div class="retreat-caption p-3">
                                                                            <h4 class="fw-bold mb-2">
                                                                                <span
                                                                                    class="field field--name-title field--type-string field--label-hidden">Path
                                                                                    of Love Deutschland</span>
                                                                            </h4>
                                                                            <div
                                                                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                                <p style="height:100px;">Ziehe dich für
                                                                                    eine außergewöhnliche Woche in den
                                                                                    natürlichen Charme Bayerns zurück,
                                                                                    um dich von alten Mustern zu
                                                                                    befreien und ein lebendigeres Leben
                                                                                    zu umarmen...</p>
                                                                            </div>
                                                                            <div class='dink'><a class=" w-100"
                                                                                    href="wellness-retreat/deutschland/9-2025.html">Find
                                                                                    out more</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <div class="col-md-6 col-lg-4 views-row">
                                                                <article data-history-node-id="324"
                                                                    class="node node--type-path-of-love node--view-mode-find-you-retreat card shadow-lg rounded-2xl overflow-hidden">
                                                                    <div class="retreat-inner card-body p-0">
                                                                        <div
                                                                            class="retreat-image-type-sold card-img-top">
                                                                            <!-- <div
                                                                                class="retreat-type position-absolute top-2 left-2 bg-white px-3 py-1 rounded-full text-sm fw-bold">
                                                                                <p>7-day retreat</p>
                                                                            </div> -->
                                                                            <div class="retreat-overview-image">
                                                                                <div
                                                                                    class="field field--name-field-retreat-overview-image field--type-image field--label-hidden field__item">
                                                                                    <a href="wellness-retreat/sweden/10-2025.html"
                                                                                        hreflang="en">
                                                                                        <img loading="lazy"
                                                                                            src="sites/default/files/2025-04/Grytsberg_Explore%20retreat.jpg"
                                                                                            width="464" height="344"
                                                                                            alt="Sweden Retreat"
                                                                                            class="img-fluid w-100" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="retreat-caption p-3">
                                                                            <h4 class="fw-bold mb-2">
                                                                                <span
                                                                                    class="field field--name-title field--type-string field--label-hidden">Path
                                                                                    of Love Sweden</span>
                                                                            </h4>
                                                                            <div
                                                                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item mb-3">
                                                                                <p style="height:100px;">Seven days of
                                                                                    profound self-exploration and inner
                                                                                    connection in the Swedish
                                                                                    countryside.</p>
                                                                            </div>
                                                                            <div class='dink'><a class=" w-100"
                                                                                    href="wellness-retreat/sweden/10-2025.html">Find
                                                                                    out more</a>
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
<?php include 'includes/footer.php' ?>