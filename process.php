<?php
// process.php — QuickPOS Contact Form Handler
 
// ── 1. Only accept POST requests ──────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
 
// ── 2. Collect & sanitize inputs ──────────────────────────
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim($_POST['message'] ?? '');
 
$errors = [];
 
// ── 3. Validate empty fields ──────────────────────────────
if ($name === '') {
    $errors[] = 'Name is required.';
}
 
if ($email === '') {
    $errors[] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}
 
if ($message === '') {
    $errors[] = 'Message is required.';
}
 
// ── 4. If validation fails, go back with errors ───────────
if (!empty($errors)) {
    // Store errors in session and redirect back to the form
    session_start();
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data']   = compact('name', 'email', 'message');
    header('Location: index.php#contact');
    exit;
}
 
// ── 5. Simulate success (no real email sent) ──────────────
//
//  In a real deployment you would send an email here, e.g.:
//
//  $to      = 'hello@quickpos.io';
//  $subject = 'New Contact Form Submission from ' . htmlspecialchars($name);
//  $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
//  $headers = "From: noreply@quickpos.io\r\nReply-To: $email";
//  mail($to, $subject, $body, $headers);
//
//  For now we simply simulate a successful submission:
 
$success = true;
 
// ── 6. Redirect to thank-you page ────────────────────────
if ($success) {
    header('Location: thank-you.html');
    exit;
}
?>