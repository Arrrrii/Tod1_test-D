<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$recipient = 'aryan.102413@gmail.com'; 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = 'New Message from Contact Form';
$headers = "From: $name <$email>";

if (mail($recipient, $subject, $message, $headers)) {
echo 'Your message has been sent successfully.';
} else {
echo 'Sorry, there was an error sending your message. Please try again later.';
}
}
?>
Make sure to replace 'person@example.com' with the actual email address of the person you want to contact.

When the user submits the form, the PHP code in send_email.php will handle the form data and attempt to send an email to the specified recipient. It will display a success or error message based on the result.

To run this code, you would need to set up a server environment with PHP support and ensure that the server is properly configured to send emails.


