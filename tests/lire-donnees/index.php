<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    echo 'Sir, the database is open';
} catch (Exception $exc) {
    die("Problème d'accès à la base de données".$exc->getMessage());
}

$response = $bdd->query("SELECT * FROM jeux_video");

while($donnees = $response->fetch()){
    echo '<pre>';
    print_r($donnees);
    echo '</pre>';
    echo '<pre>';
    print_r($donnees['console']);
    echo '</pre>';
}
$response->closeCursor();


