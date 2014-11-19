


var myPizza=
{
	price:5.00,
	ingredients:["tomatoes","cheese","ham"],
	size:32
}

var iMax=myPizza.ingredients.length;
console.log(iMax);


var i=0;

/* i est l'indice du tableau qui  commence par 0 , qui correspond à l'élément No1 */

while (i<iMax)
	{
		console.log(myPizza.ingredients[i]);
		i++;
	}

	
console.log(myPizza.ingredients[i]);// i=iMax quand il sort

*************************************

for(var i=0;i<=10; i++)
{
	console.log(i);
}

console.log(i + " je sors");

var i=0;
while(i<=10)
{
	console.log(i);
	if(i==3)
		{ 
			document.write("hello");
			break;
			//pr sortir de boucle.S'il y a 1 seule instruction, pas obligé {}
		}
	i++;

}

console.log(i + " je sors");



*****************************************

 boucle for
var myPizza=
{
	price:5.00,
	ingredients:["tomatoes","cheese","ham"],
	size:32
}

var iMax=myPizza.ingredients.length;

for(var i=0;i<iMax;i++)
	{
		console.log(myPizza.ingredients[i]);
	}


*****************************************


myArray=[

			"hello",
			[

				"bonjour",
				"chao"

			] ,


			[

				"buy",
				"manger"

			]

];

console.log(myArray[0]);
console.log(myArray[1][0]);
console.log(myArray[1][1]);
console.log(myArray[2][0]);
console.log(myArray[2][1]);

********************************************


//Affichier de 1 à 10 de haut en bas pour faire 10 lignes

document.write("<table>"); 					// ecrire moi <table>


for(var i=0; i<10;i++)   					//faire moi une boucle de <tr>
	{

		document.write						//Dans la boucle 
		(										
			"<tr>"							// écrire moi <tr>				
				+"<td>"						// écrire moi <td>
					+(i+1)					// écrire moi (i+1),
				+"</td>"					// écrire moi </td>	
			+"</tr>"						// écrire moi </tr>
		);							
	}

document.write("</table>");					// écrire moi </table>



******************************************


//Affichier le tableau de multiplication de 2 dimentions de 10 lignes

document.write("<h1>Tableau de multiplication</h1>"); 	





document.write("<table>"); 					// ecrire moi <table>
	

for(var i=1; i<=10;i++) 					//faire moi une boucle de <tr>

	{	
		document.write("<tr>");				// écrire moi <tr>
		
			for(var j=1; j<=10;j++)			//faire moi une boucle de <tr>
				{ 
					document.write						
					(										
						"<td>"				// écrire moi <td>		
						+(i*j)				// écrire moi (i*j)			
						+"</td>"			// écrire moi </td>
					);
				}
		document.write("</tr>");
									
	}

document.write("</table>");					// écrire moi </table>

*****************************
// LIFO début
var pile = new Array()  ; 
pile.push(50) ;				// arr.push(element1, ..., elementN)
console.log(pile.push()) ;	// LIFO utilise push pour ranger

pile.push(30) ;	
console.log(pile.push()) ;

pile.push(20) ;	
console.log(pile.push()) ;

console.log(pile.pop()) ;  // sort la valeur 20  LIFO
console.log(pile)         ;

console.log(pile.pop()) ;  // sort la valeur 30  LIFO
console.log(pile)         ;

console.log(pile.pop()) ;  // sort la valeur 50  LIFO
console.log(pile)         ;
// LIFO fin

// FIFO début
var pile = new Array()  ; 
pile.unshift(50) ;				// arr.unshift(element1, ..., elementN)
console.log(pile) ;				// FIFO utilise unshift pour ranger

pile.unshift(30) ;	
console.log(pile) ;

pile.unshift(20) ;	
console.log(pile) ;

console.log(pile[0]);
console.log(pile[1]) ;
console.log(pile[2]) ;

console.log(pile.pop()) ;  // sort la valeur 50  FIFO
console.log(pile)   

console.log(pile.pop()) ;  // sort la valeur 30  FIFO
console.log(pile)         ;
      
console.log(pile.pop()) ;  // sort la valeur 20  FIFO
console.log(pile)       ;
// FIFO fin	   



*****************************

function hello3WA(firstName,lastName)
{
	
	document.write("<h1> Hi "+firstName+" "+lastName+" </h1>");//pas besoin de déclarer les variables dans la function
}

	
	//document.write(firstName + lastName );
	// faut déclarer les variables si on est hors d la fonction.Donc
	var firstName="nga";
	var lastName="Phan";
	document.write(firstName + lastName );


hello3WA("Pierre","Nga");
hello3WA("2", "Aude");
hello3WA("Nga","Phan");

***************************

/* se vérifier si on a oublié de donner le paramètre lors de l'appel de la foncion*/
function hello3WA(firstName,lastName)
{
	if(typeof firstName=="undefined")
	{
		console.log("J'ai oublié le firstName ");
		return; // juste pr s ortir du code
	}
	document.write("<h1> Hi "+firstName+"</h1>");
}

	
hello3WA();

******************


function addition(numOne,numTwo)
{
	
	var result=numOne +numTwo;
	return result;
	/*il renvoie le résultat 48 et s'arrête net, il fait plus rien après meme si on écrit les codes après le return*/
}

	
document.write(addition(23,25));

******************************


// Ecrire 1 tab, puis 1 fonction qui multiplier ts les éléments


var myTable=[2,4,10,3,0.5,5];

function multiply(myArray)			// multiplier ts les éléments ds myArray
{
	

	var result=myTable[0];			// déclarer la variable result
		
	for(var i=1;i<myTable.length;i++)// la boucle pr multiply les éléments
	{	
			
		result=(result*myTable[i]);
		
	}

	console.log(result);			// pr voir ce qu'elle fait chauque
	return result;	// return result pr l'afficher,sinon il s'affiche rien
}


document.write(multiply(myTable)); 
// appel la fonction en dehors de la fonction car si on l'appel dedans , fonction va mordre la queue(=récursive)bouclée
	



	******************



	/*

cours du 12/9/14

portée des variables

dans quelle partie du code est applicable la variable ?


ex:
/*

function myFunction()
{
	var test="bonjour";
	return test;// erturn pas le mot test mais la valeur dedans , ici ="bonjour"
}


var test2 = myFunction();

console.log(test2);

console.log(test);

affiche : bonjour et "test is not defined" car test n'est pas appelable en dehors de la fonction. Donc en dehors de la fonction faut le déclarer, comme suit:
*/
/*
function myFunction()
{
	var test="bonjour";
	return test;
}


var test2 = myFunction();

console.log(test2);// ok car j'ai déclaré

var test = myFunction();

console.log(test);// ok car j'ai déclaré var test=myFunction();

*/





/*

function myFunction()
{
	var test="hello";
	return "hello";
}

console.log(myFunction());


var test2 = myFunction();

console.log(test);


autre manière de déclarer variabkle

*/


/*


var test="bom dia" ;// bonjour en portugais

//déclarer variable avant tout

function myFunction()
{
	console.log(test); // je peux l'appeler à l'intérieur de fa fonction
}

myFunction();


// conclusion: éviter max de déclarer avant la fonction, car
ça sera variable global , on créer nouveau variable global ( sousentendu : on cré var windows.test) et lui attache les nouvelle propriété pr windows , ça attaché à la fenetre entière , donc on peut lappeler nimpot où

DOM: (Documetn Object Model) :tt ce qi vs créer en dehors de la fonctuion sont attaché au attribut windows

*/

var test="bom dia" ;//déclarer variable avant tout


function myFunction()
{
	console.log(test);
	// je peux l'appeler à l'intérieur de fa fonction av la variable tel quel
	

	console.log(window.test);


	/* je l'appel av window.test il comprend ossi car lors que je créer à l'extérieur de la fonction , c'est 1 variable global de toute la fenetre , càd de window, on peut l'appeler n'import où , il comprendra , on l'ajoute window attaché à test , window.test : propriété "test" de l'objet window . 


	test est variable , si je déclare avant de la fontion il devient 1 propriété de l'objet window( car window est varible de tout le monde

	JS ne lit que le nom de la fonction pr que si qn l'appel il revient tout suite , il s'enfiche des lignes de codes à l'intérieur de la fonction meme sil y a erreur. on voir les erreur lors de l'exécutuion


	consulter : DOM/Window dans devdocs.io*/
}

myFunction();


