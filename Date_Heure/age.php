<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
    <label for="">Date de naissnce :</label>
    <input type="date" name="date">
    <button type="submit">Calculer</button>
    </form>
    <?php 
    if(!empty($_GET["date"])) {
        $date_Acc = new DateTime();
        $date_naissance = new DateTime($_GET["date"]) ;
        $age = $date_Acc->diff($date_naissance) ;
        echo $age->y ;
    }else{
        echo "donner votre date de naissance " ;
    }
    ?>
</body>
</html>