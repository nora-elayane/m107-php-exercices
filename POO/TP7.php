<?php

// 1. Créez une interface Calculable avec les méthodes : calculerTotal() et appliquerTaxe($taux) .
// 2. Créez une interface Affichable avec une méthode afficher() .
// 3. Créez une classe Commande implémentant les deux interfaces. Propriétés : $reference , $produits (tableau), $prix .
// 4. calculerTotal() retourne la somme des prix. appliquerTaxe() ajoute la TVA (20%).
// 5. Créez 3 commandes, calculez leur total avec TVA et affichez-les.

interface Calculable{
    public function calculerTotal() ; 
    public function appliquerTaxe($taux) ;
}
interface Affichable{
    public function afficher() ; 
}

class Commande implements Calculable , Affichable{
    protected $reference ; 
    protected $produits ; 
    protected $prix ;
    public function __construct($reference , $produits ){
        $this->reference = $reference ; 
        $this->produits = $produits ;
    }
    public function calculerTotal(){
        $totale = array_reduce($this->produits , fn($a , $b) => $a + $b , 0) ;
        return $totale ; 
    }
    public function appliquerTaxe($taux){
        $tva = $this->calculerTotal() * $taux ; 
        return $this->calculerTotal() + $tva ; 
    }
    public function afficher(){
        echo "le produit de reference : $this->reference :  la somme est : " . $this->calculerTotal() . "et avec tva : " . $this->appliquerTaxe(0.2) . "<br>";
    }

}


$c1 = new Commande("NR234" , [20,10,12,67]);
$c2 = new Commande("AR678" , [2,30,22,7]);
$c3 = new Commande("FG890" , [8,50,69]);
$cm = [$c1 , $c2 , $c3] ;

foreach ($cm as  $value) {
    $value->afficher() ; 
}
