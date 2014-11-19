/*******************************************************************************************/
/********************************** FONCTIONS UTILITAIRES **********************************/
/*******************************************************************************************/

/*
 * TODO: la fonction n'efface que les valeurs des balises HTML <input type="text">,
 *       il faudrait prendre en compte les <textarea> et les <select>...
 */
function clearForm(selectorString)
{
	var inputsArray;

	// Récupération de tous les champs de formulaire du formulaire spécifié.
	inputsArray = document.querySelectorAll(selectorString + ' input[type=text]');

	for(var indexInt = 0; indexInt < inputsArray.length; indexInt++)
	{
		/*
		 * Pour chaque champ de formulaire, on supprime le contenu de la propriété value,
		 * correspondant à l'attribut HTML value du champ de formulaire.
		 */
		inputsArray[indexInt].value = null;
	}
}

function getFormFieldValue(formIdString, formFieldNameString)
{
	var formObject;
  var formFieldObject;

	formObject = document.getElementById(formIdString);

	/*
	 * Les objets DOM de formulaires ont une propriété elements qui elle-même
	 * a une méthode namedItem permettant de retrouver un objet DOM de champ
	 * de formulaire en fonction de son attribut HTML name.
	 */
	formFieldObject = formObject.elements.namedItem(formFieldNameString);

  /*
   * Une fois qu'on a obtenu l'objet DOM de champ de formulaire, on renvoie
   * sa propriété value, correspondant à l'attribut HTML value du champ de formulaire.
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