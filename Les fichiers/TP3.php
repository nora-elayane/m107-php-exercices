<?php
// mkdir("data") ; 
// fopen("data/fichier.txt" , "x") ; 
// fopen("data/fichier2.txt" , "x") ; 
$con =  scandir("data");
foreach ($con as $key => $value) {
    echo "data/" . $value . "<br>" ; 
    echo floor( filesize("data/".$value) /1024 ) . " KO <br>"; 
    echo date("F m d Y H:i:s"  ,filemtime("data/".$value)) . "<br>" ; 
    echo  '<form action="#" method="get">
    <button name="'.$value.'" value="{value}">copy</button> 
    </form> ' ;
    
}
foreach ($con as $key => $value) {
    if(isset($_GET["{$value}"])){
        copy( "data/". $value , "data/"."backup_$value") ;
        echo "fichier copié"; 
        break ;
    }

}

?>

<?php
$dir = "data";

// 1. Handle the "copy" action first
if (isset($_GET['action']) && $_GET['action'] === 'copy' && isset($_GET['file'])) {
    // Sanitize the filename to prevent path traversal
    $filename = basename($_GET['file']); 
    $source = $dir . "/" . $filename;
    
    if (file_exists($source)) {
        copy($source, $dir . "/backup_" . $filename);
        echo "<p style='color:green;'>File '$filename' has been copied successfully.</p>";
    }
}

// 2. Scan and Display
if (is_dir($dir)) {
    $con = scandir($dir);
    
    echo "<table>";
    foreach ($con as $value) {
        // Skip . and ..
        if ($value === '.' || $value === '..') continue;
        
        $path = $dir . "/" . $value;
        
        echo "<tr>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "<td>" . floor(filesize($path) / 1024) . " KB</td>";
        echo "<td>" . date("F d, Y H:i:s", filemtime($path)) . "</td>";
        echo "<td>
                <form action='' method='get'>
                    <input type='hidden' name='action' value='copy'>
                    <input type='hidden' name='file' value='" . htmlspecialchars($value) . "'>
                    <button type='submit'>Copy</button>
                </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Directory '$dir' does not exist.";
}
?>