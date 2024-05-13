<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
$successMessage = ''; // Initialize success message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    require 'vendor/autoload.php';
}
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@esmeefulcher.co.uk';                     //SMTP username
    $mail->Password   = 'WebsiteEmail29!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $firstName . ' ' . $lastName);
    $mail->addAddress('contact@esmeefulcher.co.uk', 'Esmee');;

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $firstName . ' ' . $lastName . ' ' . $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<!-- Contact Form -->
<div class="contact-container" id="contact">
    <div class="get-in-touch">
        <h3>Get In Touch</h3>
    </div>
    <div class="validation-msg-container"></div>
    <form method="post" action="" id="contact-form" novalidate>
        <label for="first-name">First Name</label>
        <input type="text" name="first-name" id="first-name" placeholder="First Name" value="" required>

        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" id="last-name" placeholder="Last Name" value="" required>

        <label for="email">Email</label>
        <input class="email" type="email" name="email" id="email" placeholder="Email *" value="" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Subject *" value="" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="Message *" value="" required></textarea>

        <button class="button-fill-submit" type="submit" id="submit-btn">Submit</button>
    </form>
</div>