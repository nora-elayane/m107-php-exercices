<?php
if(empty($_POST["montant"])){
    header("Location:devises_form.php") ;
}else{
    $m = $_POST["montant"] ;
    $s = $_POST["source"] ;
    $c = $_POST["cible"] ;
    if($s == $c){
        echo "Même devise,aucune conversion nécessaire" ;
    }else{
        $t = ["EUR" => 1.0,"MAD" => 10.85,"USD" => 1.09];
        foreach ($t as $key => $value) {
            if($key == $c){
                $res = round((($m/$t[$s]) * $value ),2);
                echo "$res $c " ;
            }
        }
    }
}


?>