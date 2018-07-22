<?php
$tab=array();
for($i=0;$i<20;$i++){
 $a=rand(0, 1000);
 echo $a." PHP 75</br>";
 if($a %100==0){
     $tab[]=$a;
 }
}
foreach($tab as $key=>$val){
echo '<pre>';
print_r("les multiples de 100 : ".$val."</br>") ;
echo '</pre>';
}
//
//foreach($tab as $key->$val){
//    echo("Les multiples de 100 sont : </br>".$val);
//}