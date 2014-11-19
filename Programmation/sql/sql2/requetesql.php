<?php

$myconnextionObj = new mysqli("localhost" , "3wa" , "troiswa" , "library");

if($myconnextionObj -> connect_errno)

{
    echo " probleme de connection : "
        . $myconnextionObj->connect_errno." "
        . $myconnextionObj->connect_err ;
}

else
{
    echo " Bienvenue " ;
}


if($recupObj = $myconnextionObj->query("SELECT * FROM books ORDER BY book_title"))

{
    echo "<br>"." J'ai trouvé la BD !"."<br> " ;

    // print_r($myconnextionObj) ;

    // print_r($recupObj) ;

    while ($line = $recupObj->fetch_array())
    {
        print_r($line) ;
        echo "<br><br>" ;
    }
}

else
{
    echo $myconnextionObj->error  ;
    echo $recupObj->num_rows ;

    //si c'est proriété(pas de $ avant)
    //si c'est 1 methode(faut()à la fin)
}




