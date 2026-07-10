# Website Improvement Plan

This document outlines recommended improvements for the Takshasheela website. It is organized by priority so changes can be implemented safely and measured clearly.

## Goals

- Provide a consistent experience across all pages and screen sizes.
- Make navigation reliable, accessible, and easy to maintain.
- Improve page speed, search visibility, and content quality.
- Reduce duplicated code and prevent regressions.

## Priority 1: Navigation and Reliability

### 1. Consolidate shared headers

The navigation markup and styling are currently duplicated in `includes/header.php` and `includes/detailheader.php`.

Actions:

- Extract menu data and shared markup into one reusable PHP include.
- Keep only page-specific header classes and styling in each header.
- Move navigation CSS and JavaScript into dedicated external files.

Success criteria:

- A navigation change only needs to be made once.
- The same links, dropdown behavior, and styling appear on every page.

### 2. Improve dropdown behavior

Actions:

- Keep click-controlled nested dropdowns on desktop and mobile.
- Allow only one sibling branch to remain open at a time.
- Close menus when clicking outside or pressing `Escape`.
- Keep Packages and Services in fixed positions when their children open.
- Test all menu links before deployment.

Success criteria:

- Menus do not jump, overflow, or disappear during use.
- All controls work with a mouse, keyboard, and touchscreen.

### 3. Add active navigation states

Actions:

- Highlight the current page in the navbar.
- Highlight the parent section when viewing a nested page.
- Add `aria-current="page"` to the active link.

Success criteria:

- Visitors can immediately identify their current section.

### 4. Correct routes and naming

Actions:

- Rename `accomodations.php` and the visible label to “Accommodations.”
- Preserve the old URL with a redirect to avoid broken bookmarks.
- Add or replace the missing `find-retreat.php` route.
- Give each package and service a unique detail URL or identifier.

Success criteria:

- Automated link checks report no broken internal links.
- Every menu item opens its intended content.

## Priority 2: Responsive Design and Accessibility

### 5. Test responsive layouts

Test at minimum:

- 320px and 375px mobile widths
- 768px tablet width
- 1024px small laptop width
- 1366px standard desktop width
- 1920px large desktop width

Check navigation, banners, cards, images, forms, footer content, and horizontal overflow at every size.

Success criteria:

- No horizontal scrollbar appears unintentionally.
- Text remains readable and controls remain usable at every breakpoint.

### 6. Improve accessibility

Actions:

- Use semantic navigation lists and descriptive link labels.
- Add accurate `aria-expanded`, `aria-haspopup`, and `aria-current` states.
- Support `Tab`, `Shift+Tab`, `Enter`, `Space`, and `Escape` interactions.
- Add visible keyboard focus styles.
- Verify text and control color contrast.
- Ensure touch targets are at least 44 by 44 pixels.
- Add meaningful alternative text to informative images.
- Maintain a logical heading hierarchy on every page.

Success criteria:

- Navigation is usable without a mouse.
- Automated accessibility checks have no critical errors.

## Priority 3: Visual Consistency

### 7. Establish a small design system

Define reusable values for:

- Brand colors
- Typography and heading sizes
- Spacing increments
- Border radii
- Shadows
- Buttons and links
- Cards and form controls
- Animation duration and easing

Actions:

- Store design tokens as CSS custom properties.
- Replace repeated inline styles with reusable classes.
- Apply the same card, button, and heading patterns across all pages.

Success criteria:

- Similar components look and behave consistently.
- New sections can be built without copying large style blocks.

### 8. Refine content presentation

Actions:

- Ensure menu names match page titles.
- Standardize capitalization and terminology.
- Break long paragraphs into readable sections.
- Use consistent image ratios and card heights.
- Keep animations subtle and respect `prefers-reduced-motion`.

## Priority 4: Performance

### 9. Optimize images

Actions:

- Convert suitable images to WebP or AVIF.
- Provide responsive image sizes with `srcset` and `sizes`.
- Lazy-load below-the-fold images.
- Define image width and height to reduce layout shift.
- Compress images before deployment.

Success criteria:

- Pages load quickly on a typical mobile connection.
- Large layout shifts are eliminated.

### 10. Reduce frontend overhead

Actions:

- Remove duplicate Bootstrap Icons imports.
- Remove unused CSS and JavaScript.
- Minify production assets.
- Load non-critical scripts with `defer` where safe.
- Add cache-friendly versioning to local assets.
- Avoid large page-specific inline style blocks.

Success criteria:

- Lighthouse performance improves without visual regressions.
- Browser developer tools show no missing assets or console errors.

## Priority 5: SEO and Content Discovery

### 11. Add page-specific metadata

Each page should include:

- A unique and descriptive `<title>`
- A unique meta description
- A canonical URL
- Open Graph and social-sharing metadata
- A meaningful single `<h1>`

### 12. Add structured data

Consider relevant schema for:

- Organization
- Local business
- Accommodation
- Services
- Articles and news
- Breadcrumbs

Success criteria:

- Search-engine validation tools report valid metadata and schema.

## Priority 6: Maintainability and Testing

### 13. Improve PHP structure

Actions:

- Store navigation items in PHP arrays or configuration data.
- Render repeated components through shared includes or functions.
- Use `__DIR__` in includes for reliable filesystem paths.
- Keep filenames and include casing consistent for Linux servers.
- Separate page content, layout, styling, and behavior where practical.

### 14. Add automated checks

Recommended checks:

- PHP syntax validation for every PHP file
- Internal broken-link checking
- HTML validation
- Accessibility scanning
- Responsive browser screenshots
- Basic navigation interaction tests
- Lighthouse performance and SEO checks

Success criteria:

- Checks run before deployment.
- Navigation regressions and broken links are detected automatically.

## Suggested Implementation Order

1. Consolidate the two shared headers and navigation code.
2. Finalize accessible desktop and mobile dropdown behavior.
3. Correct filenames, missing routes, and detail-page links.
4. Move inline CSS and JavaScript into reusable assets.
5. Complete responsive and accessibility testing.
6. Optimize images and remove duplicate frontend dependencies.
7. Add page-specific metadata and structured data.
8. Introduce automated validation and regression checks.

## Completion Checklist

- [ ] One shared source controls all navigation links and nested items.
- [ ] Navigation works with mouse, keyboard, and touchscreen.
- [ ] Current pages and parent sections have active states.
- [ ] No internal links are broken.
- [ ] No unintended horizontal overflow exists.
- [ ] Page layouts work at all documented breakpoints.
- [ ] Critical accessibility issues are resolved.
- [ ] Inline and duplicated styles are reduced.
- [ ] Images are responsive and optimized.
- [ ] Every page has unique metadata and one meaningful `<h1>`.
- [ ] PHP, link, accessibility, and browser checks run before release.

## Recommended First Task

Start by extracting the duplicated navigation into one shared component. This provides the strongest foundation because every later menu, accessibility, styling, and link improvement can then be made once and applied across the entire site.
