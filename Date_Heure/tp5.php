<?php
$tab =[
    ["titre" => "annivarsary" , "date" => "2026-05-14" , "description" => "mon annivairsaire 22"],
    ["titre" => "fin du premiere année" ,  "date" => "2026-07-21" , "description" => "1ER année end"],
    ["titre" => "Debut du deuziéme année" ,  "date" => "2026-09-14" , "description" => "2eme anné et last "],
    ["titre" => "regional" ,  "date" => "2026-06-16" , "description" => "Regional js et php "],
    ["titre" => "Debut du premiére année" ,  "date" => "2025-09-14" , "description" => "debut du parcour ofppt cmc"],
];
usort($tab , function ($a, $b) { 
    $c =date_create($a["date"]);
    $d =date_create($b["date"]);
    return $c <=> $d ;
})
;echo "<pre>";
print_r($tab);
echo "</pre>" ;
echo "<br> ";

echo "<table>" ;
echo "<tr>";
echo "<td>Titre</td>";
echo "<td>Date</td>";
echo "<td>Description</td>";
echo "</tr>" ; 
foreach($tab as $k){
    echo "<tr>";
    echo "<td>$k[titre]</td>";
    echo "<td>$k[date]</td>";
    echo "<td>$k[description]</td>";

    echo "</tr>";
}
echo "</table>" ;
echo "<br> ";
echo "<style>td , table{border:1px solid black}</style>";

echo "<table>" ;
echo "<tr>";
echo "<td>Titre</td>";
echo "<td>Date</td>";
echo "<td>Description</td>";
echo "<td>Passé ou non </td>";
echo "<td>Jours restants</td>";
echo "<td>Jour plus proch</td>";

echo "</tr>" ; 
foreach($tab as $k){
    // ( date($k["date"]) < date("Y-m-d"))
    if( date_create() > date_create($k["date"])){
        // echo "yes" ;
        echo "<tr>";
    echo "<td style='background-color: green;'>$k[titre]</td>";
    echo "<td style='background-color: green;'>$k[date]</td>";
    echo "<td style='background-color: green;'>$k[description]</td>";
    echo "<td style='background-color: grey;color:white'>Passé</td>";
    echo "<td></td>" ;
    echo "<td></td>" ;


    echo "</tr>";
    }else{
        $d = new DateTime(date("Y-m-d"));
        $r = $d->diff(new DateTime($k['date']));
        $r = $r->days;
    echo "<tr>";
    echo "<td>$k[titre]</td>";
    echo "<td>$k[date]</td>";
    echo "<td>$k[description]</td>";
    echo "<td style='background-color: orange;color:white'>A venir</td>";
    echo "<td style='background-color: pink;color:black'>$r jours</td>";

    if($r<40){
            echo "<td style='background-color: red;color:white'>Cloose</td>";
        }else{
        echo "<td></td>" ;
    }


    echo "</tr>";
    }
}


