<?php


    if($myconnexion = new mysqli("localhost" , "3wa" , "troiswa" ,"library"))
    {
        if($myconnexion-> connect_errno)
        {
            echo "Erreur ! " ;
        }

        else
        {
            echo "<header>
                    <h1> My Library </h1>
                  </header>" ;
            echo "<table>" ;
            echo "  <th>id</th>
                    <th>Titre</th>
                    <th>Auteur</th> " ;

            $booksObj = $myconnexion->query('SELECT * FROM books');

            while($lineArray = $booksObj->fetch_array())
            {
                echo "<tr><td>" . $lineArray["book_id"] ."</td>"
                          ."<td>" . $lineArray["book_title"] ."</td>"
                          ."<td>" . $lineArray["author_name"] ."</td>"
                          ."<td><a href =\"#\"> Modifer</a></td>"
                          ."<td><a href =\"#\"> Supprimer</a></td>"
                      ."</tr>";
            }


            echo "</table>" ;
        }
    }




/*
    if($myconnexion = new mysqli("localhost" , "3wa" , "troiswa" ,"library"))
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
*/
?>
