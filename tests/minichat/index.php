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
        <title>Tp mini-chat</title>
    </head>
    <script>
        function RefreshWindow()
        {
            window.location.reload(true);
        }
    </script>    
    <body>
        <?php
//avec ISSET
//Si la variable $_COOKIE['pseudo'] existe, alors $res = $_COOKIE['pseudo']  sinon elle vaut NULL 
        $res = isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : NULL;
        ?>
        <h1>My First Mini-chat TP</h1>
        <form action="minichat-post.php" method="post">
            <label>Pseudo :</label>
            <input type="text" name="pseudo" required="required" value="<?php echo $res ?>"></input>
            <label>Message :</label>
            <input type="text" name="message" required="required"></input>
            <input type="submit" value="Envoyer"></input>    
        </form>
        <input type="submit" value="Actualiser" onclick="return RefreshWindow();"></input>    
        <h3>Discussion dans le Forum</h3>
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
        ?>
        <?php
        $response = $bdd->query("SELECT * FROM minichat ORDER BY id DESC LIMIT $starting_limit,$limit");
        while ($donnees = $response->fetch()) {
            echo htmlspecialchars($donnees['pseudo']) . ' :' . htmlspecialchars($donnees['message']) . '</br>';
        }
        $response->closeCursor();
        ?>
        <?php
        for ($page = 1; $page <= $total_pages; $page++):
            ?>

            <a href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
            </a>

<?php endfor; ?>

    </ul>
</body>
</html>

