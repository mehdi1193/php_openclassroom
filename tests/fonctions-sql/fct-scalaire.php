<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo 'Vous avez une erreur: '.$ex->getMessage();
}

//Utiliser une fonction SQL scalaire
$response=$bdd->query('SELECT UPPER(nom) AS nomm FROM jeux_video');
while ($donnees=$response->fetch()){
    echo $donnees['nomm'].'</br>';
}
$response->closeCursor();        