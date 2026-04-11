<?php
if(empty($_POST["p1"]) || empty($_POST["p2"])){
        echo "saisire !!!" ;
}else{
    if($_POST["p1"] != $_POST["p2"]){
        echo "Les mots de passe ne correspondent pas" ;
    }else{
        if(strlen($_POST["p1"]) < 6){
            echo "force Faible";
        }elseif(strlen($_POST["p1"]) < 9){
            echo "force Moyenne";
        }else{
            echo "force Fort";
        }
    }
}