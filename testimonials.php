<?php include 'includes/header.php' ?>
<style>
:root {
    --c-primary: #91cc33;
    --ink: #2f2f2f;
    --muted: #6f6f6f;
    --cream: #f7f3eb;
    --white: #ffffff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
}

.testimonial-hero {
    position: relative;
    overflow: hidden;
    /* border-radius: 0 0 40px 40px; */
    background: linear-gradient(135deg, rgba(47, 47, 47, 0.86), rgba(47, 47, 47, 0.62)),
        url('sites/default/files/2024-03/about%20banner.png') center/cover;
    min-height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    /* margin-bottom: 40px; */
    text-align: center;
}

.testimonial-hero .container {
    padding: 70px 20px;
}

.testimonial-hero h1 {
    font-family: var(--header-font-family);
    color: var(--white);
    font-size: clamp(2.1rem, 4vw, 3rem);
    line-height: 1.2;
    margin-bottom: 16px;
    tex-align: center;
    justify-content: center;
    /* max-width: 850px; */
}

.testimonial-hero p {
    color: rgba(255, 255, 255, 0.9);
    font-family: var(--body-font-family);
    font-size: 1.06rem;
    max-width: 680px;
    margin: 0 auto;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
    gap: 28px;
    margin-top: 36px;
}

.testimonial-card {
    background: linear-gradient(145deg, var(--white), var(--cream));
    border: 1px solid rgba(145, 204, 51, 0.18);
    border-radius: 22px;
    box-shadow: 0 16px 40px rgba(47, 47, 47, 0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 48px rgba(47, 47, 47, 0.12);
}

.testimonial-inner {
    padding: 28px 28px 24px;
}

.testimonial-rating {
    font-size: 1rem;
    letter-spacing: 0.2em;
    color: #e1a93b;
    margin-bottom: 12px;
}

.testimonial-title {
    font-family: var(--header-font-family);
    font-size: 1.35rem;
    color: var(--ink);
    margin-bottom: 12px;
}

.testimonial-description {
    font-family: var(--body-font-family);
    color: var(--muted);
    line-height: 1.7;
    margin-bottom: 20px;
    min-height: 96px;
}

.client-info {
    display: flex;
    align-items: center;
    gap: 14px;
    padding-top: 16px;
    border-top: 1px solid rgba(47, 47, 47, 0.1);
}

.client-avatar {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--c-primary), #b9df74);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: var(--ink);
    font-family: var(--tag-font-family);
    flex-shrink: 0;
}

.client-name {
    font-family: var(--tag-font-family);
    font-weight: 600;
    color: var(--ink);
    font-size: 0.95rem;
}

.client-location {
    font-family: var(--body-font-family);
    color: var(--muted);
    font-size: 0.85rem;
    margin-top: 2px;
}

.cta-row {
    text-align: center;
    margin-top: 32px;
}

.button-contact {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 999px;
    background: var(--c-primary);
    color: var(--ink);
    font-family: var(--tag-font-family);
    font-weight: 600;
    border: none;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.button-contact:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(145, 204, 51, 0.2);
}

@media (max-width: 768px) {
    .testimonial-hero {
        min-height: 360px;
    }

    .testimonials-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<div class="main-content">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-content">
        <div data-drupal-messages-fallback class="hidden"></div>
        <div id="block-pathretreats-content" class="block block-system block-system-main-block">
            <article data-history-node-id="24" class="node node--type-page node--view-mode-full">
                <div class="node__content">
                    <div
                        class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">
                        <div class="field__item">
                            <div
                                class="paragraph type-left paragraph--type--banner-with-title paragraph--view-mode--default">
                                <div class="testimonial-hero">
                                    <div class="container container-l">
                                        <h1 style="text-align: center;">Stories of healing, renewal, and lasting peace
                                            from our guests.</h1>
                                        <p>These heartfelt reflections share the calm, transformation, and inner clarity
                                            experienced at Takshasheela Ayurveda Aashram.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field__item">
                            <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                style="padding-bottom:0px;">
                                <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                    style="padding-bottom:0px;">
                                    <section class="long-lasting-benefits bg-light" id="testimonials"
                                        style="padding-bottom:30px; margin-bottom:80px;">
                                        <div class="container">
                                            <!-- Heading -->
                                            <div class="lasting-benefits-heading text-center"
                                                style="padding-bottom: 0px;">
                                                <h5 class="text-uppercase small-title">Guest Reflections</h5>
                                            </div>
                                            <!-- BLOG-STYLE GRID -->
                                            <div class="testimonials-grid">
                                                <div class="testimonial-card">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-rating">★★★★★</div>
                                                        <h3 class="testimonial-title">A Deep Sense of Calm</h3>
                                                        <p class="testimonial-description">
                                                            The retreat felt like a true reset for my body and mind.
                                                            Every treatment was thoughtful, grounding, and deeply
                                                            restorative.
                                                        </p>
                                                        <div class="client-info">
                                                            <div class="client-avatar">AS</div>
                                                            <div>
                                                                <div class="client-name">Asha Sharma</div>
                                                                <div class="client-location">Kathmandu, Nepal</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-card">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-rating">★★★★★</div>
                                                        <h3 class="testimonial-title">Warmth and Healing</h3>
                                                        <p class="testimonial-description">
                                                            I came seeking peace and left with clarity, balance, and a
                                                            renewed sense of connection to myself and nature.
                                                        </p>
                                                        <div class="client-info">
                                                            <div class="client-avatar">PK</div>
                                                            <div>
                                                                <div class="client-name">Pooja K.C.</div>
                                                                <div class="client-location">Pokhara, Nepal</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-card">
                                                    <div class="testimonial-inner">
                                                        <div class="testimonial-rating">★★★★★</div>
                                                        <h3 class="testimonial-title">A Beautiful Retreat Experience
                                                        </h3>
                                                        <p class="testimonial-description">
                                                            The atmosphere was serene, the care was genuine, and every
                                                            moment felt aligned with healing and self-discovery.
                                                        </p>
                                                        <div class="client-info">
                                                            <div class="client-avatar">RB</div>
                                                            <div>
                                                                <div class="client-name">Rina Bhandari</div>
                                                                <div class="client-location">Lalitpur, Nepal</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cta-row">
                                                <!-- <p class="button-contact">Book Your Retreat</p> -->
                                            </div>
                                        </div>
                                    </section>
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