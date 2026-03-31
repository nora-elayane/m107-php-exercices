<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>Convertisseur de Devises</h1>
<body>
    <form action="devises_result.php"  method="post">
        <label for="">Montant :</label>
        <input type="number" name="montant" id="montant"> <br> <br>
        <label for=""></label>
        <label for="source">Devise source</label>
        <select name="source" id="source">
            <option value="EUR">EUR</option>
            <option value="MAD">MAD</option>
            <option value="USD">USD</option>
        </select>  <br> <br>
        <label for="cible">Devise cible</label>
        <select name="cible" id="cible">
            <option value="EUR">EUR</option>
            <option value="MAD">MAD</option>
            <option value="USD">USD</option>
        </select>
        <button type="submit">Converter</button>

    </form>
</body>
</html>