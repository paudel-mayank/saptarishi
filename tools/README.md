# Site checks

Run the pre-release site audit from the project root:

```bash
php tools/check-site.php
```

The check validates:

- PHP syntax for public pages and shared includes
- clean rendering without PHP warnings or fatal errors
- unique page titles
- meta descriptions and canonical URLs
- exactly one `<h1>` per public page
- image alternative text and dimensions
- form-control labels
- duplicate HTML IDs
- local links, stylesheets, scripts, images, and other asset targets

The command exits with a non-zero status when a check fails, so it can be added to a deployment or continuous-integration workflow.
