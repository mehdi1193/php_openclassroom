<?php
//Création d'un classe dérivée de Exception
class MonException extends Exception
{
public function alerte()
{
$this–>message ="<script type=\"text/javascript\"> alert(' Erreur n˚ ".$this–>
getCode()." \\n ".$this–>getMessage() ." ' )</script> ";
return $this–>getMessage();
}
}
//Utilisation de la classe
$a=100;
$b=3;
try
{
if($b == 0) {throw new MonException("Division par 0 ",7);} ←
elseif($a%$b != 0) {throw new MonException("Quotient entier impossible",55);} ←
else{echo "Résultat de : $a / $b = ",$a/$b;}
}
catch(MonException $except)
{
echo $except–>alerte();
}
echo "FIN";
?>