<?php
if (basename((string) ($_SERVER['SCRIPT_NAME'] ?? '')) === 'accomodations.php') {
    header('Location: accommodations.php', true, 301);
    exit;
}
include __DIR__ . '/includes/detailheader.php';
?>

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
                                            <h1>
                                                <div
                                                    class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                    Comfortable and Tranquil Accommodation Options</div>
                                            </h1>
                                            <div
                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                                                <p>Explore a variety of thoughtfully designed accommodations tailored
                                                    for comfort, relaxation, and a rejuvenating stay.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="field__item">
                                    <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default section-flush">
                                        <section class="long-lasting-benefits bg-light section-flush" id="gallery">
                                            <div class="container">
                                                <!-- Heading -->
                                                <div class="lasting-benefits-heading text-center section-flush">
                                                    <h5 class="text-uppercase small-title">Our Rooms & Suites</h5>
                                                    <h2 class="fw-bold">Discover Your Perfect Stay</h2>
                                                </div>
                                                <!-- Gallery Wrapper -->
                                            </div>
                                        </section>
                                        <div class="container accommodation-list">
                                            <div class="wrapper row my-4 g-4">
                                                <div class="col-6">
                                                    <div class="accommodation-item accommodation-image">
                                                        <img loading="lazy" src="assets/images.jpg" width="275" height="183" alt="Standard room at Takshasheela"
                                                            class="w-100 gallery-img accommodation-image">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="paragraph paragraph--type--image-and-content paragraph--view-mode--default accommodation-content">
                                                        <div class="content">
                                                            <div
                                                                class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">

                                                                <div class="accommodation-badge accommodation-badge--dark">
                                                                    <span>Standard
                                                                        Room</span>
                                                                </div>

                                                                <p class="accommodation-description">Our Standard Rooms offer a
                                                                    cozy and peaceful environment, ideal for guests
                                                                    seeking comfort and simplicity during their stay.
                                                                    Designed with warm interiors and essential
                                                                    amenities for a relaxing experience.</p>

                                                                <div class="accommodation-badge accommodation-badge--primary">
                                                                    <span>Room
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
                                                            <img loading="lazy" src="assets/DeluxeKing.jpg" width="1100" height="618" alt="Deluxe room at Takshasheela"
                                                                class="w-100 gallery-img accommodation-image">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div
                                                            class="paragraph paragraph--type--image-and-content paragraph--view-mode--default accommodation-content">
                                                            <div class="content">
                                                                <div
                                                                    class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">

                                                                    <div class="accommodation-badge accommodation-badge--dark">
                                                                        <span>Deluxe
                                                                            Room</span>
                                                                    </div>

                                                                    <p class="accommodation-description">Experience elevated
                                                                        comfort in our Deluxe Rooms, featuring spacious
                                                                        interiors, refined decor, and enhanced
                                                                        amenities for a luxurious and memorable stay.
                                                                    </p>

                                                                    <div class="accommodation-badge accommodation-badge--primary">
                                                                        <span>Room
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

<?php include __DIR__ . '/includes/footer.php'; ?>
