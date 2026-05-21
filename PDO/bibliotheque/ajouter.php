<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un Livre</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="isbnLivre">ISBN Livre :</label>
        <input type="text" name="isbnLivre"> <br> <br>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"> <br> <br>
        <label for="nomAuteur">Nom de  Auteur :</label>
        <input type="text" name="nomAuteur"> <br> <br>
        <label for="nbPages">nombre des pages:</label>
        <input type="number" name="nbPages"> <br> <br>
        <label for="prix">Prix :</label>
        <input type="number" name="prix"> <br> <br>
        <label for="image">Cover :</label>
        <input type="file" name="image"> <br> <br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

<?php
if(!empty($_POST["isbnLivre"]) && !empty($_POST["titre"]) && !empty($_POST["nomAuteur"]) && !empty($_POST["nbPages"]) && !empty($_POST["prix"]) && !empty($_FILES["image"]["name"])){
    require_once "database.php" ; 
    if(!$db->valideImage($_FILES["image"])){
            header("Location:erreur.php?msg=Probléme d'image") ;
    }else{
       $imageName =  $db->ajouterImage($_FILES["image"]) ;
       $db->insert($_POST["isbnLivre"] , $_POST["titre"] , $_POST["nomAuteur"] , $_POST["nbPages"] , $_POST["prix"] , $imageName ) ;
       header("location:index.php") ; 
    }
}


?>