<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="affichage.php" method="get">
        <input type="text" name="prenom" id="prenom" placeholder="Votre Premon"> <br> <br>
        <input type="text" name="age" id="age" placeholder="Votre Age"> <br> <br>
        <input type="text" name="ville" id="ville" placeholder="Votre Ville"> <br> <br>
        <input type="radio" name="genre" id="homme" value="homme">
        <label for="homme">Homme</label>
        <input type="radio" name="genre" id="femme" value="femme">
        <label for="homme">Femme</label> <br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>