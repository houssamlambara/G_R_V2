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

    // private int $id_activite;
    private string $titre;
    private string $description;
    private string $destination;
    private float $prix;
    private ?string $date_debut;
    private ?string $date_fin;
    private ?int $place_disponible;
    private string $archive;

    // initialiser les propriétés
    public function __construct(int $id_activite=null , string $titre="", string $description="", string $destination="", float $prix=0, ?string $date_debut = null, ?string $date_fin = null, ?int $place_disponible = null, string $archive = "non") {
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

    //GETERS

    public function getIdActivite(): int {
        return $this->id_activite;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getDestination(): string {
        return $this->destination;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function getDateDebut(): ?string {
        return $this->date_debut;
    }

    public function getDateFin(): ?string {
        return $this->date_fin;
    }

    public function getPlaceDisponible(): ?int {
        return $this->place_disponible;
    }

    public function getArchive(): string {
        return $this->archive;
    }

    // SETERS

    public function setIdActivite(int $id_activite): void {
        $this->id_activite = $id_activite;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setDestination(string $destination): void {
        $this->destination = $destination;
    }

    public function setPrix(float $prix): void {
        $this->prix = $prix;
    }

    public function setDateDebut(?string $date_debut): void {
        $this->date_debut = $date_debut;
    }

    public function setDateFin(?string $date_fin): void {
        $this->date_fin = $date_fin;
    }

    public function setPlaceDisponible(?int $place_disponible): void {
        $this->place_disponible = $place_disponible;
    }

    public function setArchive(string $archive): void {
        $this->archive = $archive;
    }
 }
?>


</body>
</html>