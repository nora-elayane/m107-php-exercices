<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
    .box{
        width: 40px;
        height: 40px;
        background-color: blueviolet;
        border: solid 1px black;
        display:inline-block;
        margin: 1px;

    }
    .deux{
        background-color: transparent;
        border: none;
        }
</style>
<body>
 <!-- 
 $p = "light" ;
 if(isset($_GET["css"])){
   $p = $_GET["css"];
 }?>
 
    <div
        class="alert alert-<php echo $p  ?> "
        role="alert"
    >
        <strong>Warning!</strong
        ><a href="#" class="alert-link">Click Here</a>
    </div> -->

<?php  
// $a = 1 ; 
// if(isset($_GET["nb"])){
//     $a = $_GET["nb"];}

// for($i = 1; $i <= $a; $i++){
//     for($j = 1;$j <= ($a - $i) ; $j++){
//         echo ' <div class="box deux "></div>'  ;
// }
//       for($k = 1 ; $k <= (2* $i - 1) ; $k++){
//             echo "<div class='box'></div>"  ;
//  }
//  echo "<br>" ;
//  }
// $d = 1;
// if(isset($_GET["nb"])){
//    (int)$d =  $_GET["nb"]   ;
// }else{
//   echo  '<div
//         class="alert alert-warning >
//         <strong>Warning!</strong
//         ><a href="#" class="alert-link">warniing</a>
//     </div>' ; 
// }
// if ($d == ""  ||  is_string((int)$d) ){
//      echo '<div
//         class="alert alert-danger >
//         <strong>Warning!</strong
//         ><a href="#" class="alert-link">warning</a>
//     </div>' ;
// }
// for ($i = $d; $i >= 1; $i--) {
//     for ($j = 1; $j <= ($d - $i); $j++) {
//         echo '<div class="box deux" style="display:inline-block; width:25px;"></div>';
//     }
//     for ($k = 1; $k <= $i; $k++) {
//         echo '<div  style="text-align: center; display:inline-block ;">
//                 <button type="button" style="text-align: center; width:50px; height:50px; margin:2px;" class="btn btn-primary">' 
//                 . $i . 
//                 '</button>
//               </div>';
//     }

//     echo "<br>";
// }


?>

<form action="inde.php" method="get">
    <input type="text" name="username" >
    <input type="password" name="pass" >
    <input type="submit" value="Log in ">
</form>



<!-- <div style="text-align:center">
    <button type="button" style="width:50px; height:50px" class="btn btn-primary"></button>
</div> -->
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>