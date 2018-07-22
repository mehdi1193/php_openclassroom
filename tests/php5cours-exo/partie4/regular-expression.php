<?php
$ch="1789 Prise de la Bastille";
$modele= "([[:digit:]]{4})(.*))";
if(ereg($modele,$ch,$tab))
{
echo "La chaîne \"$ch\" est conforme au modèle \"$modele\" <br />";	
echo "Date : ",$tab[1],"<br />";
echo "Evénement : ",$tab[2],"<br />";
}
else echo "La chaîne \"$ch\" n'est pas conforme au modèle \"$modele\" </br>";
print_r($tab);
echo 'salll';
?>