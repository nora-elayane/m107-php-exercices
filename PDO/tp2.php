<?php
class DataBase{
   private $pdo = null ; 
   public function  __construct(){
      try {
             $this->pdo = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8" , "root" , "") ;
             echo "connexion avec succée" ;
             $this->pdo->query("CREATE TABLE IF NOT EXISTS livres(isbn_livre VARCHAR(30) PRIMARY KEY NOT NULL UNIQUE 
                              , titre_livre VARCHAR(40) NOT NULL , nomcomplet_auteur VARCHAR(40) NOT NULL 
                              , nb_pages INT NOT NULL , prix FLOAT NOT NULL)");
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
   public function insert(	$isbn_livre ,	$titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix	){
      $stm = $this->pdo->prepare("INSERT INTO livres(isbn_livre ,	titre_livre ,	nomcomplet_auteur	, nb_pages ,prix) values(? , ? , ? , ? , ?)") ; 
      $stm->execute([$isbn_livre ,	$titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix]) ;
      return $this->pdo->lastInsertId() ; 
   }
   //read : 
   public function select(){
      $p = $this->pdo->query("SELECT * FROM livres") ; 
      return $p->fetchAll(PDO::FETCH_ASSOC) ; 
   }
   //update : 
   public function update( $titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix , $isbn_livre){
      $stm =$this->pdo->prepare("UPDATE livres SET  titre_livre=? ,	nomcomplet_auteur =?, nb_pages =?, prix=? WHERE isbn_livre =?") ;
      $stm->execute([ $titre_livre ,	$nomcomplet_auteur ,	$nb_pages ,	$prix , $isbn_livre]) ;
   }
   //delete : 
   public function delete($id){
      $stm = $this->pdo->prepare("DELETE FROM livres WHERE isbn_livre= ?") ;
      $stm->execute([$id]) ; 
   }
}

$db = new DataBase() ; 
// echo $db->insert("isbn2" , "Clean code" , "Nora Elayane" , 234 , 200) ;
$db->update("Clean" , "Nora Elayane" , 234 , 200 , "isbn1") ;
$db->delete("isbn2") ; 
echo "<pre>" ; 
print_r( $db->select()) ;
echo "</pre>" ;


?>