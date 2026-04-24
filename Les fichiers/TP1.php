<form action="#" method="get">
    <input type="text" name="search">
    <button type="submit">search</button>
</form>
<form action="#" method="get">
    <button type="submit">inverser ordre</button>
</form>
<!-- <button >Afficher les noms trié</button> -->
<?php
$content = file_get_contents("etudiants.txt") ;
echo "<pre>" ;
echo $content ;
echo "</pre>" ;


$con = file("etudiants.txt") ;
print_r ($con);
echo "<br> le nombre total des lignes est : " . count($con) ;
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
        if(stripos($n , $_GET['search']) === 0){
            echo $n ; 
        } ;
    }
    fclose($fichier) ; 
}
sort($con) ; 
print_r($con ); 
rsort($con) ;
echo "<br>" ;
print_r($con );  
echo "<br> filesize est : " . filesize("etudiants.txt") ; 
echo "<br> date de modification: " . date("F d Y H:i:s",filemtime("etudiants.txt")) ; 
echo "<br>le chemin complet du fichier est : " .   __DIR__ ;
?>