<?php
// ■ TP 3 — Gestion d'une classe :
$etudiants = [
    [
        "et1" =>[
            "Maths" => 20 ,
            "PHP"   => 19 ,
            "BDD"   =>  17 ,
            "Algo"  =>  20 ,
        ]
    ],
    [
        "et2" =>[
            "Maths" => 13 ,
            "PHP"   => 14 ,
            "BDD"   =>  10 ,
            "Algo"  =>  15 ,
        ]
    ],
    [
        "et3" =>[
            "Maths" => 10 ,
            "PHP"   => 14 ,
            "BDD"   =>  18 ,
            "Algo"  =>  20 ,
        ]
    ],
    [
        "et4" =>[
            "Maths" => 12 ,
            "PHP"   => 15 ,
            "BDD"   =>  17 ,
            "Algo"  =>  10 ,
        ]
    ],
    [
        "et5" =>[
            "Maths" => 18 ,
            "PHP"   => 19 ,
            "BDD"   =>  17 ,
            "Algo"  =>  17 ,
        ]
    ],
    [
        "et6" =>[
            "Maths" => 14 ,
            "PHP"   => 9 ,
            "BDD"   =>  12 ,
            "Algo"  =>  20 ,
        ]
    ],
];
echo "<style>table{border-collapse :collapse}</style>";

echo "<style>td{border:solid 1px black ; padding:8px;}</style>";
echo "<table>";
echo "<tr>
<td>Nom : </td>
<td>Maths</td>
<td>PHP</td>
<td>BDD</td>
<td>ALGO</td>
</tr>" ;
foreach($etudiants as $et){
    foreach($et as $key => $value ){
        echo "<tr>";
        echo "<td>$key</td>";
        foreach($value as $k => $v){
        echo "<td>$v</td>";
        }
        echo "</tr>";
    }
}
echo "</table>" ;

$somme ; 
$moyenne = 0 ; 
$mention = "" ;
$new = [] ;
foreach($etudiants as $et){
    foreach($et as $key => $val){
        $somme = array_sum($val);
        $moyenne = $somme/count($val) ;
        $new += [$key => $moyenne] ;
        switch($moyenne){
            case ($moyenne>=16):$mention = "TB" ;
            break ;
            case($moyenne>=14):$mention ="B" ;
            break ;
            case($moyenne>=12):$mention ="AB" ;
            break ;
            case($moyenne>=10):$mention ="P" ;
            break ;
            case($moyenne < 10):$mention ="F" ;
            break ;
        }
        echo $key . " : " . $moyenne . "avec mention " . $mention ;
        echo "<br>" ;
    }
}
$sommem =0 ;
$sommep =0 ;
$sommeb =0 ;
$sommea =0 ;
foreach($etudiants as $et){
    foreach($et as $key => $value){
            $sommem += $value['Maths'] ;
            $sommep += $value['PHP'] ;
            $sommeb += $value['BDD'] ;
            $sommea += $value['Algo'] ;
            }
            }
echo "la moyenne de la matiére math est : " . $sommem /count($etudiants) . "<br>" ;
echo "la moyenne de la matiére PHP est : " . $sommep /count($etudiants) . "<br>" ;
echo "la moyenne de la matiére BDD est : " . number_format(($sommeb /count($etudiants)),2) . "<br>" ;
echo "la moyenne de la matiére Algo est : " . $sommea /count($etudiants) . "<br>" ;

;
arsort($new);
foreach($new as $k => $v){
    echo $k ." : " . $v  . "<br>";
}

