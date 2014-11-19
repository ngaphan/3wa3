/*********************************************************************
**************** On déclare les variables globales *******************
*********************************************************************/
var verticalIndex = 0;
var flecheBas;
var mainContainer;
var el;
var horizontalIndex = 0;
var flecheDroite;
var flecheGauche;
var largeContainer;
/*********************************************************************
**************** On déclare une fonction qui se lance automatiquement 
*****************(pas obligatoire, mais plus clair)*******************
*********************************************************************/

function init(){
	flecheBas 		= document.querySelector('.fleche');
	mainContainer	= document.querySelector('#mainContainer');
	el 				= document.querySelectorAll('.menu > a');
	flecheDroite	= document.querySelector('.detailsForward');	
	flecheGauche	= document.querySelector('.detailsBack');
	largeContainer  = document.querySelector('#largeContainer');
	addEvents();
}

function addEvents(){
	/*** Fleche bas ***/
	flecheBas.addEventListener('click', clickDown, false);
	/*** Menu ***/
	for (var i = 0; i < el.length; i++){
		el[i].dataset.ref = i;
		el[i].addEventListener('click', goTo, false);
	}
	/*** Scroll ***/
	window.addEventListener('wheel', skroll, false);
	/*** Details fleche droite ***/
	flecheDroite.addEventListener('click', clickRight, false);	
	/*** Details fleche droite ***/
	flecheGauche.addEventListener('click', clickLeft, false);
}
	
init(); 

/*********************************************************************
************************** Fonction click bas ************************ 
*********************************************************************/

function clickDown(evt){
	verticalIndex = verticalIndex + 1;
	mainContainer.classList.remove(mainContainer.classList[0]);
	mainContainer.classList.add("clickDown" + verticalIndex);
	if(verticalIndex>0)
	{
		flecheBas.classList.remove('flecheAnim');
	}
	if (verticalIndex===11) 
	{
		flecheBas.classList.add('hide');

	};
	if (verticalIndex>11)
	{
		verticalIndex = 11;
	}
}

/*********************************************************************
*********************** Fonction scroll up/down ********************** 
*********************************************************************/

function skroll(evt){
	window.removeEventListener('wheel', skroll, false);
	var test = evt.deltaY; 

	if(test>0)
	{
		verticalIndex = verticalIndex + 1;	
		mainContainer.classList.remove(mainContainer.classList[0]);
		mainContainer.classList.add("clickDown" + verticalIndex);

		if(verticalIndex>0)
		{
			flecheBas.classList.remove('flecheAnim');
		}
		if (verticalIndex===11) 
		{
			flecheBas.classList.add('hide');
		}
		if (verticalIndex>10)
		{
			verticalIndex = 11;
		}
	}	

	if(test<0)
	{
		verticalIndex = verticalIndex - 1;	
		mainContainer.classList.remove(mainContainer.classList[0]);
		mainContainer.classList.add("clickDown" + verticalIndex);
		if(verticalIndex<1)
		{
			flecheBas.classList.add('flecheAnim');
		}
		if (verticalIndex<11) 
		{
			flecheBas.classList.remove('hide');
		}
		if (verticalIndex<0)
		{
			verticalIndex = 0;
		}
	}

	mainContainer.addEventListener('transitionend', endScroll, false);		

}

function endScroll(e){
	window.addEventListener('wheel', skroll, false)
}

/*********************************************************************
*************************** Menu principal *************************** 
*********************************************************************/

function goTo(evt){
	verticalIndex = this.dataset.ref;
	mainContainer.classList.remove(mainContainer.classList[0])
	mainContainer.classList.add("clickDown" + verticalIndex);
}

/*********************************************************************
****************************** Details ******************************* 
*********************************************************************/

function clickRight(evt){
	horizontalIndex = horizontalIndex + 1; 
	largeContainer.classList.remove(largeContainer.classList[0]);
	largeContainer.classList.add("clickSide" + horizontalIndex);
	console.log('Click Right : ' + horizontalIndex);
}
function clickLeft(evt){
	horizontalIndex = horizontalIndex - 1; 
	largeContainer.classList.remove(largeContainer.classList[0]);
	largeContainer.classList.add("clickSide" + horizontalIndex);
	console.log('Click Left : ' + horizontalIndex);

}










