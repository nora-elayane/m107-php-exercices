<?php
        try {
        $dated = new DateTime($_POST['deb']);
        $datef = new DateTime($_POST['fin']);
        if($dated > $datef){
            echo "date de fin avant date de début" ;
        }else{
        $res = $dated->diff($datef) ; 
        // print_r($dated) ;
        $s = floor($res->days  / 7 ); 
        echo $res->y . "Years | " . $res->m . "Mois | " . $res->d . "Jours | " . $s  . " semaines <br>";
        echo "Le jour de a semaine de " . $dated->format("d-m-Y") . " est : "  . $dated->format("l") . "<br>";
        echo "Le jour de a semaine de " . $datef->format("d-m-Y") . " est : "  . $datef->format("l") . "<br>";
        }} catch (\Throwable $th) {
        echo "Valeur invalid" ;} 
        
    ?>