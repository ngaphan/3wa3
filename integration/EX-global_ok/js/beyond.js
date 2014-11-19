
var beyondsArray =
[
	{
		name 		: 'deuxcolonnes' ,
		nbrBlocks 	: 2
	},
	{
		name 		: 'deuxlignes' ,
		nbrBlocks 	: 2
	},
	{
		name 		: 'troiscolonnes' ,
		nbrBlocks 	: 3
	},
	{
		name 		: 'colonne-2lignes' ,
		nbrBlocks 	: 3
	},
	{
		name 		: 'deuxlignes-colonne',
		nbrBlocks 	: 3
	}									
						
] ;

var forwards ;
var contenu ;
var tirageAuSort;

function init()
{
	//ciblage d'élément , var global
	forwards = document.querySelector(".forwards");
	contenu  = document.querySelector("#contenu");
	addEvents() ;	
}

function addEvents()
{
	forwards.addEventListener('click' , changeImg , false);
}

function changeImg()
{
	// pour trouver quelle mise en page qu'on est actuellemnt

	tirageAuSort = getRandomInt();
	

	// lister ce qu'on a dans le #contenu (classList)
	// puis enlever la page actuelle( ds le beyondsArray à la position qu'on 
	// vient de tirer au sort.
	// après le tirage on reçoit 1 Obj av les propriétés : name et nbrBlocks
	// on va suppr quelle propriété des deux ? -> faut citer la propriété
	// qu'on veut suppr et l'attacher à Obj qu'on veut suppr .Ici je suppr
	// que son "name" pour changer par un autre "name" auquel on peut l'appeler
	// dans le CSS ( si on suppr "nbrBlocks" et changer av un autre , ça 
	// correspond pas dans le CSS(existe pas dans CSS))

	var classActuelle = contenu.classList.toString();
	//remove veut que "string", donc faut convertir en str
	//console.log(classActuelle);
	contenu.classList.remove(classActuelle);
	contenu.classList.add(beyondsArray[tirageAuSort].name);
	contenu.innerHTML = null ;

	/*
	 * en fonction de nbr de blocks tiré aléatoire du tableau , faire 1 boucle pour
	 * créer / ajouter les <div> dont le nombre = nbrBlocks ;
	 * ajouter ces <div> dans son parent ( ici = #contenu)
	*/

	var smallImgArray = tirageRubrique();

	for( var iPos =0; iPos<beyondsArray[tirageAuSort].nbrBlocks; iPos++)
	{
		
		
		// create a new div element   
		  var newDiv = document.createElement('div'); //virtuel, ajoute pas directuelle ds html
		  newDiv.setAttribute('class',imgsArray[smallImgArray[iPos]].name);

		  newDiv.innerHTML = '<h1>' + imgsArray[smallImgArray[iPos]].name + '<h1';
		  //faut str pr innerHTML
		  addDivChild (contenu,newDiv) ;
		  // l'appeler après avoir créer, pas avant l'étape	"create a new div element" 
		  newDiv.addEventListener('click', affichVideo, false);

	}	

}

function affichVideo()
{
	
	console.log(this.classList + '.mp4');
	
	var imgActuelle = this.classList.toString();
	//remove veut que "string", donc faut convertir en str
	console.log(imgActuelle);
	this.classList.remove(imgActuelle);
	this.classList.add(imgActuelle + '.mp4');
	this.classList.innerHTML = null ;
	this.classList
}

init();

var imgsArray = 
[

	{	name :	'better' 	} ,	
	{	name :  'beyond'	} ,
	{	name : 	'curious'	} ,
	{	name : 	'dream'		} ,
	{	name : 	'enjoy'		} ,
	{	name : 	'contrary'	} ,					 
	{	name : 	'jenny'		} ,
	{	name : 	'jump'		} ,
	{	name : 	'justin'	} ,
	{	name : 	'magic'		} ,
	{	name : 	'nights'	} ,
	{	name : 	'ryan'		} ,
	{	name : 	'sally'		} ,
	{	name : 	'struggle'	} ,
	{	name : 	'through'	} ,
	{	name : 	'wild'		} 
						
] ;



function tirageRubrique()
{

	var imgTirageArray = [];
	var index = 0;


	while (index<beyondsArray[tirageAuSort].nbrBlocks)
	{
		var image = getRandomIntImg ();

		if(imgTirageArray.indexOf(image) == -1)
		/* je verifie 'image' tiré n'existe pas encore( veut dire =-1), 
		 * fait moi suivant: insérer 'image' dans 'imgTirage'
		 */
		{			
			imgTirageArray.push(image);
			index++;
		}
	}

	console.log(imgTirageArray);
	return imgTirageArray ;

}





