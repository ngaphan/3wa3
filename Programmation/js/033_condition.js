var operation;
var numFirst;
var numSecond;
var result;



operation=window.prompt("QUELLE OPÉRATION ? 
							1,2,3,4 pour addition,soustraction, 
							multiplication,division");


if(operation <1 || operation >4)
{
	document.prompt("Veuillez entrer un nombre de 1 à 4 : ");
}

numFirst=window.prompt("Donner le premier chiffre");
numSecond=window.prompt("Donner le seconde chiffre");
	


numFirst=parseFloat(numFirst);

numSecond=parseFloat(numSecond);







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

	
