<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->exec('delete from jeux_video where nom=\'Battlefield 1942\' ');
echo 'la suppression a été bien effectuée';