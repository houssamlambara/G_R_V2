<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php


class Activite {
    protected $id_activite;
    protected $titre;
    protected $description;
    protected $destination;
    protected $prix;
    protected $place_disponible;
    protected $date_debut;
    protected $date_fin;
    protected $archive;
    private $conn;

    public function __construct($titre = "", $description = "", $destination = "", $prix = 0, $place_disponible = 0, $date_debut = "", $date_fin = "", $archive = "active")
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->destination = $destination;
        $this->prix = $prix;
        $this->place_disponible = $place_disponible;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->archive = $archive;

        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function __toString()
    {
        return "Titre: {$this->titre}, Prix: {$this->prix}, Places Disponibles: {$this->place_disponible}, Date Début: {$this->date_debut}, Date Fin: {$this->date_fin}, Archive: {$this->archive}";
    }

    public function addActivite()
    {
        // Validate inputs
        if (empty($this->titre) || empty($this->prix) || $this->place_disponible <= 0) {
            return "All required fields (Titre, Prix, Places Disponibles) must be provided.";
        }

        if ($this->prix <= 0) {
            return "Price must be a positive number.";
        }

        if ($this->place_disponible <= 0) {
            return "Places Disponibles must be a positive number.";
        }

        // Insert into ACTIVITES table
        $stmt = $this->conn->prepare("INSERT INTO ACTIVITES (titre, description, destination, prix, place_disponible, DATE_DEBUT, DATE_FIN, archive) 
                                     VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $this->titre);
        $stmt->bindParam(2, $this->description);
        $stmt->bindParam(3, $this->destination);
        $stmt->bindParam(4, $this->prix);
        $stmt->bindParam(5, $this->place_disponible);
        $stmt->bindParam(6, $this->date_debut);
        $stmt->bindParam(7, $this->date_fin);
        $stmt->bindParam(8, $this->archive);

        if ($stmt->execute()) {
            $this->id_activite = $this->conn->lastInsertId();
            return "Activity added successfully.";
        } else {
            return "Failed to add activity.";
        }
    }
}

?>
