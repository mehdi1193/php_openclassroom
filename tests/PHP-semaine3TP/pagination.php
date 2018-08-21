<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


try {
    $bdd = new PDO('mysql:host=localhost;dbname=tpchat;charset=utf8', 'root', '');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
$limit = 2;
$query = "SELECT * FROM minichat";

$s = $bdd->prepare($query);
$s->execute();
$total_results = $s->rowCount();
$total_pages = ceil($total_results / $limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}



$starting_limit = ($page - 1) * $limit;
$show = "SELECT * FROM minichat ORDER BY id DESC LIMIT $starting_limit, $limit";

$r = $bdd->prepare($show);
$r->execute();

while ($res = $r->fetch(PDO::FETCH_ASSOC)):
    ?>
    <h4><?php echo $res['id']; ?></h4>
    <p><?php echo $res['pseudo']; ?></p>
    <hr>
    <?php
endwhile;


for ($page = 1; $page <= $total_pages; $page++):
    ?>

    <a href='<?php echo "?page=$page"; ?>' class="links"><?php echo $page; ?>
    </a>

<?php endfor; ?>