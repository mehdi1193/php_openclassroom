<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo 'Base de données 5/5</br>';
} catch (Exception $e) {
    echo $e->getMessage();
} 
?>
<?php 
echo $_POST['message'];
    $rep1 = $bdd->prepare('Insert into mini_chat (pseudo, message) values(:pseudo, :message)');
    $rep1->execute(array('pseudo'=> $_POST['pseudo'],'message'=>$_POST['message']));
    //echo ' toute est enregistré';
?>
<?php
$cookie_name="Mehdi";
$cookie_value=$_POST['pseudo'];
$expire=365*24*3600;
setcookie($cookie_name,$cookie_value, time()+$expire,"/");
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Mini chat TP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
 
<!--Redirection HTTP-->
<?php //header('Location: minichat.php'); 
echo "sa".$_COOKIE[$cookie_name]."sa";?>
</body>