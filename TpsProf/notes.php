<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bulletin.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="Le nom..."> <br> <br>
        <input type="number" name="note1" placeholder="Note 1 : " min="0" max="20"><br> <br>
        <input type="number" name="note2" placeholder="Note 2 : " min="0" max="20"><br> <br>
        <input type="number" name="note3" placeholder="Note 3 : " min="0" max="20"><br> <br>
        <button type="submit">Envoyer</button>

    </form>
</body>
</html>