<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=openclassroomphp;charset=utf8', 'root','');
    echo 'DataBase\'s working </br>';
} catch (Exception $e) {
    echo $e->getMessage();
}
//REQUETE NORMAL
//$bdd->exec('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefisseld 2018\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
//REQUETE PREPAREE
//        $rep = $bdd->prepare('INSERT INTO jeux_video(id,nom, possesseur, console, prix, nbre_joueurs_max, commentaires)'
//                . 'VALUES(:id, :nom ,:possesseur,:console,:prix,:joueurs_max,:commentaires)');
//
//        $rep->execute(array(
//            'id'=>$_GET['id'],
//            'nom'=>$_GET['nom'],
//            'possesseur'=>$_GET['possesseur'],
//            'console'=>$_GET['console'],
//            'prix'=>$_GET['prix'],
//            'joueurs_max'=>$_GET['nbre_joueurs_max'],
//            'commentaires'=>$_GET['commentaires']));
// pour exécuter cette requete : http://localhost:8081/tests/bdd/ecrire_data.php?id=63&nom=PES2018&possesseur=patrick&console=xbox&prix=20&nbre_joueurs_max=4&commentaires=m3alam

//echo 'la requete préparée a été bien exécutée !';

//REQUETE UPDATE
//    $nbre_ligne_modif_ds_BD = $bdd->exec('UPDATE jeux_video SET possesseur=\'Sofia\' WHERE possesseur=\'Mehdi\' ');
//    echo '\n le nombre de lignes modifiés dans cette requete est: '.$nbre_ligne_modif_ds_BD;

//REQUETE UPDATE PREPAREE
//    $rep2=$bdd->prepare('UPDATE jeux_video SET nom=:nom,prix=:prix where nom=:nom1 ');
//    $nb=$rep2->execute(array('nom'=>$_GET['nom'],
//                         'prix'=>$_GET['prix'],
//                         'nom1'=>$_GET['nom1']));
//    echo 'la requete préparée UPDATE a été bien exécutée ! \n'.$nb;

//REQUETE DELETE
$nb1=$bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefisseld 2018\'');
echo '</br>le nombre de lignes modifiés dans cette requete est: '.$nb1;

//TRAQUER LES ERREURS 
echo '</br>';
$reponse = $bdd->exec('SELECT PRICE FROM jeux_video') or die(print_r($bdd->errorInfo()));