<?php
// Retrieve form data
$name = $_POST['name'];
$address = $_POST['address'];
$nic = $_POST['nic'];
$contact = $_POST['contact'];
$floatingTextarea = $_POST['floatingTextarea'];

// Format email message
$message = "Name: $name\nAddress: $address\nNIC Number: $nic\nContact Number: $contact\nFloatingTextarea: $floatingTextarea";

// Send email
$to = 'saannimesh@gmail.com';
$subject = 'New Wish list Submission';
$headers = 'From: noreply@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>