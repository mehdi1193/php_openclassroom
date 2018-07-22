<?php

$a = 48.9;
$b = 30;
try {
    if (is_integer($a) && is_integer($b)) {
        echo "Les presents nombres sont des entiers </br>";
        //Diviseur de $a
        for ($i = 1; $i <= $a; $i++) {
            if ($a % $i == 0) {
                $taba[] = $i;
            }
        }

//Diviseur de $b
        for ($i = 1; $i <= $b; $i++) {
            if ($b % $i == 0) {
                $tabb[] = $i;
            }
        }
//Afficher les diviseur de $a
        echo 'Les diviseur de ' . $a . ' sont:</br>';
        echo '<pre>';
        print_r($taba);
        echo '</pre>';

//Afficher les diviseur de $b
        echo 'Les diviseur de ' . $b . ' sont:</br>';
        echo '<pre>';
        print_r($tabb);
        echo '</pre>';

        foreach ($taba as $key => $value) {

            foreach ($tabb as $key1 => $value1) {
                if ($value == $value1) {
                    $big = $value1;
                }
            }
        }
        echo "le PGCD entre $a et $b est: $big";
    } else {
        throw new Exception();
    }
} catch (Exception $error) {
    echo 'Les variables ne sont pas des entiers !</br>';
    echo "Le message d'erreur :".$error->getCode() ;
}

