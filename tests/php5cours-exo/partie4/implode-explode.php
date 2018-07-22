<?php
//Passage chaîne –> tableau
$ch1="L'avenir est à PHP5 et MySQL";
$tab1=explode(" ",$ch1);
echo $ch1,"<br />";
print_r($tab1);
echo "<hr />";
$ch2="C:\wampserver\www\php5\chaines\string2.php";
$tab2=explode("\\",$ch2);
echo $ch2,"<br />";
print_r($tab2);
echo "<hr />";
//Passage tableau –> chaîne
$tab3[0]="Bonjour";
$tab3[1]="monsieur";
$tab3[2]="Rasmus";
$tab3[3]="Merci!";
$ch3=implode(" ",$tab3);
echo $ch3,"<br />";
?>