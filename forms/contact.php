<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    echo 'Forbidden';
    exit;
}

$receiving_email_address = 'contact@surfux.com';

$php_email_form = __DIR__ . '/../assets/vendor/php-email-form/php-email-form.php';

if (!file_exists($php_email_form)) {
    http_response_code(500);
    echo 'PHP Email Form library not found';
    exit;
}

require_once $php_email_form;

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = trim($_POST['name'] ?? '');
$contact->from_email = trim($_POST['email'] ?? '');
$contact->subject = trim($_POST['subject'] ?? 'New Contact Message');

$contact->add_message($contact->from_name, 'From');
$contact->add_message($contact->from_email, 'Email');
$contact->add_message(trim($_POST['message'] ?? ''), 'Message', 10);

$result = $contact->send();

/**
 * AJAX response
 */
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    echo $result;
    exit;
}

/**
 * Fallback (NO white page)
 */
header("Location: /#contact?sent=1");
exit;
