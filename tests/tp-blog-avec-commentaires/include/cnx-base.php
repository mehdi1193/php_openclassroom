<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tp-blog-commentaires;charset=utf8', 'root', '');
    //echo 'Base de données 5/5';
} catch (Exception $e) {
    echo $e->getMessage();
}
?>