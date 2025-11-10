<?php
// Basic sanitation
function field($key) { return trim(filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS)); }

$name    = field('name');
$phone   = field('phone');
$email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?: '';
$address = field('address');
$issue   = field('issue');
$message = field('message');

if (!$name || !$phone) {
  header("Location: /quantum/contact.php?error=1");
  exit;
}

// Log enquiries to a file (useful during local dev)
$log = __DIR__ . "/enquiries.log";
$line = date('c') . " | $name | $phone | $email | $address | $issue | " . preg_replace('/\s+/', ' ', $message) . PHP_EOL;
file_put_contents($log, $line, FILE_APPEND);

// OPTIONAL: email (configure SMTP in XAMPP sendmail or use a provider)
$send_email = false; // set to true after configuring SMTP
if ($send_email) {
  $to      = "info@quantumpest.in";
  $subject = "New Enquiry from $name ($issue)";
  $body    = "Name: $name\nPhone: $phone\nEmail: $email\nAddress: $address\nIssue: $issue\n\nMessage:\n$message";
  @mail($to, $subject, $body, "From: noreply@localhost");
}

header("Location: /quantum/contact.php?success=1");
