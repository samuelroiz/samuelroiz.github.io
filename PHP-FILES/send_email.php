<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "pawsforalohas@gmail.com"; // Replace with your email
    $subject = "New Contact Request";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Headers
    $headers = "From: $email";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message!";
    }
}
?>