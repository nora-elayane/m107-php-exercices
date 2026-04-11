<?php
$ville =["Beni mellal" , "Rabat","Beni mellal" ,"Agadir" , "Casablanca" , "Tanger" , "Marrakeh"];
echo ( $ville[0]) ;
echo "<br>" ;
echo( $ville[4]) ;
echo "<br>" ;
$ville[1] = "Agadir" ;
print_r( $ville) ;
echo "<br>" ;
// Fonctions utiles sur les tableaux indexés :
array_push($ville , "Dakhla") ;
print_r( $ville) ;
echo "<br>" ;
array_unshift($ville , "Laayoun") ;
print_r( $ville) ;
echo "<br>" ;
$p = array_pop($ville);
echo "<br>" ;
echo $p ; 
echo "<br>" ;
$c = array_shift($ville);
echo $c ; 
echo "<br>" ;
print_r( $ville) ;
echo "<br>" ;
echo count($ville) ;
echo "<br>" ;
echo(in_array("Beni mellal" , $ville));
echo "<br>" ;
sort($ville) ;
print_r( $ville) ;
echo "<br>" ;
rsort($ville);
print_r( $ville) ;
echo "<br>" ;
echo(array_search("Agadir" , $ville));
echo "<br>" ;
print_r(array_reverse($ville));
echo "<br>" ;
print_r(array_unique($ville));
echo "<br>" ;
echo(implode(" | " , $ville));
echo "<br>" ;
print_r(explode(" " ,"hello im nora "));
echo "<br>" ; 
echo "<br>" ;



?>