<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    echo 'base de données khdama';  
} catch (Exception $e) {
   echo $e->getMessage();
}

$req = $bdd->prepare('SELECT * FROM jeux_video WHERE possesseur= :possesseur AND prix < :prix_max');
$req->execute(array('possesseur'=>$_GET['possesseur'],'prix_max'=>$_GET['prix_max']));

//$req=$bdd->query('SELECT nom,possesseur,prix FROM jeux_video LIMIT 0, 10');

while($donnees=$req->fetch()){
    echo '<pre>';
    echo 'le joueur '.$donnees['possesseur'].' possède '.$donnees['nom'].' qui coûte '.$donnees['prix'];
    echo '</pre>';
}

$req ->closeCursor();
//pour exécuter: http://localhost/tests/bdd/requete_preparee.php?possesseur=patrick&prix_max=20 
