<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Les tableaux</title>
        <style type="text/css">
            ul {list-style-image:url("etoile.gif");}
        </style>
    </head>
    <body>
        <?php
//création des éléments du tableau
        $tab["php"] = "php.net";
        $tab["mysql"] = "mysql.com";
        $tab["xhtml"] = "w3.org";
//création des liens
        echo"<h2> Mes liens préférés </h2>";
        echo "<ul><li><a href=\" http://www.{$tab['php']}\" title=\"Le site php.net\">
➥&nbsp; PHP </a> </li>";
        echo "<li><a href=\" http://www.{$tab['mysql']}\" title=\"Le site mysql.com\">
➥&nbsp; MySQL </a> </li>";
        echo "<li><a href=\" http://www.{$tab['xhtml']}\" title=\"Le site du W3C\">
➥&nbsp; XHTML </a> </li></ul>";
        ?>
    </body>
</html>