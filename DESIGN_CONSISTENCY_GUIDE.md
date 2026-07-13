# Design Consistency Guide

## Purpose

This document defines how to make the Saptarishi/Takshasheela website feel like one cohesive product. The project already contains strong individual sections, but pages currently use different typography, spacing, heroes, cards, buttons, and local CSS rules.

The goal is to standardize the visual language without redesigning every page from scratch.

## Current Challenges

### Fragmented CSS

The project has approximately 700 KB of theme CSS across these files:

- `themes/custom/pathretreats/css/style1e7c.css`
- `themes/custom/pathretreats/css/theme1e7c.css`
- `themes/custom/pathretreats/css/custom1e7c.css`

Many PHP pages also contain their own `<style>` blocks or inline `style` attributes. This makes styles difficult to reuse and creates cascade conflicts.

### Inconsistent page heroes

Hero sections vary between pages:

- News uses a heading weight of `600` and a maximum size of `2.75rem`.
- Gallery and Our Approach use headings up to `3rem` with different weight behavior.
- Packages and Services use the older `.inner-banner` structure.
- Contact does not use the same hero treatment as the other inner pages.

### Inconsistent component styling

Examples include:

- Event cards with square corners.
- Gallery cards with a `24px` radius.
- Approach cards with a `22px` radius.
- Contact cards using Bootstrap `rounded-4`.
- Multiple unrelated button and link styles.
- Several similar cream, grey, dark, and green color values.

### Broad page-level selectors

Some page styles use selectors that are too broad. For example, `ourapproach.php` changes the global `.container` class. A rule like this can unintentionally affect the header, footer, and shared components.

### Brand and content inconsistencies

Some content still references Path Retreats, Bali, or placeholder contact information, while other pages use Saptarishi or Takshasheela and Kathmandu. Consistent branding is part of a coherent design experience.

## Proposed Design System

### Colors

Use a small shared palette instead of defining similar colors on individual pages.

```css
:root {
  --color-primary: #91cc33;
  --color-primary-dark: #6bae00;
  --color-heading: #223745;
  --color-body: #2f2f2f;
  --color-muted: #6f6f6f;
  --color-background: #f9f8f5;
  --color-surface: #ffffff;
  --color-border: rgba(34, 55, 69, 0.12);
}
```

Avoid introducing new hex values unless they represent a genuinely different design role.

### Typography

Use each font for a specific purpose:

| Role | Font | Weight |
| --- | --- | --- |
| Hero and section headings | Libre Caslon Display | 400 |
| Card headings | Libre Caslon Display | 400 |
| Body copy | Roboto Flex | 300 or 400 |
| Labels, tags, and buttons | Lexend | 500 |

Recommended responsive scale:

```css
:root {
  --text-xs: 0.75rem;
  --text-sm: 0.875rem;
  --text-base: 1rem;
  --text-lg: 1.125rem;
  --heading-card: clamp(1.125rem, 1.5vw, 1.375rem);
  --heading-section: clamp(2rem, 4vw, 3.5rem);
  --heading-hero: clamp(2.5rem, 6vw, 4.75rem);
}
```

Do not use Bootstrap classes such as `fw-bold` on primary headings unless the design system explicitly calls for a bold heading.

### Spacing

Use a predictable spacing scale:

```css
:root {
  --space-1: 0.5rem;  /* 8px */
  --space-2: 0.75rem; /* 12px */
  --space-3: 1rem;    /* 16px */
  --space-4: 1.5rem;  /* 24px */
  --space-5: 2rem;    /* 32px */
  --space-6: 3rem;    /* 48px */
  --space-7: 4rem;    /* 64px */
  --space-8: 6rem;    /* 96px */
}
```

Recommended usage:

- Card padding: `24px`.
- Grid gap: `24px`.
- Mobile section spacing: `48px`.
- Desktop section spacing: `64px` to `96px`.
- Heading-to-description spacing: `12px` to `16px`.

### Containers

Use one shared container and keep page-specific rules scoped.

```css
.site-container {
  width: min(100% - 40px, 1200px);
  margin-inline: auto;
}
```

Do not redefine Bootstrap's `.container` inside individual pages. Use names such as `.approach-container` only when a section genuinely needs a different layout.

### Border Radius and Shadows

Use a limited radius and shadow system:

```css
:root {
  --radius-control: 6px;
  --radius-card: 12px;
  --radius-feature: 16px;
  --shadow-card: 0 12px 32px rgba(34, 55, 69, 0.08);
  --shadow-card-hover: 0 18px 42px rgba(34, 55, 69, 0.12);
}
```

- Form controls and buttons: `6px`.
- Standard cards: `12px`.
- Large feature panels: `16px`.
- Avoid mixing `22px`, `24px`, Bootstrap radii, and square cards without a clear reason.

## Shared Components

### Page Hero

Every inner page should use the same hero structure.

```html
<section class="page-hero">
  <div class="site-container page-hero__content">
    <p class="eyebrow">Section label</p>
    <h1>Page title</h1>
    <p class="page-hero__description">A short supporting description.</p>
  </div>
</section>
```

The shared hero should define:

- One desktop and mobile minimum height.
- One overlay treatment.
- Consistent heading weight and responsive size.
- A maximum description width of approximately `720px`.
- Consistent alignment and vertical spacing.

Pages to migrate include News and Events, Gallery, Our Approach, Teams, Packages, Services, and Contact.

### Section Heading

Use one heading pattern across content sections:

```html
<header class="section-heading">
  <p class="eyebrow">Upcoming</p>
  <h2>Events &amp; Retreats</h2>
  <p class="section-heading__description">Optional supporting copy.</p>
</header>
```

Section labels should use Lexend at weight `500`. Section headings should use Libre Caslon Display at weight `400`.

### Buttons

Create four reusable variants:

- `.button.button--primary`
- `.button.button--secondary`
- `.button.button--outline`
- `.text-link`

All buttons should share:

- Font family and weight.
- Minimum height.
- Horizontal padding.
- Border radius.
- Hover, focus, active, and disabled states.
- Visible keyboard focus styling.

Remove inline background colors and replace custom classes such as `.ev-register`, `.button-contact`, and isolated Bootstrap button styling where possible.

### Cards

Use a shared base card with optional variants:

```css
.card {
  overflow: hidden;
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-card);
}
```

Shared card rules should cover:

- Internal padding.
- Heading hierarchy.
- Body-copy weight and line height.
- Image aspect ratio.
- Metadata styling.
- Footer alignment.
- Hover behavior.

Event, package, service, team, approach, blog, and gallery cards can extend the base card rather than defining unrelated visual treatments.

### Forms

Standardize form controls across contact, newsletter, enquiry, and booking forms:

- Labels above controls.
- Consistent control height and padding.
- Shared border and radius.
- Clear focus and error states.
- Consistent required-field treatment.
- Matching primary submit buttons.

## Image Standards

Use consistent aspect ratios:

| Image role | Ratio |
| --- | --- |
| Page hero | 16:7 |
| Featured card | 16:9 |
| Standard card | 4:3 |
| Team portrait | 1:1 |
| Gallery card | 4:3 or 3:4, selected intentionally |

Apply `object-fit: cover` and consistent image positioning. Use one overlay treatment for text placed over images.

## Responsive Standards

Use shared breakpoints instead of creating unrelated media queries per component:

```css
:root {
  --breakpoint-sm: 480px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 1024px;
  --breakpoint-xl: 1200px;
}
```

At smaller widths:

- Reduce section padding consistently.
- Collapse multi-column layouts to one column.
- Keep buttons comfortably tappable.
- Avoid heading sizes below the defined type scale.
- Maintain at least `16px` horizontal page padding.

## Header and Footer

All pages should use the same header and footer implementations. Review the current use of both `header.php` and `detailheader.php`, then consolidate shared navigation behavior and styling.

The global header and footer should not be affected by page-specific CSS.

## Content and Brand Cleanup

Confirm and standardize:

- The official name: Saptarishi, Takshasheela, or the approved full brand name.
- The official location.
- Contact email and phone number.
- Address information.
- Spelling of the brand throughout headings, metadata, and image alternative text.
- Button terminology such as “Learn More,” “View Details,” and “Explore.”

Remove remaining Path Retreats, Bali, and placeholder content when those references are no longer valid.

## Implementation Plan

Implementation status was last updated on 13 July 2026. Completed items below are now represented in the codebase; unchecked items remain follow-up cleanup work.

### Phase 1: Foundation

- [ ] Confirm the approved brand name and primary visual direction.
- [x] Add shared color, typography, spacing, radius, and shadow tokens.
- [x] Create a dedicated shared components stylesheet.
- [x] Scope broad page-level CSS selectors.
- [ ] Remove duplicate or conflicting global definitions.

### Phase 2: High-impact components

- [x] Build one reusable page hero.
- [x] Build one reusable section-heading pattern.
- [x] Standardize buttons and text links.
- [x] Standardize the base card.
- [x] Standardize form controls.

### Phase 3: Page migration

- [x] Homepage.
- [x] Packages and package details.
- [x] Services and service details.
- [x] News and events pages.
- [x] Gallery, Teams, Our Approach, and About pages.
- [x] Contact page.
- [ ] Blog listing and blog details.
- [ ] Legal and utility pages.

### Phase 4: Cleanup and verification

- [ ] Remove obsolete inline styles.
- [ ] Remove unused or duplicated CSS.
- [x] Verify representative desktop and mobile layouts.
- [x] Add consistent keyboard focus and reduced-motion behavior.
- [ ] Check image dimensions and aspect ratios.
- [x] Correct known Takshasheela spelling and Contact page location inconsistencies.
- [x] Run PHP syntax checks and representative visual rendering checks.

## Recommended Order of Work

For the largest improvement with the least rework:

1. Establish shared design tokens.
2. Standardize typography and containers.
3. Build the shared hero.
4. Build shared buttons and cards.
5. Apply the system to the homepage and one inner page.
6. Review the result before migrating the remaining pages.
7. Remove old inline and duplicate styles after migration.

## Definition of Done

The design-consistency work is complete when:

- Equivalent elements look and behave the same across pages.
- Headings follow one responsive type scale.
- Section spacing follows one shared scale.
- Cards and buttons use documented variants.
- Inner pages use the same hero component.
- Page-specific styles cannot unintentionally change global components.
- Desktop and mobile layouts maintain the same visual hierarchy.
- Brand names and contact information are consistent throughout the site.
