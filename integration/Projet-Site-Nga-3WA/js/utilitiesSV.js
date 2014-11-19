/*******************************************************************************************/
/********************************** FONCTIONS UTILITAIRES **********************************/
/*******************************************************************************************/

/*
 * TODO: la fonction n'efface que les valeurs des balises HTML <input type="text">,
 *       il faudrait prendre en compte les <textarea> et les <select>...
 */
function clearForm(selectorString)
{
	/* selectorString = Id du formulaire pr qu'on sache dans quoi il faut agir
	 * ici : selectorString = id ="js-contact-form"
	 * Donc , il faut aller dans <form> et agir sur ces enfants( = les inputs)
	 */


	// créer 1 varable pr stocker ts les champs à chaisir du formulaire
	var inputsArray;

	// Récupération de tous les champs de saisi du formulaire spécifié(=Id reçu).
	inputsArray = document.querySelectorAll(selectorString + ' input[type=text]');
	/* 
	 * va dans document,chercher moi tous les éléments de "selectorString=Id du formulaire"  
	 * qui contient les éléments input(=balise input) dont de "type=text".
	 * on a bcp de <input> de différents types(type="text",type="radio",type="button"...>, 
	 * donc input devient 1 tab qui contient les types différents .
	 * Ici on veut qu'il ns envoie que le type=text.
	 */
	console.log(inputsArray);
	// result : NodeList [ <input#lastName>, <input#firstName>, <input#phone> ]

	for(var indexInt = 0; indexInt < inputsArray.length; indexInt++)
	{
		/*
		 * Pour chaque champ de formulaire, on supprime le contenu de la propriété value
		 * correspondant à l'attribut HTML ' value="..." ' du champ de formulaire.
		 */
		inputsArray[indexInt].value = null;//donner value null=supprimer l'ancienne value
	}
}




function getFormFieldValue(formIdString, formFieldNameString)
{
	var formObject;		//cré 1 obj pr stocker le formulaire qui est identifié par Id 
  	var formFieldObject;//cré 1 obj pr stocker les'name' des champs à saisir du formulaire 
  						//ex: dans balise <input name="firstName">->on récupère:firstName

	formObject = document.getElementById(formIdString);
	/*
	 * va dans 'document',récupère l'élément qui a pour Id = 'formIdString' reçu en param.
	 * ici,'formIdString' = id du formulaire = "js-contact-form"
	 */

	/*
	 * Les objets DOM de formulaires ont une propriété elements qui elle-même
	 * a une méthode namedItem permettant de retrouver un objet DOM de champ
	 * de formulaire en fonction de son 'attribut HTML name'(=Ici:civility,firstName,
	 * lastName et phone qu'on a besoin de récupérer) qui va être envoyée 
	 * en param à la place de formFieldNameString.
	 */
	formFieldObject = formObject.elements.namedItem(formFieldNameString);
	/* 
	 *va dans formObject(= formulaire),grace à la methode 'namedItem', 
	 * cherche moi tous les éléments(=tous les balises)qui ont pour 'formFieldNameString'
	 * (formFieldNameString = valeur de l'attr 'name' de chaque balise.
	 * EX: name="civility/firstName/lastName/phone" -> formFieldNameString = civility)
	 * Puis les stocker dans l'obj 'formFieldObject'.
	 */
	console.log(formFieldObject);
	 /*
	  * result :
	  * <select name="title" id="title"> // title = vivilité			utilities.js:72
	  * <input type="text" name="firstName" id="firstName"> 			utilities.js:72
	  * <input type="text" name="lastName" id="lastName"> 				utilities.js:72
	  * <input type="text" maxlength="10" name="phone" id="phone">		utilities.js:72
	  */

  	/*
  	 * Une fois qu'on a obtenu l'objet DOM de champ de formulaire, on renvoie
     * sa propriété value, correspondant à l'attribut HTML value du champ de formulaire.
     */

    console.log(formFieldObject.value);
    /*
     * result :
     * "mister" 														utilities.js:86
     * "nga" 															utilities.js:86
     * "phan" 															utilities.js:86
     * "0102030405" 													utilities.js:86
     */

  	return formFieldObject.value;
}

function hideHtml(selectorString)
{
	// Ajout de la classe CSS hide sur l'objet DOM trouvé avec le sélecteur spécifié.
    document.querySelector(selectorString).classList.add('hide');
}

function installEventHandler(selectorString, eventString, eventHandlerFunction)
{
    var DOMObject;

    // Récupération du premier objet DOM correspondant au sélecteur.
    DOMObject = document.querySelector(selectorString);

    // Installation d'un gestionnaire d'évènement sur cet objet DOM.
    DOMObject.addEventListener(eventString, eventHandlerFunction);
}

function installEventHandlers(selectorString, eventString, eventHandlerFunction)
{
    var DOMObjects;

    // Récupération de tous les objets DOM correspondant au sélecteur.
    DOMObjects = document.querySelectorAll(selectorString);

    // Installation d'un gestionnaire d'évènement sur chaque objet DOM.
    for(var index = 0; index < DOMObjects.length; index++)
    {
        DOMObjects[index].addEventListener(eventString, eventHandlerFunction);
    }
}

function loadDataFromDomStorage(nameString)
{
  var jsonDataString;
	var jsonDataObject;

	jsonDataString = window.localStorage.getItem(nameString);

	/*
	 * Donnée simple (chaîne) -> JSON parse (= désérialisation) -> Donnée complexe
	 *
	 * Voir ci-dessous pour plus d'explications sur le pourquoi du JSON.
   * 
   * Note : l'objet retourné peut être un tableau (array)
   * puisque les tableaux ne sont qu'un type d'object particulier.
   *
	 */

  jsonDataObject = JSON.parse(jsonDataString);

	return jsonDataObject;
}

function saveDataToDomStorage(nameString, dataObject)
{
  var jsonDataString;

	/*
	 * Le DOM storage ne permet pas de stocker des données complexes (objet, tableau...).
	 * On doit donc d'aborder sérialiser nos données dans un format simple, le JSON.
	 *
	 * On obtient une chaîne représentant l'objet complexe, et c'est cette chaîne que
	 * l'on stocke dans le DOM storage.
	 *
	 * Donnée complexe -> JSON stringify (= sérialisation) -> Donnée simple (chaîne)
	 */
	jsonDataString = JSON.stringify(dataObject);

	window.localStorage.setItem(nameString, jsonDataString);
}

function showHtml(selectorString)
{
	// Suppression de la classe CSS hide de l'objet DOM trouvé avec le sélecteur spécifié.
	document.querySelector(selectorString).classList.remove('hide');
}