<?php
//  Questions de cours (révision rapide)
// Réponds sans regarder le cours.
// Question 1
// Qu’est-ce que PHP ?
//hypertext preprocessor  est un language de programation interprété et executé coté serveur , le serveur ex(xaamp)execute du php et genere resultat final html pour le client .
// Question 2
// Quelle est la différence entre PHP et JavaScript ?
// js est un language de programation executé coté navigateur son role est de donner un site web interactive alors que php est executé coté serveur est son role est de manupuler et gestioner les données dune page web .
// Question 3
// Quelle est la structure correcte d’un script PHP ?
// <?php code 
// Question 4
// Quelle est la différence entre :
// == :verifier l'égalité des valeurs
// === : verifier l'égalité des valeurs et le type aussi
// Question 5
// Donner 3 superglobales PHP.
//$_SERVER , $_COOKIE , $_SESSION 
// Question 6
// Quelle est la différence entre :
// GET : renvoie input dans lurl 
// POST : input est caché
// Question 7
// Quelle instruction permet :
// • de rediriger vers une autre page ?
// header("Location : exercice.php") ;
// exit();
// Question 8
// Quelle est la différence entre :
// while : premierment en verifier si la condition est vrai apres en execute le code
// do while : en execute le code la premiere fois apres en verifier la condition si la condition est vrai en continue sinon la coucle s'arrete 
// for : on l'utilise lorsque en sais le nombre des tours que nous voulons faire 
// foreach : etulusé exactement pour les tableaux
// Question 9
// Quelle fonction permet :
// • longueur d’une chaîne ?
// strlen($string);
// Question 10
// Quelle superglobale donne les informations du serveur ?
// $_SERVER
//  QCM (style OFPPT)
// Q1
// Une variable PHP commence par :
// A) #
// B) $ **
// C) @
// D) %
// Q2
// Quelle extension doit avoir un fichier PHP ?
// A) .html
// B) .php **
// C) .js
// D) .css
// Q3
// Quelle instruction affiche du texte ?
// A) show
// B) print
// C) echo **
// D) display
// Q4
// Quelle boucle est utilisée pour les tableaux ?
// A) for
// B) while
// C) foreach **
// D) switch
// Q5
// Quelle superglobale récupère les données d’un
// formulaire POST ?
// A) $_GET
// B) $_POST **
// C) $_DATA
// D) $_FORM
// Q6
// Quelle fonction transforme une chaîne en majuscules ?
// A) strtoupper() **
// B) strtouppercase() 
// C) upper() 
// D) strtoupper_text()
//  Exercices progressifs (programmation)
// Exercice 1 (très facile)
// Afficher :
// Bonjour Nora
// Bienvenue en PHP
// echo "Bonjour Nora <br> " ;
// echo "Bienvenu en PHP" ;
// Exercice 2
// Créer les variables :
// nom = Nora
// age = 20
// ville = Beni Mellal
// Afficher :
// Je m'appelle Nora j'ai 20 ans et j'habite Beni Mellal
// $nom = "Nora" ; 
// $age = 21 ;
// $ville = "Beni mellal" ; 
// echo "je m'appel " . $nom . " j'ai " . $age . " et j'abite a  " . $ville ;
// Exercice 3
// Créer :
// $a = 10
// $b = 5
// Afficher :
// Addition
// Soustraction
// Multiplication
// Division
// $a = 10 ; 
// $b = 5 ; 
// echo ($a + $b ). "<br>" ;
// echo ($a - $b ) . "<br>" ;
// echo ($a * $b ) . "<br>" ;
// echo ($a / $b ) . "<br>" ;
// Exercice 4
// Créer une condition :
// Si note >= 10
// Afficher :
// Admis
// Sinon :
// Ajourné
// $note = 12 ; 
// if($note >= 10){
//     echo "Admis" ;
// }else {
//     echo "Ajourné" ; 
// }
// Exercice 5
// Afficher les nombres de :
// 1 à 10
// avec while.
// $i = 1 ;
// while($i <=10){
//     echo $i . "<br>" ;
//     $i++ ;
// }
// Exercice 6
// Afficher :
// table de multiplication de 5
// Exemple :
// 5 x 1 = 5
// 5 x 2 = 10
// ...
// for($i = 1 ; $i <=10 ; $i++){
//     echo "5 * $i = " . (5 * $i) . "<br>" ;
// }
//  Exercices niveau contrôle OFPPT
// Exercice 7
// Créer un script qui affiche :
// Les nombres pairs entre 1 et 20
// for($i = 1 ; $i <= 20 ; $i++){
//     if($i % 2 == 0){
//         echo $i . "<br>" ;
//     }
// }
// Exercice 8
// Créer un tableau :
// $fruits = ["pomme","banane","orange","mangue"];
// Afficher tous les fruits avec foreach
// $fruits = ["pomme","banane","orange","mangue"];
// foreach($fruits as $fruit){
//     echo $fruit . "<br>" ;
// }
// Exercice 9
// Créer un tableau associatif :
// $etudiant = [
// "nom" => "Ali",
// "age" => 21,
// "note" => 17
// ];
// Afficher :
// Nom : Ali
// Age : 21
// Note : 17
// $etudiant = [
// "nom" => "Ali",
// "age" => 21,
// "note" => 17
// ];
// foreach($etudiant as $key => $value) {
//     echo $key . " : " . $value . "<br>" ;
// }
// Exercice 10 (important pour examen)
// Créer un formulaire HTML :
// nom
// email
// et récupérer les données avec POST.
// echo'<form action="c2.php" method="post">
//         <input type="text" placeholder="nom"  id="nom" name="name">
//         <input type="email"name="email">
//         <input type="submit" value="sumit">
//     </form>' ;
// if(isset($_POST["name"])){
//     echo  $_POST["name"] ;
// }
// if(isset($_POST["email"])){
//     echo  $_POST["email"] ;
// }
//  Exercice niveau 20/20 (souvent dans les contrôles)
// Créer un script PHP qui :
//  affiche les nombres de 1 à 50
//  si le nombre est multiple de 3 afficher :
// Fizz
//  si multiple de 5
// Buzz
//  si multiple de 3 et 5
// FizzBuzz
// for ($i =1 ; $i <= 50 ; $i++){
//     if($i % 3 == 0 && $i % 5 == 0){
//         echo "FizzBuzz" ."<br>" ;
//     }else if($i % 3 == 0){
//         echo "Fizz" ."<br>" ;
//     }else if($i % 5 == 0){
//         echo "Buzz" ."<br>" ;
//     }else echo $i . "<br>" ;
// }




?>
