<?php 

class Produit{
    public $nom ; 
    public $prix ; 
    public $quantite ;
    public function afficherInfo(){
        echo $this->nom . " " . $this->prix . " " . $this->quantite ;
    }
    public function valeurStock(){
        return $this->quantite * $this->prix ; 
    }
    public function appliquerRemise($taux){
        $remise = $taux * $this->valeurStock() ; 
        return $this->valeurStock() - $remise;
    }
}

$p1 = new Produit() ;
$p1->nom = "clavier" ; 
$p1->prix = 30 ;
$p1->quantite = 3 ;
$p1->afficherInfo() ; 
echo ($p1->valeurStock()) ;
echo "<br>" ;
echo ($p1->appliquerRemise(0.5));