<?php
$code="3mEhDii Sat zwin";
if(strlen($code)!=5){
    echo 'code eronnée';
}else{
    echo 'Good';
}
for($i=0;$i<= strlen($code);$i++){
    echo "</br>$code[$i] : ". ord($code[$i])."</br>";
}

$code1;
for($i=1;$i<6;$i++)
{
$nb=rand(65,90);
$code1.=chr($nb);
}
echo "Votre mot de passe est : ",$code1;	

echo '</br> le caractère :'.chr($code);
//La valeur de $code  en minuscule 
echo '</br> le mot code en minuscule vaut: '.strtolower($code);

//La valeur de $code  en majuscule
echo '</br> le mot code en minuscule vaut: '. strtoupper($code);

//Tester la fonction ucwords
echo '</br> Tester la fonction ucwords: '. ucwords($code);
//Tester la fonction ucfirst
echo '</br> Tester la fonction ucfirst: '. ucfirst($code);