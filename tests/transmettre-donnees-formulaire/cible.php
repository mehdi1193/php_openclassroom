<?php
echo 'Bonjour ' . htmlspecialchars($_POST['pseudo']) . ' Son choix est: ' . $_POST['choix'] . ' il a coché: ' . $_POST['case'];
echo '</br>Si tu veux changer ton prénom, ';
?>
<a href="formulaire.php">clique ici pour revenir au formulaire</a></br>
<?php
$extensions = array('jpg','sql','pdf');
echo 'le bouton d\'option choisi est: ' . $_POST['frites'] . '</br>';
echo strip_tags($_POST['message']);
// Traitement du fichier
if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0) {
    echo '</br>le fichier a été envoyé </br>';
    if ($_FILES['monfichier']['size'] <= 1000000) {
        echo 'La taille de ce fichier est de : ' . $_FILES['monfichier']['size'] . '</br>';
    } else {
        echo 'Le fichier est très grand';
    }
    $path = $_FILES['monfichier']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    echo '</br>Le type de fichier est : ' . $ext;
    if(in_array($ext, $extensions)){
        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/'.basename($_FILES['monfichier']['name']));
        echo '</br>Le fichier va être uplodé';
    }else{
        echo '</br>Votre fichier ne va pas être uplodé';
    }
} else {
    echo "l'erreur est la suivante: " . $_FILES['monfichier']['error'];
}
     
