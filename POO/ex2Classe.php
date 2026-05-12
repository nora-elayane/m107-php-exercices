<?php
class Employe{
    public  $nom ; 
    protected  $salaire ; 
    public function __construct($nom , $salaire){
        $this->nom = $nom ; 
        $this->salaire = $salaire ;
    }
    public function GetSalaire(){
    return  $this->salaire ; 
    }
    public function __toString(): string {
    return self ;
}
}

class Manager extends Employe{
    public int $bonus ; 
    public function __construct($nom , $salaire , $bonus){
        parent::__construct($nom , $salaire) ; 
        $this->bonus = $bonus ; 
    }
    public function GetSalaire(){
    return  $this->salaire + $this->bonus ; 
    }
}

class Stagiaire extends  Employe{
    public function __construct($nom , $salaire){
        if($salaire <= 3000 ){
            parent::__construct($nom , $salaire) ; 
        }
    }
}

$emp1 = new Stagiaire("nora" , 3400) ;
$emp2 = new Manager("ziad" , 2000 , 100) ;
$emp3 = new Stagiaire("Adam" , 2000 , 300) ;
$emp4 = new Manager("Hamza" , 2000 , 100) ;
$emp5 = new Manager("soundos" , 2000 , 100) ;



$objets = [$emp1 , $emp2 , $emp3 , $emp4, $emp5 ] ;
foreach ($objets as $value) {
    echo $value->GetSalaire() . " "; 
    echo $value  .  "<br>" ; 
}