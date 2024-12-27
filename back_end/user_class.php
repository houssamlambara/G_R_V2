<?php

include('../db.php');

class User {
    protected $id_user;
    protected $username;
    protected $email;
    protected $password;
    protected $telephone;
    private $conn;

    public function __construct($username, $email, $password, $telephone) 
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->telephone = $telephone;

        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function __toString()
    {
        return "Nom: {$this->username}, Email: {$this->email}, Téléphone: {$this->telephone}";   
    }

    public function signup()  // Removed redundant parameters
    {
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->telephone)) {
            return "All fields are required";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }

        $stmt = $this->conn->prepare("SELECT email FROM USERS WHERE email = ?");
        $stmt->bindParam(1, $this->email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return "Email already exists";
        }

        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare("INSERT INTO USERS (username, email, password, telephone) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $hashed_password);  // Use the hashed password
        $stmt->bindParam(4, $this->telephone);

        if ($stmt->execute()) {
            $this->id_user = $this->conn->lastInsertId();
            return "User registered successfully";
        } else {
            return "Registration failed";
        }
    }

    public function signin($email, $password)
    {
        try {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "Invalid email format";
            }

            $stmt = $this->conn->prepare("SELECT * FROM USERS WHERE email = ?");
            $stmt->bindParam(1, $email);
            $stmt->execute();
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result && password_verify($password, $result['password'])) {
                // Start session and set session variables
                session_start();
                $_SESSION['user_id'] = $result['id_user'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['email'] = $result['email'];
                
                // Regenerate session ID for security
                session_regenerate_id(true);
                
                return ["success" => true, "message" => "Login successful", "user" => $result];
            } 

            return ["success" => false, "message" => "Invalid credentials"];
        } catch (Exception $e) {  // Added missing catch block
            return ["success" => false, "message" => "An error occurred: " . $e->getMessage()];
        }
    }
}
?>