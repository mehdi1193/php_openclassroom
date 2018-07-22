<?php
echo "<h1>Révisez votre tableau de multiplication</h1>";
echo "<table border=\"2\" style=\"background-color:yellow\"> <th>
X &nbsp;</th>";
//Création de la première ligne
for($i=1;$i<10;$i++)
{
echo "<th>&nbsp;$i&nbsp;</th>";
}
echo "X";for($i=1;$i<10;$i++)
{
    echo "<span style=\"border-style:double;border-width:3;\"> $i</span>";
    for($j=1;$j<10;$j++){
       
     echo "<span style=\"border-style:double;border-width:3;\">".$i*$j."</span>";   
    }
     echo "</br>";
    
}