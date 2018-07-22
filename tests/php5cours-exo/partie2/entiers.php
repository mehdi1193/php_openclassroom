<?php
$varoct = 8311;
echo $varoct;

$varhex = 0xFAC7;
echo '</br>'.$varhex;
echo '</br></br>'
?>
<?php
$vardbl = 1952.36;
$vardbl2= 1.95236E3;//Soit 1.95236 x 1000
echo $vardbl2,"<br />";//Affiche 1952.36
$vardbl3= 1.95236e3;
echo $vardbl3,"<br />";//Affiche 1952.36
echo $vardbl3*100000000000,"<br />";//Affiche 1.95236E14
?>
<?php
echo '</br> --------------test des booleans --------------------</br></br>';
$a = 2;
$b = ($a < 1);
echo $b;
echo '</br> --------------Comparaison des booleans --------------------</br></br>';
$b = "2";
if($b == $a){
    echo True."oui";
}else{echo FALSE."non";}


if($b === $a){
    echo True."oui";
}else{echo FALSE."non";}