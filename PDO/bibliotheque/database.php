<?php
class DataBase{
   private $pdo = null ; 
   public function  __construct(){
      try {
             $this->pdo = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8" , "root" , "") ;
             $this->pdo->query("CREATE TABLE IF NOT EXISTS livres(isbn_livre VARCHAR(30) PRIMARY KEY NOT NULL UNIQUE 
                              , titre_livre VARCHAR(40) NOT NULL , nomcomplet_auteur VARCHAR(40) NOT NULL 
                              , nb_pages INT NOT NULL , prix FLOAT NOT NULL , image VARCHAR(50) NOT NULL)");
      } catch (PDOException $e) {
         echo $e->getMessage() ; 
      }
   }
   // recherche : 
   public function rechercher($id){
      $stm = $this->pdo->prepare("SELECT * FROM livres WHERE isbn_livre = ?") ; 
      $stm->execute([$id]) ; 
      return $stm->fetch(PDO::FETCH_ASSOC) ;
   }
   //Crud 
   //	isbn_livre	titre_livre	nomcomplet_auteur	nb_pages	prix	
   //create : 
   public function insert(	$isbn_livre ,	$titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix	, $image){
      $stm = $this->pdo->prepare("INSERT INTO livres(isbn_livre ,	titre_livre ,	nomcomplet_auteur	, nb_pages ,prix , image) values(? , ? , ? , ? , ? , ?)") ; 
      $stm->execute([$isbn_livre ,	$titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix , $image]) ;
      return $this->pdo->lastInsertId() ; 
   }
   //read : 
   public function select(){
      $p = $this->pdo->query("SELECT * FROM livres order by isbn_livre ") ; 
      return $p->fetchAll(PDO::FETCH_ASSOC) ; 
   }
   //update : 
   public function update( $titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix , $image ,  $isbn_livre){
      $stm =$this->pdo->prepare("UPDATE livres SET  titre_livre=? ,	nomcomplet_auteur =?, nb_pages =?, prix=? , image =? WHERE isbn_livre =?") ;
      $stm->execute([ $titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix, $image , $isbn_livre]) ;
   }
   //delete : 
   public function delete($id){
      $stm = $this->pdo->prepare("DELETE FROM livres WHERE isbn_livre= ?") ;
      $stm->execute([$id]) ; 
   }
   //valider image :
   public function valideImage($image){
      $types = ["image/png" => ".png" , "image/jpg" => ".jpg" , "image/jpeg" => ".jpeg"];
      $finfo = new finfo(FILEINFO_MIME_TYPE) ;
      $mime = $finfo->file($image["tmp_name"]) ;
      if(array_key_exists($mime , $types) && $image["size"] <= 2 * 1024 * 1024 ){
         return true ;
      }else{
         return false ;
      }
   }
   //ajouter image  
   public function ajouterImage($image){
      $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
      $img = uniqid() . "." . $ext ;
      $dest = __DIR__ . "/covers/" . $img ; 
      move_uploaded_file($image["tmp_name"] , $dest) ;
      return $img ; 

   }
}


$db = new DataBase() ; 
// echo $db->insert("isbn2" , "Clean code" , "Nora Elayane" , 234 , 200) ;
// $db->update("Clean" , "Nora Elayane" , 234 , 200 , "isbn1") ;
// $db->delete("isbn2") ; 
// echo "<pre>" ; 
// print_r( $db->select()) ;
// echo "</pre>" ;


?>