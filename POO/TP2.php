<?php

class Livre{
    public $titre ; 
    public $auteur ; 
    public $annee ; 
    public $prix ; 
    public function __construct($titre , $auteur , $annee , $prix){
            $this->titre = $titre ; 
            $this->auteur = $auteur ; 
            $this->annee = $annee ; 
            $this->prix = $prix ;
    }
    public function afficher(){
        echo "le titre de livre est : " . $this->titre . " le nom de l'auteur est : " . $this->auteur . " l'année est : " . $this->annee . " le prix est :  " . $this->prix ; 
    }
    public function estRecent(){
        if($this->annee > 2015){
            return true ; 
        }
    }
    public function __destruct(){
        echo "livre $this->titre retiré de la mémoire" ;
    }
}

$livre1 = new Livre("clean code" , "Nora" , 2026 , 200) ; 
$livre1->afficher();
echo "<br>" ;
echo ($livre1->estRecent()) ; 


