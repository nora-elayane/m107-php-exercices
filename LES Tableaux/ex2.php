<?php
// Exercice 2 : 
$t = [12 , 15, 6 , 8 , 13 , 9 , 19 , 19 ];
echo "max : " . max($t) ;
echo "<br>" ;
echo "min : " . min($t) ;
echo "<br>" ;
echo "Moyenne : " . number_format((array_sum($t) /count($t)),1);
echo "<br>" ;
sort($t) ;
print_r($t) ;
echo "<br>" ;
if(in_array(12 , $t)){
    echo "exist";
}else{
    echo "Doesnt exist" ;
} ;
echo "<br>" ;
$t = array_unique($t) ;
print_r($t) ;
echo "<br>" ;
echo "<br>" ;





?>