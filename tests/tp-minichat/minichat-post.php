<?php

//accès à la bd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tp-minichat;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo 'Probleme dacces a la bd'.$ex->getMessage();
}
//Enregistrement des message dans la BD

$nom = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

$req = $bdd->prepare('INSERT INTO minichat (pseudo,message) VALUES (:pseudo,:message)');
$req->execute(array('pseudo'=>$nom,'message'=>$message));
header('location:index.php');
