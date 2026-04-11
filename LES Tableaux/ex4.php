<?php
// Exercice 4 :
$t = [
    [12,14,16],
    [18,20,19],
    [10,11,9],
];
$somme = 0 ;
echo "<table>";
foreach($t as $n){
    echo "<tr>" ;
    foreach($n as $m){
        $somme += $m ;
        echo" <td style='border:solid 1px black'>$m</td>" ;
    }
    echo "</tr>" ;
}
echo "</table>" ;
echo "somme: " . $somme ; 
echo "<br>" ;
$ta  = [
    [
        "nom" => "nora" ,
        "note_math" => 20 ,
        "note_info" => 19 ,
        "note_anglais" => 20 ,
    ],[
        "nom" => "adam" ,
        "note_math" => 14 ,
        "note_info" => 10 ,
        "note_anglais" => 16 ,
    ],[
        "nom" => "ziad" ,
        "note_math" => 17 ,
        "note_info" => 13 ,
        "note_anglais" => 20 ,
    ],[
        "nom" => "hamza" ,
        "note_math" => 18 ,
        "note_info" => 11 ,
        "note_anglais" => 16 ,
    ],[
        "nom" => "nizar" ,
        "note_math" => 5 ,
        "note_info" => 8 ,
        "note_anglais" => 10 ,
    ]
];

$new = [] ; 
foreach($ta as $q){
    $somme = 0 ;
    $nom = "" ;
    foreach($q as $key => $value){
        if(is_string($value)){
            $nom = $value ;
            continue ;
        }else{
            $somme += $value ;
        }
    }
    $moyenne =number_format(( $somme / 3),2) ; 
    $new["$nom"] = $moyenne ;
}
print_r($new);
echo "<br>";
arsort($new);
print_r($new);
echo "<br>";
$name = "" ;
echo max($new);
foreach($new as $n => $k){
    if($k == max($new)){
        $name = $n ;
    }
}
echo "<br>";
echo "la note la plus haute est : " . max($new) . " par : " . $name ; 

