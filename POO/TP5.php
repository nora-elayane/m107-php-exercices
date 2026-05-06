<?php 
// 1. Créez une classe Paiement avec : $montant et une méthode payer() générique.
// 2. Créez PaiementCarte héritant de Paiement — payer() affiche "Paiement de X DH par carte bancaire".
// 3. Créez PaiementCash héritant de Paiement — payer() affiche "Paiement de X DH en espèces".
// 4. Créez PaiementMobile héritant de Paiement , ajoutez $telephone — payer() affiche "Paiement de X DH via mobile [numéro]".
// 5. Créez un tableau de paiements variés et traitez-les dans une boucle foreach .

class Paiement{
    protected $montant ; 
    public function __construct($montant){
        $this->montant = $montant ; 
    }
    public function payer(){
            echo "paiement de $this->montant" ;
    } 
}

class PaiementCarte extends Paiement{
    public function __construct($montant){
        parent::__construct($montant) ; 
    }
    public function payer(){
        echo "Paiement de $this->montant  DH par carte bancaire" ;
    }
}

class PaiementCash extends Paiement{
    public function __construct($montant){
        parent::__construct($montant) ; 
    }
    public function payer(){
        echo "Paiement de $this->montant DH en espèces" ;
    }
}

class PaiementMobile extends Paiement{
    protected $telephone ; 
    public function  __construct($montant , $telephone){
        parent::__construct($montant) ;
        $this->telephone = $telephone ; 
    }
    public function payer(){
        echo "Paiement de $this->montant DH via mobile $this->telephone" ;
    }
}

$p1 = new PaiementCarte(2000) ; 
$p2 = new PaiementMobile(3000 , "0666901311") ;
$p3 = new Paiement(100) ;
$p4 = new PaiementCash(500) ; 
$oj = [$p1 , $p2 , $p3 , $p4] ; 

foreach ($oj as  $value) {
    $value->payer() ; 
    echo "<br>" ;
}