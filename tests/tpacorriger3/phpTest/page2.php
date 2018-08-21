<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Mon super Site</title>
</head>
<body>
	<?php include('Menu.php') ?>

		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=tpacorriger1','root','');
			$req = $bdd->prepare('INSERT INTO minichat2(pseudo, message) VALUES(?, ?)');
			$req->execute(array($_POST['pseudo'], $_POST['texte']));

			header('location: text.php');
		?>




	</body>
</html>
