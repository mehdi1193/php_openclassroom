<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ch1 = "Monsieur " ;
$ch2 = " Rasmus" ;
//echo sprintf ("Bonjour %s %s, bravo !</br>",$ch1,$ch2);
//Affiche: Bonjour Monsieur Rasmus, bravo !
echo sprintf ("Bonjour %1\$s , bravo %1\$s!",$ch1,$ch2);
//Affiche: Bonjour Rasmus , bravo Monsieur !