<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Holistic Ayurveda Therapy - Takshasheela Ayurveda Aashram</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* ============ Root Variables & Base Styles ============ */
    :root {
      --primary-green: #2d5016;
      --accent-gold: #c9a961;
      --light-cream: #f5f1e8;
      --dark-text: #2c2c2c;
      --border-light: #e8e4db;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: var(--dark-text);
      line-height: 1.6;
      background-color: #fff;
    }

    /* ============ Banner Section ============ */
    .inner-banner {
      position: relative;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .background-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    .background-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .inner-banner-caption {
      position: relative;
      z-index: 2;
      background: rgba(45, 80, 22, 0.85);
      width: 100%;
      padding: 60px 20px;
      text-align: center;
      backdrop-filter: blur(5px);
    }

    .service-title {
      font-size: 3rem;
      font-weight: 700;
      color: var(--accent-gold);
      margin-bottom: 15px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      letter-spacing: 1px;
    }

    .service-subtitle {
      font-size: 1.3rem;
      color: #ffffff;
      font-weight: 300;
      margin: 0;
    }

    .service-subtitle p {
      margin: 0;
    }

    /* ============ Service Detail Section ============ */
    .service-detail {
      padding: 60px 0;
      background-color: #fff;
    }

    .service-detail-wrapper {
      display: flex;
      gap: 30px;
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary-green);
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
    /* .cta-button {
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
    } */

    /* .btn-primary:hover {
      background: var(--accent-gold);
      color: var(--primary-green) !important;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(201, 169, 97, 0.3);
    } */

    /* ============ Sidebar Section ============ */
    /* .service-sidebar {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    } */

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
      color: var(--primary-green);
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
      color: var(--primary-green);
    }

    /* ============ Related Retreats Section ============ */
   
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

      /* .service-sidebar {
        flex-direction: row;
        flex-wrap: wrap;
      } */

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
</head>
<body>
  <div class="main-content">
    <a id="main-content" tabindex="-1"></a>
    <div class="region region-content">
      <div data-drupal-messages-fallback class="hidden"></div>

      <div id="block-pathretreats-content" class="block block-system block-system-main-block">
        <article class="node node--type-service node--view-mode-full">
          <div class="node__content">

            <!-- Banner Section -->
            <div class="paragraph background-greenish-bg paragraph--type--banner paragraph--view-mode--default">
              <div class="inner-banner">
                <div class="background-img">
                  <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='1200' height='400'%3E%3Crect fill='%23a8c5a8' width='1200' height='400'/%3E%3C/svg%3E" alt="Service Banner" class="img-fluid">
                </div>
                <div class="inner-banner-caption">
                  <div class="container container-l">
                    <div class="col-12">
                      <h1 class="service-title">Holistic Ayurveda Therapy</h1>
                      <div class="service-subtitle">
                        <p>Traditional Ayurvedic healing tailored for your mind, body, and soul.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Service Description Section -->
            <div class="paragraph paragraph--type--service-detail paragraph--view-mode--default service-detail" id="service-detail">
              <div class="container">
                <div class="service-detail-wrapper">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="service-description">
                        <h2 class="section-title">About This Service</h2>
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

                        <div class="cta-button mt-4">
                          <a href="#" class="btn btn-primary">Book This Service</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Sidebar Section -->
                <div class="service-sidebar">
                  <div class="sidebar-card col-4">
                    <h4>Service Details</h4>
                    <ul>
                      <li><strong>Duration:</strong> 90 minutes</li>
                      <li><strong>Location:</strong> Takshasheela Ayurveda Aashram</li>
                      <li><strong>Price:</strong> ₹4,500</li>
                    </ul>
                  </div>

                  <div class="sidebar-card">
                    <h4>Recommended For</h4>
                    <ul>
                      <li>Stress relief</li>
                      <li>Emotional balance</li>
                      <li>Detox and cleansing</li>
                      <li>Holistic wellness</li>
                    </ul>
                  </div>

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

            <!-- Related Retreats Section -->
            <div class="paragraph paragraph--type--related-retreats paragraph--view-mode--default" id="related-retreats">
              <div class="container">
                <div class="lasting-benefits-heading text-center">
                  <h5 class="text-uppercase small-title">Related Retreats</h5>
                </div>

                <div class="view-content">
                  <div class="row">

                    <!-- Retreat Card 1 -->
                    <div class="col-md-6 col-lg-4 views-row">
                      <article class="node node--type-retreat node--view-mode-related">
                        <div class="retreat-inner">
                          <div class="retreat-overview-image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='200'%3E%3Crect fill='%23d4b896' width='400' height='200'/%3E%3C/svg%3E" class="img-fluid" alt="Retreat 1">
                          </div>
                          <div class="retreat-caption">
                            <h4>7-Day Healing Retreat</h4>
                            <p>Experience a deep, immersive week of inner transformation and well-being.</p>
                            <div class="link"><a href="#">Find out more →</a></div>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- Retreat Card 2 -->
                    <div class="col-md-6 col-lg-4 views-row">
                      <article class="node node--type-retreat node--view-mode-related">
                        <div class="retreat-inner">
                          <div class="retreat-overview-image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='200'%3E%3Crect fill='%23c9a961' width='400' height='200'/%3E%3C/svg%3E" class="img-fluid" alt="Retreat 2">
                          </div>
                          <div class="retreat-caption">
                            <h4>Detox & Rejuvenation Program</h4>
                            <p>A revitalizing Ayurvedic cleanse designed to restore inner vitality.</p>
                            <div class="link"><a href="#">Find out more →</a></div>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- Retreat Card 3 -->
                    <div class="col-md-6 col-lg-4 views-row">
                      <article class="node node--type-retreat node--view-mode-related">
                        <div class="retreat-inner">
                          <div class="retreat-overview-image">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='200'%3E%3Crect fill='%2395a87f' width='400' height='200'/%3E%3C/svg%3E" class="img-fluid" alt="Retreat 3">
                          </div>
                          <div class="retreat-caption">
                            <h4>Mindfulness & Meditation Workshop</h4>
                            <p>Strengthen your emotional resilience and mental clarity.</p>
                            <div class="link"><a href="#">Find out more →</a></div>
                          </div>
                        </div>
                      </article>
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
</body>
</html>