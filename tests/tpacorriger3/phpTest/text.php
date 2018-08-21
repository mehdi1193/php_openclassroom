<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<meta charset="utf-8">
	<title>MonSuper Site</title>
</head>
<body>

	<?php include("Menu.php");?>
		<form action="page2.php" method="POST">
			<label>Pseudo: <input type="text" name="pseudo"></label>
			<label>Texte: <input type="text" name="texte" </label>
							<input type="submit" value="Envoyer">
		</form>
		<?php
		 	$bdd = new PDO('mysql:host=localhost;dbname=tpacorriger1','root','');
			$reponse = $bdd->query('SELECT * FROM minichat2');
			while ($donnees = $reponse->fetch()){
				echo '<p>'.htmlspecialchars($donnees['date_ajout']).'</br>'. '<strong>'. htmlspecialchars($donnees['pseudo']) .'</strong> :</p>'. htmlspecialchars($donnees['message']);
			};
		?>
</body>
</html>
