<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "ptech9936@gmail.com";
    $subject = "New Hire Me Message from Portfolio";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='services.html';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.'); window.location.href='services.html';</script>";
    }
} else {
    header('Location: services.html');
    exit();
}
?>
