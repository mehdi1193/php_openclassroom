<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    echo 'Sir, the database is open';
} catch (Exception $exc) {
    die("Problème d'accès à la base de données".$exc->getMessage());
}

$reponse = $bdd->query("select * from jeux_video where possesseur='patrick'");

while ($donnees = $reponse->fetch()){
    echo '<pre>';
    echo $donnees['nom']." appartient à ".$donnees['possesseur'];
    echo '</pre>';
}
$reponse->closeCursor();


