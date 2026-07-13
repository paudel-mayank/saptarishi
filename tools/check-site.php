<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$pages = array_values(array_filter(glob($root . '/*.php') ?: [], static function (string $file): bool {
    return !in_array(basename($file), ['accomodations.php', 'service-detailA.php'], true);
}));
$errors = [];
$titles = [];

foreach (array_merge($pages, glob($root . '/includes/*.php') ?: []) as $phpFile) {
    $source = (string) file_get_contents($phpFile);
    foreach (["\xC3\xA2\xE2\x82\xAC", "\xC3\x83", "\xEF\xBF\xBD"] as $badEncoding) {
        if (str_contains($source, $badEncoding)) {
            $errors[] = basename($phpFile) . ': contains likely corrupted text encoding.';
            break;
        }
    }
    exec('php -l ' . escapeshellarg($phpFile), $lintOutput, $lintCode);
    if ($lintCode !== 0) {
        $errors[] = basename($phpFile) . ': PHP syntax validation failed.';
    }
    $lintOutput = [];
}

$heroVideo = $root . '/assets/Homepage-big-page-video-final-.mp4';
if (is_file($heroVideo) && filesize($heroVideo) > 60 * 1024 * 1024) {
    $errors[] = 'Homepage hero video exceeds the 60 MB temporary performance budget.';
}

foreach (array_merge(glob($root . '/assets/*.{jpg,jpeg,png,webp}', GLOB_BRACE) ?: [], glob($root . '/sites/default/files/*/*.{jpg,jpeg,png,webp}', GLOB_BRACE) ?: []) as $imageFile) {
    if (filesize($imageFile) > 5 * 1024 * 1024) {
        $errors[] = str_replace($root . '/', '', $imageFile) . ': image exceeds the 5 MB performance budget.';
    }
}

foreach ($pages as $page) {
    $pageName = basename($page);
    $command = 'cd ' . escapeshellarg($root) . ' && php ' . escapeshellarg($pageName);
    exec($command . ' 2>&1', $renderLines, $renderCode);
    $html = implode("\n", $renderLines);
    $renderLines = [];

    if ($renderCode !== 0 || str_contains($html, 'PHP Warning') || str_contains($html, 'PHP Fatal')) {
        $errors[] = $pageName . ': page did not render cleanly.';
        continue;
    }

    if (!class_exists('DOMDocument')) {
        continue;
    }

    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    $document->loadHTML($html);
    libxml_clear_errors();
    $xpath = new DOMXPath($document);

    if ($xpath->query('//title')->length !== 1) {
        $errors[] = $pageName . ': expected exactly one title element.';
    } else {
        $title = trim($xpath->query('//title')->item(0)->textContent);
        if (isset($titles[$title])) {
            $errors[] = $pageName . ': duplicate page title also used by ' . $titles[$title] . '.';
        }
        $titles[$title] = $pageName;
    }
    if ($xpath->query('//meta[@name="description" and normalize-space(@content) != ""]')->length !== 1) {
        $errors[] = $pageName . ': missing a non-empty meta description.';
    }
    if ($xpath->query('//link[@rel="canonical" and normalize-space(@href) != ""]')->length !== 1) {
        $errors[] = $pageName . ': missing a canonical URL.';
    }
    if ($xpath->query('//h1')->length !== 1) {
        $errors[] = $pageName . ': expected exactly one h1, found ' . $xpath->query('//h1')->length . '.';
    }

    foreach ($xpath->query('//img') as $image) {
        if (!$image->hasAttribute('alt')) {
            $errors[] = $pageName . ': image missing alt attribute (' . $image->getAttribute('src') . ').';
        }
        if (!$image->hasAttribute('width') || !$image->hasAttribute('height')) {
            $errors[] = $pageName . ': image missing width or height (' . $image->getAttribute('src') . ').';
        }
    }

    foreach ($xpath->query('//input[not(@type="hidden")] | //textarea | //select') as $control) {
        $id = $control->getAttribute('id');
        $hasLabel = $id !== '' && $xpath->query('//label[@for="' . $id . '"]')->length > 0;
        $hasAccessibleName = $hasLabel || $control->hasAttribute('aria-label') || $control->hasAttribute('aria-labelledby');
        if (!$hasAccessibleName && $control->getAttribute('type') !== 'submit') {
            $errors[] = $pageName . ': form control is missing an accessible label.';
        }
    }

    $ids = [];
    foreach ($xpath->query('//*[@id]') as $element) {
        $id = $element->getAttribute('id');
        if ($id !== '' && isset($ids[$id])) {
            $errors[] = $pageName . ': duplicate id "' . $id . '".';
        }
        $ids[$id] = true;
    }

    foreach ($xpath->query('//*[@href or @src]') as $element) {
        $attribute = $element->hasAttribute('href') ? 'href' : 'src';
        $url = trim($element->getAttribute($attribute));
        if ($url === '' || $url[0] === '#' || preg_match('~^(?:https?:|mailto:|tel:|data:|javascript:)~i', $url)) {
            continue;
        }

        $path = rawurldecode((string) parse_url($url, PHP_URL_PATH));
        $path = ltrim($path, '/');
        if ($path === '' || str_contains($path, '..')) {
            continue;
        }
        if (!file_exists($root . '/' . $path)) {
            $errors[] = $pageName . ': missing local target "' . $path . '".';
        }
    }
}

if ($errors !== []) {
    fwrite(STDERR, "Site checks failed:\n- " . implode("\n- ", array_values(array_unique($errors))) . "\n");
    exit(1);
}

echo 'Site checks passed for ' . count($pages) . " public PHP pages.\n";
