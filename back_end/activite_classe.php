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

<div class="p-4 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3"> 

<div class="bg-gray-300 p-6 rounded-lg shadow-md">
    <h2 class="flex justify-center text-2xl font-bold mb-8">Add Activité</h2>
    <form action="add_activite.php" method="POST" class="space-y-4">
      <div>
        <label for="titre" class="block text-sm font-medium text-gray-700">Titre</label>
        <input type="text" id="titre" name="titre" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le titre" required>
      </div>
      <div>
        <label for="titre" class="block text-sm font-medium text-gray-700">Description</label>
        <input type="text" id="titre" name="titre" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le titre" required>
      </div>
      <div>
        <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
        <input type="text" id="destination" name="destination" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez la destination" required>
      </div>
      <div>
        <label for="prix" class="block text-sm font-medium text-gray-700">Prix</label>
        <input type="number" id="prix" name="prix" step="0.01" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Entrez le prix" required>
      </div>
      <div>
        <label for="date_debut" class="block text-sm font-medium text-gray-700">Date de Début</label>
        <input type="date" id="date_debut" name="date_debut" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
      </div>
      <div>
        <label for="date_fin" class="block text-sm font-medium text-gray-700">Date de Fin</label>
        <input type="date" id="date_fin" name="date_fin" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" required>
      </div>
      <div>
        <label for="place_disponible" class="block text-sm font-medium text-gray-700">Places Disponibles</label>
        <input type="number" id="place_disponible" name="place_disponible" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Nombre de places" required>
      </div>
      <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter une Activité</button>
      </div>
    </form>
  </div>

<div class="col-span-1 md:col-span-2 bg-gray-300 p-6 rounded-lg shadow-md overflow-x-auto">
<h2 class="flex justify-center text-2xl font-bold mb-8">Liste des Activités</h2>
  <table class="w-full border-collapse border border-gray-400">
    <thead class="bg-black">
      <tr>
        <th class="text-white px-4 py-2">Titre</th>
        <th class="text-white px-4 py-2">Description</th>
        <th class="text-white px-4 py-2">Destination</th>
        <th class="text-white px-4 py-2">Prix</th>
        <th class="text-white px-4 py-2">Date Début</th>
        <th class="text-white px-4 py-2">Date Fin</th>
        <th class="text-white px-4 py-2">Places Disponibles</th>
      </tr>
    </thead>
    
    


</div>


</body>
</html>