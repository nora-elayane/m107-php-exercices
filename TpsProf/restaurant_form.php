<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Restaurant </h1>
    <form action="facture.php" method="post">
        <label for="">Nom :</label> 
        <input type="text" name="nom" placeholder="votre nom"> <br><br>
        <label for="">Nombre des plats :</label>
        <input type="number" name="nb" id="nb"> <br><br>
        <label for="">Prix par plats : </label>
        <input type="number" name="prix" id="prix"> <br><br>
        <label for="">Pourboire :</label>
        <input type="checkbox" name="pour" id="pour">  
        <button type="submit">Facturer</button>


    </form>
</body>
</html>