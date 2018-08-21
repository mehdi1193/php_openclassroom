<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tpchat;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tp mini-chat amélioré</title>        
        <link href="style.css" rel="stylesheet" />
    </head>
    <script>
        function RefreshWindow()
        {
            window.location.reload(true);
        }
    </script>    
    <body>
        <?php
//Si la variable $_COOKIE['pseudo'] existe, alors $res = $_COOKIE['pseudo']  sinon elle vaut NULL 
        $res = isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : NULL;
        ?>
        <h1><center>My First Mini-chat TP</center></h1>
        <form action="minichat-post.php" method="post">
            <label>Pseudo :</label>
            <input type="text" name="pseudo" required="required" value="<?php echo $res ?>"></input></br>
            <label>Message :</label>
            <input type="text" name="message" required="required"></input></br></br>
            <input type="submit" value="Envoyer" ></input>
        </form>
        </br>
        <h3><center>Discussion dans le Forum</center></h3>
        </br>
        <?php
        // La pagination 
        $limit = 5;
        $query = "SELECT * FROM minichat";
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

        $response = $bdd->query("SELECT pseudo,message,DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%imin%ss') AS datee FROM minichat ORDER BY id DESC LIMIT $starting_limit,$limit");
        while ($donnees = $response->fetch()) {
            echo '[' . $donnees['datee'] . '] <b>' . htmlspecialchars($donnees['pseudo']) . '</b> :' . htmlspecialchars($donnees['message']) . '</br>';
        }
        $response->closeCursor();
        ?>
        </br>
        <?php
        for ($page = 1; $page <= $total_pages; $page++):
            ?>

            <a href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
            </a>

        <?php endfor; ?>

    </ul>
</body>
</html>

