<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8mb4" ,"root" , "");
    echo "conexion avec succée" ; 
} catch (PDOExeption $e) {
    echo $e->get_message() ;
}
 


?>