<?php 
$file = fopen("notes.txt" , "r") ; 
if($file === false) {
    die("Impossible d'ouvrire");
}
fclose($file) ; 
$contenu = file_get_contents($file) ;

?>