<?php
setcookie('pseudo', $_POST['pseudo'], time() + 365243600, null, null, false, true);
?>
<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tpacorriger1;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat2 (pseudo, message, date_ajout) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat2.php');
?>