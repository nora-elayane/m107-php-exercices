<?php
if(!empty($_POST["val"])){
    $o = $_POST["op"] ;
    $v = $_POST["val"] ;
    if($o == "C"){
            $res = ($v * 9/5) + 32 ;
            echo "la valeur en Fahrenheit est : $res °F, la valeur en Celisius : $v °C";
    }elseif($o == "F"){
            $res = ($v - 32) * 5/9 ;
            echo "la valeur en Celisuis est : $res °C , la valeur en Fahrenheit : $v °F";

    }
    }else{
       header("Location:ConverterTemp.php") ;
    }



?>