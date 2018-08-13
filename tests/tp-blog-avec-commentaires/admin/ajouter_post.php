<?php

include '../include/cnx-base.php';

$response = $bdd->prepare('INSERT INTO billets(id_billets,titre,message,date_publication) values (NUll,?,?,?)');
$response->execute(array($_POST['titre'], $_POST['message'], date('Y-m-d H:i:s')));
echo 'insertion réussie';
header("location:../index.php");
?>
