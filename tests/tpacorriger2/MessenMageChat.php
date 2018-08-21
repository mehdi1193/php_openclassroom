<div class="site"></div>
<?php
require_once 'headerall.php';


?>
<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=tpacorriger1;charset=utf8", "root", "");
if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
	$msg_user = "Votre message a bien été envoyer sur MessenMageChat";
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$message = htmlspecialchars($_POST['message']);
	$insertmsg = $bdd->prepare('INSERT INTO minichat2(pseudo, message) VALUES(?, ?) ');
    $insertmsg->execute(array($pseudo, $message));
}
?>
<?php
if(isset($msg_user))
{
   echo '<p class="msg_envoyer">'.$msg_user.'</p>';
}
else
{
 echo "";
}
?>

	<title style="color: blue;">Chat - MessenMage</title>

<form method="post" action="" autocomplete="off">
	<label for="pseudo">Pseudo</label>
	<input type="text" id="pseudo" class="form-control" name="pseudo" placeholder="Votre Pseudo...." value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"><br>
	<label for="message">Message</label>
	<textarea type="text" class="form-control" id="message" name="message"  placeholder="Votre message..."></textarea><br>
	<button class="btn btn-default" type="submit">Envoyer le Message</button>
</form>
<div id="messages">

<?php

 $allmsg = $bdd->query('SELECT * FROM minichat2 ORDER BY id DESC');
 while($msg = $allmsg->fetch())
 {
?>
<b><?php echo $msg['pseudo'] ?> :</b> <br /><?php echo $msg['message'] ?><br><br>
<?php
}
?>
</div>
   <script>
    setInterval('load_messages()', 500);
    function load_messages() {
          $('#messages').load('load_messages.php')
     } 
	</script>
	


 <html>
    <head>
        <title>Mon titre</title>
    </head>
    <body>
     
        <div id="compteur"></h1></div>
 
    </body>
 
    
