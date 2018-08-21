<?php

include '../include/cnx-base.php';
$titre = $_POST['titre'];
echo $titre.'</br>';
$message = $_POST['message'];
$id= $_POST['id'];
$response = $bdd->exec("UPDATE billets set titre='$titre',message='$message',date_publication=now() WHERE id_billets=$id");
//$response->execute();
echo 'insertion réussie';
header("location:../index.php");
?>
