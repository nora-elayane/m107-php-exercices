<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table de Multiplication :</h1>
    <form action="tableResult.php" method="get">
        <fieldset>
        <label>le nombre:</label>
        <input type="number" name="nb" min="1" max="20"> <br> <br>
        <label>la limite:</label>
        <input type="number" name="li" min="1" max="20"> <br> <br>
        <button type="submit">Calculer</button>
        </fieldset>
    </form>
</body>
</html>