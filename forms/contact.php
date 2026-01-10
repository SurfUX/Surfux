<?php
// Show errors during testing (disable in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /#contact?error=invalid");
    exit;
}

// Sanitize input
function clean($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

$name    = clean($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$subject = clean($_POST['subject'] ?? '');
$message = clean($_POST['message'] ?? '');

if (!$name || !$email || !$subject || !$message) {
    header("Location: /#contact?error=empty");
    exit;
}

// Email settings
$to = "contact@surfux.com"; // CHANGE IF NEEDED
$headers  = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

// Email body
$body = "You have received a new message from SurfUX website\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    header("Location: /#contact?sent=1");
    exit;
} else {
    header("Location: /#contact?error=mail");
    exit;
}
