<?php

    if(isset($_GET['action'])===false || $_GET['action']==="del")
    {
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
                    $recup = $myconnect1->query('SELECT *  FROM books ')
                ) == true
              )
            {
                echo " LA requete est OK !";
                if($recup!==0)
                {
                    echo "ancienne liste : " ;
                    print_r ($recup->fetch_array()) ;

                    $myconnect1->query('
                                    DELETE FROM books
                                    WHERE book_title = "comptine"
                                    OR book_title = "Les Trois Mousquetaires"
                                ');
                    echo "Nouvelle liste : " ;
                    print_r ($recup->fetch_array()) ;
                }
            }

            else
            {
                echo "Erreur !";
            }
        }
    }
?>

