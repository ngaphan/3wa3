<?php

    if(isset($_GET['action'])===false || $_GET['action']==="maj")
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
                    $recup = $myconnect1->query('SELECT book_title  FROM books WHERE
                                                        author_name="Dumas"')
                ) == true
              )
            {
                echo " LA requete est OK !";
                if($recup!==0)
                {
                    print_r ($recup->fetch_array()) ;

                    $myconnect1->query('
                                    UPDATE books
                                    SET book_title = "Les Trois Mousquetaires"
                                    WHERE book_title = "Le comte de Monte Cristo"
                                ');                }
            }

            else
            {
                echo "Erreur !";
            }
        }
    }
?>

