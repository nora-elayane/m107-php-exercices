<?php

$produits = [
    "Orang" => ["dpr" => "11-10-2012" , "dateV" => 15 , "qnt" => 122] ,
    "Pomme" => ["dpr" => "14-05-2018" , "dateV" => 22 , "qnt" => 12] ,
    "banane" => ["dpr" => "18-07-2022" , "dateV" => 12 , "qnt" => 24] ,
    "Fraise" => ["dpr" => "20-9-2025" , "dateV" => 33 , "qnt" => 54] ,
    "Mangue" => ["dpr" => "10-12-2012" , "dateV" => 15 , "qnt" => 122] ,
    ];
    $dateAc = new DateTime();
    foreach ($produits as $key => $value) {
        $d = new DateTime($value["dpr"]) ;
        $t = $dateAc->diff($d);
        $DateExp =  "$t->d-$t->m-$t->y" ;
        // "$t->d-$t->m-$t->y"
        $produits[$key]["dateEx"] = $DateExp;

    }
echo "<pre>";
print_r($produits) ;
echo "</pre>" ;
echo "<style>td{border:1px solid black}</style>";
echo "<table>"; 
echo "<tr>
<td>Date de production</td>
<td>Date de Validation</td>
<td>Date de quantité</td>
<td>Date d'exporation</td>
</tr>" ;
foreach ($produits as $key => $value) {
    echo "<tr>" ;

    echo "<td>$key</td>";
    // echo "<td>.$value['dpr']</td>";

    


    echo "</tr>"  ;
}
echo "</table>" ;
