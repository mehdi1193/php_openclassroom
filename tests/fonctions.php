<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function lire_nom($name){
    echo 'bienvenue Monsieur '.$name;
}

function volume_cone($rayon,$hauteur){
return $rayon*$rayon*3.14*$hauteur*(1/3);
}

$res = volume_cone(5, 2);
echo "le volume est égale à :".$res;
