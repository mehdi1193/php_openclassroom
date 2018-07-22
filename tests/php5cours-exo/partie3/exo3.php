<?php

ECHO '<h1>I CAN DO IT<h1/></br>';
$n = 0;
$k=0;
while($n == 0){
    $a = rand(0,100);
    $b = rand(0,100);
    $c = rand(0,100);
    if($a%2==0 && $b%2!=0 && $c%2!=0)
    {
        echo "Enfin, c'est la suite magique : 1 pair et 2 impaires ->$a => $b => $c </br>";
        $n = 1;
    }
    else{
        "</br>Dommage, C'est la mauvaise suite: $a, $b, $c </br>";
    }
    $k++;    
}
echo "</br>Bonjour, nous sommes arrivés à avoir cette combinaison après $k fois"; 

