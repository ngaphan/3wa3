
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
	console.log(classActuelle);
	contenu.classList.remove(classActuelle);
	contenu.classList.add(beyondsArray[tirageAuSort].name);
	contenu.innerHTML = null ;

	/*
	 * en fonction de nbr de blocks tiré aléatoire du tableau , faire 1 boucle pour
	 * créer / ajouter les <div> dont le nombre = nbrBlocks ;
	 * ajouter ces <div> dans son parent ( ici = #contenu)
	*/

	for( var iPos =0; iPos<beyondsArray[tirageAuSort].nbrBlocks; iPos++)
	{
		var div = createDiv() ;
		addDivChild (contenu,div) ;	
	}	

	tirageRubrique();

}

init();

var imgsArray = [
					'img/better.jpg' ,
					'img/beyond.jpg' ,
					'img/contrary.jpg' ,
					'img/curious.jpg',	
					'img/dream.jpg',	
					'img/enjoy.jpg',	
					'img/jenny.jpg',	
					'img/jump.jpg',	
					'img/justin.jpg',	
					'img/magic.jpg',	
					'img/nights.jpg',	
					'img/ryan.jpg',	
					'img/sally.jpg',	
					'img/struggle.jpg',	
					'img/through.jpg',	
					'img/wild.jpg'	
			] ;



function tirageRubrique()
{

	var imgTirageArray = [];
	 	

	for(j=0;j<beyondsArray[tirageAuSort].nbrBlocks;j++)
	{
		var image = getRandomIntImg ();

		if(imgTirageArray.indexOf(image) == -1)
		/* je verifie 'image' tiré n'existe pas encore( veut dire =-1), 
		 * fait moi suivant: insérer 'image' dans 'imgTirage'
		 */
		{			
			imgTirage.push(image);
		}
	}

	console.log(imgTirage);

}


var vidsArray = 
[

					'img/better.jpg' ,
					'img/beyond.jpg' ,
					'img/contrary.jpg' ,
					'img/curious.jpg',	
					'img/dream.jpg',	
					'img/enjoy.jpg',	
					'img/jenny.jpg',	
					'img/jump.jpg',	
					'img/justin.jpg',	
					'img/magic.jpg',	
					'img/nights.jpg',	
					'img/ryan.jpg',	
					'img/sally.jpg',	
					'img/struggle.jpg',	
					'img/wild.jpg'
] ;

var newVideo = getRandomIntVideo(0,14) ;

function tirageVideo()
{

	var vidTirageArray = [];
	 	

	for(j=0;j<beyondsArray[tirageAuSort].nbrBlocks;j++)
	{
		var image = getRandomIntImg ();

		if(imgTirageArray.indexOf(image) == -1)
		/* je verifie 'image' tiré n'existe pas encore( veut dire =-1), 
		 * fait moi suivant: insérer 'image' dans 'imgTirage'
		 */
		{			
			imgTirage.push(image);
		}
	}

	console.log(imgTirage);

}

addDivChild(createDiv,vidsArray[newVideo]);



