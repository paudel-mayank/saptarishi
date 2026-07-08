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

.approach-hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, rgba(47, 47, 47, 0.82), rgba(47, 47, 47, 0.58)),
        url('sites/default/files/2024-03/about%20banner.png') center/cover;
    min-height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.approach-hero .container {
    padding: 70px 20px;
}

.approach-hero h1 {
    font-family: var(--header-font-family);
    color: var(--white);
    font-size: clamp(2.1rem, 4vw, 3rem);
    line-height: 1.2;
    margin-bottom: 16px;
}

.approach-hero p {
    color: rgba(255, 255, 255, 0.92);
    font-family: var(--body-font-family);
    font-size: 1.06rem;
    max-width: 720px;
    margin: 0 auto;
}

.approach-section {
    padding: 70px 0 20px;
}

.approach-intro {
    max-width: 760px;
    margin: 0 auto 40px;
    text-align: center;
}

.approach-intro .small-title {
    color: var(--c-primary);
    font-family: var(--tag-font-family);
    letter-spacing: 0.2em;
    margin-bottom: 8px;
}

.approach-intro h2 {
    font-family: var(--header-font-family);
    font-size: clamp(1.6rem, 2.4vw, 2.15rem);
    color: var(--ink);
    margin-bottom: 12px;
}

.approach-intro p {
    font-family: var(--body-font-family);
    color: var(--muted);
    line-height: 1.7;
}

.approach-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 24px;
    margin-top: 18px;
}

.approach-card {
    background: linear-gradient(145deg, var(--white), var(--cream));
    border: 1px solid rgba(145, 204, 51, 0.18);
    border-radius: 22px;
    padding: 28px;
    box-shadow: 0 16px 40px rgba(47, 47, 47, 0.08);
}

.approach-card h3 {
    font-family: var(--header-font-family);
    font-size: 1.25rem;
    color: var(--ink);
    margin-bottom: 10px;
}

.approach-card p {
    font-family: var(--body-font-family);
    color: var(--muted);
    line-height: 1.7;
    margin-bottom: 0;
}

.approach-pillars {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 24px;
    align-items: center;
    margin-top: 40px;
}

.approach-pillars .panel {
    background: var(--white);
    border-radius: 24px;
    padding: 30px;
    box-shadow: 0 16px 40px rgba(47, 47, 47, 0.07);
}

.approach-pillars h3 {
    font-family: var(--header-font-family);
    font-size: 1.35rem;
    color: var(--ink);
    margin-bottom: 12px;
}

.approach-pillars ul {
    padding-left: 18px;
    margin: 0;
}

.approach-pillars li {
    font-family: var(--body-font-family);
    color: var(--muted);
    line-height: 1.8;
    margin-bottom: 8px;
}

@media (max-width: 768px) {
    .approach-hero {
        min-height: 360px;
    }

    .approach-pillars {
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
                                <div class="approach-hero">
                                    <div class="container container-l">
                                        <h1>Our Approach</h1>
                                        <p>We blend the wisdom of Ayurveda, compassionate care, and restorative living
                                            to create a healing journey that is personal, grounded, and deeply calming.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field__item">
                            <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                style="padding-bottom:0px;">
                                <section class="approach-section" id="approach"
                                    style="padding-bottom:30px; margin-bottom:80px;">
                                    <div class="container">
                                        <div class="approach-intro">
                                            <h5 class="text-uppercase small-title">A healing philosophy</h5>
                                            <h2>Guided by balance, nature, and thoughtful care.</h2>
                                            <p>At Takshasheela Ayurveda Aashram, our approach is centered on restoring
                                                harmony between body, mind, and spirit through personalized therapies,
                                                nourishing food, and a peaceful environment.</p>
                                        </div>

                                        <div class="approach-grid">
                                            <div class="approach-card">
                                                <h3>Holistic Healing</h3>
                                                <p>We focus on the whole person rather than isolated symptoms, helping
                                                    guests regain strength, clarity, and inner balance.</p>
                                            </div>
                                            <div class="approach-card">
                                                <h3>Personalized Care</h3>
                                                <p>Every treatment plan is shaped around the individual’s needs,
                                                    comfort, and wellness goals for a more meaningful experience.</p>
                                            </div>
                                            <div class="approach-card">
                                                <h3>Nature-Centered Living</h3>
                                                <p>Our serene surroundings, mindful routines, and restorative atmosphere
                                                    support healing in a calm and grounding way.</p>
                                            </div>
                                        </div>

                                        <div class="approach-pillars">
                                            <div class="panel">
                                                <h3>What guides our care</h3>
                                                <ul>
                                                    <li>Ayurvedic therapies tailored to individual needs</li>
                                                    <li>Gentle yoga, meditation, and breathwork practices</li>
                                                    <li>Balanced nourishment and daily wellness rituals</li>
                                                    <li>Quiet, supportive spaces that encourage deep rest</li>
                                                </ul>
                                            </div>
                                            <div class="panel">
                                                <h3>What guests experience</h3>
                                                <ul>
                                                    <li>More calm, clarity, and emotional steadiness</li>
                                                    <li>Improved comfort through natural and compassionate care</li>
                                                    <li>A slower pace that invites reflection and renewal</li>
                                                    <li>A healing environment rooted in tradition and trust</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>