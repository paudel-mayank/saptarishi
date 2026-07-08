<?php include 'includes/detailheader.php' ?>
<style>
.gallery-hero {
    position: relative;
    overflow: hidden;
    min-height: 430px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: linear-gradient(135deg, rgba(47, 47, 47, 0.80), rgba(47, 47, 47, 0.42)), url('assets/main.png') center/cover;
    margin-bottom: 32px;
}

.gallery-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(145, 204, 51, 0.20), transparent 35%);
    pointer-events: none;
}

.gallery-hero .hero-content {
    position: relative;
    z-index: 1;
    max-width: 760px;
    padding: 48px 24px;
    color: #fff;
}

.gallery-pill {
    display: inline-block;
    margin-bottom: 16px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.16);
    border: 1px solid rgba(255, 255, 255, 0.24);
    font-family: var(--tag-font-family);
    font-size: 0.78rem;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

.gallery-hero h2 {
    font-family: var(--header-font-family);
    font-size: clamp(2rem, 3.6vw, 2.8rem);
    line-height: 1.15;
    margin-bottom: 14px;
}

.gallery-hero p {
    font-family: var(--body-font-family);
    font-size: 1.02rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.92);
}

.gallery-shell {
    padding-bottom: 90px;
}

.gallery-intro {
    max-width: 760px;
    margin: 0 auto 34px;
    text-align: center;
}

.gallery-intro .small-title {
    color: var(--c-primary);
    font-family: var(--tag-font-family);
    letter-spacing: 0.2em;
    margin-bottom: 8px;
}

.gallery-intro h2 {
    font-family: var(--header-font-family);
    font-size: clamp(1.6rem, 2.4vw, 2.1rem);
    color: #2f2f2f;
    margin-bottom: 12px;
}

.gallery-intro p {
    font-family: var(--body-font-family);
    color: #6f6f6f;
    line-height: 1.7;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 22px;
}

.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    min-height: 270px;
    box-shadow: 0 16px 40px rgba(47, 47, 47, 0.10);
    background: #f7f3eb;
}

.gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.45s ease;
}

.gallery-card:hover img {
    transform: scale(1.05);
}

.gallery-card .gallery-caption {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 16px 18px 18px;
    background: linear-gradient(transparent, rgba(47, 47, 47, 0.86));
    color: #fff;
}

.gallery-card .gallery-caption span {
    display: block;
    font-family: var(--tag-font-family);
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 4px;
}

.gallery-card .gallery-caption small {
    font-family: var(--body-font-family);
    font-size: 0.82rem;
    color: rgba(255, 255, 255, 0.84);
}
</style>
<div class="main-content">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-content">
        <div data-drupal-messages-fallback class="hidden"></div>
        <div id="block-pathretreats-content" class="block block-system block-system-main-block">
            <article data-history-node-id="58" class="node node--type-page node--view-mode-full">
                <div class="node__content">
                    <div
                        class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">
                        <div class="field__item">
                            <div class="paragraph paragraph--type--blog paragraph--view-mode--default">
                                <div class="gallery-hero">
                                    <div class="hero-content">
                                        <span class="gallery-pill">A peaceful sanctuary</span>
                                        <h2>Moments of Healing &amp; Serenity</h2>
                                        <p>Step into the calm of Saptarishi Ayurveda Ashram and discover the spaces
                                            where restorative care, mindful rituals, and natural beauty come together.
                                        </p>
                                    </div>
                                </div>

                                <div class="field__item">
                                    <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                        style="padding-bottom:0px;">
                                        <section class="long-lasting-benefits bg-light" id="gallery"
                                            style="padding-bottom:0px;">
                                            <div class="container gallery-shell">
                                                <div class="gallery-intro">
                                                    <h5 class="text-uppercase small-title">Our Gallery</h5>
                                                    <h2>A glimpse into the spaces where healing begins.</h2>
                                                    <p>From therapy rooms and meditation corners to serene garden views
                                                        and daily rituals, each image reflects the stillness and care of
                                                        our retreat.</p>
                                                </div>

                                                <div class="gallery-grid">
                                                    <div class="gallery-card">
                                                        <img src="assets/about.png" alt="Retreat garden view">
                                                        <div class="gallery-caption">
                                                            <span>Serene Gardens</span>
                                                            <small>Quiet corners for reflection</small>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-card">
                                                        <img src="assets/main.png" alt="Ayurvedic wellness setting">
                                                        <div class="gallery-caption">
                                                            <span>Holistic Wellness</span>
                                                            <small>Gentle healing in every detail</small>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-card">
                                                        <img src="assets/h&w.jpg" alt="Healing therapy space">
                                                        <div class="gallery-caption">
                                                            <span>Restorative Spaces</span>
                                                            <small>Comfort designed for calm</small>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-card">
                                                        <img src="assets/DeluxeKing.jpg"
                                                            alt="Comfortable accommodation">
                                                        <div class="gallery-caption">
                                                            <span>Peaceful Stay</span>
                                                            <small>Thoughtful comfort and rest</small>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-card">
                                                        <img src="assets/images.jpg"
                                                            alt="Meditation and mindfulness session">
                                                        <div class="gallery-caption">
                                                            <span>Mindful Practice</span>
                                                            <small>Moments of stillness and breath</small>
                                                        </div>
                                                    </div>
                                                    <div class="gallery-card">
                                                        <img src="assets/p.jpg" alt="Natural retreat atmosphere">
                                                        <div class="gallery-caption">
                                                            <span>Natural Beauty</span>
                                                            <small>Surrounded by serenity</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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