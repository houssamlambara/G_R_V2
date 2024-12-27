<?php

include('../db.php');

class User{
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

   public  function signup($username, $email, $password, $telephone)
    {
        if (empty($username) || empty($email) || empty($password) || empty($telephone)) {
            return "All fields are required";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }

        $stmt = $this->conn->prepare("SELECT email FROM USERS WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return "Email already exists";
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare("INSERT INTO USERS (username, email, password, telephone) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $this->password);
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
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bindParam(2, $email);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            return ["success" => true, "message" => "Login successful", "user" => $user];
        } else {
            return "Invalid email or password";
        }
    }

}

?>