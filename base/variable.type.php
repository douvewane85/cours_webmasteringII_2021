

<!--  
  Fichier peut contenir :
   PHP => <?php ?>
   HTML par defaut
   CSS => <style>  </style>
   JS=> <style>  </style>
-->
<?php
 /* 
    Fonction Affichage
      echo : affiche une variable de type primitifs ou une constante
      print: affiche une variable de type primitifs ou une constante
      var_dump: affiche une variable ou une constante ainsi que le type
        Nb: Cette fonction est généralement utlisé pour debuger 
            une varaible
 */

 echo "Cours de WebMastering Semestre 2";
 echo"<br>";
 echo 'Cours de WebMastering Semestre 2';
 echo"<br>";
 print 'Cours de WebMastering Semestre 2';
 echo"<br>";
 print "Cours de WebMastering Semestre 2";
 echo"<br>";
 var_dump("Cours de WebMastering Semestre 2") ;
/* 
 NB:
   Une balise HTML doit etre affichée dans un bloc PHP à 
   l'aide de la fonction echo
   Exemple : echo"<br>";
 */

 //Variables
  $entier=2;//Entier ou int
  $reel=2.5; //reel ou float 
  $chaine1="Bonjour"; //chaine ou string
  $chaine2='Bonjour'; //chaine ou string
  $boolean=true; // boolean

// Affichage avec echo
 echo 'La valeur entiere est  ' .$entier;
 echo"<br>";
 echo "La valeur reel  est   $reel";
 echo"<br>";
 echo "La valeur chaine  est    {$chaine1}";
 echo"<br>";
 print("La valeur chaine  est   $chaine2");

 /* 
 NB:
     L'injection de variables fonctionne uniquement avec 
     les guillemets "" et pas avec les '';
 */


 //Affichage Valeurs et Types
 var_dump($entier);
 echo"<br>";
 var_dump($reel);
 echo"<br>";
 var_dump($chaine1);
 echo"<br>";
 var_dump($chaine2);
 echo"<br>";
 var_dump($boolean);
 echo"<br>";
//Autres Types de Variables 
  //Tableaux ou array
  //Objets 
  //Ressources
/* 
    Fonctions de Recuperation du type d'une variable 
    --is_type() 
       Exemple : is_int(),is_float(),etc.
    --gettype() 
*/
var_dump (is_int($entier)); echo"<br>";
var_dump (is_float($reel)); echo"<br>";
var_dump (is_string($chaine2)); echo"<br>";
var_dump (is_bool($boolean)); echo"<br>";

?>
