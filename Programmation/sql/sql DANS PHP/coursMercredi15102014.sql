/******************************************************************************************/
/********************COURS SQL DANS PHP *****************************************************/
/***********************************************************************************************/


PDO = PHP Data Object
PDO = le lien parmetant de dialoguer entre PHP et mySQL 
Normalement , chaque systeme de SGBD ( Oracle ,MSaccess , mySQL...) a son propre langage 
PDO = une couche d'abstraction 
	= une extension de PHPqui donne comme pouvoir d'ajouter 1 couche d'abstraction entre PHP et mySQL
couche d'abstraction ???
	= une sorte de boite incompréhensible  qui
	= récupère les infos , puis 
	= traduire en différents langages ( Array , Obj pour PHP / sql pour mySQL , etc)
	= permet de comprendre par tous les SGBD

****************

$mysqli = est une couche d'abstraction , c'est une PDO simplifié

pdo utilisé dans framework

mysqli = utilisé par tout ds php

$mysqli = new mysqli ("localhost" , "3wa" , "troiswa" , " library");

param1 = addres du serveur
param2 = user
param3 = pwd
param4 = nom de BD

new mysqli = on cré un obj( qui a des propriété ( càd valeur attaché à l'obj) et qui a des méthode( = function attaché à l'obj), 
	       = on cré l'espace temporaire pr travailler	
		   = on cré un pdo av des paramètre pr qu'il puisse y accéder


Dans javascript , 1proprié attachée à un Obj par un point (.)
	myObj.myPropriété
	myObj.myMethode()

dans php : par une flèche -> 
	myObj-> myPropriété
    myObj-> myMethode()


__construct est 1 methode qui récupère les paremètre envoyé par l'obj $mysqli (2 fois underscore)
__construct est appélé (par default) à la création de l'objet 

EXemple de la création d'un obj :

 $mysqli = new mysqli("localhost" , "3wa" , "troiswa" , "library"); //cré une connexion au serveur et sql
    

 verifier sil y a pas d'error de connexion

<?php

$mysqli = new mysqli("localhost" , "3wa" , "troiswa" , "library");
//cré une connexion au serveur et sql

if( $mysqli -> connect_errno)
// verifier sil y a pas d'error de connexion  ( errno = no error)

{
    echo " probleme de connection : "
        . $mysqli->connect_errno." "
        . $mysqli->connect_err ;


    // $mysqli->connect_errno." " = affichier te le type d'erreur
    // $mysqli->connect_err  =  affichier  l'erreur
}

else
{
    echo " Bienvenue " ;
}

?>

j'ai laissé 1 espace avant library pr faire 1 erreur

Warning: mysqli::mysqli(): (42000/1049): Unknown database ' library' in /home/wap41/sites/sql DANS PHP/sqlDansPHP.php on line 3

Notice: Undefined property: mysqli::$connect_err in /home/wap41/sites/sql DANS PHP/sqlDansPHP.php on line 12
probleme de connection : 1049