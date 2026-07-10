<?php include 'includes/detailheader.php' ?>

<style>
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

    .blog-upper-content {
        animation: fadeUp 0.8s ease both;
    }

    .blog-upper-content h2,
    .blog-upper-content p {
        animation: fadeIn 0.9s ease both;
        animation-delay: 0.1s;
    }

    .accommodation-item {
        animation: fadeUp 0.8s ease both;
    }

    .accommodation-image {
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 16px 40px rgba(34, 55, 69, 0.12);
    }

    .accommodation-image img {
        transition: transform 0.7s ease, filter 0.7s ease;
        transform-origin: center;
    }

    .accommodation-image:hover img {
        transform: scale(1.05);
        filter: brightness(1.03);
    }

    .accommodation-content {
        animation: fadeIn 0.9s ease both;
        animation-delay: 0.15s;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(12px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
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
                                <div class="container">
                                    <div class="blog-overview">
                                        <div class="blog-upper-content">
                                            <h2>
                                                <div
                                                    class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                    Comfortable and Tranquil Accommodation Options</div>
                                            </h2>
                                            <div
                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                <p>Explore a variety of thoughtfully designed accommodations tailored
                                                    for comfort, relaxation, and a rejuvenating stay.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="field__item">
                                    <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default"
                                        style="padding-bottom:0px;">
                                        <section class="long-lasting-benefits bg-light" id="gallery"
                                            style="padding-bottom:0px;">
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="lasting-benefits-heading text-center "
                                                    style="padding-bottom: 0px;">
                                                    <h5 class="text-uppercase small-title">Our Rooms & Suites</h5>
                                                    <h2 class="fw-bold">Discover Your Perfect Stay</h2>
                                                </div>
                                                <!-- Gallery Wrapper -->
                                            </div>
                                        </section>
                                        <div class="container" style="padding-bottom:80px;">
                                            <div class="wrapper row my-4 g-4">
                                                <div class="col-6">
                                                    <div class="accommodation-item accommodation-image">
                                                        <img src="assets/images.jpg" alt="Retreat Space"
                                                            style="height: 500px; object-fit: cover;"
                                                            class="w-100 gallery-img">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="paragraph paragraph--type--image-and-content paragraph--view-mode--default accommodation-content">
                                                        <div class="content">
                                                            <div
                                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">

                                                                <div
                                                                    style="margin:0px auto;background-color:#223745; 
                                                                padding: 4px 16px;display: inline-block; color: #fff; border-radius: 16px;">
                                                                    <span style="text-align: center;"> Standard
                                                                        Room</span>
                                                                </div>

                                                                <p style="margin:25px 0px;">Our Standard Rooms offer a
                                                                    cozy and peaceful environment, ideal for guests
                                                                    seeking comfort and simplicity during their stay.
                                                                    Designed with warm interiors and essential
                                                                    amenities for a relaxing experience.</p>

                                                                <div
                                                                    style="margin:0px auto;background-color:#91cc33; 
                                                                padding: 4px 16px;display: inline-block; color: #fff; border-radius: 16px;">
                                                                    <span
                                                                        style="text-align: center; font-size:14px;">Room
                                                                        Features</span>
                                                                </div>

                                                                <ul class="service-benefits">
                                                                    <li>Comfortable bedding with premium linens</li>
                                                                    <li>Peaceful ambiance for restful sleep</li>
                                                                    <li>Complimentary Wi-Fi access</li>
                                                                    <li>Attached bathroom with hot water</li>
                                                                    <li>Daily housekeeping service</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" wrapper row mb-4 g-4">
                                                    <div class="col-6">
                                                        <div class="accommodation-item accommodation-image">
                                                            <img src="assets/DeluxeKing.jpg" alt="Retreat Space"
                                                                style="height: 500px; object-fit: cover;"
                                                                class="w-100 gallery-img">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div
                                                            class="paragraph paragraph--type--image-and-content paragraph--view-mode--default accommodation-content">
                                                            <div class="content">
                                                                <div
                                                                    class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">

                                                                    <div
                                                                        style="margin:0px auto;background-color:#223745; 
                                                                padding: 4px 16px;display: inline-block; color: #fff; border-radius: 16px;">
                                                                        <span style="text-align: center;"> Deluxe
                                                                            Room</span>
                                                                    </div>

                                                                    <p style="margin:25px 0px;">Experience elevated
                                                                        comfort in our Deluxe Rooms, featuring spacious
                                                                        interiors, refined decor, and enhanced
                                                                        amenities for a luxurious and memorable stay.
                                                                    </p>

                                                                    <div
                                                                        style="margin:0px auto;background-color:#91cc33; 
                                                                padding: 4px 16px;display: inline-block; color: #fff; border-radius: 16px;">
                                                                        <span
                                                                            style="text-align: center; font-size:14px;">Room
                                                                            Features</span>
                                                                    </div>

                                                                    <ul class="service-benefits">
                                                                        <li>Spacious room with elegant interiors</li>
                                                                        <li>King-size bed with premium comfort</li>
                                                                        <li>Scenic views from large windows</li>
                                                                        <li>Modern bathroom with luxury fittings</li>
                                                                        <li>Enhanced in-room amenities</li>
                                                                    </ul>
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
