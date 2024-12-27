
<?php 

require_once('./back_end/activite_classe.php');
require_once('./db.php');

$activity = new Activite("Excursion à Paris", "Visite guidée de Paris", "Paris", 99.99, 30, "2024-05-01", "2024-05-07", "active");
echo $activity->addActivite();