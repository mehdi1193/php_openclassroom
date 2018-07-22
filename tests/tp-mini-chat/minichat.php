<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8', 'root','');
    echo 'Base de données 5/5';
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
    <!--Création d'un cookie pour stocker le pseudo-->
 
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Mini chat TP</title>
  <style>
      form{
          text-align: center;
      }
  </style>
</head>
<body>
    <form action="minichat_post.php" method="POST">
        <label>Pseudo :</label>
        <input type="text" name="pseudo" value="<?php echo $_COOKIE[$cookie_name]; ?>"/> </br>
        <label>Message :</label>
        <input type="text" name="message"/></br>
        <input type="submit" value="Envoyer"/>
    </form>
    <?php
        $rep=$bdd->query('select * from mini_chat order by id DESC limit 10  ');
        while($rep2=$rep->fetch()){
            echo '@'. htmlspecialchars($rep2['pseudo']).' : '.htmlspecialchars($rep2['message']).'</br>'; 
        }   
        
    ?>
  
</body>
</html>

