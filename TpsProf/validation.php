<?php

if(empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) || empty($_FILES["img"]) ){
    echo "saisire tous les données" ;
}else{
    $p = "image/". $_FILES["img"]["name"] ;
    move_uploaded_file($_FILES["img"]["tmp_name"] , $p) ;
    echo ($_POST["nom"]) . "<br>" ;
    echo ($_POST["prenom"]) . "<br>" ;
    echo ($_POST["email"]) . "<br>" ;
    echo "<img width='200px' src='image/" .$_FILES["img"]["name"]."' > " ;
}


