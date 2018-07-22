<html>
<?php

$noms = array('m','h','f');

$noms[0]="kal";

print_r($noms);

$noms[]="sasa";
print_r($noms);
print_r($noms[1]);

echo '</br>les tableaux associatifs </br>';
$coordonnees=array('$nom'=>'mehdi','$age'=>'22');
print_r($coordonnees);
$coordonnees['$age']="33";
echo '<pre>';
print_r($coordonnees);
echo '</pre>';
echo '</br>';
echo 'la boucle foreach</br>';
foreach ($coordonnees as $value) {
    echo $value.'</br>';
}

foreach ($coordonnees as $key => $value) {
    echo $key.'=>'.$value.'</br>';
}
$age_exist= array_key_exists('$age',$coordonnees);
echo $age_exist;
if(in_array('33', $coordonnees)){
    echo'kayna';
} else {
    echo 'nono';
}
$cle_kayna= array_search('33', $coordonnees);
echo '</br>'.$cle_kayna.'hdar';
