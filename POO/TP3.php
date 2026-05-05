<?php

class Etudiant{
    private $nom ; 
    private $age ; 
    private $note ; 
    public function __construct($nom , $age , $note){
        $this->nom = $nom ;
        $this->setAge($age) ;
        $this->setNote($note) ;
    }
    public function getNom(){
        return $this->nom ; 
    }
    public function getAge(){
        return $this->age ; 
    }
    public function getnote(){
        return $this->note; 
    }
   public function setAge($age){
      if($age >= 18 && $age <= 35){
        $this->age = $age ; 
      }else{
        echo "age invalide" ;
      }
   }
   public function setNote($note){
    if($note >= 0 && $note <= 20){
        $this->note = $note ;
    }else{
        echo "note invalide" ; 
    }
   }
   public function getMention(){
    if($this->note >= 16){
        echo "mention tres bien" ;
    }elseif($this->note >= 14){
        echo "mention bien" ;
    }elseif($this->note >= 12){
        echo "mention assez bien";
    }elseif($this->note >= 10){
        echo "mention passable" ; 
    }
   }
}

$et = new Etudiant("Nora" , 22 , 20) ; 
$et->getMention() ;
