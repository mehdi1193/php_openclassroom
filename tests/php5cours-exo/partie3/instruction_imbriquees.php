<?php
$produit = "livre";
$prix = 30;
if($produit == "PC"){
    if($produit > 1000){
    $remise = $prix * 0.15;
    }elseif ($produit <= 1000) {
    $remise = $prix * 0.1;
    }
}elseif ($produit == "livre") {
    $remise = $prix * 0.05;
}else{
    $remise = $prix * 0.02;
}
