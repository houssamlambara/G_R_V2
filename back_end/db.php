<?php

class Database
{
    private $connection;
    private static $instance = null; // Instance PDO pour éviter plusieurs connexions

    private $host = 'localhost'; 
    private $dbname = 'gestion_reservations2'; 
    private $username = 'root'; 
    private $password = ''; 

    // Constructeur privé pour éviter l'instanciation directe
    private function __construct()
    {
        try {
            // Connexion PDO
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password );
            // Configuration des attributs PDO pour la gestion des erreurs
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // En cas d'erreur, afficher le message d'erreur
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    // Méthode statique pour obtenir l'instance unique de la connexion
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self(); // Créer une nouvelle instance si elle n'existe pas
        }

        return self::$instance;
    }

    // Méthode pour obtenir la connexion PDO
    public function getConnection()
    {
        return $this->connection;
    }

    // Optionnel : méthode pour fermer la connexion
    public function closeConnection()
    {
        $this->connection = null;
    }
}
?>
