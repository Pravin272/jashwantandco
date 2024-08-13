<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


// Debug output
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Phone: $phone<br>";
echo "Message: $message<br>";
// WhatsApp API endpoint and credentials
$api_url = 'https://api.whatsapp.com/send?phone=+919942829445&text='; // Replace XXXXXXXXXX with your WhatsApp number
$api_message = urlencode("New lead salaamcola.in:\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message");

// Send WhatsApp message
header("Location: $api_url$api_message");
exit;
?>
