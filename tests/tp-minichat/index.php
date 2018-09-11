<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=tp-minichat;charset=utf8','root','');
} catch (Exception $ex) {
    echo "l'erreur d'accès à la base de données est: ".$ex->getMessage();
}
?>
<form action="minichat-post.php" method="POST">
<label>Pseudo : </label>
<input type="text" name="pseudo"/></br>
<label>Message : </label>
<input type="text" name="message"/></br>
<input type="submit" value="Envoyer"></input>
</form>
</br>
<h4>Les messages à partir de la base de données sont: </h4>
<?php 
//Affichage des 10 derniers messages

$reponse = $bdd->query('select * from minichat ORDER BY id DESC LIMIT 0,5');
while($donnees = $reponse->fetch()){
    echo $donnees['pseudo'].': '.$donnees['message'].'</br>';
    
}
