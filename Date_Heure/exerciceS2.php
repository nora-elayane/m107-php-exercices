<!-- Analyse statistique de données -->
<?php
echo "<table border='1'>";
echo "<tr><th>Date</th><th>Matin</th><th>Midi</th><th>Soir</th></th><th>Moyenne</th></tr>";
$table = [] ; 
$total= 0 ; 
$jChaud = 0;
$jFroid = 47 ; 
for ($i = 0; $i < 30; $i++) {
    $date = date('Y-m-d', strtotime("+$i days"));
    
    // Generating random temps for the example
    $matin = rand(0, 37);
    $midi  = rand(10, 47);
    $soir  = rand(9, 28);
    $table[$date ] = ["matin" => $matin , "midi" => $midi , "soir" => $soir];
    $moyenne = floor(($matin + $midi + $soir)/3) ;
    $total += $moyenne ;
    if($moyenne > $jChaud ){
        $jChaud = $moyenne ;
    }
    if($jFroid > $moyenne){
        $jFroid = $moyenne ;
    }

    echo "<tr>
            <td>$date</td>" ;
            if($matin > 35){
            echo "<td style='background-color:#FF5A5A; color:white'>{$matin}°C</td>" ;
            }elseif($matin < 10){
            echo "<td style='background-color:#7DAACB ; color:white'>{$matin}°C</td>" ;
            }else{
            echo "<td style='background-color:#FFB33F ; color:white'>{$matin}°C</td>" ;
            }
            if($midi > 35){
            echo "<td style='background-color:#FF5A5A ; color:white'>{$midi}°C</td>" ;
            }elseif($midi < 10){
            echo "<td style='background-color:#7DAACB ; color:white'>{$midi}°C</td>" ;
            }else{
            echo "<td style='background-color:#FFB33F ; color:white'>{$midi}°C</td>" ;
            }
            if($soir > 35){
            echo "<td style='background-color:#FF5A5A ; color:white'>{$soir}°C</td>" ;
            }elseif($soir < 10){
            echo "<td style='background-color:#7DAACB ; color:white'>{$soir}°C</td>" ;
            }else{
            echo "<td style='background-color:#FFB33F ; color:white'>{$soir}°C</td>" ;
            }
            if($moyenne > 35){
            echo "<td style='background-color:#FF5A5A ; color:white'>{$moyenne}°C</td></tr>" ;
            }elseif($moyenne < 10){
            echo "<td style='background-color:#7DAACB ; color:white'>{$moyenne}°C</td></tr>" ;
            }else{
            echo "<td style='background-color:#FFB33F ; color:white'>{$moyenne}°C</td></tr>" ;
            }
}
echo "</table>";
echo " la température moyenne mensuelle est : " . floor($total/30) . "°C <br>" ; 
echo "le jour le plus Froid  est : " . floor($jFroid) . "°C <br>" ; 
echo "le jour le plus Chaud est : " . floor($jChaud) . "°C <br>" ; 


?>