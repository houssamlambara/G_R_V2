<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gestion_reservations2";

$conn = new mysqli($host,$user,$pass,$dbname);

if(!$conn){
    echo "Connexion impossible";
}