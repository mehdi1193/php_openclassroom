<?php

if($_POST['password'] == "kangourou"){
    echo 'Bienvenue à la page secrète</br>';
    echo 'Les codes Nasa sont : 87FGF256 - 2556DSDS - 1515SDCV';
} else {
    echo 'Mot de passe erronnée !<a href=formulaire.php> Cliquez ici pour retaper votre password </a> ';
}

