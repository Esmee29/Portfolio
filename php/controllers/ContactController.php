<?php

require_once 'DatabaseController.php';

class ContactUsController
{
    private $first_name;
    private $last_name;
    private $email;
    private $subject;
    private $message;
    

    private $isValidArray = array(
        'first-name' => false,
        'last-name' => true,
        'email' => false,
        'subject' => false,
        'message' => false,
    );

    private $errorMessage;

    private $db;

    public function __construct(DatabaseController $db)
    {
        $this->db = $db;
    }

    public function send()
    {
        $this->first_name = $_POST['first-name'] ?? '';
        $this->last_name = $_POST['last-name'] ?? '';
        $this->email = $_POST['email'] ?? '';
        $this->subject = $_POST['subject'] ?? '';
        $this->message = $_POST['message'] ?? '';

        $this->first_name = htmlspecialchars(strip_tags($this->first_name), ENT_QUOTES, 'UTF-8');
        $this->last_name = htmlspecialchars(strip_tags($this->last_name), ENT_QUOTES, 'UTF-8');
        $this->email = htmlspecialchars(strip_tags($this->email), ENT_QUOTES, 'UTF-8');
        $this->subject = htmlspecialchars(strip_tags($this->subject), ENT_QUOTES, 'UTF-8');
        $this->message = htmlspecialchars(strip_tags($this->message), ENT_QUOTES, 'UTF-8');


        try {
            $this->validate($this->first_name, $this->last_name, $this->email, $this->subject, $this->message);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = "INSERT INTO contact (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)";
        $params = array($this->first_name, $this->last_name, $this->email, $this->subject, $this->message);

        try {
            $this->db->connect();
            $this->db->query($sql, $params);
            $this->db->disconnect();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return true;
    }

    private function validate($first_name, $last_name, $email, $subject, $message)
    {
        $this->errorMessage = array();

        if (strlen($first_name) < 3 || strlen($first_name) > 255 || !preg_match('/^[a-zA-Z\s]+$/', $first_name) || empty($first_name)) {
            $this->errorMessage['first-name'] = 'Your  first name is invalid. It should be at least  3  characters long and contain only letters and spaces.';
        } else {
            $this->isValidArray['first-name'] = true;
        }

        
        if (strlen($last_name) < 3 || strlen($last_name) > 50 || !preg_match('/^[a-zA-Z\s]+$/', $last_name) || empty($last_name)) {
            $this->errorMessage['last-name'] = 'Your  last name is invalid. It should be at least  3  characters long and contain only letters and spaces..';
        } else {
            $this->isValidArray['last-name'] = true;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
            $this->errorMessage['email'] = 'Your email is invalid. Please provide a valid email address.';
        } else {
            $this->isValidArray['email'] = true;
        }

        if (strlen($subject) < 3 || strlen($subject) > 255 || !preg_match('/^[a-zA-Z\s]+$/', $subject) || empty($subject)) {
            $this->errorMessage['subject'] = 'Your message is invalid. It should be at least 3 characters long.';
        } else {
            $this->isValidArray['subject'] = true;
        }

        if (strlen($message) < 10 || empty($message)) {
            $this->errorMessage['message'] = 'Your message is invalid. It should be at least 10 characters long.';
        } else {
            $this->isValidArray['message'] = true;
        }

        if (!empty($this->errorMessage)) {
            throw new Exception(implode(" - ", $this->errorMessage));
        }
    }

    // Getters for class properties
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function isValid($key)
    {
        return $this->isValidArray[$key];
    }
}
?>
