<?php
//
//$ch="Le répertoire est : \"'C:\PHP_doc+\php5\"'";
//$ch= addslashes($ch);
//echo "</br>".$ch."</br>";
//$ch = quotemeta($ch);
//echo $ch;
//$ch =stripslashes($ch);
//echo "</br>".$ch;
//$ch = htmlspecialchars($ch);
//echo "</br>".$ch;
//$ch = htmlspecialchars($ch, 2);
//echo "</br>htmlspecialchars, 2: ".$ch;
//$ch = htmlentities($ch, 2);
//echo "</br></br>htmlentities: ".$ch;

//$ch1 = "</br>Cliquez sur l'icône en tête pour démarrer" ;
//echo $ch1."</br>";
//$ch2 = "L'élément XHTML du bouton est <button>" ;
////echo $ch2."</br>";
////echo "htmlentities : ". htmlentities($ch1);
//echo "<br />htmlentities: ". htmlentities($ch2);
////echo htmlspecialchars($ch2)."</br>";
////echo htmlentities($ch2);
//echo "<br />html entity code: ". html_entity_decode($ch2);

$ch3 = "Voici une ligne \n puis une autre \n Fin\n" ;
echo $ch3."</br>";
echo nl2br($ch3) ;

$ch="<script type= text/javascript> alert('Salut'); history.back(); </script>";
echo strip_tags($ch);

