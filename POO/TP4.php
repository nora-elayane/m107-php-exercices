<?php
// 1. Créez une classe Personne avec : $nom , $prenom , $age et une méthode sePresenter() .
// 2. Créez Etudiant héritant de Personne , ajoutez : $filiere , $note .
// 3. Créez Professeur héritant de Personne , ajoutez : $matiere , $salaire .
// 4. Chaque classe fille doit appeler le constructeur parent et surcharger sePresenter() .
// 5. Créez un tableau mixte contenant des étudiants et des professeurs, parcourez-le et appelez sePresenter() sur chaque élément.




class Personne{
    protected $nom ; 
    protected $prenom ;
    protected $age ; 
    public function __construct($nom , $prenom , $age){
        $this->nom = $nom ; 
        $this->prenom = $prenom ; 
        $this->age = $age ; 
    }
    public function  sePresenter(){
        echo ($this->nom . "," . "," .  $this->prenom . ",". $this->age) ;
    }
}

class Etudiant extends Personne{
    protected $filiere ; 
    protected $note ; 
    public function __construct($nom , $prenom , $age , $filiere , $note ){
        parent::__construct( $nom , $prenom , $age ) ; 
        $this->filiere = $filiere ; 
        $this->note = $note ;
    }
    public function sePresenter(){
        echo ($this->nom  . "," .  $this->prenom . ",". $this->age . ",". $this->filiere . "," . $this->note) ;

    }
}

class Professeur extends Personne{
    protected $matiere ; 
    protected $salaire ; 
    public function __construct($nom , $prenom , $age , $matiere , $salaire){
        parent::__construct($nom , $prenom , $age) ; 
        $this->matiere = $matiere ;
        $this->salaire = $salaire ; 
    }
   public function sePresenter(){
        echo ($this->nom . "," . "," .  $this->prenom . ",". $this->age . ",". $this->matiere . "," . $this->salaire) ;

    } 
}
$et = new Etudiant("Elayane" , "Nora" , 22 , "dev" , 20) ;
$et2 = new Etudiant("Elayane" , "Ziad" , 9 , "dev" , 16) ;

$pr = new Professeur("laghrib" , "Hamza" , 45 , "maths" , 10000) ;
$pr2 = new Professeur("laghrib" , "Adam" , 45 , "PHP" , 8000);

$objs = [$et , $et2 , $pr , $pr2] ;

foreach ($objs as $value) {
    $value->sePresenter() ; 
    echo "<br>" ;
}

