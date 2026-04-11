<?php
//  Fonctions utiles sur les tableaux associatifs :
$tabAs = [
    "nom" => "nora",
    "age" => 21 ,
    "ville" => "Beni mellal",
    "nationalité" => 12
];
$t2 = [
    "hobbies" => "Box" ,
    "sexe" => "female"
] ;
print_r(array_keys($tabAs));
echo "<br>" ;
print_r(array_values($tabAs));
echo "<br>" ;
echo(array_key_exists("nationalité" , $tabAs)) ;
echo "<br>" ;
echo(isset($tabAs["nationalité"]));
echo "<br>" ;
unset($tabAs["ville"]) ;
print_r($tabAs);
echo "<br>" ;
$t3 = array_merge($tabAs, $t2) ;
print_r($t3) ;
echo "<br>" ;
ksort($t3);
print_r($t3);
echo "<br>" ;
krsort($t3);
print_r($t3);
echo "<br>" ;
asort($t3);
print_r($t3);
echo "<br>" ;
arsort($t3);
print_r($t3);
echo "<br>" ;
$t4 = array_flip($t3);
print_r($t4);
echo "<br>" ;
echo "<br>" ;
