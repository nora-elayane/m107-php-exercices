<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultat.php"  method="post">
        <input type="number" name="val" id="val" placeholder="Valeur"> 
        <label for="">Choisie :</label>
        <select name="op" id="op">
            <option value="C">Celisuis To Fahrenheit</option>
            <option value="F">Fahrenheit To Celisuis</option>
        </select>
        <button type="submit">Convert</button>
    </form>
</body>
</html>