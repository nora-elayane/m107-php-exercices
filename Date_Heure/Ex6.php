<?php
echo date("d/m/y");
echo "<br>" ;
echo date("y-m-d");
echo "<br>" ;
echo date("l j F  Y  à h:i ");
echo "<br>" ;

// calculer l'age exacte d'une personne née le 10/05/1998

$n = mktime(0,0,0,5,14,2004);

function age($n){
    $age = floor((time() - $n) / (365.25 * 24 * 3600))  ;
    echo $age ; 
}
age($n);
echo "<br>" ;
echo date_default_timezone_get() ;
echo "<br>" ;
echo date("Y-m-j H:i");
echo "<br>" ;
date_default_timezone_set("Africa/Casablanca");
echo date("Y-m-j H:i");
echo "<br>" ;
for($i = 1 ; $i < 7 ; $i++ ){
    echo $i ;
    echo date("l" , strtotime("+$i days" )) . "<br>";
}
echo "<br>" ;
$td = new DateTime();
$nv = date_create("2026-12-31");
$diff = $td->diff($nv);
echo( $diff->days) ;
echo "<br>" ;
$ndate = date("20003-02-31");
echo "<br>" ;
var_dump(checkdate(1 ,35,3500));
echo "<br>" ;
echo date("l" , strtotime(" last day of this month"));
echo "<br>" ;
echo date("l" , strtotime(" first day of this month"));
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;
