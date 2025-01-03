<?php
    class Database {
        private $host = 'localhost'; 
        private $dbname = 'gestion_reservations2'; 
        private $username = 'root'; 
        private $password = ''; 
        private $pdo;

        public function __construct() {
            try {
                $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;connect_timeout=10", $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function getConnection() {
            return $this->pdo;
        }
    }
    ?>
