<?php
// (isset($_POST['name'] , $_POST['age'] , $_POST['email']))
// !empty(trim($_POST['user'])) && !empty(trim($_POST['pass']))
$user = "nora" ;
$passw = "1234" ;
if(  strtolower(trim($_POST['user']) == $user && trim($_POST['pass']) == $passw )){
  
  echo 'Bonjour ' , $user ;
}else{
    Header("Location:inscription.php") ;
}



?>