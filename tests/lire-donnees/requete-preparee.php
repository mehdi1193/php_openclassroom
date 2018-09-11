<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare("SELECT * FROM jeux_videon WHERE possesseur = :poss AND prix < :prixmax");
$req->execute(array('poss'=>$_GET['possesseur'],'prixmax'=>$_GET['prix']));

while($donnees = $req->fetch()){
    echo '<pre>';
    echo $donnees['nom'].' appartient à '.$donnees['possesseur'].' et il coûte '.$donnees['prix'];
    echo '</pre>';
}

