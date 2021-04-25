<?php
//Declaration
$array_num=[];
var_dump($array_num);
//Initialisation
$array_num=["Bonjour",'Au Revoir',1,2.5,true];
var_dump($array_num);
echo"Afficher un element du tableau";echo"<br>";
var_dump($array_num[0]); echo"<br>";
var_dump($array_num[4]); echo"<br>";
echo"Parcours du Tableau"; echo"<br>";
foreach ($array_num as $key => $value) {
      echo"{$key}=>{$value}"; echo"<br>";
}
echo"Ajout d'un elt en Fin  du Tableau"; echo"<br>";
array_push($array_num,"Nouvelle valeur 1");
var_dump($array_num);echo"<br>"; 
$array_num[]="Nouvelle valeur 2";
var_dump($array_num);echo"<br>";
echo"Ajout d'un elt en Debut  du Tableau"; echo"<br>";
array_unshift($array_num,"Nouvelle valeur 1 en debut");
var_dump($array_num);echo"<br>"; 
echo"Supression d'un elt en Fin  du Tableau"; echo"<br>";
$val=array_pop($array_num);
var_dump($array_num);echo"<br>"; 

echo"Supression d'un elt en Debut  du Tableau"; echo"<br>";
$val=array_shift($array_num);
var_dump($array_num);echo"<br>";

echo"recherche  d'une valeur dans le tableau Tableau"; echo"<br>";
$val=in_array(1,$array_num);
var_dump($val);echo"<br>";
echo"recherche  d'une clé dans le tableau Tableau"; echo"<br>";
$val=key_exists(5,$array_num);
var_dump($val);echo"<br>";

echo"Recuperation  des clés dans le  Tableau"; echo"<br>";
$val=array_keys($array_num);
var_dump($val);echo"<br>";
echo"Recuperation  des valeurs  du Tableau"; echo"<br>";
$val=array_values($array_num);
var_dump($val);echo"<br>";

echo"Conversion   Tableau to String"; echo"<br>";
$val=implode(":",$array_num);
var_dump($val);echo"<br>";
//Tableau Multi dimentions
$arr_multi=[
    [1,2,7,8],
    [1.5,2.4,8.6,8],
];
var_dump($arr_multi);echo"<br>";



