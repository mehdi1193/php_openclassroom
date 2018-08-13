<?php

include '../include/cnx-base.php';
$titre = $_POST['titre'];
$message = $_POST['message'];
$id= $_GET['id'];
$response = $bdd->prepare("UPDATE billets set titre='$titre',message='$message',date_publication='date('Y-m-d H:i:s') WHERE id_billets=$id");
$response->execute();
echo 'insertion réussie';
header("location:../index.php");
?>
