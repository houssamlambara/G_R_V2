<?php
 
 class Activite {

    private int $id_activite;
    private string $titre;
    private string $description;
    private float $prix;
    private bool $disponible;
    private \DateTime $date_creation;

    // initialiser les propriétés
    public function __construct(int $id_activite=null , string $titre="", string $description="", float $prix="", bool $disponible = true, \DateTime $date_creation = null) {
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->date_creation = $date_creation ?? new \DateTime();  // Utilisation de la date actuelle par défaut
    }



 }

?>