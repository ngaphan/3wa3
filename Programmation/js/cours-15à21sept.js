
Javascript 3 : le DOM
DOM : Document Object Model
Définition

    Navigation entre les éléments HTML
    Interface de programmation pour les langages XML et HTML
    Agir sur une page web

Conception
Noeud

    élément
    attribut
    texte

Exemple : 

<p class="center">This is a sample text</p>
Accès aux éléments

L'Objet document représente l'ensemble de l'arborescence du document.

    getElementById : sélection d'un élément via son identifiant (id=)
    getElementsByClassName : sélection de tous les éléments ayant la classe
    getElementsByTagName : sélection de tous les éléments ayant le nom de balise

Modification du contenu HTML

La propriété .innerHTML contient tout le contenu HTML d'un élément. En lui affectant une nouvelle valeur, vous pourrez en modifier le contenu.
Récupérer des valeurs

Une fois que vous avez votre élément DOM, vous pouvez lire les informations suivantes :

    Identifiant : .id
    Classe : .className
    Propriété CSS : .style.propriété

Les événements
Liste de tous les événements Javascript
Evénement	Description
Abort 
(onAbort) 	Cet événement a lieu lorsque l'utilisateur interrompt le chargement de l'image
Blur 
(onBlur) 	Se produit lorsque l'élément perd le focus, c'est-à-dire que l'utilisateur clique hors de cet élément, celui-ci n'est alors plus sélectionné comme étant l'élément actif.
Change 
(onChange) 	Se produit lorsque l'utilisateur modifie le contenu d'un champ de données.
Click 
(onClick) 	Se produit lorsque l'utilisateur clique sur l'élément associé à l'événement.
dblclick 
(onDblclick) 	Se produit lorsque l'utilisateur double-clique sur l'élément associé à l'événement (un lien hypertexte ou un élément de formulaire).
dragdrop 
(onDragdrop) 	Se produit lorsque l'utilisateur effectue un glisser-déposer sur la fenêtre du navigateur.
error 
(onError) 	Se déclenche lorsqu'une erreur apparaît durant le chargement de la page.
Focus 
(onFocus) 	Se produit lorsque l'utilisateur donne le focus à un élément, c'est-à-dire que cet élément est sélectionné comme étant l'élément actif
keydown 
(onKeydown) 	Se produit lorsque l'utilisateur appuie sur une touche de son clavier.
keypress 
(onKeypress) 	Se produit lorsque l'utilisateur maintient une touche de son clavier enfoncée.
keyup 
(onKeyup) 	Se produit lorsque l'utilisateur relâche une touche de son clavier préalablement enfoncée.
Load 
(onLoad) 	Se produit lorsque le navigateur de l'utilisateur charge la page en cours
MouseOver 
(onMouseOver) 	Se produit lorsque l'utilisateur positionne le curseur de la souris au-dessus d'un élément
MouseOut 
(onMouseOut) 	Se produit lorsque le curseur de la souris quitte un élément.

Reset 
(onReset) 	Se produit lorsque l'utilisateur efface les données d'un formulaire à l'aide du bouton Reset.
Resize 
(onResize) 	Se produit lorsque l'utilisateur redimensionne la fenêtre du navigateur
Select 
(onSelect) 	Se produit lorsque l'utilisateur sélectionne un texte (ou une partie d'un texte) dans un champ de type "text" ou "textarea"
Submit 
(onSubmit) 	Se produit lorsque l'utilisateur clique sur le bouton de soumission d'un formulaire (le bouton qui permet d'envoyer le formulaire)
Unload 
(onUnload) 	Se produit lorsque le navigateur de l'utilisateur quitte la page en cours
Exemples

Directement dans les événements

<h1 onclick="alert('title!');">...

<h1 onclick="this.innerHTML = 'oooops';">...

Fonction 

<p onclick="changeMe();">...

function changeMe(){ ... }

<input type="text"onchange="doSomething();" />
Les event listeners

<script>
document.getElementById("myBtn").onclick=function(){
alert('click');
};
</script>
Modifié le: mercredi 21 mai 2014, 12:42

*********************************
Exercice JS 1 : DOM

Créer une page HTML ayant un titre h1 (identifiant "title") et deux titres h2 ayant des classes différentes.

    Afficher dans une popup, le contenu du titre h1.
    Afficher dans plusieurs popup, toutes les classes des titres h2.

Puis faire la même chose avec les querySelector.
Modifié le: mercredi 21 mai 2014, 12:34

****************************
Exercice JS 2 : Wikipedia

Récupérer une page Wikipedia et l'enregistrer sur votre poste. A l'aide des fonctions du DOM, afficher :

    le nombre de balise <p>
    le nombre de balise <p> directement dans une balise <div>
    modifier le titre <h1> en lui ajoutant la date du jour à la fin

Modifié le: mercredi 21 mai 2014, 12:33



***************************

Exercice JS 2 : Carousel
Partie 1

En vous basant du projet carousel, afficher un slider d'images défilant lorsque l'on clique sur des boutons "précédent" et "suivant".
Partie 2

Afficher un bouton permettant d'afficher une image aléatoire.

Afficher un bouton permettant de faire défiler toutes les images. Voir la fonction window.setInterval().

Afficher un bouton permettant d'arrêter le défilement automatique. Voir la fonction window.clearInterval().
Partie 3

Mettre les boutons dans une barre et permettre de masquer/afficher la barre lorsque l'on clique sur un bouton.

Permettre d'afficher l'image suivante/précédente lorsque la souris passe sur le bouton "suivant"/"précédent".
Modifié le: mercredi 21 mai 2014, 15:34

******************

PHP 1 : Exercice Traducteur

1. Créer une page web permettant de traduire un mot du français vers l'anglais.

Le mot devra être choisi par l'utilisateur.

Liste des mots à traduire : chat, chien, mer, soleil...

2. Permettre d'effectuer la traduction dans un sens ou dans l'autre.
Modifié le: vendredi 23 mai 2014, 10:31

*******************

Exercice PHP 2 : Tri des tableaux

    Créer un tableau contenant cinq fruits (minimum) avec leur prix au kilo (par exemple des bananes à 2,3€/kg, pommes à 1.99€/kg...)
    Afficher le nom de tous les fruits dans un paragraphe
    Afficher tous les fruits avec leur prix par ordre alphabétique dans une liste html
    Afficher tous les fruits triés par prix dans une liste numérotée

Modifié le: vendredi 23 mai 2014, 15:26


************************


Exercice PHP 3 : Exercice TODO list

On vous propose de gérer une TODO list (liste de choses à faire).

Pour ce faire vous devrez pouvoir stocker :

    le titre
    la description
    la date
    la priorité

Vous devez proposer une page pour ajouter une nouvelle tâche, une pour lister toutes les tâches, et une autre pour en supprimer.

Pour les plus rapides : ajouter une page de modification, puis une page pour copier une ligne.
Modifié le: mercredi 28 mai 2014, 11:27

*************************


PHP exercices supplémentaires : fonctions

Créer les fonctions suivantes :

Si applicable, les fonctions doivent retourner false si elle ne sont pas en mesure d'accomplir leur mission

Testez chacune des fonctions après les avoir créées

    fonction affichant "Hello world"
    aucun paramètre

    fonction affichant "Hello " suivi d'un prénom
    1 paramètre pour le prénom

    fonction convertissant la première lettre en majuscule, et le reste en minuscule (pour un prénom par exemple)
    peu importe la casse du paramètre
    1 paramètre pour le nom ou le prénom

    fonction additionnant deux chiffres
    deux paramètres pour les deux chiffres
    retourne le résultat

    fonction additionnant jusqu'à 5 chiffres
    2 paramètres obligatoires, les 3 autres optionnels
    retourne le résutlat

    fonction affichant l'heure actuelle en format 24h
    aucun paramètre

    fonction affichant le contenu d'un array (print_r) à l'intérieur de balises HTML "<pre>"
    1 paramètre : l'array à afficher

    fonction affichant chacune des clefs et des valeurs d'un array associatif
    afficher dans un format definition list <dl>
    1 paramètre : l'array associatif

    fonction affichant OU retournant la date au format français
    (comprenant le nom du jour de la semaine en toutes lettres)
    par défaut, elle doit afficher la date, et non la retourner 
    1 paramètre booléen : false == affiche, true == retourne

Modifié le: mardi 3 juin 2014, 11:37

*******************************

PHP Exercices supplémentaires : tableaux

//voici un array numérique
$tiroir = array("clef", "monnaie", "facture", "facture", "facture");

//affichez la deuxième valeur

//faites un print_r de cet array


//affichez la dernière valeur (sans compter, vous etes développeur et paresseux)


//ajoutez un autre élément dans l'array


//voici un array associatif
$livre = array(
			"titre" => "A Clash of Kings",
			"annee" => 2000,
			"pages" => 562,
			"auteur" => "George R. R. Martin"
);

//faites un print_r sur cet array

//ajouter l'ISBN (0-553-10803-4)

//ajouter le prix (25,98)

//affichez uniquement le nombre de page, en concaténant la chaine "Nombre de pages : "

//affichez le titre dans un balise h3. Cette balise doit avoir une classe de "book_title".
//voici un array multidimensionnel
		$paiements = array(
			array(
				"montant" => 12.55,
				"date" => "12/02/2013"
			),
			array(
				"montant" => 132.11,
				"date" => "21/11/2013"
			),
			array(
				"montant" => 125.00,
				"date" => "09/03/2013"
			),
			array(
				"montant" => 128.11,
				"date" => "11/12/2012"
			)
		);


//faites un print_r, à l'intérieur de balises <pre>

//affichez le montant du deuxième paiement

//affichez la date du dernier paiement

//ajoutez un nouveau paiement

//modifiez le montant du premier paiement (nouvelle valuer : 133.42)


//construisez un array nommé "students" comprenant les prenoms de tous les etudiants

//faites un print_r sur cet array

//affichez le 4e étudiant de votre array


//modifiez, un à un, le prenom de chaque etudiant pour qu'il contienne plutôt le prenom ET le nom de famille. 
//si vous ne le connaissez pas, soyez créatif.

//créez un array vide nommé "me"

//ajoutez les paires de clefs-valeurs suivantes à votre array associatif : 
//age = votre age
//first_name = votre prénom
//last_name = votre nom de famille
		
//affichez votre age en utilisant la valeur stockée dans l'array

//faites-vous vieillir de 5 ans en ajoutant 5 à votre age, dans l'array

//créez un array vide nommé "mess"
//ajoutez-y un nombre quelconque
//ajoutez-y une valeur booléenne
//ajoutez-y votre array students
//ajoutez-y une clef "me" ayant pour valeur votre array "me"
//faites un print_r de "mess"

//affichez votre age à partir de cet array

//affichez le nom du 2e étudiant dans l'array

//modifiez la valeur booléenne

 
Modifié le: mardi 3 juin 2014, 11:46


********************************

PHP Exercices supplémentaires : boucles

//affichez les nombres de 1 à 100
//affichez les nombres de 5 à 25, séparé par des virgules
//affichez les multiples de 5 compris entre 0 et 100
//affichez les nombres pairs de 20 à 60, séparés par des balises "<br />"
//affichez toutes les années depuis votre naissance. Chaque année doit être affichée dans une balise "<p>"
//ayant une classe de "birth_date"

//affichez les nombres de 50 à 25, en ordre décroissant, sauf le nombre 30.

//construisez un array nommé "nums" contenant les nombres 10 à 20 (avec une boucle toujours)



//voici un array numérique
$tiroir = array("clef", "monnaie", "facture", "facture", "facture");

//faites un print_r

//affichez toutes les valeurs de l'array

//affichez toutes les valeurs, séparés par des "<br />"

//voici un array associatif

$livre = array(
"titre" => "A Clash of Kings",
"annee" => 2000,
"pages" => 562,
"auteur" => "George R. R. Martin"
);

//affichez toutes les clefs et toutes les valeurs dans ce format, sans utiliser directement les clefs dans votre code :
//clef : valeur<br />
//clef : valeur<br />

//voici un array multidimensionnel
		$paiements = array(
			array(
				"montant" => 12.55,
				"date" => "12/02/2013"
			),
			array(
				"montant" => 132.11,
				"date" => "21/11/2013"
			),
			array(
				"montant" => 125.00,
				"date" => "09/03/2013"
			),
			array(
				"montant" => 128.11,
				"date" => "11/12/2012"
			)
		);

//affichez tous les paiement.
//chaque paiement doit être contenu dans un div et être affiché sous cette forme :
//<div class="payment">
//<h3>PAIEMENT</h3>
//montant : 999.99
//date : 11/11/1911
//</div>

Modifié le: mardi 3 juin 2014, 11:46