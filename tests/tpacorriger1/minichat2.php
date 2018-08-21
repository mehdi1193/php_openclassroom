<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Minichat amélioré</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>

    <form action="minichat_post2.php" method="post">
    <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php if (isset($_COOKIE['pseudo'])) { echo htmlspecialchars($_COOKIE['pseudo']); } ?>" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
 
        <input type="submit" value="Envoyer" />
    </p>
    </form>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpacorriger1;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_ajout FROM minichat2 ORDER BY ID DESC LIMIT 0, 10');
 

        while ($donnees = $reponse->fetch())
{
    echo '<p>' . htmlspecialchars($donnees['date_ajout']) . '		-		' . '<strong>'. htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
?>

    </body>
</html>