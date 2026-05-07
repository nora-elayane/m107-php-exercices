<?php
// QCM Pièges – PHP (niveau contrôle)
// Q1- Quelle balise ouvre un script PHP ?
// A <php>
// B <?php **
// C <script php>
// D <? >
// Q2 -Que va afficher ce code ?
// $a = "10";
// $b = 5;
// echo $a + $b;
// A  105
// B  15 **
// C Erreur
// D "105"
// Q3- Quel est le résultat ?
// echo 10 . 5;
// A 15
// B 105 **
// C Erreur
// D 50
// (piège : concaténation)
// Q4 Quel opérateur vérifie valeur ET type ?
// A ==
// B =
// C === **
// D !=
// Q5
// Que fait ce code ?
// $x = 5;
// if($x = 10){
// echo "Hello";
// }
// A Hello **
// B Rien
// C Erreur 
// D 5
// (piège : affectation au lieu de comparaison)
// Q6- Quelle boucle garantit au moins une exécution ?
// A while
// B for
// C do while **
// D foreach
// Q7 Quel est le résultat ?
// $tab = [1,2,3];
// echo count($tab);
// A 1
// B 2
// C 3**
// D Erreur
// Q8 -Quelle variable superglobale récupère les données d’un formulaire POST ?
// A $_GET
// B $_POST **
// C $_SERVER
// D $_REQUEST
// (piège : plusieurs semblent correctes)
// Q9 Que va afficher ce code ?
// $x = 3;
// switch($x){
// case 1:
// echo "A";
// case 3:
// echo "B"
// case 5:
// echo "C"
// }
// A B
// B BC **
// C ABC
// D Erreur
// (piège : absence de break)
// Q10 Quel est le résultat ?
// echo strlen("PHP");
// A 2
// B 3**
// C 4
// D Erreur
// QCM PHP – Niveau 20/20
// Q1 Que va afficher ce code ?
// $x = 5;
// $y = "5";
// var_dump($x == $y);
// A true **
// B  false
// C  5
// D Erreur
// Q2- Quel est le résultat ?
// $x = 8;
// $y = 3;
// echo $x % $y;
// A 2 **
// B 1
// C 3
// D 0
// Q3- Que va afficher ce code ?
// $a = "10";
// $b = "20";
// echo $a . $b;
// A 30
// B 1020 **
// C 10 20
// D Erreur
// Q4- Quel est le résultat ?
// $x = 4;
// echo $x++;
// A 5
// B 4 **
// C Erreur
// D 0
// Q5 Quel est le résultat après l’exécution ?
// $x = 4;
// echo ++$x;
// A 4
// B 5 **
// C Erreur
// D 3
// Q6 Que va afficher ce code ?
// for($i=1; $i<=3; $i++){
// echo $i;
// }
// A 123 **
// B 0123
// C 1234
// D Erreur
// Q7 Quel est le résultat ?
// $tab = ["A","B","C"];
// echo $tab[1];
// A A
// B B **
// C C
// D Erreur
// Q8 Que fait la fonction suivante ?
// explode(",", "PHP,HTML,JS");
// A Convertit en majuscule
// B Crée un tableau **
// C Supprime les virgules
// D Concatène les chaînes
// Q9 Quel est le résultat ?
// $str = "bonjour";
// echo strtoupper($str);
// A bonjour
// B BONJOUR **
// C Bonjour
// D Erreur
// Q10 Que va afficher ce code ?
// $x = 7;
// if($x > 5 && $x < 10){
// echo "OK";
// }
// A OK **
// B Rien
// C Erreur
// D 7
// Q11 Quel est le résultat ?
// echo strlen("Hello");
// A 4
// B 5 **
// C 6
// D Erreur
// Q12 Que va afficher ce code ?
// $tab = [10,20,30];
// foreach($tab as $val){
// echo $val;
// }
// A 102030 **
// B 10 20 30
// C 30
// D Erreur
// Q13 Quel est le résultat ?
// $x = 10;
// if($x == "10"){
// echo "yes";
// }
// A yes **
// B no
// C Erreur
// D 10
// Q14 Quel est le résultat ?
// $x = 5;
// switch($x){
// case 5:
// echo "A";
// break;
// case 10:
// echo "B";
// }
// A A **
// B B
// C AB
// D Erreur
// Q15 Quel est le résultat ?
// $txt = "PHP";
// echo strtolower($txt);
// A php **
// B PHP
// C Php
// D Erreur
// Série QCM progressive – Références PHP
// QCM 1 (facile)
// $a = "PHP";
// $b = $a;
// $b = "JS";
// echo $a;
// Quel est le résultat ?
// A PHP **
// B JS
// C PHPJS
// D Erreur
// QCM 2
// $a = "PHP";
// $b = &$a;
// $b = "JS";
// echo $a;
// A PHP
// B JS **
// C PHPJS
// D Erreur
// QCM 3
// $a = "danger";
// $p = &$a;
// echo $p;
// A danger **
// B $p
// C vide
// D Erreur
// QCM 4
// $a = "danger";
// $p = &$a;
// $a = "alert";
// echo $p;
// A danger
// B alert **
// C dangeralert 
// D Erreur
// QCM 5 (niveau moyen)
// $a = "danger";
// $p = &$a;
// $z = &$p;
// echo $z; 
// A danger **
// B $p
// C $z
// D Erreur
// QCM 6
// $a = "danger";
// $p = &$a;
// $z = &$p;
// $p = "warning";
// echo $a; 
// A danger 
// B warning  **
// C dangerwarning 
// D Erreur
// QCM 7
// $a = "danger";
// $p = &$a;
// $z = &$p;
// $z = "info";
// echo $a; 
// A danger 
// B info **
// C dangerinfo 
// D Erreur
// QCM 8 (piège)
// $a = "danger";
// $p = $a;
// $p = "alert";
// echo $a;
// A danger **
// B alert
// C dangeralert
// D Erreur
// QCM 9 (piège classique)
// $a = 5;
// $b = &$a;
// $b++;
// echo $a;
// A 5
// B 6 **
// C Erreur
// D 0
// QCM 10 (niveau contrôle)
// $a = "danger";
// $p = &$a;
// $z = &$p;
// $z = "info";
// echo $a , $p , $z;
// A dangerdangerdanger
// B infoinfoinfo **
// C  dangerinfoinfo
// D  Erreur


?>