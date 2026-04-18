<?php
// QP-26: Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required. <a href='index.php'>Go back</a>";
    } else {
        // QP-27: Simulate success and redirect
        header("Location: thank-you.html");
        exit();
    }
}
?>