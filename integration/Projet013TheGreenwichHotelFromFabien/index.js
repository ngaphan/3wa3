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
var toggleImg;
var toggleText;
var menuDetail;
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
	toggleImg		= document.querySelectorAll('.toggleImg');
	toggleText		= document.querySelectorAll('.toggleText');
	menuDetail		= document.querySelectorAll('.navMenu > li')
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
	/*** toggle dans section details ***/
	for (var toggleIndex = 0; toggleIndex<toggleImg.length; toggleIndex++)
	{
		toggleImg[toggleIndex].dataset.index = toggleIndex;
		toggleImg[toggleIndex].addEventListener('click', toggle, false);
	}
	/*** menu dans section détails ***/
	for(var iDetail=0; iDetail<menuDetail.length; iDetail++)
	{
		menuDetail[iDetail].dataset.iDetail = iDetail;
		menuDetail[iDetail].addEventListener('click', goToHorizontal, false);
	}
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
		if(verticalIndex<11)
		{
			verticalIndex = verticalIndex + 1;	
			mainContainer.classList.remove(mainContainer.classList[0]);
			mainContainer.classList.add("clickDown" + verticalIndex);

			if(verticalIndex>0)
			{
				flecheBas.classList.remove('flecheAnim');
			}
		}
		if(verticalIndex===11) 
		{
			flecheBas.classList.add('hide');
			window.addEventListener('wheel', skroll, false);
		}
	}	

	if(test<0)
	{
		if(verticalIndex>0)
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
		}
		else
		{
			verticalIndex = 0;
			window.addEventListener('wheel', skroll, false);
		}
	}

	mainContainer.addEventListener('transitionend', endScroll, false);		

	console.log(verticalIndex);
}

function endScroll(e){
	window.addEventListener('wheel', skroll, false);
}

/*********************************************************************
*************************** Menu principal *************************** 
*********************************************************************/

function goTo(evt){
	verticalIndex = parseInt(this.dataset.ref);
	mainContainer.classList.remove(mainContainer.classList[0]);
	mainContainer.classList.add("clickDown" + verticalIndex);
	console.log(verticalIndex);
}

/*********************************************************************
****************************** Details ******************************* 
*********************************************************************/

function clickRight(evt){
	horizontalIndex = horizontalIndex + 1; 
	if(horizontalIndex<=11)
	{
		largeContainer.classList.remove(largeContainer.classList[0]);
		largeContainer.classList.add("clickSide" + horizontalIndex);
		console.log(largeContainer.classList);
	}
	else 
	{
		horizontalIndex = 0;
		largeContainer.classList.remove(largeContainer.classList[0]);
		largeContainer.classList.add("clickSide0");
		console.log(largeContainer.classList);
	}
}

function clickLeft(evt){
	if(horizontalIndex>0)
	{
		horizontalIndex = horizontalIndex - 1; 
		largeContainer.classList.remove(largeContainer.classList[0]);
		largeContainer.classList.add("clickSide" + horizontalIndex);
		console.log(largeContainer.classList);
	}
	else
	{
		horizontalIndex = 11; 
		largeContainer.classList.remove(largeContainer.classList[0]);
		largeContainer.classList.add("clickSide11");
		console.log(largeContainer.classList);
	}
}

function toggle(evt){
	var index = parseInt(this.dataset.index);
	toggleText[index].classList.toggle('hideToggle');
	toggleImg[index].classList.toggle('toggleRotate');
	console.log('testHideToggle');
}

function goToHorizontal(evt){
	var indexDetail = parseInt(this.dataset.iDetail);
	horizontalIndex = indexDetail;
	largeContainer.classList.remove(largeContainer.classList[0]);
	largeContainer.classList.add("clickSide" + horizontalIndex);
	console.log(largeContainer.classList);
}



mainContainer.addEventListener('transitionend', fullOpacity, false);		

function fullOpacity(evt){
	opacity : 1;
}

