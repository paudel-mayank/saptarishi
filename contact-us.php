<?php include __DIR__ . '/includes/detailheader.php'; ?>
<div class="main-content">
  <a id="main-content" tabindex="-1"></a>
  <div class="region region-content">
    <div data-drupal-messages-fallback class="hidden"></div>
    <div id="block-pathretreats-content" class="block block-system block-system-main-block">
      <article data-history-node-id="46" class="node node--type-page node--view-mode-full">
        <div class="node__content">
          <div
            class="field field--name-field-content field--type-entity-reference-revisions field--label-hidden field__items">
            <div class="field__item">

              <section class="page-hero page-hero--contact">
                <div class="site-container">
                  <h1>We’d love to hear from you</h1>
                  <p>Have questions or want to learn more? Our team is here to help you plan a thoughtful healing journey.</p>
                </div>
              </section>

              <section class="site-section bg-light" id="contact">
                <div class="site-container">
                  <div class="section-heading">
                    <p class="eyebrow">Get in touch</p>
                    <h2>Start a conversation</h2>
                    <p class="section-heading__description">Reach out using the form below or contact the Aashram directly.</p>
                  </div>
                  <div class="contact-layout">
                    <!-- Contact Form (in Card) -->
                    <div class="contact-card content-card">
                      <h2>Send us a message</h2>
                      <form action="contact-us.php" method="post" aria-label="Contact form">
                        <div class="mb-3">
                          <label for="name" class="form-label">Full Name</label>
                          <input type="text" name="name" class="form-control" id="name" autocomplete="name" placeholder="Your name" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="email" autocomplete="email" placeholder="you@example.com" required>
                        </div>
                        <div class="mb-3">
                          <label for="message" class="form-label">Message</label>
                          <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your message..."
                            required></textarea>
                        </div>
                        <button type="submit" class="button button--primary w-100">Send Message</button>
                      </form>
                    </div>
                    <!-- Organization Details -->
                    <div class="contact-details">
                      <h2>Contact details</h2>
                      <!-- Address -->
                      <div class="contact-detail">
                        <div class="contact-icon">
                          <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div>
                          <h3>Location</h3>
                          <p>Kathmandu, Nepal</p>
                        </div>
                      </div>
                      <!-- Email -->
                      <div class="contact-detail">
                        <div class="contact-icon">
                          <i class="bi bi-envelope-fill fs-5"></i>
                        </div>
                        <div>
                          <h3>Email</h3>
                          <p><a href="mailto:info@takshasheela.com">info@takshasheela.com</a></p>
                        </div>
                      </div>
                      <!-- Phone -->
                      <div class="contact-detail">
                        <div class="contact-icon">
                          <i class="bi bi-telephone-fill fs-5"></i>
                        </div>
                        <div>
                          <h3>Phone</h3>
                          <p><a href="tel:+9779800000000">+977 9800 000 000</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="field__item">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14162.94878997507!2d85.3160715!3d27.7088386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19153ac35cd7%3A0x5f9643a3f0d63a09!2sKathmandu%20Metropolitan%20City%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
            class="contact-map" width="100%" height="450" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
    </div>
  </div>
  </article>
</div>
</div>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
