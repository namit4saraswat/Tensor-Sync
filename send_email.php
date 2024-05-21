<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "namit.and.saraswat@gmail.com"; // Replace with your email address
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
