<?php

//Un numéro de téléphone
if(preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", "06.62632626")){
    echo 'Vrai';
}else{
    echo 'False';
} ?>
<?php
//Une addresse mail
$x="^[a-z0-9.-_]{2,20}@+[a-z0-9]{2,10}.[a-z]{2,4}$";
$y="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$";
echo '<br>Check mail address: ';
if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", "j.duspont@orange.fr")){
    echo 'Vrai';
}else{
    echo 'False';
} ?>


<p>
<?php
if (isset($_POST['telephone']))
{
    $_POST['telephone'] = htmlspecialchars($_POST['telephone']); // On rend inoffensives les balises HTML que le visiteur a pu entrer

    if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone']))
    {
        echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
    }
    else
    {
        echo 'Le ' . $_POST['telephone'] . ' n\'est pas valide, recommencez !';
    }
}
?>
</p>

<form method="post">
<p>
    <label for="telephone">Votre téléphone ?</label> <input id="telephone" name="telephone" /><br />
    <input type="submit" value="Vérifier le numéro" />
</p>
</form>
