
function getRandomInt(numMin, numMax)
{
	var tirageAuSort = Math.round(Math.random()*(numMax-numMin) + numMin) ;
	console.log(tirageAuSort) ;
	return tirageAuSort ;
}

function getRandomIntImg (imgMin,imgMax)
{
	var tirageImg = Math.round(Math.random()*(imgMax-imgMin) + imgMin) ;
	console.log(tirageImg) ;
	return tirageImg ;
}

function getRandomIntVideo (vidMin,vidMax)
{
	var tirageVideo = Math.round(Math.random()*(vidMax-vidMin) + vidMin) ;
	console.log(tirageVideo) ;
	return tirageVideo ;
}

function createDiv () 
{ 
  // create a new div element   
  var newDiv = document.createElement("<div></div>"); 
  console.log(newDiv);
  return newDiv ;
}

function addDivChild (DivObj,newChild) 
{ 
	var parentDiv = DivObj;
  console.log(newChild);
  console.log(DivObj);
var newDivChild = parentDiv.appendChild(newChild); //add the img to the newly created div.
  console.log(newDivChild);
  return newDivChild ;
}

 function installEventHandler(selector,event,eventHandler)
{
    var DOMObject ;                                     // ex : éléments html,;;;
    DOMObject = document.querySelector(selector) ;      //  type évènement
    DOMObject.addEventListener(event,eventHandler) ;
     //qd arrive l'évènement,déclenche action(ventHandler)

} 

function videContenu()
{ 
   document.querySelectorAll(" p, video , audio ").innerHTML = "" ;   
}