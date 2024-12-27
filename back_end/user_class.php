<?php

include "db.php";

class User{
    protected $id_user;
    protected $name;
    protected $last_name;
    protected $email;
    protected $password;
    protected $phone;
    private $conn;

    public function __construct($name, $last_name, $email, $password, $phone)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;

        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function __toString()
    {
        return "Nom: {$this->name}, Prénom: {$this->last_name}, Email: {$this->email}, Téléphone: {$this->phone}";   
    }

    public  function signup($name, $last_name, $email, $password, $phone)
    {
        if (empty($name) || empty($last_name) || empty($email) || empty($password) || empty($phone)) {
            return ["success" => false, "message" => "All fields are required"];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ["success" => false, "message" => "Invalid email format"];
        }

        $stmt = $this->conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            return ["success" => false, "message" => "Email already exists"];
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->conn->prepare("INSERT INTO users (name, last_name, email, password, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $last_name);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $hashed_password);
        $stmt->bindParam(5, $phone);

        if ($stmt->execute()) {
            $this->id_user = $this->conn->lastInsertId();
            return ["success" => true, "message" => "User registered successfully"];
        } else {
            return ["success" => false, "message" => "Registration failed"];
        }
    }

    public function signin($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            return ["success" => true, "message" => "Login successful", "user" => $user];
        } else {
            return ["success" => false, "message" => "Invalid email or password"];
        }
    }

}

?>