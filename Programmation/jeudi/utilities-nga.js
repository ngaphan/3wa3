function installEventHandler(selector,event,eventHandler)
{

	var DOMObject; 	 
	DOMObject=document.querySelector(selector);	
	DOMObject.addEventListener(event,eventHandler);

	//1.creer 1 obj local
	//2.récuperer le param 'selector'-> met ds DOMObject
	//3.atacherct; 	 
	//DOMObject=d 'event et eventHandler' récupéré grace à la fonction addEventListener
	
}



// fonction pour cacher

function hideDOMObject(selector)

{
	document.querySelector(selector).classList.add("hide");
	//chercher ds document(=html) le selector donné par le param 
	//'selector', ça va donner 1 liste des classes qui a dans
	//html.Ici on ajoute la class qui s'appelle 'hide'
}

// fonction pour afficher lors qu'on click sur le button

function showDOMObject(selector)

{
	document.querySelector(selector).classList.remove("hide");
}	


// récupérer ts ce qui saisi dans les inputs

function getFormFieldValue(formId,formFieldName)
{
	var form;						//rentrer ds form récupère Id
	var formField;					//nom du champs
	form=document.getElementById(formId);		//formNewContact
	formField=form.elements.namedItem(formFieldName);
//=je rentre ds <form> puis chercher parmi ts les éléments ds 
//<form>je récup 1 élément qui porte le champs de nom qu'on donne 
//en paremeètre entre ( ) grace à la methode"namedItem"

	console.log(form);
	console.log(formField);

	console.log(formFieldName);

	return formField.value;

//value = vrai valeur saisi par l'utilisateur dans les inputs
	 
	 
}

function showNewContactForm()

{
	showDOMObject("#formNewContact");
}


function initializeLocalStorage()

{
	if(window.localStorage.getItem("addressBook")==null)
	{
		var addressBookTab=[];
		addressBookStr=JSON.stringify(addressBookTab);
		window.localStorage.setItem("addressBook",addressBookStr)
		console.log(getFromStorageSaddressBook);
	}
	
}



function saveFormFieldValue()
{
	//créer Obj 
	var oContact = {
		"civility":'',	
		"name":'',
		"firstName":'',
		"telephone":''
	}


	//recup le carnet d'address serialisé à partir du local storage

	var getFromStorageStr=window.localStorage.getItem("addressBook");
	console.log(getFromStorageStr);


	//désérialiser en  array addressBook//	
	var addressBookArray=JSON.parse(getFromStorageStr);
	console.log(addressBookArray);

 	//ajouter oContact ds array addressBook
 	addressBookArray=addressBookArray.push(oContact);


 	// sérialiser en  l'array addressBookArr
 	addressBookString=JSON.stringify(addressBookArray);


 	//enregistrer ds local storage
 	window.localStorage.setItem("addressBook",addressBookString);


};








