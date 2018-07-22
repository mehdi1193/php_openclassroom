<?php

$tab[0] = 2004;
$tab[1] = 31.14E7;
$tab[2] = "PHP5";
$tab[35] = $tab[2]. "et MySQL";
$tab[] = TRUE;//voir les paragraphes suivants
$ind = 40;
$tab[$ind] = "Dernier élément";
echo "Nombre d'éléments = ", count($tab);

echo "</br>la valeur de \$tab[35] est $tab[35] </br>";
//-------------------------------------------------------
$tab2["zéro"] = 2003;
$tab2['un'] = 31.14E7;
$tab2["deux"] = "PHP";
//***La ligne suivante provoque une erreur si elle est décommentée
//echo "<p> Vous utilisez $tab2['deux'] <br />";
//***on écrira à la place:
echo "<p> Vous utilisez {$tab2['deux']} <br />";
define("CTE","lang");//Crée la constante CTE
$tab2["lang"] = " PHP ET MySQL";
echo "</br>".$tab2["lang"]."</br>";
$tab2[CTE] = " ASP.NET";
$tab2["lang"] = " khona";
$tab2[CTE] = " khona 2";
echo "</br>".$tab2["lang"]."</br>";
$tab2["CTE"] = "JAVA";
echo "Le nombre d'éléments est ", count($tab2),"<br />";
echo "L'élément \$tab2[\"CTE\"] vaut ",$tab2["CTE"],"<br / >";
echo "L'élément \$tab2[CTE] vaut ",$tab2[CTE],"<br />";
echo "<p> Le langage préféré de l _ Open source est{$tab2["lang"]} <br />";
?>