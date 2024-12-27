<?php
require "../backend/activite_classe.php";

class Activite {

    private ?int $id_activite;
    private string $titre;
    private string $description;
    private string $destination;
    private float $prix;
    private ?string $date_debut;
    private ?string $date_fin;
    private ?int $place_disponible;
    private string $archive;

    // Initialiser les propriétés
    public function __construct(?int $id_activite = null, string $titre = "", string $description = "", string $destination = "", float $prix = 0.0, ?string $date_debut = null, ?string $date_fin = null, ?int $place_disponible = null, string $archive = "non") {
        $this->id_activite = $id_activite;
        $this->titre = $titre;
        $this->description = $description;
        $this->destination = $destination;
        $this->prix = $prix;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->place_disponible = $place_disponible;
        $this->archive = $archive;
    }

    public function ajouterActivite($conn): bool {
        $sql = "INSERT INTO activites (titre, description, destination, prix, date_debut, date_fin, place_disponible, archive) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([
            $this->titre,
            $this->description,
            $this->destination,
            $this->prix,
            $this->date_debut,
            $this->date_fin,
            $this->place_disponible,
            $this->archive
        ]);
    }

    // Getters et Setters
    public function getIdActivite(): ?int {
        return $this->id_activite;
    }

    public function setIdActivite(?int $id_activite): void {
        $this->id_activite = $id_activite;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getDestination(): string {
        return $this->destination;
    }

    public function setDestination(string $destination): void {
        $this->destination = $destination;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function setPrix(float $prix): void {
        $this->prix = $prix;
    }

    public function getDateDebut(): ?string {
        return $this->date_debut;
    }

    public function setDateDebut(?string $date_debut): void {
        $this->date_debut = $date_debut;
    }

    public function getDateFin(): ?string {
        return $this->date_fin;
    }

    public function setDateFin(?string $date_fin): void {
        $this->date_fin = $date_fin;
    }

    public function getPlaceDisponible(): ?int {
        return $this->place_disponible;
    }

    public function setPlaceDisponible(?int $place_disponible): void {
        $this->place_disponible = $place_disponible;
    }

    public function getArchive(): string {
        return $this->archive;
    }

    public function setArchive(string $archive): void {
        $this->archive = $archive;
    }
}

// Connexion à la base de données
try {
    $conn = new PDO("mysql:host=localhost;dbname=gestion_reservations2", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification et traitement du formulaire
if (isset($_POST['valider'])) {
    $titre = $_POST['titre'] ?? '';
    $description = $_POST['description'] ?? '';
    $destination = $_POST['destination'] ?? '';
    $prix = (float) ($_POST['prix'] ?? 0);
    $date_debut = $_POST['date_debut'] ?? null;
    $date_fin = $_POST['date_fin'] ?? null;
    $place_disponible = (int) ($_POST['place_disponible'] ?? null);
    $archive = $_POST['archive'] ?? 'non';

    $activite = new Activite(null, $titre, $description, $destination, $prix, $date_debut, $date_fin, $place_disponible, $archive);

    if ($activite->ajouterActivite($conn)) {
        echo "Activité ajoutée avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'activité.";
    }
}
?>