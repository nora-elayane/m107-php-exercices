<?php
$chaine = "hello my name is nora" ;
$n= explode(" " , $chaine);
print_r($n) ;
echo "<br>" ;
$p =implode(";" , $n);
print $p ;
echo "<br>" ;
echo gettype($n);
echo "<br>" ;
echo gettype($p);
echo "<br>" ;
echo substr($chaine, 6 ,7) ; // donner chaine from index 6 lenth(7)
echo "<br>" ;
echo strpos($chaine,"my") ; // trouver la position de la premiere occurence 
echo "<br>" ;
echo str_repeat("HELLO" ,3);
echo "<br>" ;
echo str_replace("nora" , "cutie" ,$chaine) ;
echo "<br>" ;
echo strlen($chaine) ;
echo "<br>" ;

?>