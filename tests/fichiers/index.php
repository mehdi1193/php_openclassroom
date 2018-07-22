<?php
$myfile = fopen('compteur.txt','r+');

$nbr_pages = fgets($myfile);
$nbr_pages += 1;
fseek($myfile, 0);
fputs($myfile,$nbr_pages);

fclose($myfile);

echo 'Le nombre de pages est: '.$nbr_pages;