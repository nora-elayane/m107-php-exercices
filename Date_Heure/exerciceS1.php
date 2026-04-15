<?php

$reservations = [
    ["client" => "Nora" , "chambre" => 123 , "date_arrivée" => "12-4-2026" , "date_départ" => "12-5-2026" , "prix_nuit" => 300],
    ["client" => "Ziad" , "chambre" => 234 , "date_arrivée" => "14-4-2026" , "date_départ" => "22-4-2026" , "prix_nuit" => 200],
    ["client" => "Adam" , "chambre" =>98 , "date_arrivée" => "11-3-2026" , "date_départ" => "16-3-2026" , "prix_nuit" => 100],
    ["client" => "Hamza" , "chambre" => 76 , "date_arrivée" => "4-4-2026" , "date_départ" => "14-5-2026" , "prix_nuit" => 150],
    ["client" => "Youssef" , "chambre" => 44 , "date_arrivée" => "1-1-2026" , "date_départ" => "2-1-2026" , "prix_nuit" => 400],
];
echo "<style>td{border:1px solid black;text-align:center}</style>" ;
echo "<table>" ;
echo "<tr>
        <td>client</td>
        <td>chambre</td>
        <td>date arrivée</td>
        <td>date départ</td>
        <td>prix par nuit</td>
        <td>durée</td>
        <td>cout total</td>
        <td>encours</td>
    </tr>" ;
    $long = 0 ;
    $courte = 999999999;
    $idl = "" ;
    $idc = "" ;
    $revenue = 0 ; 
foreach ($reservations as $key => $value) {
    $dateAC = new DateTime();
    $dateAR = new DateTime($value['date_arrivée']);
    $dateD = new DateTime($value['date_départ']);
    $durée = $dateAR->diff($dateD);
    $j = ($durée->days) ;
    if($j  > $long){
        $long = $j ;
        $idl = $key ;
    }
    if($j < $courte){
        $courte = $j ;
        $idc = $key ;
    }
    $total = ($durée->m * 30 + $durée->d ) * $value['prix_nuit'] ;
    $revenue += $total ;
    $A = strtotime(date("d-m-Y")) ;
    $D = strtotime($value['date_départ']) ;
    $encours = ($D - $A) > 0 ? "encours" : "-" ; 
    echo "<tr>";
    echo "<td>" .  $value['client']. "</td>" ;
    echo "<td>" .  $value['chambre']. "</td>" ;
    echo "<td>" .  $value['date_arrivée']. "</td>" ;
    echo "<td>" .  $value['date_départ']. "</td>" ;
    echo "<td>" .  $value['prix_nuit']. "</td>" ;
    echo "<td>" . $j ."Jours" . "</td>" ;
    echo "<td>" .  $total . "DH</td>" ;
    echo "<td>" .  $encours . "</td>" ;
    echo "</tr>" ;
}

echo "</table>" ;
echo "la reservation la plus long est de " . $long . "jours : <br>";
echo "du nom : " . $reservations[$idl]['client'] . "<br>" ;
echo  "chambre : " . $reservations[$idl]["chambre"] . "<br>";

echo "la reservation la plus courte est de " . $courte  . "jours : <br>";
echo "du nom : " . $reservations[$idc]['client'] . "<br>" ;
echo  "chambre : " . $reservations[$idc]['chambre'] . "<br>";

echo "le revenue total est : " . $revenue . "DH" ;

