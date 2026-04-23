<form action="#" method="get">
    <input type="text" name="search">
    <button type="submit">search</button>
</form>
<?php
$content = file_get_contents("etudiants.txt") ;
echo "<pre>" ;
echo $content ;
echo "</pre>" ;


$con = file("etudiants.txt") ;
print_r ($con);
echo "<table border>";  
foreach ($con as $key => $value) {
    if($key % 2 == 0){
        echo" <tr>
        <td style='background-color:grey;'>{$value}</td></tr>" ;
}else{

        echo" <tr>
        <td>{$value}</td></tr>" ;
    }}

echo "</table> <br><br>" ;
if(isset($_GET['search'])){
    $fichier = fopen("etudiants.txt" , "r") ; 
    while(!feof($fichier)){
        $n =  fgets($fichier) ;
        if(stripos($n , $_GET['search']) == 0){
            echo $n ; 
        } ;
    }
    fclose($fichier) ; 
}
?>