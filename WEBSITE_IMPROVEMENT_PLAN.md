# Takshasheela Website Improvement Plan

## Purpose

This document records improvement opportunities found during a source-code review of the current PHP website. The recommendations are prioritized by user impact, business value, security, and implementation effort.

## Implementation status (10 July 2026)

Completed in the current update:

- Secure contact processing with server validation, CSRF protection, honeypot spam detection, session rate limiting, consent, configurable recipient, and accessible feedback.
- Consistent Kathmandu/Takshasheela contact information on the contact page.
- Security and privacy response headers, secure session-cookie settings, and environment-based production URLs.
- Expanded Open Graph/Twitter metadata and Organization structured data.
- Keyboard skip link, visible focus treatment, and reduced-motion handling.
- Conditional hero-video loading for mobile, reduced-motion, and data-saver users.
- Expanded privacy/cookie disclosures, `robots.txt`, XML sitemap, `.env.example`, and developer/deployment README.
- Automated checks for likely encoding corruption and temporary media-size budgets.

Still requires business or production access:

- Verify phone number, address, claims, credentials, prices, dates, testimonials, and policies with the owner.
- Configure and test the production mail transport and `CONTACT_RECIPIENT`.
- Re-encode the source hero video and large photographs with a media tool; conditional loading reduces transfer but does not shrink the original file.
- Run real-device, screen-reader, Lighthouse, social-preview, consent, and production security-header testing.
- Submit the sitemap to search engines and configure production analytics only after approving a privacy-conscious measurement plan.

## Current strengths

- Shared header, footer, and site metadata configuration are already in use.
- Public pages have unique titles, meta descriptions, canonical URLs, and a single `<h1>`.
- Images currently pass the project's checks for alternative text and explicit dimensions.
- The misspelled `accomodations.php` URL redirects to the correct `accommodations.php` URL.
- `php tools/check-site.php` provides a useful automated baseline and currently passes all 20 public pages.

## Priority 0: Release blockers

### 1. Fix visible character-encoding corruption

**Evidence:** Misdecoded UTF-8 text is present in PHP source where apostrophes, em dashes, and check marks were intended. It can appear incorrectly in page titles, metadata, and page content.

**Recommended action:**

- Convert affected source files to UTF-8 without BOM.
- Replace corrupted sequences with the intended apostrophe, dash, quotation mark, or symbol.
- Add an automated check for common mojibake (misdecoded text) byte patterns and the Unicode replacement character.

**Done when:** No corrupted characters appear in rendered pages, browser titles, social previews, or source checks.

### 2. Implement working enquiry and retreat-conversion flows

**Evidence:** The project contains `contact-us.php` and `find-retreat.php`, but the reviewed public PHP files contain no HTML form controls or server-side submission handler.

**Recommended action:**

- Add a clear enquiry form with name, email/phone, preferred program, intended dates, message, and consent.
- Validate on both client and server; escape output and protect submissions with CSRF tokens.
- Add spam protection, rate limiting, safe email/CRM delivery, and user-friendly success/error states.
- Never store SMTP/API secrets in source control; use environment configuration.
- Track successful enquiries as a conversion event without sending personal data to analytics.

**Done when:** A test enquiry reaches the intended recipient/system, failures are recoverable, spam controls work, and keyboard/screen-reader users can complete the form.

### 3. Confirm and replace placeholder business information

Review all contact details, locations, practitioner credentials, program inclusions, prices, dates, testimonials, and legal text with the business owner. Health and wellness claims should be factual, attributable, and avoid promising medical outcomes.

**Done when:** Content has a named owner and approval date, and every public claim and contact method is verified.

## Priority 1: High-impact improvements

### 4. Improve page-load performance and Core Web Vitals

**Evidence:** `assets/Homepage-big-page-video-final-.mp4` is approximately 53 MB. Several images are 1–3 MB, and the shared header loads many separate Drupal/Bootstrap component styles plus third-party icon resources on every page.

**Recommended action:**

- Re-encode the hero video at web-friendly bitrates, provide mobile and desktop variants, set a poster image, and avoid downloading it for users who prefer reduced motion or are on small screens.
- Convert suitable photographs to responsive AVIF/WebP variants and use `srcset`/`sizes`.
- Keep eager loading for the likely Largest Contentful Paint image; lazy-load below-the-fold media.
- Remove unused Drupal/Bootstrap CSS, consolidate/minify production assets, and self-host or reduce icon/font dependencies.
- Add long-lived cache headers for versioned static assets and Brotli/Gzip compression.
- Measure before and after with Lighthouse on a throttled mobile profile.

**Targets:** LCP below 2.5 s, INP below 200 ms, CLS below 0.1, and materially smaller initial page weight on mobile.

### 5. Complete responsive and accessibility testing

The source has a good baseline, but automated markup checks alone cannot confirm usability.

**Recommended action:**

- Test at 320 px width and common mobile/tablet/desktop breakpoints; replace fixed widths/heights where they cause overflow or cropping.
- Verify navigation and nested menus using keyboard only, including Escape behavior and accurate `aria-expanded` state.
- Ensure a visible skip link and strong focus indicators are available throughout the site.
- Check color contrast, zoom to 200%, heading order, link purpose, carousel controls, and reduced-motion behavior.
- Use empty `alt=""` for decorative images and meaningful descriptions for informative images.
- Test with axe and at least one real screen reader; target WCAG 2.2 AA.

**Done when:** All core journeys work with keyboard, mobile viewport, zoom, and a screen reader, with no serious automated accessibility violations.

### 6. Strengthen SEO and social sharing

Existing titles, descriptions, canonicals, and basic Open Graph tags are a strong start.

**Recommended action:**

- Generate canonical URLs from a configured production base URL instead of the request `Host` header.
- Add `og:site_name`, appropriate page-specific social images, Twitter title/description, and absolute production URLs.
- Add Organization/LocalBusiness, BreadcrumbList, Article, Event, and relevant Offer structured data where truthful.
- Create `robots.txt` and an XML sitemap, then connect Google Search Console and Bing Webmaster Tools.
- Use clean, stable detail-page URLs rather than relying only on query strings.
- Add visible breadcrumbs to deep pages and intentional internal links between services, packages, accommodation, articles, and enquiry CTAs.

**Done when:** Rich Results validation passes where applicable, the sitemap is indexed, and social previews are correct for representative pages.

### 7. Improve security and privacy controls

**Recommended action:**

- Add production headers: Content-Security-Policy, HSTS (HTTPS only), Referrer-Policy, Permissions-Policy, and clickjacking protection via CSP `frame-ancestors`.
- Pin or self-host third-party assets where practical and remove unused external scripts.
- Prevent verbose PHP errors in production while retaining server-side logs.
- Keep PHP and all libraries supported and patched; document the update process.
- Expand the privacy and cookie pages with the actual data collected, purpose, retention, processors, user rights, and contact method.
- If non-essential analytics/marketing cookies are introduced, obtain consent before loading them and support withdrawal.

**Done when:** HTTPS and security-header scans pass, secrets are externalized, dependencies are supported, and documented privacy behavior matches actual behavior.

## Priority 2: Maintainability and content operations

### 8. Reduce duplicated and legacy code

The pages contain large blocks of CMS-export-style markup, inline CSS, and page-specific repeated structures. The repository also retains compatibility/duplicate files such as `accomodations.php` and `service-detailA.php`.

**Recommended action:**

- Extract repeatable cards, hero sections, breadcrumbs, CTA blocks, and detail layouts into PHP components.
- Move inline styles and scripts into organized, versioned assets.
- Define design tokens for colors, spacing, type, radii, and breakpoints.
- Inventory Drupal-era CSS/JS and remove files that rendered pages no longer use.
- Keep redirects at the web-server/router layer when possible, and document when legacy files can be removed.
- Adopt consistent naming and formatting, enforced by PHP_CodeSniffer or PHP-CS-Fixer.

**Done when:** Common UI changes are made once, dead assets are removed safely, and all pages retain visual and functional parity.

### 9. Introduce structured content management

Packages, services, articles, events, testimonials, team profiles, and gallery entries are currently difficult to maintain consistently when embedded directly in page templates.

**Recommended action:**

- Store repeated content in a database, CMS, or validated data files with stable IDs/slugs.
- Add fields for publication status, author/owner, update date, SEO data, image metadata, and ordering.
- Make detail pages return a real 404 for unknown content rather than generic or misleading content.
- Establish an editorial workflow for review, expiry, and archiving of events and offers.

**Done when:** An authorized editor can update content without modifying layout code and stale content has a clear lifecycle.

### 10. Add project and deployment documentation

Create a root `README.md` covering prerequisites, local XAMPP setup, configuration/environment variables, URL setup, site-check commands, content editing, deployment, rollback, backups, and troubleshooting. Add `.env.example` if environment variables are introduced, but never commit the real `.env`.

**Done when:** A new developer can run and validate the site from a fresh checkout using only documented steps.

## Priority 3: Quality, analytics, and growth

### 11. Expand automated quality checks

Extend `tools/check-site.php` or add a test suite to cover:

- Corrupted character sequences and placeholder content.
- Internal redirect chains and broken external links.
- Valid form submission, validation, CSRF rejection, rate limiting, and failure handling.
- Correct HTTP statuses for valid, redirected, and missing pages.
- Structured-data validity, sitemap coverage, and robots directives.
- Responsive browser smoke tests for navigation and top conversion journeys.
- Performance budgets for page weight, image size, and key Lighthouse metrics.

Run syntax checks and the site audit automatically in CI for every proposed change.

### 12. Add privacy-conscious measurement

Define a small measurement plan before adding analytics:

- Enquiry starts and successful submissions.
- Clicks on phone, email, directions, package, and booking CTAs.
- Conversion rate by landing page and program.
- Search Console impressions, clicks, indexing errors, and high-opportunity queries.
- Core Web Vitals from real users where possible.

Avoid collecting sensitive health information in analytics and define retention/access rules.

### 13. Improve trust and conversion content

- Give each program a consistent summary of audience, outcomes, duration, inclusions, exclusions, practitioner, accommodation, price or enquiry path, and cancellation policy.
- Place one clear primary CTA above the fold and repeat it after decision-making content.
- Add verified practitioner profiles, facility/location details, authentic testimonial attribution and consent, FAQs, and transparent booking steps.
- Add medical disclaimers and emergency guidance appropriate to an Ayurveda/wellness service.
- Review copy for consistent spelling, tone, terminology, and calls to action.

## Suggested implementation sequence

### Phase 1: Stabilize (1–2 weeks)

1. Fix encoding corruption and verify all business/legal content.
2. Implement and secure the enquiry workflow.
3. Optimize the 53 MB video and the heaviest above-the-fold images.
4. Add production configuration, error handling, and essential security headers.

### Phase 2: User experience and discoverability (2–4 weeks)

1. Complete responsive, keyboard, screen-reader, and reduced-motion fixes.
2. Improve social metadata, structured data, sitemap, robots rules, and internal linking.
3. Simplify shared CSS/JS delivery and establish reusable components/design tokens.

### Phase 3: Sustainable operation (ongoing)

1. Move repeated content into a structured content source.
2. Add CI, browser tests, performance budgets, and link/status checks.
3. Add privacy-conscious analytics and run conversion improvements based on evidence.

## Release checklist

- [ ] `php tools/check-site.php` passes.
- [ ] No visible encoding corruption or placeholder content remains.
- [ ] Enquiry submissions, validation, spam controls, and failure states are tested.
- [ ] Mobile, keyboard, screen-reader, zoom, and reduced-motion checks pass.
- [ ] Lighthouse and page-weight budgets meet agreed targets.
- [ ] Canonicals, social previews, structured data, sitemap, and robots rules are verified on the production domain.
- [ ] HTTPS, security headers, error handling, privacy text, and consent behavior are verified.
- [ ] Contact details, health claims, prices, dates, and policies have owner approval.
- [ ] Backup and rollback procedures have been tested.

## Review note

This is a source-level assessment, not a substitute for testing the deployed site on real devices and networks. Re-prioritize after collecting production performance, accessibility, search, enquiry, and user-feedback data.
