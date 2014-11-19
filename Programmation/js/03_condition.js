/* OK
var myVar=12;


if(myVar==12)
{
	document.write("myVar  est égal à 12 ");
}


if(myVar!=12)
{
	document.write(" myVar  n'est pas égal à 12 ");
}


var myVar=12;

if(myVar==12)
{
	document.write("myVar  est égal à 12 ");
}


else
{
	document.write("myVar n'est pas égal à 12 ");
}



*/

/* OK
Vérifier si le prix est égal à 5 et il y a bien 3 ingrédients  

var myPizza=
{
	price:5.00,
	ingredients:["tomatoes","cheese","ham"],
	size:32
}


if(myPizza.price==5 && myPizza.ingredients.length==3)

{
	document.write	("  MyPizza has three ingredients : " 
					  	+myPizza.ingredients[0] 
		 				+" , " 
						+myPizza.ingredients[1]
						+ " , " 
						+ myPizza.ingredients[2] 
						+".<br><br> It costs 5.00 $ . <br><br>"
					);
}

else
{
	document.write("myPizza doesn't have 3 ingredients nor costs 5.00$<br>");
}



 prix est différent de 5 et nb d'ingrédients =6 OU prix est égal à 5 et nb d'ingrédients 3 */



/*
if( (myPizza.price!=5 && myPizza.ingredients.length==6)  
	||
	(myPizza.price==5 && myPizza.ingredients.length==3) )

{
	document.write("Content !");
}

else
{
	document.write("Pas content !");
}


*/
/* demander à l'internaute  1 fenêtre : quelle opération
							2 fenêtre : 1er chiffre 
							3 fenêtre : 2è chiffre  
							Faut nbr à virgule
							*/








/*

var operation;
var numFirst;
var numSecond;
var result;

operation=window.prompt(   "QUELLE OPÉRATION ? 
							1,2,3,4 pour 'addition','soustraction', multiplication','division'"   );



numFirst=window.prompt("Donner le premier chiffre");
numSecond=window.prompt("Donner le seconde chiffre");


numFirst=parseFloat(numFirst);

numSecond=parseFloat(numSecond);



if(isNaN(numFirst) && isNaN(numSecond))

	{
		document.write("Veuillez entrer 1 chiffre : " );
	}


else
	{
		switch(operation)
		{
			case "1" :
			result = (numFirst + numSecond );
			document.write(" Resultat = " + result );
			break;


		
			case "2" :
			result = (numFirst - numSecond );
			document.write(" Resultat = " + result );
			break;


			case "3":
			result = (numFirst * numSecond );
			document.write(" Resultat = " + result );
			break;
		
			case "4":
			result = (numFirst / numSecond );
			document.write(" Resultat = " + result );
			break;

		

			default :
			document.write("Voulez -vous continuer? ");
			break;

		}


	}


*/



/* Déclaration des variables */

var operation;
var numFirst;
var numSecond;
var result;


/*Saisir 1 opération */

operation=window.prompt(   "QUELLE OPÉRATION ? 
							1,2,3,4 pour 'addition','soustraction', multiplication','division'"   );




else
	{
		numFirst=window.prompt("Donner le premier chiffre");
		numSecond=window.prompt("Donner le seconde chiffre");
	}



/* Convertir pr voir si l'internaut a bien saisi les chiffre non pas un txt */


numFirst=parseFloat(numFirst);

numSecond=parseFloat(numSecond);


/* si c'est pas le chiffre */

if(isNaN(numFirst) && isNaN(numSecond))

	{
		document.write("Veuillez entrer 1 chiffre : " );
	}


else
	{
		switch(operation)
		{
			case "1" :
				result = (numFirst + numSecond );
				document.write(" Resultat = " + result );
				break;


		
			case "2" :
				result = (numFirst - numSecond );
				document.write(" Resultat = " + result );
				break;


			case "3":
				result = (numFirst * numSecond );
				document.write(" Resultat = " + result );
				break;
		
			case "4":
				result = (numFirst / numSecond );
				document.write(" Resultat = " + result );
				break;

		

			default :
				document.write("Veuillez entrer un nombre de 1 à 4 : ");
				break;

		}


	}


