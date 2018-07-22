<?php
//$a=100;
//$b=0;
//try	
//{
//if($b==0){throw new Exception("Division par 0",7);}
//else{echo "Résultat de : $a / $b = ",$a/$b;}
//}
//catch(Exception $except)
//{
//echo "Message d'erreur :".$except.getMessage()."<hr>";
//echo "Nom du fichier :".$except.getFile(),"<hr>";
//echo "Numéro de ligne :",$except.getLine(),"<hr>";
//
//echo "Code d'erreur :",$except.getCode(),"<hr>";
//echo "__toString :",$except.__toString(),"<hr>";
//}
//echo "FIN";
?>
<?php
$a=10;
$b=0;
try
{
if($b==0) {throw new Exception("Division par 0",7);}
else{echo "Résultat de : $a / $b = ",$a/$b;}
}
catch(Exception $except)
{
echo "<script type=\"text/javascript\"> alert(' Erreur n˚
➥".$except–>getCode()." \\n ",$except –>getMessage() ," ' ) </script> ";
}
echo "fin";