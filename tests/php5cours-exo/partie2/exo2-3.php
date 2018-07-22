<?php

$x = "PostgreSQL";
$y = "MySql";
$z = &$x;
$x = "PHP 5";
$y = &$x;
echo $GLOBALS['x']." ".$GLOBALS['y']." ".$GLOBALS['z'];
echo "</br></br>____________________ Exo 4 ___________</br></br>";
echo "Le numéro de version de PHP est: ".phpversion()."</br>";
echo "Le nom du système d'exploitation est: ".$_SERVER['HTTP_USER_AGENT'];
echo "</br>La langue du navigateur du poste client est: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'];
?>
<pre><?php print_r($_SERVER); ?></pre>