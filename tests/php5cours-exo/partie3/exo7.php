<?php

$nbre_multiple = 100;
$res = rand(1, 1000);
$i=0;
while($res%100!=0){
    $res= rand(1, 10000);
    $i++;
}
echo "Le nombre multiple de $nbre_multiple est : $res";
echo "</br>Vous l'avez trouvé après $i fois";

