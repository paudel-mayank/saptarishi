# Takshasheela Ayurveda Aashram website

PHP website for Takshasheela's wellness programs, services, accommodation, articles, and enquiries.

## Requirements

- PHP 8.1 or newer with DOM and mbstring extensions
- Apache (XAMPP is suitable for local development)
- A configured PHP mail transport for contact-form delivery

## Local setup

1. Place the project at `C:\xampp\htdocs\saptarishi`.
2. Start Apache from XAMPP.
3. Set `SITE_URL` to the local base URL and `CONTACT_RECIPIENT` to a safe test inbox in the Apache environment. See `.env.example` for names; PHP does not load that file automatically.
4. Open `http://localhost/saptarishi/index.php`.

For Apache, environment values can be supplied in the virtual-host configuration with `SetEnv SITE_URL ...` and `SetEnv CONTACT_RECIPIENT ...`. Do not commit credentials or production secrets.

## Validation

Run from the project root:

```powershell
php tools/check-site.php
```

The audit checks PHP rendering, metadata, headings, accessible form labels, local links, common text-encoding corruption, and temporary media-size budgets.

Before release, also test the contact form with the production mail transport, keyboard navigation, a screen reader, responsive layouts, cookie choices, social previews, and Lighthouse on a throttled mobile profile.

## Content editing

- Shared metadata and production URL logic: `includes/site-config.php`
- Shared navigation and document head: `includes/header.php`
- Shared footer and scripts: `includes/footer.php`
- Contact processing: `includes/contact-handler.php`
- Page content: root-level PHP files

Verify contact details, program claims, dates, prices, practitioner credentials, testimonials, and policies with the business owner before publishing.

## Deployment and rollback

1. Back up the current application and any server configuration.
2. Deploy to a staging URL over HTTPS and set its environment values.
3. Run the automated audit and complete the manual release checklist in `WEBSITE_IMPROVEMENT_PLAN.md`.
4. Deploy the reviewed revision to production, purge caches, and smoke-test core pages and enquiry delivery.
5. Roll back by restoring the previous reviewed release and configuration; do not overwrite user data or logs.

Static assets should be served with compression and long-lived caching when their filenames are versioned. PHP errors should be logged server-side and hidden from public responses in production.
