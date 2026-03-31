<?php

if(empty($_POST["nom"]) || empty($_POST["nb"]) || empty($_POST["prix"]) ){
    header("Location:restaurant_form.php?msg=Veuillez implementer le form!") ;
}else{
    $name = $_POST["nom"] ;
    $nombre = $_POST["nb"] ;
    $price = $_POST["prix"] ;
    $total = $nombre * $price ;
    $tva = $total * 0.2 ;
    $ttc = $total + $tva ;
    echo "le sous totale : " . number_format($total) . "DH <br>" ;
    echo  "la TVA a 20%  :" . ($tva) . " DH <br>" ;
    echo "Le total TTC : " . $ttc . " DH <br>"  ;
    if(isset($_POST["pour"])){
        $pour = $ttc * 0.1;
        echo "le total ttc avec pourboir : " . ($pour + $ttc) . " DH <br>" ;
    }




}