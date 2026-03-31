<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//     $total = 0 ;
//     $price = "" ;
//     $name = "" ;
//     $quantity = "" ;
//     $chaine = "" ;
// if(!empty($_POST['prod']) && !empty($_POST['pr']) && !empty($_POST['quan'])){
//         $name = $_POST['prod'] ;
//         $price = $_POST['pr'] ;
//         $quantity = $_POST['quan'] ;
//         $total = $price * $quantity ;
//         if($total > 100){
//             $chaine = "Commande Enregistré !" ;
//         }else{
//             $chaine = "Petite Commande" ;
//         }

// }
?>


    <form action="" method="post">
        <label for="produit">Nom du produit:</label>
        <input type="text" id="prod" name="prod"> <br> <br>
        <label for="prix">Prix Unitaire :</label> 
        <input type="number" name="pr" id="pr"><br> <br>
        <label for="quantite">Quantité :</label> 
        <input type="number" name="quan" id="quan">
        <button type="submit">Submit</button>  <br> <br>  
        
    </form>
    <?php
    $total = 0 ;
if(isset($_POST['prod'] ,$_POST['pr'],$_POST['quan'])){
        $name = $_POST['prod'] ;
        $price = $_POST['pr'] ;
        $quantity = $_POST['quan'] ;
        $total = $price * $quantity ;
        echo'<span> Le produit :' . $name . '</span><br>';
        echo '<span>Le Prix ' . $price . '</span><br>';
        echo '<span>La quantité  ' .$quantity . '</span><br>';
        echo '<span>Le totale est ' . $total . '</span><br>' ;
        if($total > 100){
            $chaine = "Commande Enregistré !" ;
        echo '<span>' . $chaine . '</span>';
        }else{
            $chaine = "Petite Commande" ;
            echo '<span>' . $chaine . '</span>';
        }
}
?>
</body>
</html>