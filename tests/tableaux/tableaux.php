<?php

//les tableaux numérotés 
$prenoms = array('Mehdi','Sofia');
echo $prenoms[1].'</br>';
//les tableaux associatifs
$coordonnees = array('nom'=>'Mehdi','age'=>25,'ville'=>'Temara');
echo $coordonnees['age'].'</br>';

//la boucle Foreach
echo '</br>La boucle Foreach</br>';
foreach($coordonnees as $elements)
{
    echo $elements.'</br>';
}


//la fonction print_r
echo '<pre>';
print_r($coordonnees);
echo '</pre>';

//Rechercher dans un tableau

if(array_key_exists('noms', $coordonnees)  )
{
    echo 'la clé existe'; 
}else{
    echo 'la clé n\'existe pas' ;
}
echo '</br>';
if(in_array(25, $coordonnees)){
    echo 'l\'élement existe';
}else{
    echo 'l\'élement n\'existe pas';
}
echo '</br>';
$findnom= array_search(25, $coordonnees);
echo $findnom.'</br>';





