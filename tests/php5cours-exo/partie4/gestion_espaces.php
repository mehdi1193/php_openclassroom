<?php
$a = " ...JeanJe.  " ;
$b = "Dupont___s";
echo $a,$b,"<br />";
echo ltrim($a,' .,Je')," ",rtrim($b,' _');
echo '</br>'. wordwrap($b, 3,'f',0);
?>