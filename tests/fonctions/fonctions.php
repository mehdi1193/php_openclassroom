<?php

function bonjour($nom){
    echo 'Bonjour '.$nom.'</br>';
}

bonjour("Karim");
bonjour("noor");

//Fonction qui permet de calculer le volume d'un cône

function volumeCone($rayon,$hauteur){
    return $rayon*$rayon*3.14*(1/3);
}
echo '</br>';
$res=volumeCone(6, 7);
echo 'Le volume égale à :'.$res;

//echo $res 
$fichier = fopen("fichier.txt");