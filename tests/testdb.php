<?php

try{
 $bdd = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8','root','');
 echo 'Data base ready';
}catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}
$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 5,10');

while ($donnees = $reponse->fetch()){
echo'<pre>';
print_r($donnees['nom']);        
echo'</pre></br>';
}
//Termine le traitement avec la requête
$reponse->closeCursor();
echo '<b>Les jeux de Patrick</b>';
$jeux_patrick = $bdd->query('SELECT nom,prix FROM jeux_video WHERE possesseur=\'Michel\' AND prix < 20 ORDER BY prix DESC');
while($donnees_patrick = $jeux_patrick->fetch()){
    echo '<pre>';
    print_r('Monsieur '.$donnees_patrick['nom'].' coûte vers '.$donnees_patrick['prix']);
    echo '</pre>';
}
$jeux_patrick->closeCursor();