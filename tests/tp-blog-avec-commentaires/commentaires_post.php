<?php
include 'include/cnx-base.php';
//inserer le commentaire dans la liste des commentaires et rediriger vers la page des commentaires
$c=$_POST['id_billet'];
$response=$bdd->prepare('INSERT INTO commentaires(id_commentaires,auteur,comment,date_commentaire,id_billets) values (NUll,?,?,?,?)');
$response->execute(array($_POST['auteur'],$_POST['comment'], date('Y-m-d H:i:s'),$_POST['id_billet']));
echo 'insertion réussie';
header("location:commentaires.php?numero=$c");
?>

