<?php
$a = "A";
$res = ord($a);
echo '$res : '.$res;
$fincarac = $res +26;
for($i=11;$i<=36;$i++,$res++)
{
    $tab[$i] = chr($res);
       
}
echo '<pre>';
print_r($tab);
echo '</pre>';

foreach ($tab as $key=>$val){
    echo $key.': '.$val."</br>";
}