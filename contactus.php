<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['text'];


$to = 'mail@pixelblenders.com';
$message = 'Name: '.$name."\r\n".'Email: '.$email."\r\n".'Message: '.$message."\r\n";
$headers = 'From: noreply@cara-cafe.com' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "\r\nThank you. We will be in touch!"; // success message
}else{
echo "\r\nInvalid Email, please provide a correct email id.";
}

?>
