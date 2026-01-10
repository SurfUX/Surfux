<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /#contact?error=invalid");
    exit;
}

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

$to = "contact@surfux.com";

$headers  = "From: SurfUX Website <contact@surfux.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

$body =
"You have received a new message from SurfUX website\n\n".
"Name: $name\n".
"Email: $email\n".
"Subject: $subject\n\n".
"Message:\n$message\n";

header('Content-Type: application/json');

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
exit;
