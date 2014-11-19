
Mercredi 15/ 10 /2014 

MYSQL JOINTURES


créer  1 BD : library   (interclassment : utf8_general_ci)
3tabs
1. authors
    a.  author_id       (int(11) , default NULL , index : primary key , autoIncrement A-I)
    b.  author_name     (varchar(100)  , default NULL)

2. books
    a.  book_id         (int(11) , default NULL , index : primary key , autoIncrement A-I)
    b.  book_title      (varchar(100)  , default NULL)
    c.  author_name     (varchar(100)  , default NULL)

3.  statistics
    a.  n               (int(11) , default NULL , index : primary key , autoIncrement A-I)
    b.  author_name     (varchar(100)  , default NULL)
    c.  stock           (int(4)) --nombre de livre de chaque author

Après avoir créé les tabs , clicker sur chaque tab puis "insérer" dans chaque tab les author, les titles..... : exemple :

1. authors
    b.  author_name     4 lignes : Labelais / Labelais / Du Pont / Goscinny 

2. books
    b.  book_title      4 lignes : Les Miserables / Astérix à la 3WA /
    c.  author_name     4 lignes : Hugo /

j'aiu oublié le rest

******************

left join : référencer sur la table left
right join : référencer sur la table right
donc l'ordre d'écrire le tabs dss FROM est important

*********************


SELECT *

FROM authors , books 

WHERE authors.author_name = books.author_name ;

**

SELECT *

FROM authors INNER JOIN books

ON authors.author_name = books.author_name ;

**

SELECT *

FROM authors LEFT JOIN books --standard , vaut mieux

ON authors.author_name = books.author_name ;

**

SELECT *

FROM authors RIGHT JOIN books -- pas standard

ON authors.author_name = books.author_name ;

***

SELECT *

FROM authors CROSS JOIN books

-- sans condition :ON authors.author_name = books.author_name ;
-- À VÉRIFIER

***

SELECT *

FROM authors

INNER JOIN books

ON authors.author_name = books.author_name

INNER JOIN statistics

ON books.author_name = statistics.author_name ;

****

SELECT *

FROM authors

LEFT JOIN books

ON authors.author_name = books.author_name

LEFT JOIN statistics

ON books.author_name = statistics.author_name ;



****************************

