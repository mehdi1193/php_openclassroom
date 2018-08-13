<?php
include 'include/cnx-base.php';
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>TP Blog avec commentaires</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tp Blog avec commentaires</h1>
        <a href="index.php">Retour à la liste des billets</a>

        <?php
        $khawi = 0;
        $var = htmlspecialchars($_GET['numero']);
        $response = $bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM billets where id_billets=$var LIMIT 0,5");
        $donnees = $response->fetch();
        if (empty($donnees)) {
            $khawi = 1;
            echo '</br><h2>Désolé, le numéro de billet n\'existe pas dans notre base de donnnées !</h2></br>';
        } else {
            echo '<div class="news">Le ' . $donnees['titre'] . ' Le ' . $donnees['datee'] . '</br></div>';
            echo '<div class="news"><p>' . $donnees['message'] . '</div></p></br>';
            $response->closeCursor();
        }
        if ($khawi != 1) {
            ?>

            <h3>Commentaires</h3>
            <?php
            $response_com = $bdd->query("SELECT auteur,comment, DATE_FORMAT(date_commentaire, '%d/%m/%y à %Hh%imin%ss') AS datee FROM commentaires where id_billets=$var    ");
            while ($donnees = $response_com->fetch()) {
                echo '<b>' . $donnees['auteur'] . '</b> le ' . $donnees['datee'] . '</br>';
                echo $donnees['comment'] . '</br></br>';
            }
            $response_com->closeCursor();
            ?>
            <!--Formulaire d'ajout de commentaires-->
            <h3>Formulaire d'ajout de commentaires</h3></br>
            <form action="commentaires_post.php" method="POST">
                <label>Auteur :</label>
                <input type="text" name="auteur"/></br>
                <label>Commentaire :</label>
                <input type="text" name="comment"/></br>
                <input type="hidden" name="id_billet" value="<?php echo $var ?>"/>
                <input type="submit" value="Envoyer"/>               
            </form>
        <?php } ?>    





    </body>
</html>


