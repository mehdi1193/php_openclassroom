<?php
include '../include/cnx-base.php';
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'ajout de billets</title>
        <link href="../style.css" rel="stylesheet" />
    </head>
    <body> 
        <!--Formulaire d'ajout de commentaires-->
        <h3>Formulaire d'ajout de billets</h3></br>
        <form action="ajouter_post.php" method="POST">
            <label>Titre :</label>
            <input type="text" name="titre"/></br>
            <label>Message :</label>
            <input type="text" name="message"/></br>

            <input type="submit" value="Envoyer"/>               
        </form>

    </body>
</html>