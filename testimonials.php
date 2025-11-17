<?php include 'includes/header.php' ?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #1a1a2e;
        --secondary: #ffffff;
        --accent: #6366f1;
        --neutral-light: #f3f4f6;
        /* --neutral-dark: #374151; */
    }

    /* */
    */
    /* body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            background-color: var(--primary);
            color: var(--secondary);
            line-height: 1.6;
        } */

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 80px;
    }

    .header h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 16px;
        letter-spacing: -0.02em;
    }

    .header p {
        font-size: 1.1rem;
        color: #d1d5db;
        max-width: 600px;
        margin: 0 auto;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 32px;
        margin-top: 60px;
    }

    /* Make testimonial cards clickable links */
    .testimonial-card {
        /* background: linear-gradient(135deg, #2d2d44 0%, #1f1f32 100%); */
        border: 1px solid #3d3d52;
        border-radius: 12px;
        padding: 32px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .testimonial-card:hover {
        transform: translateY(-4px);
        border-color: var(--accent);
        box-shadow: 0 20px 40px rgba(99, 102, 241, 0.1);
    }

    .stars {
        display: flex;
        gap: 4px;
        margin-bottom: 20px;
    }

    .star {
        color: var(--accent);
        font-size: 1.2rem;
    }

    .review-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--secondary);
    }

    .review-description {
        font-size: 0.95rem;
        color: #d1d5db;
        margin-bottom: 28px;
        flex-grow: 1;
        line-height: 1.7;
    }

    /* Add call-to-action link to full story */
    .read-more {
        font-size: 0.9rem;
        color: var(--accent);
        font-weight: 600;
        margin-bottom: 20px;
        transition: color 0.3s ease;
    }

    .testimonial-card:hover .read-more {
        color: #a78bfa;
    }

    .client-info {
        display: flex;
        align-items: center;
        gap: 16px;
        padding-top: 20px;
        border-top: 1px solid #3d3d52;
    }

    .client-avatar {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--accent), #a78bfa);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.2rem;
        color: var(--primary);
        flex-shrink: 0;
    }

    .client-details {
        flex-grow: 1;
    }

    .client-name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--secondary);
    }

    .client-location {
        font-size: 0.85rem;
        color: #9ca3af;
        margin-top: 2px;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    @media (max-width: 768px) {
        .header h1 {
            font-size: 2rem;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: 1fr !important;
            gap: 24px;
            width: 100%;
        }

        .testimonial-card {
            padding: 24px;
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 40px 16px;
        }

        .header {
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 1.5rem;
            margin-bottom: 12px;
        }

        .header p {
            font-size: 0.95rem;
        }

        .testimonials-grid {
            gap: 16px;
            margin-top: 40px;
        }

        .testimonial-card {
            padding: 20px;
        }

        .review-title {
            font-size: 1.1rem;
        }

        .review-description {
            font-size: 0.9rem;
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
                                <div class="background-img"
                                    style="background-image:url(sites/default/files/2024-03/about%20banner.png);">
                                    <div class="container container-l">
                                        <h1>Real feedback from real customers who have transformed their business with
                                            our
                                            solutions.</h1>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="field__item">





                            <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                style="padding-bottom:0px;">
                                <section class="long-lasting-benefits bg-light" id="testimonials"
                                    style="padding-bottom:30px; margin-bottom:80px;">
                                    <div class="container">
                                        <!-- Heading -->
                                        <div class="lasting-benefits-heading text-center " style="padding-bottom: 0px;">
                                            <h5 class="text-uppercase small-title">What Our Clients Say</h5>
                                            <!-- <h2 class="fw-bold">Real feedback from real customers who have transformed
                                                their business with our
                                                solutions</h2> -->
                                        </div>

                                        <!-- Gallery Wrapper -->


                                        <div class="testimonials-grid">

                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Game-Changing Platform</h3>
                                                <p class="review-description">
                                                    The efficiency gains we've seen are remarkable. Our team was
                                                    able to
                                                    streamline workflows and reduce deployment time by 70%. Highly
                                                    recommend to
                                                    any growing business.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">AM</div>
                                                    <div class="client-details">
                                                        <div class="client-name">Amanda Martinez</div>
                                                        <div class="client-location">
                                                            <span>📍</span> San Francisco, CA
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Exceptional Customer Support</h3>
                                                <p class="review-description">
                                                    The support team went above and beyond to help us integrate with
                                                    our
                                                    existing systems. They answered every question and provided
                                                    detailed
                                                    guidance throughout the process.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">JK</div>
                                                    <div class="client-details">
                                                        <div class="client-name">James Kim</div>
                                                        <div class="client-location">
                                                            <span>📍</span> New York, NY
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Intuitive & Powerful</h3>
                                                <p class="review-description">
                                                    We were up and running within days. The interface is clean and
                                                    intuitive,
                                                    making it easy for our entire team to adopt without extensive
                                                    training.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">SR</div>
                                                    <div class="client-details">
                                                        <div class="client-name">Sarah Rodriguez</div>
                                                        <div class="client-location">
                                                            <span>📍</span> Austin, TX
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Incredible ROI</h3>
                                                <p class="review-description">
                                                    The investment paid for itself within the first quarter. The
                                                    cost savings,
                                                    combined with improved productivity, made this one of our best
                                                    business
                                                    decisions.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">MJ</div>
                                                    <div class="client-details">
                                                        <div class="client-name">Michael Johnson</div>
                                                        <div class="client-location">
                                                            <span>📍</span> Boston, MA
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Best Decision We Made</h3>
                                                <p class="review-description">
                                                    The scalability and reliability are unmatched. As we've grown,
                                                    the platform
                                                    has grown with us without any hiccups or performance issues.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">EC</div>
                                                    <div class="client-details">
                                                        <div class="client-name">Emma Chen</div>
                                                        <div class="client-location">
                                                            <span>📍</span> Seattle, WA
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="testimonial-card">
                                                <div class="stars">
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                    <span class="star">★</span>
                                                </div>
                                                <h3 class="review-title">Perfect Implementation</h3>
                                                <p class="review-description">
                                                    The onboarding process was seamless and well-organized. The team
                                                    provided
                                                    excellent training resources, and migration from our old system
                                                    was
                                                    painless.
                                                </p>
                                                <div class="client-info">
                                                    <div class="client-avatar">DP</div>
                                                    <div class="client-details">
                                                        <div class="client-name">David Park</div>
                                                        <div class="client-location">
                                                            <span>📍</span> Los Angeles, CA
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="max-width: 200px; margin: 30px auto; text-align: center;">
                                            <p class="button-contact">See More</p>
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