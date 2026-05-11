<?php


class Voiture{
    public string $marque ;
    public int $modele ;
    public int $anne ; 
    private static int $nbVoitures = 0 ; 
    public function __construct($marque , $modele , $anne){
        $this->marque = $marque ;
        $this->modele = $modele ; 
        $this->anne = $anne ;
        self::$nbVoitures++ ; 
    }
    public function decrire(){
        return "marque: $this->marque modele :  $this->modele  année : $this->anne" ;
    }
    public static function getNbVoiture(){
        return self::$nbVoitures ; 
    }
}

$v1 = new Voiture("Audi" , 2018 , 2020) ;
$v2 = new Voiture("Nissane" , 2014 , 2013) ;
$v3 = new Voiture("Mercedess" , 2026 , 2019) ;

echo Voiture::getNbVoiture() ; 
echo "<br>" ;
echo $v1->decrire() ;

