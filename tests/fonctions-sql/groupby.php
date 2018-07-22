<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
echo '<h3>Tester la fonctionnalité GROUP BY </h3>';
$response = $bdd->query('SELECT COUNT(nom) AS gameplayer, possesseur FROM jeux_video GROUP BY possesseur');
while ($donnees=$response->fetch()){
    echo $donnees['possesseur'].': '.$donnees['gameplayer'].'</br>';
}
$response->closeCursor();

echo '<h3>Tester la fonctionnalité HAVING </h3>';
$response1=$bdd->query('SELECT AVG(prix) AS prixmoy,console,possesseur FROM jeux_video WHERE possesseur=\'Florent\' GROUP BY console HAVING prixmoy < 10 ') OR die(print_r($bdd->errorInfo()));
while ($donnees=$response1->fetch()){
    echo $donnees['console'].': '.$donnees['prixmoy'].'</br>';
}
$response1->closeCursor();