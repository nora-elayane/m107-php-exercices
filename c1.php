<?php 
// Série 2 – Préparation Contrôle PHP
//  Questions de cours
// Question 1
// Que signifie PHP ?
// php (hypertext preprocessor)est un language de programation pour creer des pages web dynamique executé  coté serveur  interprété , le serveur web ex:appache interprete php et genere du html le client recoit uniquement le resultat html final
// Question 2
// Pourquoi dit-on que PHP est un langage côté serveur ?
// on dit que php est un language coté serveure car il est interprété et executé dans un serveur (coté serveur) , le client ne voit jamais le code source ,  
// Question 3
// Donner 3 types de données PHP:
//  integer , string boolean
// Question 4
// Quelle est la différence entre :
// echo :ne retourne aucune valeur , peut accepter plusieur argumennts
// print: retourne toujours 1 n'accepte qun seul argument
// Question 5
// Donner 2 avantages de l’architecture client / serveur.
// mise a jour facilité 
// Securité renforcée
// Question 6
// Quelle superglobale permet de récupérer :
// • les informations du navigateur : $_SERVER
// • l’adresse IP du client : $_SERVER
// Question 7
// Quelle fonction permet de :
// supprimer les espaces au début et à la fin d’une chaîne ?
// trim()
// Question 8
// Donner la syntaxe de l’opérateur ternaire.
// $j =  3 ; 
// echo($j > 0) ? "positif" : "negatif" ;
// Question 9
// Quel est le rôle de :
// break:nous  permettont de sortire dune boucle .
// continue  : nous permettont de sauter une tour dans une boucle
// Question 10
// Que fait la fonction :
// explode() : il retourne un taleux de valeur qui sont separé par la valeur quant a donne par argumet explode("separatoir" , "chaine de caractères")
// $t = explode(" " , "hello my name is  nora");
// print_r($t);
//  QCM
// Q1
// Quelle instruction termine une instruction PHP ?
// A :
// B ; **
// C ,
// D .
// Q2
// Quel symbole sert à concaténer deux chaînes ?
// A +
// B . **
// C &
// D *

// Q3
// Quel opérateur signifie différent ?
// A != **
// B <>
// C !== 
// D  toutes les réponses **
// Q4
// Quel tableau stocke les données d’un formulaire GET ?
// A $_POST
// B $_GET **
// C $_FORM
// D $_DATA
// Q5
// Quelle boucle est idéale pour parcourir un tableau ?
// A while
// B do while
// C foreach **
// D switch
//  Exercices progressifs
// Exercice 1
// Afficher :
// Bienvenue dans le langage PHP
// echo "Bienvenu dans le langage PHP"
// Exercice 2
// Créer les variables :
// produit = "Laptop"
// prix = 8500
// Afficher :
// Le produit Laptop coûte 8500 dh
// $produit = "LapTop" ;
// $prix = "8500" ;
// echo "le Produit " . $produit . " coute " . $prix . " dh" ;
// Exercice 3
// Créer :
// $x = 15
// $y = 4
// Afficher :
// • somme
// • reste de la division
// $x = 15 ; 
// $y = 4 ; 
// echo "la somme est : " . $x + $y ; 
// echo " le reste de la division est " . $x % $y ; 
// Exercice 4
// Créer une condition :
// si âge >= 18
// Accès autorisé
// sinon
// Accès refusé
// $age = 18 ; 
// if($age  < 18 ){
//     echo "Accès refusé";
// }else{
//     echo "Accès autorisé" ;
// }
// Exercice 5
// Afficher les nombres :
// 10 à 1
// avec for.
// for($i = 10 ; $i>=1 ; $i--){
//  echo $i . "<br>" ;
// }
//  Exercices tableaux
// Exercice 6
// Créer un tableau :
// $notes = [12,15,18,10,14];
// Afficher toutes les notes
// $notes = [12,15,18,10,14];
// foreach($notes as $note){
//     echo $note . "<br>" ;
// }
// Exercice 7
// Calculer :
// la moyenne des notes
// $notes = [12,15,18,10,14];
// $somme = 0;
// foreach ($notes as $note){
//    $somme += $note ;
// }
// echo "la moyenne est : " . ($somme/count($notes)) ;

// Exercice 8
// Créer un tableau associatif :
// $personne = [
// "nom"=>"Sara",
// "ville"=>"Casablanca",
// "age"=>25
// ];
// Afficher toutes les valeurs avec foreach.
// $personne = [
// "nom"=>"Sara",
// "ville"=>"Casablanca",
// "age"=>25
// ];
// foreach($personne as $key => $value) {
//     echo $key . " : " . $value . "<br>" ;
// }
//  Exercices chaînes
// Exercice 9
// Créer :
// $texte = "bonjour php";
// Afficher :
// • longueur
// • majuscules
// • sous chaîne "php"
// $texte = "bonjour php";
// echo strlen($texte) ; 
// echo strtoupper($texte) ;
// echo  substr($texte , 8) ;

//  Exercice niveau examen
// Exercice 10
// Créer un script qui affiche :
// 1
// 2
// Fizz
// 4
// Buzz
// Fizz
// 7
// 8
// Fizz
// Buzz
// Règles :
// • multiple de 3 → Fizz
// • multiple de 5 → Buzz
// for ($i = 1 ; $i <= 12 ; $i++){
//     if($i % 3 == 0){
//         echo "FIzz" . "<br>" ;
//     }elseif ($i % 5 == 0){
//         echo "Buzz" . "<br>" ;
//     }else echo  $i . "<br>" ;
// }
?>