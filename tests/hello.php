<?php if(isset($_GET['nom']) and isset($_GET['prenom'])){
    echo 'Bonjour '.$_GET['prenom'].' '.$_GET['nom'];
}

