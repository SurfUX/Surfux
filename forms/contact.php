<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    exit('Forbidden');
}

$receiving_email_address = 'contact@surfux.com';

$php_email_form = __DIR__ . '/../assets/vendor/php-email-form/php-email-form.php';

if (!file_exists($php_email_form)) {
    http_response_code(500);
    exit('PHP Email Form library not found');
}

require_once $php_email_form;

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'] ?? '';
$contact->from_email = $_POST['email'] ?? '';
$contact->subject = $_POST['subject'] ?? 'Contact Form';

$contact->add_message($_POST['name'] ?? '', 'From');
$contact->add_message($_POST['email'] ?? '', 'Email');
$contact->add_message($_POST['message'] ?? '', 'Message', 10);

echo $contact->send();
