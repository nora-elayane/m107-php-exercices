<?php
//  TP 1 — Gestion d'une liste de notes :
$notes = [19 ,12 , 10 , 15 , 18 , 9 , 17 , 16 , 8 , 10] ;
echo "<ul>";
$nb = 0 ;
foreach($notes as $note){
    echo "<li>$note</li>" ;
    if($note >= 10){
        $nb += 1 ;
    }
}
echo "</ul>" ;
echo "<br> ";
echo "La note la plus Haute : " . max($notes) ;
echo "<br> ";
echo "La note la plus basse : " . min($notes) ;
echo "<br> ";
echo "La Moyenne  : " . (array_sum($notes) / count($notes));
echo "<br> ";
sort($notes);
echo(implode(" |",$notes)) ;
echo "<br> ";
echo "Le nombre des personnes qui ont une note superieure ou egale 10 sont : " . $nb ;
echo "<br> ";



?>