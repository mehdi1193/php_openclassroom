<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->exec('update jeux_video set prix = 10, nbre_joueurs_max=32 where nom=\'Battlefield 1942\' ');
echo 'la mis à jour a été bien effectuée';