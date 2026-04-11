<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>Inscription : </h1>
    <form action="validation.php" Method="post" enctype="multipart/form-data">
        <label for="">Nom : </label>
        <input type="text" name="nom" placeholder="nom"> <br> <br>
        <label for="">Prenom : </label>
        <input type="text" name="prenom" placeholder="prenom"> <br> <br>
        <label for="">Email : </label>
        <input type="text" name="email" placeholder="Email"> <br> <br>
        <label for=""> Image: </label>
        <input type="file" name="img" > <br> <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>