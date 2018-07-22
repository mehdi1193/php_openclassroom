<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo 'Erroooooooor: '.$ex->getMessage();
}

$response = $bdd->query('SELECT AVG(prix) AS prixmoy FROM jeux_video');
$donnees=$response->fetch();
echo "Le prix moyen est de : ".$donnees['prixmoy'];
$response->closeCursor();

