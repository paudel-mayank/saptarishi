<?php

declare(strict_types=1);

$sitePages = [
    'index.php' => ['title' => 'Takshasheela Ayurveda Aashram | Nature Heals — We Guide', 'description' => 'Discover authentic Ayurvedic healing, wellness retreats, therapies, and peaceful accommodation at Takshasheela Ayurveda Aashram.'],
    'about-us.php' => ['title' => 'About Takshasheela Ayurveda Aashram', 'description' => 'Learn about Takshasheela Ayurveda Aashram, our values, healing philosophy, and commitment to authentic Ayurvedic wellbeing.'],
    'aboutayurveda.php' => ['title' => 'About Ayurveda | Takshasheela', 'description' => 'Explore the timeless principles of Ayurveda and how they support balance, prevention, healing, and long-term wellbeing.'],
    'ourteams.php' => ['title' => 'Our Team | Takshasheela', 'description' => 'Meet the compassionate Ayurvedic practitioners and wellness professionals guiding guests at Takshasheela.'],
    'ourapproach.php' => ['title' => 'Our Healing Approach | Takshasheela', 'description' => 'Understand Takshasheela’s personalized, nature-led approach to Ayurvedic healing and sustainable wellbeing.'],
    'packages.php' => ['title' => 'Ayurvedic Wellness Packages | Takshasheela', 'description' => 'Explore rejuvenation, wellness immersion, and mind-body balance retreat packages at Takshasheela.'],
    'package-detail.php' => ['title' => 'Ayurvedic Retreat Package | Takshasheela', 'description' => 'Review the inclusions, experience, accommodation, and booking details for a Takshasheela Ayurvedic retreat package.'],
    'services.php' => ['title' => 'Ayurvedic Healing Services | Takshasheela', 'description' => 'Explore Panchakarma, detox, wellness, and personalized Ayurvedic healing services at Takshasheela.'],
    'service-detail.php' => ['title' => 'Ayurvedic Therapy Service | Takshasheela', 'description' => 'Learn about Takshasheela’s personalized Ayurvedic therapy, its benefits, inclusions, and healing approach.'],
    'accommodations.php' => ['title' => 'Accommodation | Takshasheela', 'description' => 'Explore comfortable, peaceful rooms designed to support rest and rejuvenation during your Takshasheela stay.'],
    'accomodations.php' => ['title' => 'Accommodation | Takshasheela', 'description' => 'Explore comfortable, peaceful rooms designed to support rest and rejuvenation during your Takshasheela stay.'],
    'blog.php' => ['title' => 'Wellness Blog | Takshasheela', 'description' => 'Read Ayurvedic guidance, healing insights, and practical wellness articles from Takshasheela.'],
    'blog-detail.php' => ['title' => 'Ayurvedic Wellness Article | Takshasheela', 'description' => 'Read a wellness and Ayurvedic healing article from Takshasheela Ayurveda Aashram.'],
    'newsandevents.php' => ['title' => 'News and Events | Takshasheela', 'description' => 'Discover the latest news, workshops, retreats, and events from Takshasheela Ayurveda Aashram.'],
    'news-events-details.php' => ['title' => 'News and Event Details | Takshasheela', 'description' => 'View details about a Takshasheela Ayurveda Aashram news item, workshop, retreat, or event.'],
    'testimonials.php' => ['title' => 'Guest Testimonials | Takshasheela', 'description' => 'Read stories of healing, renewal, and lasting wellbeing shared by Takshasheela guests.'],
    'gallery.php' => ['title' => 'Gallery | Takshasheela', 'description' => 'Explore moments of healing, serenity, nature, accommodation, and community at Takshasheela.'],
    'contact-us.php' => ['title' => 'Contact Takshasheela Ayurveda Aashram', 'description' => 'Contact Takshasheela to ask a question, plan a retreat, or learn more about our Ayurvedic wellness programs.'],
    'find-retreat.php' => ['title' => 'Find a Wellness Program | Takshasheela', 'description' => 'Compare Takshasheela wellness packages and Ayurvedic healing services to find the right program for your needs.'],
    'privacy-policy.php' => ['title' => 'Privacy Policy | Takshasheela', 'description' => 'Read how Takshasheela handles personal information submitted through this website.'],
    'cookies.php' => ['title' => 'Cookie Information | Takshasheela', 'description' => 'Learn how cookies and related technologies may be used on the Takshasheela website.'],
];

$currentPage = basename((string) ($_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? 'index.php'));
if ($currentPage === '' || !str_ends_with($currentPage, '.php')) {
    $currentPage = 'index.php';
}

$pageMeta = $sitePages[$currentPage] ?? [
    'title' => 'Takshasheela Ayurveda Aashram',
    'description' => 'Authentic Ayurvedic healing, personalized wellness programs, and restorative retreats at Takshasheela Ayurveda Aashram.',
];

$detailMeta = [
    'program' => [
        'panchakarma-rejuvenation' => ['title' => 'Panchakarma Rejuvenation Package | Takshasheela', 'description' => 'Explore the Panchakarma Rejuvenation retreat package at Takshasheela Ayurveda Aashram.'],
        'ayurvedic-wellness-immersion' => ['title' => 'Ayurvedic Wellness Immersion | Takshasheela', 'description' => 'Explore an immersive Ayurvedic wellness retreat package at Takshasheela Ayurveda Aashram.'],
        'mind-body-balance' => ['title' => 'Mind–Body Balance Retreat | Takshasheela', 'description' => 'Explore the restorative Mind–Body Balance retreat package at Takshasheela Ayurveda Aashram.'],
    ],
    'service' => [
        'panchakarma-detox' => ['title' => 'Panchakarma and Detox Therapy | Takshasheela', 'description' => 'Learn about Panchakarma and detox therapy at Takshasheela Ayurveda Aashram.'],
        'ayurvedic-wellness' => ['title' => 'Ayurvedic Wellness Service | Takshasheela', 'description' => 'Learn about personalized Ayurvedic wellness services at Takshasheela Ayurveda Aashram.'],
        'personalized-healing' => ['title' => 'Personalized Healing Program | Takshasheela', 'description' => 'Learn about personalized Ayurvedic healing programs at Takshasheela Ayurveda Aashram.'],
    ],
];

foreach ($detailMeta as $queryKey => $items) {
    $queryValue = (string) ($_GET[$queryKey] ?? '');
    if (isset($items[$queryValue])) {
        $pageMeta = $items[$queryValue];
        break;
    }
}

$isHomeHeader = $isHomeHeader ?? ($currentPage === 'index.php');
$requestScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$requestHost = preg_replace('/[^A-Za-z0-9.:-]/', '', (string) ($_SERVER['HTTP_HOST'] ?? 'localhost'));
$canonicalQuery = '';
foreach (['program', 'service'] as $queryKey) {
    if (isset($_GET[$queryKey]) && preg_match('/^[a-z0-9-]+$/', (string) $_GET[$queryKey])) {
        $canonicalQuery = '?' . $queryKey . '=' . rawurlencode((string) $_GET[$queryKey]);
        break;
    }
}
$canonicalUrl = $requestScheme . '://' . $requestHost . '/' . rawurlencode($currentPage) . $canonicalQuery;

function nav_is_active(array $pages): bool
{
    global $currentPage;
    return in_array($currentPage, $pages, true);
}

function nav_link_attributes(array $pages): string
{
    return nav_is_active($pages) ? ' active" aria-current="page' : '';
}

function detail_link_attributes(string $page, string $queryKey, string $queryValue): string
{
    global $currentPage;
    $isActive = $currentPage === $page && (string) ($_GET[$queryKey] ?? '') === $queryValue;
    return $isActive ? ' active" aria-current="page' : '';
}
