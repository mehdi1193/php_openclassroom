<?php

//echo $_GET['repeter'];
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])) {
    //Verifier si repeter est un nombre
    if (is_numeric($_GET['repeter'])) {
        echo '1';
        //Vérifier si ce nombre est compris entre 1 et 100
        if ($_GET['repeter'] <= 100 && $_GET['repeter'] >= 1) {
            for ($i = 0; $i <= $_GET['repeter']; $i++) {
                echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</br>';
            }
        }
    } else {
        echo $_GET['repeter'].' n\'est pas entier';
    }
    
} else {
    echo 'Merci de renseigner les variables nom et prenom';
}