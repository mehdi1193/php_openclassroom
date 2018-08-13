<?php
include '../include/cnx-base.php';
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'administration</title>
        <link href="../style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Tp Blog avec commentaires - page d'administration</h1>
        <table>
            <tr>
                <th>Id billets</th>
                <th>Titre</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php
            $response = $bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM billets ORDER BY id_billets LIMIT 0,5");
            while ($donnees = $response->fetch()) {
                ?>   

                <tr>
                    <td><?php echo htmlspecialchars($donnees['id_billets']) ?></td>
                    <td><?php echo mb_strimwidth(htmlspecialchars($donnees['message']), 0, 50, "...") ?></td>
                    <td><?php echo mb_strimwidth(htmlspecialchars($donnees['message']), 0, 50, "...") ?></td>
                    <td><a class="button" href="modifier.php?id=$donnees['id_billets']">Modifier</a><a class="button" href="supprimer.php">Supprimer</a></td>
                </tr>


                <?php
            }
            ?>
        </table>
    </body>
</html>




