<?php
include '../include/cnx-base.php';
$var = htmlspecialchars($_GET['id']);
$response = $bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM billets where id_billets=$var ");
//var_dump($response);
$donnees = $response->fetch();
//echo 'titre est: '.$donnees['titre'];
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
            <input type="text" name="titre" value="<?php echo $donnees['titre'] ?>"/></br>
            <label>Message :</label>
            <input type="text" name="message" value="<?php echo $donnees['message'] ?>"/></br>
            <input type="hidden" name="id" value="<?php echo $donnees['id_billets'] ?>"/></br>
            <input type="submit" value="Envoyer"/>               
        </form>

    </body>
</html>