<?php
if(empty($_POST["prenom"]) || empty($_POST["poids"]) || empty($_POST["cm"]) ){
    header("location:imc_form.php");
}else{
    $n =  $_POST["prenom"] ;
    $p = $_POST["poids"] ;
    $t = $_POST["cm"] ;
    $IMC =round(( $p/(($t/100) ** 2)),2 );
    $categorie = "" ;
    if($IMC < 18.5){
        $categorie = "Maigreur" ;
    }elseif($IMC <24.9){
        $categorie = "Normal" ;
    }elseif($IMC < 29.9){
        $categorie = "SuperpOIds" ;
    }else{
        $categorie = "Obesité" ;
    }

    echo "Bonjour $n | Votre poids en Kg: $p | votre taille en cm : $t | IMC : $IMC | Categorie : $categorie " ;

}
?>