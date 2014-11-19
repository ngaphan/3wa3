

jquery: librarie mondial pr js

EventTarget.addEventListener -> creer funct global pr ts les  evenements, permet appeler direEventTarget.addEventListenerctemnt, ajouter ls écoute à n'import quqel eveenement...... aulieu citer chaq evenements

ex: myFunction("element" ,"onclick","onmousseover")

-> faire ds utilities.js -> joint dans<head> de html, juste avant la fermeture</head>. MAis faut soit cohérent que la page doit etre charger avant d'etre appeler.Donc la  1rer fontion ds addressbook.js doit être la fonction : qui a pr but de dire : quand la page est bien  charger exécuter moi ce qu'il y a ds la fonction

-> faire ds addressbook.js -> joint dans<body> de html, juste avant la fermeture</body>


3fonct
.querySelector()
.querySelectorAll()
.addEventListener= C 1 methode/function dans objet, on peut l'attacher à n'import quel obj


d'abord faire sur 1 seul élément, puis on ajoute les evemeent on veut

selector, =id,  class
event, onlick...
enventHandler : on va ecouter les évenemet

site :DOM ->toggel


DOMContentLoaded: nom de la fonction qui vérifi le chargement de la page


************
vendredi

AJOUT DANS LE CARNET D'ADRESS(NOUVEAU CONTACT)
1. 	OBJ CONTACT
2
récupère de carnet d'adress sérialisé à partir du local storage
3. désérialise(array addresssBook)
4. ajout obj contact à l'array addressbook( .push)
5.sérialiser l'array addressbook
6. enregistrer ds  localstorage
7.vérifi s'il y a qc ds localstorage
//dans la console->Resources->local Storage -> file://...


* functions:
1 sérialisation
2 désérialisation
3.enregistrement
4.récupération
5.vérification s'il y a qc ds localstorage




/*

	//recup les valeurs tapées ds les inputs
	var myCivility=getFormFieldValue("formNewContact","civility");
	var myFirstName=getFormFieldValue("formNewContact","firstName");
	var myName=getFormFieldValue("formNewContact","name");
	var myTel=getFormFieldValue("formNewContact","tel");


	

	oContact.civility=myCivility;
	oContact.name=myName;
	oContact.firstName=myFirstName;
	oContact.telephone=myTel;


	var stringConvert=JSON.stringify(oContact);
	console.log(stringConvert);	
	window.localStorage.setItem("addressBook",stringConvert);

	//1.convertir Obj->string (=sérialiser)
	//2."{"civility":"","name":"","firstName":"","telephone":""}"
	//3.stocker le string ds le stockageglobal addressBook


}
	


function textConvertToObj()
{
	console.log(window.localStorage.getItem("addressBook"));

	var objConverted=window.localStorage.getItem("addressBook");
	console.log(objConverted);

	objConverted=JSON.parse(objConverted);//reconvertir String en Obj

	console.log(objConverted);

	

}

function addNewContact()
{
	var book=window.localStorage.getItem("addressBook");

	console.log(book);

	
}



/*******************************************************Récupérer les valeurs tapé ds input************************************************************************************************************/








/*******************************************************save les valeurs tapé ds input****************************************************************************************************************/











/*******************************************************save les valeurs tapé ds input****************************************************************************************************************/

/*

installEventHandler(".valid","click",getFormFieldValue);

		//writeFormFieldValueInVarGlobal;

*/


/*
document.addEventListener
(

"DOMContentLoaded",function()
	{
		console.log(" page is loaded and parsed");

		installEventHandler(".valid","click",saveFormFieldValue);
		installEventHandler(".valid","click",getFormFieldValue);

		//writeFormFieldValueInVarGlobal;
		
		
		console.log(" button pressed");
	}

);










document.querySelector('#startAuto').onclick = function () {
    oInterval = setInterval(increaseSlider, 500);
};
document.querySelector('#stopAuto').onclick = function () {
    clearInterval(oInterval);
};*/