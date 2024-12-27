<?php 
require_once('../../db.php'); // Database connection
require_once('../activite_classe.php'); // Activite class

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $dest = isset($_POST['dest']) ? $_POST['dest'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $dateDebut = isset($_POST['dateDebut']) ? $_POST['dateDebut'] : '';
    $dateFin = isset($_POST['dateFin']) ? $_POST['dateFin'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : 0;
    $places = isset($_POST['places']) ? $_POST['places'] : 0;

    // Instantiate the Activite class
    $activite = new Activite($title, $desc, $dest, $price, $places, $dateDebut, $dateFin);

    // Call the addActivite method
    $result = $activite->addActivite();

    // Check the result and display appropriate message
    echo $result;
}
?>
