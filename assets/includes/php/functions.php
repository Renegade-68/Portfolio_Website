<?php 

class Functions {

    // Public Variables
    public $username = "ck7fug34a_portfoliosite";
    public $password = "Plakkie2003!";
    public $database = "ck7fug34a_portfoliosite";
    public $server = "localhost";

    private $pdo;

    public function __construct() { 
        try {
            $this->pdo = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->database, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function addUserToContact($name, $lname, $email, $phone, $message) {
        try {
            $sql = "INSERT INTO contact (contact_name, contact_lname, contact_email, contact_phone, contact_msg) 
                    VALUES (:name, :lname, :email, :phone, :message)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            return;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

