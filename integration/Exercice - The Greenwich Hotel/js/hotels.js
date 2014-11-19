/*********************************************************/
/*********** Explication du JS ***************************/
/************************************************************/
/*
crer 1 var en js pr stocker les position où on est
bloc contient 12 rubriques , hauteur 1200% , width :100%
translateY d'espace de 100% pour que àa monte à chaque fois 1 img
supp class précédent
incrémenter var ,
ajouter nouvelle class

attention : lors : position absolute , ça va cacher qn élément -> faut z-index :1 pr que cet élément supperpose sur le background

cibler ts les a 
dataset pr ajouter les attr-index
recuperer au click cet index
*/

var iPosImg = 0;
var bottom ;
var blocImages ;
var element ;

//function déclencher auto des debut de la page

function init()
{
	//ciblage ts lse élement qur les quel on va régagird'élément ,sinon on peut pas l'appeler
	//forwards = document.querySelector(".forwards");
	//backwards  = document.querySelector(".backwards");
	blocImages  = document.querySelector("#blocImages");
	bottom  = document.querySelector(".bottom");
	element  = document.querySelectorAll(".menu-main a");
	addEvents() ;
	incresaseIndex()	 ;
}
init() ;

function addEvents()
{
	//forwards.addEventListener('click' , changeImg , false);
	//backwards.addEventListener('click' , changeImg , false);
	// on peut ajouter le séveneùeny ici : mollete...
	bottom.addEventListener('click' , changeImg , false);
	element.addEventListener('click' , changeImg , false);
}

function changeImg(e)
{	
	var classActuelle = blocImages.classList[0];
	blocImages.classList.remove(classActuelle);

	// si on cré pas var , ces 2 lignes remplca" par la ligne //suivante
	//blocImages.classList.remove(blocImages.classList[0]);

	iPosImg++;
	var nextClass = 'showPage' + iPosImg ;
	// chaine de nom de nouvelle class = page1
	blocImages.classList.add(nextClass) ;
}


function incresaseIndex () {

	for(var i=0 ; i< element.length ; i++)
	{
		element[i].dataset.index = i ;		
	}	
}

