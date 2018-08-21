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
            $limit = 4;
            $query = "SELECT * FROM billets";

            $s = $bdd->prepare($query);
            $s->execute();
            $total_results = $s->rowCount();
            $total_pages = ceil($total_results / $limit);
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $starting_limit = ($page - 1) * $limit;
            $response = $bdd->query("SELECT id_billets,titre,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM billets ORDER BY id_billets LIMIT $starting_limit,$limit");
            while ($donnees = $response->fetch()) {
                ?>   

                <tr>
                    <td><?php echo htmlspecialchars($donnees['id_billets']) ?></td>
                    <td><?php echo mb_strimwidth(htmlspecialchars($donnees['titre']), 0, 50, "...") ?></td>
                    <td><?php echo mb_strimwidth(htmlspecialchars($donnees['message']), 0, 50, "...") ?></td>
                    <td><a class="button" href="modifier.php?id=<?php echo $donnees['id_billets'] ?>">Modifier</a>
                        <!--<a class="button" href="supprimer.php?id=<?php //echo $donnees['id_billets']    ?>">Supprimer</a>-->
                    </td>
                </tr>


                <?php
            }
            ?>
            <?php
            for ($page = 1; $page <= $total_pages; $page++):
                ?>

                <a href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
                </a>

            <?php endfor; ?>
        </table>
    </body>
</html>




