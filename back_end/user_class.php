<?php
session_start();
include('../db.php');

class User {
    protected $id_user;
    protected $username;
    protected $email;
    protected $password;
    protected $telephone;
    protected $role;  // Role is an integer now
    private $conn;

    // Constructor with role as an integer (default is 3, meaning a regular client)
    public function __construct($username = "", $email = "", $password = "", $telephone = "", $role = 3)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->telephone = $telephone;
        $this->role = $role; // Default to 3 for client

        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function __toString()
    {
        return "Nom: {$this->username}, Email: {$this->email}, Téléphone: {$this->telephone}, Role: {$this->role}";
    }

    // Signup method with role handling as integer
    public function signup($username, $email, $password, $telephone, $role = 3)
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

        $stmt = $this->conn->prepare("INSERT INTO USERS (username, email, password, telephone, role_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $hashed_password);
        $stmt->bindParam(4, $this->telephone);
        $stmt->bindParam(5, $this->role);  // Insert the role as an integer

        if ($stmt->execute()) {
            $this->id_user = $this->conn->lastInsertId();
            return "User registered successfully";
        } else {
            return "Registration failed";
        }
    }

    // Signin method with role validation as integer
    public function signin($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM USERS WHERE email = ?");
        $stmt->bindParam(1, $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            return "Email does not exist.";
        } elseif (!password_verify($password, $result['password'])) {
            return "Invalid password.";
        } else {
            $this->role = $result['role'];
            return true;
        }
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        // Optionally, update the role in the database
        $stmt = $this->conn->prepare("UPDATE USERS SET role = ? WHERE id_user = ?");
        $stmt->bindParam(1, $role);
        $stmt->bindParam(2, $this->id_user);
        $stmt->execute();
    }

    public function getRoleName()
    {
        $roleNames = [
            1 => 'Superadmin',
            2 => 'Admin',
            3 => 'Client'
        ];

        return isset($roleNames[$this->role]) ? $roleNames[$this->role] : 'Unknown';
    }
}

?>