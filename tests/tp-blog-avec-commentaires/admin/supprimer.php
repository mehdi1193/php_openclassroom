<?php
include '../include/cnx-base.php';
$id= $_GET['id'];
$response = $bdd->exec("DELETE * FROM billets WHERE id_billets=$id");
echo 'suppression';
header("location:administration.php");
?>