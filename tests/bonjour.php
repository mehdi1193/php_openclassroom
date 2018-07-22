<?php 
$_GET['repeter']=(int)$_GET['repeter'];

if(isset($_GET['nom'])&&isset($_GET['repeter']) && $_GET['repeter']<=100){
    for($i=0;$i<$_GET['repeter'];$i++){
    echo $_GET['nom'].'</br>';
    }
}
else{ echo 'il manque une variable';}