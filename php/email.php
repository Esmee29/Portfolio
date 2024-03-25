<?php
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require_once __DIR__ . '/../vendor/autoload.php'; // Updated require_once statement

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '02b8b11cad76bf';
$phpmailer->Password = '6e928a183b4681';

$phpmailer->setFrom($email, $firstName . $lastName);
$phpmailer->addAddress('esmeefulcherdesign@gmail.com'); // Add a recipient

$phpmailer->Subject = $subject;
$phpmailer->Body = $firstName . ' ' . $lastName . ' ' . $message;

$phpmailer->send();

?>