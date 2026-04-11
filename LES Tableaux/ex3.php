<?php
//  Exercice 3 :
$employé = [
    "nom" => "Elayane",
    "prenom" => "Nora" ,
    "poste" => "Full Stack devoloper",
    "salaire" => 15000 ,
    "departemant" => "BackEnd" 
];
foreach($employé as $key => $value){
    echo $key . " : " . $value . "<br>" ;
}
$pourcentage = $employé["salaire"] * 0.1 ; 
$employé["salaire"] += $pourcentage ;
echo $employé["salaire"] ;
$employé["email"] = "nora@gmail.com";
unset($employé["departemant"]) ;
echo  "<br>" ; 
print_r($employé) ;
$rest = array_keys($employé);
echo "<br>" ;
print_r($rest) ;


