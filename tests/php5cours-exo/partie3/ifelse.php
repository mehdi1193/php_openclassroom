<?php
$age=33;
if ($age < 12){
    echo 'no way';
} else{
    echo 'nta kayn';
}
/*------------------------------- Cas d'un booleene */
$autorisation_entrer = true;
if(!$autorisation_entrer){
    echo '</br>dkhal merhba';
}else {
    echo '</br>Sir jib wara9a dokhool ya lmossekh';
}
/*------------- Astuce ----*/
$name = "mehdi";
if($name !="mehdi"){ ?>
Wa siiiirrrrrrrrrrrr
<?php }else{ ?>
</br>Ahyaaaaaa</br>
<?php } 
/*-------------Switch-----------*/

$note = 'mm';

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

/*----------Les ternaires ----------------------*/
$agee=24;
$majeur = ($age>=18)?$majeur=true:$majeur=false;
echo "</br>$majeur";
