<?php

include('../db.php');
include('User.php');

class SuperAdmin extends User {
    // Additional properties for the SuperAdmin class
    private $role;

    public function __construct($username = "", $email = "", $password = "", $telephone = "", $role = "superAdmin") {
        // Call parent constructor to initialize common User properties
        parent::__construct($username, $email, $password, $telephone);
        $this->role = $role; // SuperAdmin-specific role
    }

    // Method to view all users (can be used to manage admins and clients)
    public function viewUsers() {
        $stmt = $this->conn->prepare("SELECT * FROM USERS");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    // Method to delete any user (SuperAdmin specific functionality)
    public function deleteUser($id_user) {
        $stmt = $this->conn->prepare("DELETE FROM USERS WHERE id_user = ?");
        $stmt->bindParam(1, $id_user);
        if ($stmt->execute()) {
            return "User deleted successfully.";
        } else {
            return "Failed to delete user.";
        }
    }

    // Method to update user role (SuperAdmin specific functionality)
    public function updateUserRole($id_user, $role_id) {
        $stmt = $this->conn->prepare("UPDATE USERS SET role_id = ? WHERE id_user = ?");
        $stmt->bindParam(1, $role_id);
        $stmt->bindParam(2, $id_user);
        if ($stmt->execute()) {
            return "User role updated successfully.";
        } else {
            return "Failed to update user role.";
        }
    }

    // Method to add activities (SuperAdmin-specific functionality)
    public function addActivity($title, $desc, $dest, $price, $dateDebut, $dateFin, $places) {
        $stmt = $this->conn->prepare("INSERT INTO ACTIVITES (titre, description, destination, prix, DATE_DEBUT, DATE_FIN, place_disponible) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $desc);
        $stmt->bindParam(3, $dest);
        $stmt->bindParam(4, $price);
        $stmt->bindParam(5, $dateDebut);
        $stmt->bindParam(6, $dateFin);
        $stmt->bindParam(7, $places);
        if ($stmt->execute()) {
            return "Activity added successfully.";
        } else {
            return "Failed to add activity.";
        }
    }

    // Method to delete activities (SuperAdmin-specific functionality)
    public function deleteActivity($id_activite) {
        $stmt = $this->conn->prepare("DELETE FROM ACTIVITES WHERE id_activite = ?");
        $stmt->bindParam(1, $id_activite);
        if ($stmt->execute()) {
            return "Activity deleted successfully.";
        } else {
            return "Failed to delete activity.";
        }
    }

    // SuperAdmin specific: Create or delete other admins
    public function createAdmin($username, $email, $password, $telephone) {
        $stmt = $this->conn->prepare("INSERT INTO USERS (username, email, password, telephone, role_id) 
                                      VALUES (?, ?, ?, ?, 2)"); // Role_id 2 for admin
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, password_hash($password, PASSWORD_DEFAULT));
        $stmt->bindParam(4, $telephone);
        if ($stmt->execute()) {
            return "Admin created successfully.";
        } else {
            return "Failed to create admin.";
        }
    }

    // SuperAdmin specific: Delete an admin
    public function deleteAdmin($id_user) {
        // Ensure that only admins can be deleted, not the superadmin
        if ($id_user == $this->id_user) {
            return "You cannot delete yourself.";
        }

        $stmt = $this->conn->prepare("DELETE FROM USERS WHERE id_user = ? AND role_id = 2"); // Check for admin role
        $stmt->bindParam(1, $id_user);
        if ($stmt->execute()) {
            return "Admin deleted successfully.";
        } else {
            return "Failed to delete admin.";
        }
    }
}

?>
