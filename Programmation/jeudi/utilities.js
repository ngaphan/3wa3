/***********************************************************
*************************************************************
*****creer la fonction gloable pr ts les eventments********
****ça veut dire on install un camion qui contient ts les *****
*****evenements. Cette func a pr but de capter ts les évenemetn et les écouter. Chaque evenemet corespondant il va appeler 1 fonction qui va réagir comme lévenement veut
*****dont on donne les parametres.ces paramente sont des evenements***********
************************************************************/
/* que les fonctions gloable ici, peut utilisé n'import où dans le monde*/



var oContact={

	"civility":'',	
	"name":'',
	"firstName":'',
	"telephone":''
};


function installEventHandler(selector,event,eventHandler){

	var DOMObject; //entre autres éléments html
	DOMObject=document.querySelector(selector);
	DOMObject.addEventListener(event,eventHandler);

/*addEventListener est 1 methode de l'obj docObject
eventHandler: est 1 fonction, il execute quand l'zvenment arrive*/

}

/* fonction pour cacher*/

function hideDOMObject(selector)

{
	document.querySelector(selector).classList.add("hide");
	// ou : document.querySelector(selector).toggle("hide");

}

// fonction pour afficher

function showDOMObject(selector)

{
	document.querySelector(selector).classList.remove("hide");
}	



// récupérer ts ce qui saisi d les input

function getFormFieldValue(formId,formFieldName)
{
	var form;//rentrer ds form récupère Id
	var formField;//nom du champs
	form=document.getElementById(formId);
	formField=form.elements.namedItem(formFieldName);

	/*=je rentre ds <form> puis chercher parmi ts les éléments ds <form>je récup 1 élément qui porte le champs de nom qu'on donne en paremeètre entre ( ) grace à la methode"namedItem"*/

	console.log(formField);


	return formField.value;

//value = vrai valeur saisi par l'utilisateur dans les input
	 
	 
}



function saveFormFieldValue(afterPressOnValider)
{
	
	var stringConvert=JSON.stringify(oContact);//convertir Obj->string
	console.log(stringConvert);//"{"civility":"","name":"","firstName":"","telephone":""}"
	var addressBook=[];

	window.localStorage.setItem("addressBook",stringConvert);//stocker le string ds le stockageglobal
	console.log(addressBook);
	return addressBook;
}


function writeFormFieldValueInVarGlobal(afterSaved)
{
	var addressBookstérialized;

	console.log(addressBookstérialized);
	

	window.localStorage.getItem(addressBook);//get Info saved
	
	var addressBook=addressBook.push(window.localStorage.getItem(addressBook));
	console.log(addressBook);	
}

/*
	
	

JSON.parse(addressBook);//reconvertir String en Obj
	console.log(oContact);
	addressBook=getFormFieldValue(formNewContact,oContact);//write in var global
	console.log(addressBook);*/


/*
saveFormFieldValue(pressed);

	console.log(addressBook);
	console.log(addressBook);

	*/