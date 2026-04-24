<?php
echo "</table>" ;
if(isset($_GET["vider"])){
    $fichier = fopen("journal.txt" , "w") ; 
    fwrite($fichier , "") ; 
    fclose($fichier) ; 
    header("location:TP2.php") ;
    exit() ; 
}
?>
<form action="#" method="get">
    <button value="vider" name="vider" type="submit">vider le journal</button>
</form>
<?php
// $fichier = fopen("journal.txt" , "a" );
$str = date('m-d-Y H:i:s').  ($_SERVER['REMOTE_ADDR']) . "\n" ;
file_put_contents("journal.txt" , $str  , FILE_APPEND ) ;
$fichier = file("journal.txt") ; 
$n = count($fichier) ;
echo "<table border >";
echo "<tr>
        <td>le nombre des visites est : $n </td>
        </tr>" ;
foreach ($fichier as $key => $value) {
    echo "<tr>
        <td>$value</td>
        </tr>" ;
}

?>