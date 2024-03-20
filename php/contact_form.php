<?php
// Load environment variables
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'db.env');
$dotenv->load();

// Initialize $successMessage
$successMessage = '';

require_once 'php/controllers/DatabaseController.php'; 
require_once 'php/controllers/ContactController.php'; 

$formPosted = $formInPost = $formValid = false;
$errorMessage = '';

try {
    // Provide the required database connection details
    $host = $_ENV['MySQL_DB_HOST'];
    $dbname = $_ENV['MySQL_DB_NAME'];
    $dbusername = $_ENV['MySQL_DB_USER_NAME'];
    $dbpassword = $_ENV['MySQL_DB_PASSWORD'];

    // Instantiate the DatabaseController with the provided details
    $db = new DatabaseController($host, $dbusername, $dbpassword, $dbname);

    // Connect to the database
    $db->connect();
    // Instantiate the ContactUsController with the DatabaseController
    $formController = new ContactUsController($db);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formInPost = true;
        $formPosted = $formController->send();
        $formValid = true;
        $formInPost = false;
        $errorMessage = '';

        // Check if the form was submitted successfully
        if ($formPosted) {
            $successMessage = 'Form submitted successfully!';
        }
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo "<script defer>console.log('Error: " . $errorMessage . "');</script>";
}
?>
<!--Contact Form-->
<div class="contact-container" id="contact">
        <div class="get-in-touch">
            <h3>Get In Touch</h3>
        </div>
                    <form id="form" class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="validation-msg-container"></div>

                        <div class="contact-form-content">
                            <div class="first-name">
                                <label class="required" for="first-name">First Name</label>
                                <input class="<?= $formInPost && !$formController->isValid('first-name') ? "error" : "" ?>"  type="text" name="first-name" id="name"
                                    value="<?= $formInPost ? $formController->getFirstName() : "" ?>">
                            </div>
                            <div class="last-name">
                            <label class="required" for="last-name">Last Name</label>
                                <input class="<?= $formInPost && !$formController->isValid('last-name') ? "error" : "" ?>"  type="text" name="last-name" id="name"
                                    value="<?= $formInPost ? $formController->getLastName() : "" ?>">
                            </div>
                    
                            <div class="email">
                                <label class="required" for="email">Email</label>
                                <input class="<?= $formInPost && !$formController->isValid('email') ? "error" : "" ?>"  type="text" name="email" id="email"
                                    value="<?= $formInPost ? $formController->getEmail() : "" ?>">
                            </div>
                            <div class="subject">
                                <label class="required" for="subject">Subject</label>
                                <input class="<?= $formInPost && !$formController->isValid('subject') ? "error" : "" ?>" type="text" name="subject" id="telephone"
                                    value="<?= $formInPost ? $formController->getSubject() : "" ?>">
                            </div>
                        </div>
                        <div class="message">
                            <label class="required" for="message">Message</label>
                            <textarea class="<?= $formInPost && !$formController->isValid('message') ? "error" : "" ?>"  name="message" id="message" cols="50"
                                rows="10"><?= $formInPost ? $formController->getMessage() : "" ?></textarea>
                        </div>
                        </div>
                        
                            
                        
                            <button class="button-fill-submit" type="submit" id="submit-btn">Submit</button>
                        
                    </form> 
                            
                        
                            
                                    
                                
                            
                    </div>
</div>