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
        <h4>Derniers billets : </h4>
        <?php
        $response=$bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM billets ORDER BY id_billets DESC LIMIT 0,5");
        while($donnees=$response->fetch()){
            echo '<div class="news">Le '.htmlspecialchars($donnees['titre']).'  à '.$donnees['datee'].'</br></div>';
            echo '<div class="news"><p>'. nl2br(htmlspecialchars($donnees['message'])).'</div></p></br>';
            echo '<a href="commentaires.php?numero='.$donnees['id_billets'].'">Lien commentaires</a>';
        }
        ?>
        </br></br>
        <a class="button" href="admin/ajouter.php">Ajouter un billet"<a/> 
    </body>
</html>


