/*
EXERCICE :

n'enregistrer le livre une seule fois en vérifiant(avant un if) si
l'enregistrement (la ligne) existe déjà ds la BDD ou non
1. SQL
2. sql->php
3. result (if)

reponse :

*/

<?php

$myconnect1= new mysqli("localhost" ,"3wa", "troiswa","library");

if($myconnect1->connect_errno)
{
    echo " Erreur : "
         . $myconnect1->connect_errno
         . $myconnect1->connect_err ;
}

else
{
    if (
        (
            $recup = $myconnect1->query('SELECT author_name FROM books WHERE
                                                books.book_title="comptine"')
        ) == true
      )
    {
        echo " LA requete est OK !" ;

        if ($recup->num_rows === 0 )
        {
            $myconnect1->query('INSERT INTO books (book_title , author_name)
                            VALUES("comptine","Albert")');
        }
        else
        {
            echo "Le livre est déjà enregistré ! " ;
        }
    }

}

?>

<?php

$myconnect1= new mysqli("localhost" ,"3wa", "troiswa","library");

if($myconnect1->connect_errno)
{
    echo " Erreur : "
         . $myconnect1->connect_errno
         . $myconnect1->connect_err ;
}

else
{
    if (
        (
            $recup = $myconnect1->query('SELECT author_name FROM books WHERE
                                                books.book_title="comptine"')
        ) == true
      )
    {
        echo " LA requete est OK !" ;

        if ($recup->num_rows === 0 )
        {
            $myconnect1->query('INSERT INTO books (book_title , author_name)
                            VALUES("comptine","Albert")');
        }
        else
        {
            echo "Le livre est déjà enregistré ! " ;
        }
    }

    /* essai

    $myconnect1->query('CREATE TABLE IF NOT EXISTS `vent`
            (
               `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
               `book_name` varchar(45) DEFAULT NULL,
               `quantily` mediumint(10) unsigned DEFAULT NULL,
               `price` float(10) unsigned DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `DEPARTMENT` (`department`)
            )   ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36569 ;
    */
}

?>

/* EX 2

MODIFIER la table

UPDATE books
SET book_title="Les Trois Mousqetaires"
WHERE book_title="Le Compte de Monte Cristo"

*/


