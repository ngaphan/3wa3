


<section id="home">

    <form method="post" action="index.php">
        <p> Titre :</p>
        <input name="title" type="text" /><br>

        <p>Auteur : </p>
        <input name="author" type="text" /><br>

        <input type="submit" value="AJOUTER" />

        <input name="action" value="add" type="hidden" />

    </form>

   <?php

    if($myconnexion = new mysqli("localhost" , "root" , "" ,"library"))
    {
        if($myconnexion-> connect_errno)
        {
            echo "Erreur ! " ;
        }

        else
        {
            echo '<header>
                    <h1> My Library </h1>
                  </header>' ;
            echo '<table>' ;
            echo '  <th>id</th>
                    <th>Titre</th>
                    <th>Auteur</th> ' ;

            $booksObj = $myconnexion->query('SELECT * FROM books');

            while($lineArray = $booksObj->fetch_array())
            {
                echo '<tr><td>' . $lineArray['book_id'] .'</td>'
                          .'<td>' . $lineArray['book_title'] .'</td>'
                          .'<td>' . $lineArray['author_name'] .'</td>'
                          .'<td><a href ="index.php?action=modif&bookIndex='.$lineArray['book_id'].'"> Modifer</a></td>'
                          .'<td><a href ="index.php?action=del&bookIndex='.$lineArray['book_id'].'"> Supprimer</a></td>'
                      .'</tr>';
            }

            echo '</table>' ;
        }
    }

    ?>

</section>
