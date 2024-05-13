<?php

use PHPMailer\PHPMailer\PHPMailer;

$msg = '';
if (array_key_exists('email', $_POST)) {
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@esmeefulcher.co.uk';
    $mail->Password = 'My$tr0ngPa55w0rd!';
    $mail->setFrom('contact@esmeefulcher.co.uk', 'Esmee Fulcher');
    $mail->addAddress($_POST['email'], $_POST['name']);
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject =   $_POST['subject'] ?? '';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Email: {$_POST['email']}
            Name: {$_POST['name']}
            Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
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