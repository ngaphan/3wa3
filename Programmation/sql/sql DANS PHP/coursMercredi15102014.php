$msqli = est une couche d'abstraction , c'est une PDO simplifié

pdo dans framework

mysqli = utilisé par tout ds php

$mysqli = new mysqli ("localhost" , "3wa" , "troiswa" , " library");

param1 = addres du serveur

new mysqli = on cré un obj( qui a des propriété (valeur attaché à l'obj) et qui a des méthode( =function attaché à l'obj), on cré l'espace temporaire pr traailler

= cré un pdo av des paramètre pr qu'il puisse y accéder

myObj.myPropriété
myObj.myMethode()


dans php :  myObj-> myPropriété
            myObj-> myMethode()

__construct est appélé (par default) à la création de l'objet

__construct est 1 methode qui récupère les paremètre envoyé par l'obj $mysqli

// verifier sil y a pas d'eror de connexion

<?php

$mysqli = new mysqli("localhost" , "3wa" , "troiswa" , " library");
//cré une connexion au serveur et sql

if( $mysqli -> connect_errno)
    // verifier sil y a pas d'eror de connexion

{
    echo " probleme de connection : "
        . $mysqli->connect_errno." "
        . $mysqli->connect_err ;


    // $mysqli->connect_errno." " = affichier te le type d'erreur
    // $mysqli->connect_err  =  affichier te l'erreur
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