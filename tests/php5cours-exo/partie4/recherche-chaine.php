<?php

//$ch = "Bonjour Geneviève" ;
//echo $ch[2]."</br>";
//echo "Le 9ème caractère de la chaîne $ch est $ch[8]</br>" ;

//rechercher une chaine dans une autre

//$ch1 = "Perette et le pot au lait. C'est pas de pot !";
//$ssch = strstr ($ch1, "pot A");
//echo $ssch ;
//echo "</br>////////////////////////</br>";
//
//$ch2 = "Perette et le pot au lait. C'est pas de pot !";
//$ssch = stristr ($ch2, "pot A");
//echo "</br>".$ssch ;

//$ch2 = "Perette et le pot au lait. C'est pas de pot !";
//$ssch = strrchr($ch2, "pot");
//echo "</br>".$ssch ;
//$res = substr($ch2, 3,1);
//echo "</br>".$res."</br>";
//$ssch = substr_count($ch2, "pot");
//echo "</br>".$ssch ;
//$remp= str_replace($res, $ssch, $ch2)

//Extraction et remplacement de sous-chaînes
//$ch = "Perette et le pot au lait. C'est pas de pot!" ;
//$ssch = substr ($ch, 8, 9) ;
//echo $ssch,"<br />";
//$ssch = substr($ch,8);
//echo $ssch ,"<br />";
//$ch2="pot";
//$nb=substr_count($ch,$ch2);
//echo "Le mot $ch2 est présent $nb fois dans $ch <br />";
//$ch3=str_replace('pot','bol',$ch);
//echo $ch3,"<br />" ;
//
//$pos = strpos($ch, "et");
//echo 'la position de et est: '.$pos;    


//Recherche de la position ou de l’existence d’un mot
$ch = "Perette et le pot au lait. C'est pas de pot ! La Fontaine" ;
echo "\$ch = $ch <br />";
$ch2 = "pot" ;
//recherche sensible à la casse
$n=strpos ($ch, $ch2);
echo "Le mot $ch2 commence à la position $n dans \$ch <br />" ;
//recherche insensible à la casse
$ch3 = "POT" ;
$n2=stripos($ch, $ch3);
echo "Le mot $ch3 commence à la position $n2 dans \$ch <br />" ;
//recherche de la dernière occurrence sensible à la casse
$n3=strrpos($ch, $ch2);
echo "La dernière occurrence du mot $ch2 commence à la position $n3 dans \$ch<br />"
;
//recherche sensible à la casse de l'existence d'un mot
$ch4="fontaine";
