<?php 
if(isset($_GET['id'])){
    require_once  "database.php" ; 
    $db->delete($_GET['id']) ; 
    header("Location:index.php") ;
}
