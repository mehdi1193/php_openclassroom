<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8', 'root', '');
    echo 'Bravo Mehdi, vous êtes connectés à la base de données \n';
} catch (Exception $e) {
    die('erreur ' . $e->getMessage());
}
$reponse = $db->query('SELECT nom FROM jeux_video');
while ($donnees = $reponse->fetch()) {
    echo '<pre>';
   // print_r($donnees);
    //echo $donnees['nom'];
    echo '</pre>';
}
$reponse->closeCursor();

$jeux_patrick = $db->query("select nom,console,possesseur,prix from jeux_video ORDER BY prix limit 0,10 ");
while ($rep1=$jeux_patrick->fetch()){
    echo '<pre>';
    echo 'Le jeux '.$rep1['nom'].' appartient à '.$rep1['possesseur'].' et il coûte '.$rep1['prix'].' €';
    echo '</pre>';
}

