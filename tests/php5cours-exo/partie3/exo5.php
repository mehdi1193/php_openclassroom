<?php
$i=0;
$a= 333;
$b=0;
//while ($i == 0){
//    $res = rand(0, 1000);
//    if($res == $a){
//        echo "Vous avez réussi à trouver le nombre mystère $a après $b fois";
//        $i=1;
//    }else{
//        $b++;
//    }
//}
for($b=0;$i==0;$b++)
{
    $res = rand(0, 1000);
    if($res == $a){
        echo "Vous avez réussi à trouver le nombre mystère $a après $b fois";
        $i=1;
    }
}