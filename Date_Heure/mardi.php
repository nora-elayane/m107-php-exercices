<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TOUS  Mardi</h1>
    <form action="#" method="get">
        <label for="">Date Future: </label>
        <input type="date" name="date"> 
        <button type="submit">submit</button>
    </form>
    <?php  
    if(isset($_GET["date"])){
        $dact = new DateTime() ;
        $d = new DateTime($_GET["date"]) ;
        if($d >= $dact){
            echo "<ul>" ;
            while($dact <= $d){
                
            if($dact->format("l") == "Tuesday"){
                    echo "<li>" . $dact->format("d") .  "</li>" ;
        
            }
        $dact->modify("+ 1 day ") ;
        }
        }
    echo "</ul>" ;
    }
    ?>
</body>
</html>