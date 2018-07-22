<?php
if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error']==0){
    echo 'Le fichier existe';
    if($_FILES['monfichier']['size']<1000000){
        echo "</br>Le fichier ne dépasse pas"
        . " la taille limite";
    }else{
        echo "Le fichier dépasse la taille maximale";
    }   
}else{
    echo "le fichier n\'existe pas";
}
$infofichier = pathinfo($_FILES['monfichier']['name']);
//var_dump($infofichier);
$extensionfichier = strtolower($infofichier['extension']);
echo '</br>'.$extensionfichier;
$extension_permis = array("png","gif",'php');
if(in_array($extensionfichier, $extension_permis)){
    echo "Cette extension est permise";
    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/'.basename($_FILES['monfichier']['name']));
}else{
    echo "extension interdite";
}
