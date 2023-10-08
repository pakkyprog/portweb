<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $contact_number = $_POST["contact-number"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to_email = "francepatrickpoon@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $message_body = "First Name: $first_name\nLast Name: $last_name\nContact Number: $contact_number\nEmail: $email\n\n$message";

    // Send the email
    mail($to_email, $subject, $message_body);

    // Redirect back to the Home Page (replace "index.html" with your actual home page URL)
    header("Location: index.html");
    exit();
}
?>
