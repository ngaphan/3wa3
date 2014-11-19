
function getRandomInt ()
{
  var tirageAuSort = Math.floor(Math.random()*beyondsArray.length) ;

  console.log(tirageAuSort) ;
  return tirageAuSort ;
}


function getRandomIntImg ()
{
	var tirageImg = Math.floor(Math.random()*imgsArray.length) ;
	console.log(tirageImg) ;
	return tirageImg ;
}

function createDiv () 
{ 
  // create a new div element   
  var newDiv = document.createElement('div'); //virtuel, ajoute pas directuelle ds html

  //faut str pr innerHTML

  console.log(newDiv);

  return newDiv ;
}

function addDivChild (DivElement,newChild) 
{ 
	var parentDiv = DivElement;

  console.log(newChild);
  console.log(DivElement);

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


