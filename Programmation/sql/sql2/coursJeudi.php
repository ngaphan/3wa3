PHP/MYSQL : INSERTION

**********************

fetch_all() : récup 1 tab 2dim d'un seule coup, defaultreturn (mysqli_num)

si pour affichier en html , vaut mieux while et fetch_array pour affcihier ce su'on veut , defaultreturn (mysqli_both)


quand on fait une requete : SELECT ......... ça va ns renvoyer 1 resultat
quand on fait une requete : INSERT ......... ça va ns renvoyer RIEN (c'est ns qui leur envoie)

Après les requate , si on veut affcihier quelque chose , faut savoir à qui elle
dépend la requete pour chercher les propriété qu'il possède .

EX1 :
$myconnexion->query('INSERT INTO books
                    (book_title , author_name)
                    VALUES
                    ("Le comte de Monte Cristo","Dumas")
                ');
donc la requete inssert dépend de mysqli ( car début : on a
$myconnexion = new mysqli("localhost" , "3wa" , "troiswa" ,"library") )
d'où  il fo chercher les propriété qui appartient à mysqli
EX : mysqli->insert_id (savoir la dernière ligne q'on vient d'insérer)

EX2 :

$recup = $mysqli->query("SELECT * FROM books ORDER BY book_title")
arprès cette requete va ns envoie 1 resultat , si je veux afficheire le
résultat de ma requete -> faut chercher les propriété que mysqli_result possède

EX: mysqli_result->fetch_array( récuper ligne par ligne )