<?php
if($_SERVER['request_method'] == "get"){
$img=  $_FILES['img'];
$maxsize = 2 ; 
if($img['size'] > $maxsize*1024 *1024){
    echo "le fichier est trop grand" ;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="" enctype="multipart/form-data" method="get" >
        <input type="file" required name="img" >
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
