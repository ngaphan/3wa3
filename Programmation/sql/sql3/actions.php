<?php

    if(isset($_GET['action'])===false || $_GET['action']==="del")
    {
        $myconnect1= new mysqli("localhost" ,"root", "","library");

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
                
                if( $recup!==0 )
                {
                    echo " ancienne liste : " ;
                    print_r ( $recup->fetch_array()) ;

                    $myconnect1->query('
                                        DELETE FROM books
                                        WHERE book_id = $lineArray['book_id']
                                        OR book_title = $lineArray['book_title']
                                        OR author_name = $lineArray['author_name']
                                    ');
                    echo " Nouvelle liste : " ;
                    print_r ($recup->fetch_array()) ;
                }
            }

            else
            {
                echo "Erreur !";
            }
        }
    }

    
/*
    if(isset($_GET['action'])===false || $_GET['action']==="maj")
    {
        $myconnect1= new mysqli("localhost" ,"root", "","library");

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


    if($myconnexion = new mysqli("localhost" , "root" , "" ,"library"))
    {
        if($myconnexion-> connect_errno)
        {
            echo "Erreur ! " ;
        }

        else
        {
            $myconnexion->query(' INSERT INTO books
                                    (book_title , author_name)
                                    VALUES
                                    ("Le comte de Monte Cristo","Dumas")
                                ');
            echo $myconnexion->insert_id ;

            if($recup = $myconnexion->query("SELECT author_name FROM authors"))
            {
                echo "<br>" ;
                print_r($recup->fetch_array());
            }
        }
    }
*/
?>
