<?php
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
?>