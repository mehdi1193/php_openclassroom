<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
    <?php
    $variable1 = " PHP 5";
    ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <?php
        echo "<title>Une page pleine d'inclusions $variable1</title>";
        ?>
    </head>
    <body>
        <?php
        $variableext = "Ce texte provient du fichier inclus";
        echo "<div><h1 style=\"border-width:5;border-style:double;
background-color:#ffcc99;\">
Bienvenue sur le site $variable1 </h1>";

        echo "<h3> $variableext</h3>";
        echo "Nom du fichier exécuté: ", $_SERVER['PHP_SELF'], "&nbsp;&nbsp;&nbsp;";

        echo " Nom du fichier inclus : ", __file__, "</div> ";
        ?>

