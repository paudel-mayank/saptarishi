<?php include 'includes/header.php'?>
<style>
  /* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    /* padding: 60px 20px; */
  /* min-height: 100vh; */
  /* } */

  .testimonial-container {
    /* max-width: 1200px; */
    margin: 0 auto;
    background-color: white;
    padding: 60px 40px;
    /* border-radius: 8px; */
    /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
  }

  .testimonial-title {
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    color: #944361;
    margin-bottom: 50px;
    position: relative;
    display: inline-block;
    width: 100%;
  }

  .testimonial-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background-color: #944361;
  }

  .slider-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    position: relative;
  }

  .nav-button {
    width: 50px;
    height: 50px;
    border: 2px solid #944361;
    background-color: white;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #944361;
    transition: all 0.3s ease;
    flex-shrink: 0;
  }

  .nav-button:hover {
    background-color: #944361;
    color: white;
  }

  .testimonial-content {
    flex: 1;
    text-align: center;
    min-height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .profile-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 0 auto 20px;
    object-fit: cover;
    border: 3px solid #e0e0e0;
  }

  .student-name {
    font-size: 20px;
    font-weight: bold;
    color: #944361;
    margin-bottom: 5px;
  }

  .student-location {
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
  }

  .testimonial-text {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 25px;
    text-align: center;
  }

  .stars {
    display: flex;
    justify-content: center;
    gap: 5px;
    font-size: 24px;
  }

  .star {
    color: #ff9800;
  }

  @media (max-width: 768px) {
    .testimonial-container {
      padding: 40px 20px;
    }

    .testimonial-title {
      font-size: 28px;
    }

    .slider-wrapper {
      gap: 15px;
    }

    .nav-button {
      width: 40px;
      height: 40px;
      font-size: 18px;
    }

    .testimonial-content {
      min-height: 350px;
    }

    .profile-image {
      width: 100px;
      height: 100px;
    }

    .testimonial-text {
      font-size: 14px;
    }
  }
</style>
<div class="main-content">
  <a id="main-content" tabindex="-1"></a>
  <div class="region region-content">



    <div data-drupal-messages-fallback class="hidden"></div>




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
                          <div class="field__item swiper-slide" style="height:100vh; width:100%;">


                            <div class="paragraph paragraph--type--banner-slide-item paragraph--view-mode--default">
                              <div class="">
                                <video autoplay muted loop playsinline class="background-video">
                                  <source src="assets/Homepage-big-page-video-final-.mp4
                                  " type="video/mp4">
                                </video>
                              </div>
                              <div class="banner-captions">
                                <div class="container">
                                  <h2>
                                    <div style="z-ndex:999;"
                                      class="clearfix text-formatted field field--name-field-long-title field--type-text field--label-hidden field__item">
                                      A JOURNEY AWAITS

                                  </h2>
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

                <div class="bg-svg-logo">
                </div>
              </div>


            </div>
            <div class="field__item">


              <div class="paragraph paragraph--type--image-and-content paragraph--view-mode--default">
                <div class="container type-col">
                  <div class="row">
                    <div class="col-md-6">



                      <div class="field field--name-field-image field--type-image field--label-hidden field__item">


                        <img loading="lazy" src="sites/default/files/2025-03/Rectangle%2015.jpg" width="977"
                          height="956" alt="Participants on the Path of Love" class="img-fluid" />



                      </div>




                    </div>
                    <div class="col-md-6 intro-type-1">
                      <div class="small-title"></div>
                      <div class="heading-text">


                        <div
                          class="clearfix text-formatted field field--name-field-heading-text field--type-text-long field--label-hidden field__item">
                          <h4>We inspire people to live life with genuine connection, igniting their spiritual
                            growth and courage to reclaim parts of themselves that have been lost—to meet and live
                            their truth.</h4>
                        </div>


                      </div>
                      <div class="content">

                        <div
                          class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item">
                          <p>We are proud of our extraordinary reputation for facilitating profound transformational
                            work. Our retreats also address emotional trauma and pain, depression, anxiety, fear,
                            grief, addiction, loneliness, separation, and relationship problems, and can therefore
                            radically reduce physical conditions such as stress and burnout.</p>
                        </div>


                      </div>
                      <div class="link">

                        <div class="field field--name-field-link field--type-link field--label-hidden field__item">
                          <a href="about-us.html">About Saptarishi</a>
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


            <div class="field field--name-field-small-title field--type-string field--label-hidden field__item">Packages</div>


</div>
          <div class="title"><h2>



            <div class="clearfix text-formatted field field--name-field-long-title field--type-text field--label-hidden field__item">Our packages that heal <br>the past and open the future</div>


</h2></div>
          <div class="cards">



      <div class="row">
              <div class="col-md-4">


  <div class="paragraph paragraph--type--card paragraph--view-mode--default">
          <div class="card-image">




            <div class="field field--name-field-image field--type-image field--label-hidden field__item">




<img loading="lazy" src="/sites/default/files/2025-03/introductory%20courses.jpg" width="629" height="574" alt="Awakening of love" class="img-fluid">


</div>



      </div>
      <div class="card-info">
        <div class="small-title">



            <div class="field field--name-field-small-title field--type-string field--label-hidden field__item">1-2 Day Courses</div>



        </div>
        <h3 class="card-title">




            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Introductory Courses</div>



        </h3>
        <div class="content">




            <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item"><p>These 1 and 2 day courses open your heart and introduce you to the Path of Love retreat, while helping you to find meaningful and lasting change in your life.</p></div>



        </div>
        <div class="link small">



            <div class="field field--name-field-link field--type-link field--label-hidden field__item"><a href="/find-retreat">Learn more</a></div>



        </div>
      </div>
      </div>


</div>
              <div class="col-md-4">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
  <div class="paragraph paragraph--type--card paragraph--view-mode--default">
          <div class="card-image">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-image field--type-image field--label-hidden field__item">

<!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->
<img loading="lazy" src="/sites/default/files/2025-03/path%20of%20love%20homepage.jpg" width="633" height="577" alt="Path of love cover" class="img-fluid">

<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->



<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-formatter.html.twig' -->

</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


      </div>
      <div class="card-info">
        <div class="small-title">



<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-small-title field--type-string field--label-hidden field__item">7-Day retreat</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


        </div>
        <h3 class="card-title">



<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Path of Love Process</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


        </h3>
        <div class="content">


<!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--text-long.html.twig' -->

            <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item"><p>The Path of Love process is a unique, revolutionary, and life transforming personal growth and meditation retreat that will alter your life in a substantial and enduring way.</p></div>

<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--text-long.html.twig' -->


        </div>
        <div class="link small">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-link field--type-link field--label-hidden field__item"><a href="/personal-growth-retreat-workshop">Learn more</a></div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


        </div>
      </div>
      </div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->

</div>
              <div class="col-md-4">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--card.html.twig' -->
  <div class="paragraph paragraph--type--card paragraph--view-mode--default">
          <div class="card-image">



<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-image field--type-image field--label-hidden field__item">


<!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->
<img loading="lazy" src="/sites/default/files/2025-03/advancedworkcover.png" width="422" height="385" alt="Advanced spiritual work" class="img-fluid">

<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->



<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-formatter.html.twig' -->

</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


      </div>
      <div class="card-info">
        <div class="small-title">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-small-title field--type-string field--label-hidden field__item">3-5 day retreats</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


        </div>
        <h3 class="card-title">


<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-title field--type-string field--label-hidden field__item">Advanced Work</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


        </h3>
        <div class="content">


<!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--text-long.html.twig' -->

            <div class="clearfix text-formatted field field--name-field-content field--type-text-long field--label-hidden field__item"><p>Extensive ongoing support, integration and advanced retreats for Path of Love graduates, including residential, weekend and conscious relating courses.</p></div>

<!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--text-long.html.twig' -->


        </div>
        <div class="link small">



<!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

            <div class="field field--name-field-link field--type-link field--label-hidden field__item"><a href="/find-retreat">Learn more</a></div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


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
    <div class="text-center mb-5">
      <h6 class="text-uppercase text-muted">Services</h6>
      <h2 class="fw-bold">
        Transformative services designed <br>to support your healing journey
      </h2>
    </div>

    <!-- Services Grid -->
    <div class="row g-4">
      <!-- Service 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 rounded-4  p-3">
          <div class="card-body d-flex flex-column align-items-center" style="padding:0;">
    <div class="service-icon bg-light overflow-hidden mb-3"
     style="width:100%; height:200px; display:flex; align-items:center; justify-content:center;">
  <img src="/assets/mindfullness.jpg"
       alt="Mindfulness"
       style=" object-fit:cover;">
</div>
            <h5 class="fw-bold mb-2">Emotional Healing</h5>
            <p class="text-muted flex-grow-1">
              Personalized sessions focused on helping you release emotional blockages and reconnect with your inner strength.
            </p>
            <a href="/services/emotional-healing" class="btn btn-outline-primary mt-auto">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0 rounded-4  p-3">
          <div class="card-body d-flex flex-column align-items-center" style="padding:0;">
    <div class="service-icon bg-light overflow-hidden mb-3"
     style="width:100%; height:200px; display:flex; align-items:center; justify-content:center;">
  <img src="/assets/mindfullness.jpg"
       alt="Mindfulness"
       style=" object-fit:cover;">
</div>
            <h5 class="fw-bold mb-2">Emotional Healing</h5>
            <p class="text-muted flex-grow-1">
              Personalized sessions focused on helping you release emotional blockages and reconnect with your inner strength.
            </p>
            <a href="/services/emotional-healing" class="btn btn-outline-primary mt-auto">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 rounded-4  p-3">
          <div class="card-body d-flex flex-column align-items-center" style="padding:0;">
    <div class="service-icon bg-light overflow-hidden mb-3"
     style="width:100%; height:200px; display:flex; align-items:center; justify-content:center;">
  <img src="/assets/mindfullness.jpg"
       alt="Mindfulness"
       style=" object-fit:cover;">
</div>
            <h4 class="fw-bold mb-2">Emotional Healing</h4>
            <p class="text-muted flex-grow-1">
              Personalized sessions focused on helping you release emotional blockages and reconnect with your inner strength.
            </p>
            <a href="/services/emotional-healing" class="btn btn-outline-primary mt-auto">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



          </div>
          <!-- <div class="field__item">


            <div class="paragraph paragraph--type--what-our-retreats-bring paragraph--view-mode--default">
              <div class="rotate-image-outer">
                <div class="container">
                  <div class="rotate-image">
                    <div class="rotate-text">
                      <div class="circle">
                        <div class="logo"><img src="themes/custom/pathretreats/images/widhet-icon.svg"
                            class="img-fluid"></div>
                        <div class="circle-text">
                          <p>Find your path Find your path</p>
                        </div>
                      </div>

                    </div>
                    <div class="half-above-img">




                      <div class="field field--name-field-image field--type-image field--label-hidden field__item">


                        <img loading="lazy" src="sites/default/files/2024-09/hugging%20cropped.jpg" width="1006"
                          height="738" alt="POL participants" class="img-fluid" />





                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div> -->
          <div class="field__item">


            <div class="paragraph paragraph--type--long-lasting-benefits paragraph--view-mode--default">
              <section class="long-lasting-benefits" id="benefits">
                <div class="container">
                  <div class="lasting-benefits-heading">
                    <h5>



                      <div
                        class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                        long lasting benefits</div>


                    </h5>
                    <h2>


                      <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                      <div class="field field--name-field-title field--type-string field--label-hidden field__item">
                        What you can receive from our retreats</div>

                      <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                    </h2>
                  </div>
                  <div class="wrapper">
                    <div class="content-outer">
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-06/aliveness-and-resilience_compressed.webp"
                            class="img-fluid" alt="Aliveness and Resilience">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Aliveness and Resilience</h4>
                          <div class="benefit-caption">
                            <p>Awaken the capacity to feel the full spectrum of your feelings, and cultivate a
                              deep self-love and compassion. Discover a new relationship to the sensitivity,
                              aliveness and beauty of your body and being.</p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-06/natural-confidence-and-joy_compressed.webp"
                            class="img-fluid" alt="Natural Confidence and Joy">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Natural Confidence and Joy</h4>
                          <div class="benefit-caption">
                            <p>Discover relaxed confidence and your innate capacity to move through life with more
                              ease and dignity, and less stress, fear and anxiety. Recognise your true value,
                              inherent self-worth, and strength to face challenges, and thereby experience
                              newfound clarity, passion and joy for life.</p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img
                            src="sites/default/files/2025-06/authentic-connection-and-community-updated_compressed.webp"
                            class="img-fluid" alt="Authentic Connection and Community">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Authentic Connection and Community</h4>
                          <div class="benefit-caption">
                            <p>Discover a love and deep appreciation for the power of speaking the truth. Face the
                              pain of separation and isolation that causes so much suffering, and come to see it
                              as a portal to genuine love. Feel authentic love and connection with yourself and
                              others, with lessened fear of judgments and criticism.</p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-03/humanity-and-inclusiveness.webp" class="img-fluid"
                            alt="Humanity and Inclusiveness">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Humanity and Inclusiveness</h4>
                          <div class="benefit-caption">
                            <p>Recognition of our shared and diverse humanity. Inclusiveness of all life
                              experiences: religion, race, caste, cultural background, gender, social status, and
                              all perceived and lived differences. This leads to a deep integrated acceptance of
                              our most authentic humanness, and capacity to live with more ease and peace.</p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-03/spiritual-connection.webp" class="img-fluid"
                            alt="Love, Trust and Spiritual Connection">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Love, Trust and Spiritual Connection</h4>
                          <div class="benefit-caption">
                            <p>Open to pure love and connection with the part of you that exists beyond the
                              conditioned layer of the personality. Unveil the trust, courage and commitment
                              needed to follow your spiritual longing, whether you are new to this or a lifelong
                              seeker.</p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-03/presence-and-groundedness.webp" class="img-fluid"
                            alt="Presence and Groundedness">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Presence and Groundedness</h4>
                          <div class="benefit-caption">
                            <p>Cultivate deep presence and groundedness. Awaken your inherent intelligence so you
                              can meet life’s challenges, know and choose what is good for you, and create the
                              life that you long for. Connect and abide as your essence and nourish your spirit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="content-item">
                        <div class="lasting-benefit-image">
                          <img src="sites/default/files/2025-06/transformation-and-healing_compressed.webp"
                            class="img-fluid" alt="Transformation and Healing">
                        </div>
                        <div class="lasting-benefit-caption">
                          <h4>Transformation and Healing</h4>
                          <div class="benefit-caption">
                            <p>Shift your self-image and gain deep insights into old self-limiting and sabotaging
                              beliefs. Experience the power and transformation that arises from facing shadow
                              aspects of your personality. Heal from grief and loss, and address trauma in a safe
                              and supportive environment.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="title-outer">
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Aliveness and Resilience
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Natural Confidence and Joy
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Authentic Connection and Community
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Humanity and Inclusiveness
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Love, Trust and Spiritual Connection
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Presence and Groundedness
                      </div>
                      <div class="title-item">
                        <div class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                              d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                          </svg></div>Transformation and Healing
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="long-lasting-benefits-mobile" id="benefits">
                <div class="container">
                  <div class="row">
                    <div class="col-12 text-center">
                      <h6>



                        <div
                          class="field field--name-field-small-title field--type-string field--label-hidden field__item">
                          long lasting benefits</div>

                        <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                      </h6>
                      <h3>


                        <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                        <div class="field field--name-field-title field--type-string field--label-hidden field__item">
                          What you can receive from our retreats</div>

                        <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                      </h3>
                    </div>
                  </div>
                  <div class="swiper mobilebenefitSwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Aliveness and Resilience</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-06/aliveness-and-resilience_compressed.webp"
                              class="img-fluid" alt="Aliveness and Resilience">
                          </div>
                          <div class="content">
                            <h4>Aliveness and Resilience</h4>
                            <p>Awaken the capacity to feel the full spectrum of your feelings, and cultivate a
                              deep self-love and compassion. Discover a new relationship to the sensitivity,
                              aliveness and beauty of your body and being.</p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Natural Confidence and Joy</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-06/natural-confidence-and-joy_compressed.webp"
                              class="img-fluid" alt="Natural Confidence and Joy">
                          </div>
                          <div class="content">
                            <h4>Natural Confidence and Joy</h4>
                            <p>Discover relaxed confidence and your innate capacity to move through life with more
                              ease and dignity, and less stress, fear and anxiety. Recognise your true value,
                              inherent self-worth, and strength to face challenges, and thereby experience
                              newfound clarity, passion and joy for life.</p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Authentic Connection and Community</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img
                              src="sites/default/files/2025-06/authentic-connection-and-community-updated_compressed.webp"
                              class="img-fluid" alt="Authentic Connection and Community">
                          </div>
                          <div class="content">
                            <h4>Authentic Connection and Community</h4>
                            <p>Discover a love and deep appreciation for the power of speaking the truth. Face the
                              pain of separation and isolation that causes so much suffering, and come to see it
                              as a portal to genuine love. Feel authentic love and connection with yourself and
                              others, with lessened fear of judgments and criticism.</p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Humanity and Inclusiveness</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-03/humanity-and-inclusiveness.webp" class="img-fluid"
                              alt="Humanity and Inclusiveness">
                          </div>
                          <div class="content">
                            <h4>Humanity and Inclusiveness</h4>
                            <p>Recognition of our shared and diverse humanity. Inclusiveness of all life
                              experiences: religion, race, caste, cultural background, gender, social status, and
                              all perceived and lived differences. This leads to a deep integrated acceptance of
                              our most authentic humanness, and capacity to live with more ease and peace.</p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Love, Trust and Spiritual Connection</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-03/spiritual-connection.webp" class="img-fluid"
                              alt="Love, Trust and Spiritual Connection">
                          </div>
                          <div class="content">
                            <h4>Love, Trust and Spiritual Connection</h4>
                            <p>Open to pure love and connection with the part of you that exists beyond the
                              conditioned layer of the personality. Unveil the trust, courage and commitment
                              needed to follow your spiritual longing, whether you are new to this or a lifelong
                              seeker.</p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Presence and Groundedness</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-03/presence-and-groundedness.webp" class="img-fluid"
                              alt="Presence and Groundedness">
                          </div>
                          <div class="content">
                            <h4>Presence and Groundedness</h4>
                            <p>Cultivate deep presence and groundedness. Awaken your inherent intelligence so you
                              can meet life’s challenges, know and choose what is good for you, and create the
                              life that you long for. Connect and abide as your essence and nourish your spirit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="top-title">
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                          <h4>Transformation and Healing</h4>
                        </div>
                        <div class="content-with-img">
                          <div class="image">
                            <img src="sites/default/files/2025-06/transformation-and-healing_compressed.webp"
                              class="img-fluid" alt="Transformation and Healing">
                          </div>
                          <div class="content">
                            <h4>Transformation and Healing</h4>
                            <p>Shift your self-image and gain deep insights into old self-limiting and sabotaging
                              beliefs. Experience the power and transformation that arises from facing shadow
                              aspects of your personality. Heal from grief and loss, and address trauma in a safe
                              and supportive environment.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-control">
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--long-lasting-benefits--default.html.twig' -->

          </div>
                    <div class="testimonial-container">
              <div
                class=" small-title field field--name-field-small-title field--type-string field--label-hidden field__item text-center">
                TESTIMONIAL</div>
              <h1 class="testimonial-title">What our Clients Say About Us </h1>

              <div class="slider-wrapper">
                <button class="nav-button prev-btn">&#10094;</button>

                <div class="testimonial-content">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop"
                    alt="Student" class="profile-image">
                  <div class="student-name" id="studentName">Jedd Horowitz</div>
                  <div class="student-location" id="studentLocation">USA</div>
                  <p class="testimonial-text" id="testimonialText">
                    The Kathmandu Meditation School is the greatest place in the world. What makes it so special is the
                    quality of the people — they are so kind and smart, and do everything they can so that you have a
                    comfortable experience, yet learn and grow in every way possible. The food is absolutely delicious,
                    the facilities are very clean and nice, and the offerings are excellent. As there are many centers
                    like this in Nepal, you should feel confident that this is the best one to attend. Don't think
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



                <div class="paragraph paragraph--type--tab-items paragraph--view-mode--default">
                  <div class="retreats-in-media">
                    <div class="container">
                      <div class="heading">
                        <h2>



                          <div class="field field--name-field-title field--type-string field--label-hidden field__item">
                            Saptarishi in the Media</div>


                        </h2>
                      </div>
                      <div class="tab-wrapper">
                        <div class="row">
                          <div class="col-lg-8 col-md-6">
                            <div class="tab-items">
                              <ul class="tabs">
                                <li class="active"><a href="#tab1"><img src="sites/default/files/2024-03/the-times.svg"
                                      class="img-fluid"></a></li>
                                <li class=""><a href="#tab2"><img src="sites/default/files/2024-03/the-gaurdian.svg"
                                      class="img-fluid"></a></li>
                                <li class=""><a href="#tab3"><img
                                      src="sites/default/files/2024-03/spirituality-health.svg" class="img-fluid"></a>
                                </li>
                                <li class=""><a href="#tab4"><img
                                      src="sites/default/files/2024-03/yoga-international.svg" class="img-fluid"></a>
                                </li>
                                <li class=""><a href="#tab5"><img src="sites/default/files/2024-03/sydney-morning.svg"
                                      class="img-fluid"></a></li>
                                <li class=""><a href="#tab6"><img
                                      src="sites/default/files/2024-03/the-huffington-post.svg" class="img-fluid"></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="tab-item-content">
                              <div class="tab-content active" id="tab1">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/the-times.svg" class="img-fluid">
                                <div class="tab-caption">
                                  <p>
                                    <meta charset="utf-8"><span style="white-space:pre-wrap;">Can you transform your
                                      emotional life in a week? Jessica Brinton braved the intensive Path of Love
                                      retreat to find out.</span>
                                  </p>
                                </div>
                                <div class="link"><a href="blog/moving-published-times.html">Read Article</a></div>
                              </div>
                              <div class="tab-content " id="tab2">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/the-gaurdian.svg" class="img-fluid">
                                <div class="tab-caption">
                                  <p>"I thought I'd grieved the death of my sister - until I found this retreat" - a
                                    week in Wales with a lifeboat of fellow passengers reaps surprising results</p>
                                </div>
                                <div class="link"><a
                                    href="blog/i-thought-id-grieved-death-my-sister-until-i-found-retreat-published-guardian.html">Read
                                    Article</a></div>
                              </div>
                              <div class="tab-content " id="tab3">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/spirituality-health.svg"
                                  class="img-fluid">
                                <div class="tab-caption">
                                  <p>
                                    <meta charset="utf-8">"The week I burned my ego". Robin Stremlow of Spirituality
                                    Health Magazine delves into the rich experience of the Path of Love process.
                                  </p>
                                </div>
                                <div class="link"><a
                                    href="blog/week-i-burned-my-ego-published-spirituality-health-magazine">Read
                                    Article</a></div>
                              </div>
                              <div class="tab-content " id="tab4">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/yoga-international.svg"
                                  class="img-fluid">
                                <div class="tab-caption">
                                  <p>"The Path of Love is the path of feeling truly and deeply alive". Jaimie Epstein
                                    of Yoga International reaches into the transformative experience of Saptarishi'
                                    flagship process.</p>
                                </div>
                                <div class="link"><a
                                    href="blog/path-love-path-feeling-truly-and-deeply-alive-published-yoga-international.html">Read
                                    Article</a></div>
                              </div>
                              <div class="tab-content " id="tab5">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/sydney-morning.svg"
                                  class="img-fluid">
                                <div class="tab-caption">
                                  <p>
                                    <meta charset="utf-8"><span style="white-space:pre-wrap;">Is she psychologically
                                      strong enough to ensure the mysterious Path of Love retreat? With emotional
                                      baggage in hand, Brigid Delaney checks in to find out.</span>
                                  </p>
                                </div>
                                <div class="link"><a
                                    href="blog/boot-camp-heart-brigid-delaney-treads-path-love-journey-inwards-published-sydney-morning.html">Read
                                    Article</a></div>
                              </div>
                              <div class="tab-content " id="tab6">
                                <div class="cross-icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.721863 0.352539L14.9285 14.5594" stroke="white" />
                                    <path d="M14.9288 0.352539L0.721859 14.5592" stroke="white" />
                                  </svg></div><img src="sites/default/files/2024-03/the-huffington-post.svg"
                                  class="img-fluid">
                                <div class="tab-caption">
                                  <p><span style="white-space:pre-wrap;">Maria Grace of the Huffington Post spent
                                      almost a decade with numerous health issues, different medications, operations
                                      and hospital treatments. Her body was exhausted and her mind was depressed. Path
                                      of Love offered a chance to burn through the emotional sludge that had been
                                      building inside for years.</span>
                                    <meta charset="utf-8">
                                  </p>
                                </div>
                                <div class="link"><a href="blog/path-love-boot-camp-soul-published-huffington-post">Read
                                    Article</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div> -->
          <div class="field__item">

            <div class="paragraph paragraph--type--blogs-articles paragraph--view-mode--default">
              <div class="container">
                <div class="blog-article">
                  <div class="toptitle-link-wrap">
                    <div class="title">
                      <h2>



                        <div class="field field--name-field-title field--type-string field--label-hidden field__item">
                          Blogs </div>



                      </h2>
                    </div>
                    <div class="top-link">




                      <div class="field field--name-field-top-link field--type-link field--label-hidden field__item">
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



                                        <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->
                                        <img loading="eager"
                                          src="sites/default/files/styles/wide/public/2025-06/Untitled%20design%20(5)_01392.png?itok=-82Eya0G"
                                          width="1060" height="550" alt="" class="img-fluid image-style-wide" />

                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->



                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-style.html.twig' -->



                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-formatter.html.twig' -->

                                      </div>

                                      <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


                                    </div>
                                    <div class="blog-article-content">
                                      <h4><a
                                          href="blog/vulnerability-not-fragility-it-entrance-reflections-laura-seiler"
                                          rel="bookmark">


                                          <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->
                                          <span
                                            class="field field--name-title field--type-string field--label-hidden">Vulnerability
                                            is not Fragility. It is the Entrance — Reflections by Laura
                                            Seiler</span>

                                          <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->

                                        </a></h4>
                                      <div class="blog-text">
                                        Public Speaker, best-selling author and podcaster, Laura Seiler shares
                                        about her Path of Love journey
                                      </div>
                                      <div class="normal-link">
                                        <a href="blog/vulnerability-not-fragility-it-entrance-reflections-laura-seiler">Read
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




                                      <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                                      <div
                                        class="field field--name-field-image field--type-image field--label-hidden field__item">






                                        <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->
                                        <img loading="eager"
                                          src="sites/default/files/styles/wide/public/2025-03/Rectangle%20128_474135.png?itok=SJWBPuM9"
                                          width="1060" height="550" alt="" class="img-fluid image-style-wide" />

                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->



                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-style.html.twig' -->



                                        <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/image-formatter.html.twig' -->

                                      </div>

                                      <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


                                    </div>
                                    <div class="blog-article-content">
                                      <h4><a href="blog/path-love-transformative-journey-your-true-self.html"
                                          rel="bookmark">


                                          <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->
                                          <span
                                            class="field field--name-title field--type-string field--label-hidden">The
                                            Path of Love: A Transformative Journey to Your True Self</span>

                                          <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->

                                        </a></h4>
                                      <div class="blog-text">
                                        Path of Love is a 7-day immersive experience of deep inner work. It is a
                                        transformative journey designed to strip away…
                                      </div>
                                      <div class="normal-link">
                                        <a href="blog/path-love-transformative-journey-your-true-self.html">Read
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



                                      <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                                      <div
                                        class="field field--name-field-image field--type-image field--label-hidden field__item">


                                        <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/image.html.twig' -->
                                        <img loading="eager"
                                          src="sites/default/files/styles/wide/public/2025-03/Rectangle%20128_45b654.png?itok=kTxXwSj9"
                                          width="1065" height="550" alt="" class="img-fluid image-style-wide" />


                                      </div>



                                    </div>
                                    <div class="blog-article-content">
                                      <h4><a href="blog/coming-home-yourself-turiya-hanover-world-wisdom-podcast.html"
                                          rel="bookmark">

                                          <!-- BEGIN OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->
                                          <span
                                            class="field field--name-title field--type-string field--label-hidden">Coming
                                            Home to Yourself: Turiya Hanover on the World of Wisdom Podcast</span>

                                          <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/field/field--node--title.html.twig' -->

                                        </a></h4>
                                      <div class="blog-text">
                                        We are delighted to share a recent episode of the World of Wisdom podcast
                                        featuring our co-founder, Turiya Hanover. In…
                                      </div>
                                      <div class="normal-link">
                                        <a href="blog/coming-home-yourself-turiya-hanover-world-wisdom-podcast.html">Read
                                          More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </article>

                              <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node--blog--home-blogs.html.twig' -->

                            </div>
                          </div>
                          <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/views/views-view-unformatted--blogs-articles.html.twig' -->


                        </div>

                      </div>

                      <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/views/views-view.html.twig' -->

                    </div>

                    <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/form/container.html.twig' -->


                  </div>
                  <div class="all-link link">



                    <!-- 💡 BEGIN CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->

                    <div class="field field--name-field-all-articles field--type-link field--label-hidden field__item">
                      <a href="blog.html">All articles</a>
                    </div>

                    <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


                  </div>
                </div>
              </div>
            </div>

            <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/paragraph/paragraph--blogs-articles.html.twig' -->

          </div>
        </div>

        <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/field/field.html.twig' -->


    </div>

    </article>

    <!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/content/node.html.twig' -->


  </div>

  <!-- END OUTPUT from 'themes/contrib/bootstrap5/templates/block/block.html.twig' -->


</div>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/region/region.html.twig' -->


</div>
<script>
  // Testimonials data
  const testimonials = [
    {
      name: "Jedd Horowitz",
      location: "USA",
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop",
      text: "The Kathmandu Meditation School is the greatest place in the world. What makes it so special is the quality of the people — they are so kind and smart, and do everything they can so that you have a comfortable experience, yet learn and grow in every way possible. The food is absolutely delicious, the facilities are very clean and nice, and the offerings are excellent. As there are many centers like this in Nepal, you should feel confident that this is the best one to attend. Don't think twice, book it!",
      rating: 5
    },
    {
      name: "Sarah Mitchell",
      location: "Canada",
      image: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop",
      text: "An absolutely transformative experience! The instructors are incredibly knowledgeable and patient. I came here stressed and overwhelmed, and left feeling peaceful and centered. The meditation techniques I learned have become an essential part of my daily routine. Highly recommended!",
      rating: 5
    },
    {
      name: "Marcus Johnson",
      location: "UK",
      image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop",
      text: "Outstanding program with exceptional attention to detail. The retreat center is beautifully maintained, and the staff goes above and beyond to make you feel welcome. I've attended several meditation centers, and this one stands out for its genuine care and professional approach.",
      rating: 5
    },
    {
      name: "Emma Rodriguez",
      location: "Spain",
      image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop",
      text: "A life-changing journey! The combination of meditation practice, healthy food, and supportive community created the perfect environment for personal growth. I felt truly cared for throughout my stay. This is definitely worth the investment in yourself.",
      rating: 5
    }
  ];

  let currentIndex = 0;

  function updateTestimonial(index) {
    const testimonial = testimonials[index];
    document.getElementById('studentName').textContent = testimonial.name;
    document.getElementById('studentLocation').textContent = testimonial.location;
    document.getElementById('testimonialText').textContent = testimonial.text;
    document.querySelector('.profile-image').src = testimonial.image;
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
</script>

<?php include 'includes/footer.php'?>

<!-- END CUSTOM TEMPLATE OUTPUT from 'themes/custom/pathretreats/templates/layout/html.html.twig' -->