<?php
$ch1="Blanc";
$ch2="Bleu";
$ch3="blanc";
echo ord($ch3)."/".ord($ch2)."/".ord($ch1);
if($ch1>$ch2) echo "TRUE <br />";
else echo "FALSE <br />"; //Affiche FALSE
if($ch1<$ch3) echo "TRUE <br />";
else echo "FALSE <br />"; //Affiche TRUE