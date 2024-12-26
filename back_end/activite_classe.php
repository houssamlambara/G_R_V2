<?php
 
 class Activite {

    private int $id_activite;
    private string $titre;
    private string $description;
    private string $destination;
    private float $prix;
    private ?string $date_debut;
    private ?string $date_fin;
    private ?int $place_disponible;
    private string $archive;

    // initialiser les propriétés
    public function __construct(int $id_activite=null , string $titre="", string $description="", string $destination="", float $prix="", string $archive="") {
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->date_creation = $date_creation ?? new \DateTime();  // Utilisation de la date actuelle par défaut
    }



 }

?>