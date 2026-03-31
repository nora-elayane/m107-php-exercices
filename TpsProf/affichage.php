<?php
if(isset($_GET['prenom'],$_GET['age'],$_GET['ville'],$_GET['genre']) ){
    $name = $_GET['prenom'] ;
    $age = $_GET['age'];
    $ville = $_GET['ville'];
    $sexe = $_GET['genre'] ;
    if($age >= 18){
        $etat = "Majeur"; 
    }else{
        $etat = "Mineur"; 
    }
    echo "Bonjour $name vous etes $sexe de $age $etat de $ville " ;
}else{
    header("Location:formulaire.php") ;
}