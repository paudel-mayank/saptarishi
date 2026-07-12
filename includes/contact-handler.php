<?php

declare(strict_types=1);

require_once __DIR__ . '/site-config.php';

$contactErrors = [];
$contactValues = ['name' => '', 'email' => '', 'phone' => '', 'program' => '', 'dates' => '', 'message' => ''];

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    foreach (array_keys($contactValues) as $field) {
        $contactValues[$field] = trim((string) ($_POST[$field] ?? ''));
    }

    if (!hash_equals((string) $_SESSION['contact_csrf'], (string) ($_POST['csrf_token'] ?? ''))) {
        $contactErrors[] = 'Your session expired. Please refresh the page and try again.';
    }
    if ((string) ($_POST['website'] ?? '') !== '') {
        $contactErrors[] = 'Your message could not be submitted.';
    }
    if ((int) ($_SESSION['contact_last_submission'] ?? 0) > time() - 30) {
        $contactErrors[] = 'Please wait a moment before sending another message.';
    }
    if ($contactValues['name'] === '' || mb_strlen($contactValues['name']) > 100) {
        $contactErrors[] = 'Enter your full name (maximum 100 characters).';
    }
    if (!filter_var($contactValues['email'], FILTER_VALIDATE_EMAIL) || mb_strlen($contactValues['email']) > 254) {
        $contactErrors[] = 'Enter a valid email address.';
    }
    if ($contactValues['phone'] !== '' && !preg_match('/^[0-9+() .-]{7,30}$/', $contactValues['phone'])) {
        $contactErrors[] = 'Enter a valid phone number or leave it blank.';
    }
    if (mb_strlen($contactValues['message']) < 10 || mb_strlen($contactValues['message']) > 3000) {
        $contactErrors[] = 'Enter a message between 10 and 3,000 characters.';
    }
    if (!isset($_POST['consent'])) {
        $contactErrors[] = 'Please confirm that we may use your details to respond.';
    }

    if ($contactErrors === []) {
        $recipient = (string) (getenv('CONTACT_RECIPIENT') ?: 'info@takshasheela.com');
        $safeName = str_replace(["\r", "\n"], '', $contactValues['name']);
        $safeEmail = str_replace(["\r", "\n"], '', $contactValues['email']);
        $body = "Name: {$contactValues['name']}\nEmail: {$contactValues['email']}\nPhone: {$contactValues['phone']}\nProgram: {$contactValues['program']}\nPreferred dates: {$contactValues['dates']}\n\nMessage:\n{$contactValues['message']}";
        $headers = ['From: website@takshasheela.com', 'Reply-To: ' . $safeEmail, 'Content-Type: text/plain; charset=UTF-8'];

        if (@mail($recipient, 'Website enquiry from ' . $safeName, $body, implode("\r\n", $headers))) {
            $_SESSION['contact_last_submission'] = time();
            $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
            $_SESSION['contact_success'] = 'Thank you. Your enquiry has been sent and our team will respond shortly.';
            header('Location: contact-us.php?sent=1#contact', true, 303);
            exit;
        }
        $contactErrors[] = 'We could not send your message right now. Please email info@takshasheela.com or call us.';
    }
}

$contactSuccess = (string) ($_SESSION['contact_success'] ?? '');
unset($_SESSION['contact_success']);
