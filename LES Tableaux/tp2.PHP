<?php
$produits =[ [
    "nom" => "ananas" ,
    "prix" => 20 , 
    "quantité" => 2 ,
    "img"  =>  "<img src='/LES Tableaux/image/ananas.jpg'>" , 
],
[
    "nom" => "banane" ,
    "prix" => 6 , 
    "quantité" => 4 ,
    "img"  => "<img src='/LES Tableaux/image/banane.jpg'>"  ,
],
[
    "nom" => "pomme" ,
    "prix" => 13 , 
    "quantité" => 1,
    "img"  =>  "<img src='/LES Tableaux/image/pomme.jpg' width='200px'>" ,

],
[
    "nom" => "orange" ,
    "prix" => 3 , 
    "quantité" => 5,
    "img"  =>  "<img src='/LES Tableaux/image/orange.jpg'>" ,
],
[
    "nom" => "cerise" ,
    "prix" => 25, 
    "quantité" => 2,
    "img"  =>  "<img src='/LES Tableaux/image/cerise.jpg'>",
]
   
];
echo "<table style='border:solid 1px black'>";
echo "<tr >";
echo "<td >nom</td>" ;
echo "<td>prix</td>" ;
echo "<td>quantité</td>" ;
echo "<td>Image</td>" ;
echo "</tr>";
foreach($produits as $produit){
    echo "<tr>" ;
    foreach($produit as $key => $value){
        echo "<td style='border:solid 1px black'>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
$new = [] ;
foreach($produits as $produit){
    $total = $produit["prix"] * $produit["quantité"] ;
    $new[$produit['nom']] = $total ;
}
print_r($new) ;
echo "<br>" ;
$min = $new["ananas"] ;
$max = $new["ananas"] ;
$nmax = "" ;
$nmin = "" ;
foreach($new as $n => $p){
    if($p > $max){
        $max = $p;
        $nmax = $n ;
    }
    if($p < $min){
        $min = $p;
        $nmin = $n ;
    }
}
echo "le produit le plus cher est : $nmax , de prix $max" ;
echo "<br>" ;
echo "le produit le moins cher est :" . $nmin . ", de prix " . $min ;
echo "<br>" ;
echo max($new);
echo "<br>" ;
echo min($new);
echo "<br>" ;
asort($new,) ;
print_r($new);
echo "<br>" ;
echo "<br>" ;
