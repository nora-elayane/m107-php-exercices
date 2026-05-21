<?php
if(isset($_GET['id'])){
    require_once "database.php" ;
    $tab = $db->rechercher($_GET['id']) ;
   echo '<h1>Modifier</h1>
        <form action="" method="post" enctype="multipart/form-data">' ;
echo '<label for="isbnLivre">ISBN Livre :</label><input type="text" name="isbnLivre" value="' . $tab['isbn_livre'] . '"><br><br>';
echo '<label for="titre">Titre :</label><input type="text" name="titre" value="' . $tab['titre_livre'] . '"><br><br>';
echo ' <label for="nomAuteur">Nom de  Auteur :</label><input type="text" name="nomAuteur" value="' . $tab['nomcomplet_auteur'] . '"><br><br>';
echo '<label for="nbPages">nombre des pages:</label><input type="number" name="nbPages" value="' . $tab['nb_pages'] . '"><br><br>';
echo '<label for="prix">Prix :</label><input type="number" name="prix" value="' . $tab['prix'] . '"><br><br>';
       echo '<label for="image">Cover :</label>
        <input type="file" name="image"> <br> <br>
        <button type="submit">Modifier</button></form>' ;

}

if(!empty($_POST["isbnLivre"]) && !empty($_POST["titre"]) && !empty($_POST["nomAuteur"]) && !empty($_POST["nbPages"]) && !empty($_POST["prix"]) && !empty($_FILES["image"]["name"])){
    if(!$db->valideImage($_FILES["image"])){
            header("Location:erreur.php?msg=Probléme d'image") ;
    }else{
       $imageName =  $db->ajouterImage($_FILES["image"]) ;
       $db->update($_POST["titre"] , $_POST["nomAuteur"] , $_POST["nbPages"] , $_POST["prix"] , $imageName , $_POST["isbnLivre"]) ;
       header("location:index.php") ; 
    }
}


?>

