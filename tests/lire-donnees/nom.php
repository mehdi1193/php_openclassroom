<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    echo 'Sir, the database is open';
} catch (Exception $exc) {
    die("Problème d'accès à la base de données".$exc->getMessage());
}

$reponse = $bdd->query('select nom from jeux_video');

while ($donnees = $reponse->fetch()){
    echo '<pre>';
    print_r($donnees['nom']);
    echo '</pre>';
}
$reponse->closeCursor();

