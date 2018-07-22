<?php
//Interruption d'une boucle for
for($i=0;$i<20;$i++)
{
if($i%5==0) { continue;} 
echo $i,"<br />";
}
//********************
//Interruption d'une boucle foreach
$tab[1]="Ain";
$tab[2]="Allier";
$tab[27]="Eure";
$tab[28]="Eure et Loir";
$tab[29]="Finistère";
$tab[33]="Gironde";
foreach($tab as $cle=>$valeur)
{
if($tab[$cle][0]!="E") { continue;}
echo "code $cle : département ",$valeur,"<br />";
}
?>

<?php
for ($i=0;$i<10;$i++)
{
for ($j=0;$j<10;$j++)
{
for ($k=0;$k<10;$k++)	
{
if(($i+$j+$k)%3==0) continue 2;
echo "$i : $j : $k <br /> ";
}
}
}