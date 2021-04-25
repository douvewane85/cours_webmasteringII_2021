<?php
     $chaine="Ceci est une chaine de Caractere";
      //Affichage du premier caractere 
      echo "Affichage du premier caractere ". $chaine[0]."<br>" ;
      //Modification du premier caractere 
       echo "Affichage Modification  ". $chaine."<br>" ;
       $chaine[0]="F";
       echo "Apres Modification  ". $chaine."<br>" ;
       //Quelques Fonctions utiles des Chaines de Caracteres
       echo "Quelques Fonctions utiles des Chaines de Caracteres <br>";
        //Longueur de Chaine
        echo "La longueur de la chaine ".strlen($chaine)."<br>";
        //Extraction d'une partie de la Chaine
        echo "Recuperation des 2 premiers caracteres ".substr($chaine,0,2)."<br>";
        //Remplacer des caracteres de la chaine
        echo "Remplacer tous les e par des a  ".str_replace("e","a",$chaine)."<br>";
        //Enlever les espaces en debut et en fin de mot
        echo "Enlever les espaces en debut et en fin de mot ".trim($chaine)."<br>";
        echo "Recherche du mot caractere dans la chaine ".strpos($chaine,"Caractere");
        echo"<br>";
        //Convertir un chaine en tableau 
        $arr=explode(" ",$chaine);
        var_dump($arr);
        //Supprimer les balises d'une chaine
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo"<br>";
        //stripslashes — Supprime les antislashs d'une chaîne
        $str = "Avez-vous l\'oreille dure?";
        echo stripslashes($str);
        echo"<br>";
        //Recherche d'une sous chaine dans une chaine
        
        //Le nombre de Mot de la Chaine
        echo "Le nombre de mots d'une chaine ".str_word_count($chaine)."<br>";