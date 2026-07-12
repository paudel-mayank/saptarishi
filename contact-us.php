<?php
require __DIR__ . '/includes/contact-handler.php';
include __DIR__ . '/includes/detailheader.php';
?>
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

              <section class="py-5 bg-light" id="contact">
                <div class="container">
                  <div class="text-center mb-5">
                    <h6 class="text-uppercase small-title ">Get In Touch</h6>
                    <h1 class="fw-bold">We’d love to hear from you</h1>
                    <p class="text-muted">Have questions or want to learn more? Reach out using the
                      form below.</p>
                  </div>
                  <div class="d-flex flex-column flex-lg-row gap-5 align-items-start">
                    <!-- Contact Form (in Card) -->
                    <div class="flex-fill bg-white shadow-sm rounded-4 p-4">
                      <h5 class="fw-bold mb-3">Send us a message</h5>
                      <?php if ($contactSuccess !== ''): ?>
                        <div class="alert alert-success" role="status"><?= htmlspecialchars($contactSuccess, ENT_QUOTES, 'UTF-8') ?></div>
                      <?php endif; ?>
                      <?php if ($contactErrors !== []): ?>
                        <div class="alert alert-danger" role="alert">
                          <p class="fw-bold mb-2">Please correct the following:</p>
                          <ul class="mb-0">
                            <?php foreach ($contactErrors as $error): ?>
                              <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      <?php endif; ?>
                      <form action="contact-us.php" method="post" aria-label="Contact form">
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars((string) $_SESSION['contact_csrf'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="visually-hidden" aria-hidden="true">
                          <label for="website">Website</label>
                          <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="mb-3">
                          <label for="name" class=" mysubtext
                                form-label fw-semibold">Full Name</label>
                          <input type="text" name="name" class="form-control" id="name" autocomplete="name" maxlength="100" value="<?= htmlspecialchars($contactValues['name'], ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class=" mysubtext
                                form-label fw-semibold">Email</label>
                          <input type="email" name="email" class="form-control" id="email" autocomplete="email" maxlength="254" value="<?= htmlspecialchars($contactValues['email'], ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="mysubtext form-label fw-semibold">Phone <span class="fw-normal">(optional)</span></label>
                          <input type="tel" name="phone" class="form-control" id="phone" autocomplete="tel" maxlength="30" value="<?= htmlspecialchars($contactValues['phone'], ENT_QUOTES, 'UTF-8') ?>">
                        </div>
                        <div class="mb-3">
                          <label for="program" class="mysubtext form-label fw-semibold">Program of interest</label>
                          <select name="program" class="form-select" id="program">
                            <option value="">Not sure yet</option>
                            <?php foreach (['Panchakarma Rejuvenation', 'Ayurvedic Wellness Immersion', 'Mind-Body Balance', 'Ayurvedic Healing Service'] as $program): ?>
                              <option value="<?= htmlspecialchars($program, ENT_QUOTES, 'UTF-8') ?>"<?= $contactValues['program'] === $program ? ' selected' : '' ?>><?= htmlspecialchars($program, ENT_QUOTES, 'UTF-8') ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="dates" class="mysubtext form-label fw-semibold">Preferred dates <span class="fw-normal">(optional)</span></label>
                          <input type="text" name="dates" class="form-control" id="dates" maxlength="100" value="<?= htmlspecialchars($contactValues['dates'], ENT_QUOTES, 'UTF-8') ?>" placeholder="For example, October 2026">
                        </div>
                        <div class="mb-3">
                          <label for="message" class=" mysubtext
                                form-label fw-semibold">Message</label>
                          <textarea name="message" class="form-control" id="message" rows="5" minlength="10" maxlength="3000" required><?= htmlspecialchars($contactValues['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                        </div>
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" name="consent" value="1" id="consent" required>
                          <label class="form-check-label" for="consent">I agree that Takshasheela may use these details to respond to my enquiry. See our <a href="privacy-policy.php">privacy policy</a>.</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 b-none border-0" style="background-color: #91cc33
                          ;">Send Message</button>
                      </form>
                    </div>
                    <!-- Organization Details -->
                    <div class="flex-fill d-flex flex-column justify-content-center pt-4">
                      <h5 class="fw-bold mb-4">Contact Details</h5>
                      <!-- Address -->
                      <div class="d-flex align-items-start mb-4">
                        <div
                          class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                          style="width:50px; height:50px;">
                          <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div>
                          <h6 class="fw-semibold mb-1">Office Address</h6>
                          <p class="text-muted mb-0">Kathmandu, Nepal</p>
                        </div>
                      </div>
                      <!-- Email -->
                      <div class="d-flex align-items-start mb-4">
                        <div
                          class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                          style="width:50px; height:50px;">
                          <i class="bi bi-envelope-fill fs-5"></i>
                        </div>
                        <div>
                          <h6 class="fw-semibold mb-1">Email</h6>
                          <p class="text-muted mb-0"><a href="mailto:info@takshasheela.com">info@takshasheela.com</a></p>
                        </div>
                      </div>
                      <!-- Phone -->
                      <div class="d-flex align-items-start mb-4">
                        <div
                          class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                          style="width:50px; height:50px;">
                          <i class="bi bi-telephone-fill fs-5"></i>
                        </div>
                        <div>
                          <h6 class="fw-semibold mb-1">Phone</h6>
                          <p class="text-muted mb-0"><a href="tel:+9779800000000">+977 9800 000 000</a></p>
                        </div>
                      </div>
                      <hr class="my-3">
                      <!-- Social Links -->

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
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
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
