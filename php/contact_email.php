<?php
$successMessage = ''; // Initialize success message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    require_once __DIR__ . '/../vendor/autoload.php'; // Updated require_once statement

    // Sending the email
    $phpmailer = new PHPMailer\PHPMailer\PHPMailer(); // Directly referencing PHPMailer class
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '02b8b11cad76bf';
    $phpmailer->Password = '6e928a183b4681';

    $phpmailer->setFrom($email, $firstName . ' ' . $lastName); // Fixed concatenation
    $phpmailer->addAddress('esmeefulcherdesign@gmail.com'); // Add a recipient

    $phpmailer->Subject = $subject;
    $phpmailer->Body = $firstName . ' ' . $lastName . ' ' . $message;

    try {
        $phpmailer->send();
        $successMessage = 'Message sent successfully.';
    } catch (Exception $e) {
        error_log('Message could not be sent. Mailer Error: ' . $phpmailer->ErrorInfo);
        $errorMessage = 'Message could not be sent. Please try again later.';
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

<script>
    // JavaScript for form submission and validation
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        var emailField = document.getElementById('email');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email regex pattern
        var validationMsgContainer = document.querySelector('.validation-msg-container');
        var errorMessage = '';

        validationMsgContainer.innerHTML = ''; // Clear previous error messages

        // Check if any input field is empty
        var inputs = this.querySelectorAll('input, textarea');
        for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].value.trim()) {
                errorMessage = 'Please fill in all fields.';
                break;
            }
        }

        // Check email validity
        if (!emailPattern.test(emailField.value)) {
            errorMessage = 'Please enter a valid email address.';
        }

        if (errorMessage) {
            validationMsgContainer.innerHTML = '<p class="error-msg">' + errorMessage + ' <button class="close-btn">&times;</button></p>';
            event.preventDefault(); // Prevent form submission
        } else {
            validationMsgContainer.innerHTML = ''; // Clear previous error messages
            // Display success message
            validationMsgContainer.innerHTML = '<p class="success-msg">Form submitted successfully!</p>';
        }
    });

    // JavaScript to handle closing error messages
    document.querySelector('.validation-msg-container').addEventListener('click', function(event) {
        if (event.target.classList.contains('close-btn')) {
            event.target.parentNode.remove(); // Remove the error message container
        }
    });
</script>
