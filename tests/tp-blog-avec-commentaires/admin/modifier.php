<?php
include '../include/cnx-base.php';

$response = $bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') where id_billets='$_GET['id']' ");
$donnees = $response->fetch();
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de modification de billets</title>
        <link href="../style.css" rel="stylesheet" />
    </head>
    <body> 
        <!--Formulaire d'ajout de commentaires-->
        <h3>Formulaire de modification de billets</h3></br>
        <form action="modif_post.php" method="POST">
            <label>Titre :</label>
            <input type="text" name="titre" value="$_POST['$_titre']"/></br>
            <label>Message :</label>
            <input type="text" name="message"/></br>

            <input type="submit" value="Envoyer"/>               
        </form>

    </body>
</html>