<?php

// Methode d'envoie d'envoi de donnnée GET ou POST
echo "Methode d'envoi des données  ". $_SERVER["REQUEST_METHOD"] ;
echo "<br>";
//
echo "adresse du serveur ". $_SERVER["HTTP_HOST"] ;
echo "<br>";
//
echo "PHPSESSID ou identifiant de connexion du Serveur  ". $_SERVER["HTTP_COOKIE"] ;
echo "<br>";
//
echo "Nom du Serveur ". $_SERVER["SERVER_NAME"] ;
echo "<br>";
//
echo "Port de Connexion ". $_SERVER["SERVER_PORT"] ;
echo "<br>";
//
echo "Document Racine ". $_SERVER["DOCUMENT_ROOT"] ;
echo "<br>";
//
echo "Chemin complet du fichier ". $_SERVER["SCRIPT_FILENAME"] ;
echo "<br>";
//QUERY_STRING
echo "Parametre de Requete  ". $_SERVER["QUERY_STRING"] ;
echo "<br>";
//
echo "Chemin à partir du dossier racine sans le nom du fichier  ". $_SERVER["REQUEST_URI"] ;
echo "<br>";
//
echo "Chemin  du fichier à partir du dossier racine  ". $_SERVER["SCRIPT_NAME"] ;
echo "<br>";