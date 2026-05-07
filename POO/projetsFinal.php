<?php 
// 1. Interface : Créez Evaluable avec les méthodes calculerMoyenne() et getMention() .
// 2. Classe abstraite : Créez Personne (propriétés private : nom, prénom, CIN) avec méthode abstraite sePresenter() et méthode statique getNombre() .
// 3. Héritage + Interface : Classe Etudiant hérite de Personne , implémente Evaluable . Ajoutez : filière, tableau de notes. calculerMoyenne() retourne la moyenne.
// getMention() retourne TB/B/AB/P/Echec.
// 4. Héritage : Classe Formateur hérite de Personne . Ajoutez : matière, private $salaire avec getter/setter validé.
// 5. Static : Comptez séparément étudiants et formateurs créés.
// 6. Polymorphisme : Créez un tableau mixte (étudiants + formateurs), appelez sePresenter() sur chacun.
// 7. Bonus : Ajoutez une classe Promotion contenant un tableau d'étudiants avec des méthodes : ajouterEtudiant() , getMeilleurEtudiant() , getMoyennePromotion() .


interface Evaluable{
    public function calculerMoyenne();
    public function getMention() ;
}

abstract class Personne{
    protected static $nombrePersonne  = 0 ;
    public $nom ; 
    protected $prenom ; 
    protected $cin ;
    public function __construct($nom , $prenom , $cin){
        $this->nom = $nom ; 
        $this->prenom = $prenom ; 
        $this->cin = $cin ; 
        self::$nombrePersonne++ ;
    }
    abstract public function sePresenter() ;
    public static function getNombrePersonne(){
        return self::$nombrePersonne ; 
    }
}

class Etudiant extends Personne  implements Evaluable{
    protected static $nombreEtudiant = 0 ;
    private $filiere ; 
    private $notes ; 
    public function __construct($nom , $prenom , $cin , $filiere , $notes){
        parent::__construct($nom , $prenom , $cin ) ;
        $this->filiere = $filiere ; 
        $this->notes = $notes ;
        self::$nombreEtudiant++ ;
    }
    public static function getnombreEtudiant(){
        return self::$nombreEtudiant ;
    }
    public function calculerMoyenne(){
      return (array_reduce($this->notes , fn($a,$b)=> $a + $b , 0 )) / count($this->notes) ;
    }
    public function getMention(){
        if($this->calculerMoyenne() >= 16){
            return "TB" ;
        }elseif($this->calculerMoyenne() >= 14){
            return "B" ;
        }elseif($this->calculerMoyenne() >= 12){
            return "AB" ;
        }elseif($this->calculerMoyenne() >= 10){
            return "P" ;
        }else{
            return "Echec" ; 
        }

    }
    public function sePresenter(){
        echo "Nom d'étudiant est : " . $this->nom . " prénom : " . $this->prenom . " avec numéro de CIN : " . $this->cin  . " Filiere : " . $this->filiere . " et Moyenne : " . $this->calculerMoyenne() . " et Mension : " . $this->getMention() . "<br>";
    }

}

class Formateur extends Personne{
    protected static $nombreFormateur = 0 ;
    private $matiere ; 
    private $salaire ; 
    
    public function __construct($nom , $prenom , $cin , $matiere , $salaire){
        parent::__construct($nom , $prenom , $cin);
        $this->matiere = $matiere ; 
        $this->setSalaire($salaire) ;
        self::$nombreFormateur++ ; 
    }
    public function setSalaire($salaire){
        if($salaire > 6000){
            return $this->salaire ; 
        }else{
            echo "Awilaaaaay" ;
        }
    }
    public static function getnombreFormateur(){
        return self::$nombreFormateur ;
    }
    
    public function getSalaire(){
        return $this->salaire ; 
    }
    public function getMatiere(){
        return $this->matiere ;
    }
    public function sePresenter(){
        echo "Nom de Formateur est : " . $this->nom . " prénom : " . $this->prenom . " avec numéro de CIN : " . $this->cin  . " Matiere : " . $this->getMatiere() . " et  Salaire: " . $this->getSalaire()  . "<br>";

    }
    }

class Promotion{
    protected $etudiants ; 
    public function __construct($etudiants = []){
        $this->etudiants = $etudiants ; 
    }
    public function ajouterEtudiant($et){
        if($et instanceof Etudiant){
            $this->etudiants[]= $et ; 
            echo "etudiant Ajouté avec succee !" ; 
        }else{
            echo "il n est pas un etudiant ! " ;
        }
    }
    public function getMeilleurEtudiant(){
        $max = $this->etudiants[0] ; 
        foreach($this->etudiants as $value) {
            if( $value->calculerMoyenne()  > $max->calculerMoyenne() ){
                $max = $value ;
            }  
        }
        return "le meilleure étudiant est : " . $max->nom . " avec note : " . $max->calculerMoyenne() . "<br>"  ; 
    }

    public function getMoyennePromotion(){
        $total = 0 ;
        foreach ($this->etudiants as $value) {
            $total += $value->calculerMoyenne() ;
        }
        return "la moyenne de la promo est : " . $total / count($this->etudiants) ; 
    }
}


$et1 = new Etudiant("Elayane" , "Nora" , "I771020" , "Dev" , [20 , 19 , 17 , 18]);
$et2 = new Etudiant("Ziad" , "iad" , "I77134" , "Dev" , [20 , 19 , 20 , 18]);
$et1->sePresenter() ;
$formateur = new Formateur("Essaghraoui" , "Aicha" , "I89SD" , "PHP" , 10000);
$formateur->sePresenter() ;
$promo = new Promotion([$et1 , $et2]) ;
echo "<br> ";
echo $promo-> getMeilleurEtudiant();
echo "<br> ";
echo $promo->getMoyennePromotion();