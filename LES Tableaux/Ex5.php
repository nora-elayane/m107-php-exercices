<?php
$tabC = [ 32 , 40 ,27 , 12 , 56 ];
$tabF = array_map(fn($n)=>$n * 9/5 + 32 , $tabC);
print_r($tabC)  ;
echo "<br>" ;
print_r($tabF);
echo "<br>" ;
$tabN = [12, 34 , 13 , 67 , 78 , 89 , 31]; 
$taEntier = array_filter($tabN , fn($n)=>$n % 2 == 0);
print_r($taEntier);
echo "<br>" ;
$t = [2 , 4 , 4];
$total = array_reduce($t, fn( $n , $i)=>$i*= $n , 1);
echo $total ; 

$nombres = [2, 4 , 12 ,  8 , 3 , 9 , 15 , 18 , 16 ];
$newnombres =array_filter(array_map(fn($n)=>$n *2 , $nombres) , fn($n)=>$n > 20);
echo "<br>" ;
print_r($newnombres);