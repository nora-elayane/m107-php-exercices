<?php
if(empty($_POST["nom"]) || empty($_POST["note1"]) || empty($_POST["note2"]) ||empty($_POST["note3"])){
echo "<p>Données incomplètes, retournez au formulaire.</p>" ;
}elseif(isset($_POST["nom"],$_POST["note1"],$_POST["note2"],$_POST["note3"])){
    $nom = $_POST["nom"] ;
    $not1 = $_POST["note1"] ;
    $not2 = $_POST["note2"] ;
    $not3 = $_POST["note3"] ;
    $moyenne = ($not1 + $not2 + $not3)/3 ;
    if($moyenne >= 16){
        $etat = "Très Bien" ;
    }else if($moyenne >= 14){
        $etat = "Bien" ;
    }else if($moyenne >= 10){
        $etat = "Passable" ;
    }else{
        $etat = "Ajourné" ;
    }
echo "Le nom du etudiant est : $nom <br> note 1 : $not1 ,<br> note 2 : $not2 ,<br> note 3 : $not3 ,<br> Moyenne : $moyenne : $etat  " ;
}

?>