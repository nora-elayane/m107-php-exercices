<?php
$commandes = [
    ["produit" => "clavier" , "quantité" => 2 , "prix_unitaire" => 30],
    ["produit" => "unité centrale" , "quantité" => 4 , "prix_unitaire" => 500],
    ["produit" => "USB" , "quantité" => 10 , "prix_unitaire" => 10],
    ["produit" => "LAPTOP" , "quantité" => 10 , "prix_unitaire" => 800],

];
$montant = [] ;
// $commandes["montant"] 
$montant = (array_map(fn($n)=>$n["quantité"]*$n["prix_unitaire"],$commandes));
print_r($montant);
$prixDeppase = [];
$prixDeppase = array_filter($montant,fn($n)=> $n > 100) ;
echo "<br>" ;
print_r($prixDeppase);
echo "<br>" ;
$r = array_reduce($montant , fn($n , $i)=>$n+= $i);
echo $r ;
for($i = 0 ; $i < count($commandes); $i++){
    $commandes[$i]["montant"]= $montant[$i];
}
echo "<br>" ;
echo "<br>" ;
print_r($commandes);
echo "<br>" ;
echo "<br>" ;
// print_r($commandes);
usort($commandes , function ($a, $b) {
    return $b["montant"] - $a["montant"] ;
});
print_r($commandes);
echo "<style>td{border:solid 1px black}</style>";
echo "<table>";
echo "<tr>";
echo "<td>Produit</td>" ;
    echo "<td>qunatité</td>" ;
    echo "<td>prix Unitaire</td>" ;
    echo "<td>mantant</td>" ;
    echo "</tr>" ;
for($i = 0; $i < count($commandes);$i++ ){
    echo "<tr>";
    $n = $commandes[$i]["produit"];
    $m = $commandes[$i]["quantité"];
    $l = $commandes[$i]["prix_unitaire"];
    $k = $commandes[$i]["montant"];
    echo "<td>$n</td>" ;
    echo "<td>$m</td>" ;
    echo "<td>$l DH</td>" ;
    echo "<td>$k DH</td>" ;
    echo "</tr>" ;
}
echo "</table>" ;

