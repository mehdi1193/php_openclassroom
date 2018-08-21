<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=tpchat;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo $ex->getMessage();
}


$reponse = $bdd->prepare("insert into minichat(pseudo,message,date_publication) values (:nom,:message,:date)");
$reponse->execute(array('nom' => $_POST['pseudo'], 'message' => $_POST['message'],'date'=>date('Y-m-d H:i:s')));
header('location:index.php');




//Création de cookie
$temps = 30 * 24 * 3600;
setcookie("pseudo", $_POST['pseudo'], time() + $temps);
?>


