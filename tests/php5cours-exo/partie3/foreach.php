<?php

for($i = 0;$i<5;$i++){
    $tab[$i] = rand(1,100);
}
echo 'les valeurs de ce tableau sont: </br> ';
foreach ($tab as $value) {
    echo $value."</br>";
}

echo 'les indices et les valeurs de ce tableau sont: </br>';
foreach ($tab as $key => $value) {
    echo "L'indice <strong>".$key."</strong> contient la valeur <strong>".$value."</strong></br>";
}