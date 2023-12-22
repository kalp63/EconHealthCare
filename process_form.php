<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kalp14112000@gmail.ocm"; // Change this to your email address
    $subject = "New Job Application Form Submission";

    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Age: " . $_POST["age"] . "\n";
    // Add other form fields as needed

    $headers = "From: " . $_POST["email"] . "\r\n";

    mail($to, $subject, $message, $headers);

    
}
?>
