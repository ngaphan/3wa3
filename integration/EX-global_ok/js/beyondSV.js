document.addEventListener
(
	"DOMContentLoaded",
	function()     
		{
			installEventHandler(".forwards","click",videContenu());     
		}
);


var beyondsArray =[

					'deuxcolonnes' ,
					'deuxlignes' ,
					'troiscolonnes' ,
					'colonne-2lignes' ,
					'deuxlignes-colonne'	
] ;

var beyond = getRandomInt(0,4);

if (beyond==0) {
	document.querySelector(".contenu").classList.add("deuxcolonnes");					
				addElement() ;
				console.log("je suis 0");
				console.log("a new element est added");
};


switch(beyond)
{
	case  0 :
			
				document.querySelector(".contenu").classList.add("deuxcolonnes");					
				createDiv
				console.log("je suis 0");
				console.log("a new element est added");
				break ;

			
	case 1 :
				
				document.querySelector(".contenu").classList.add("deuxlignes");				
				createDiv;
				console.log("je suis 1");
				break ;
				
	case 2 :				
				document.querySelector(".contenu").classList.add("troiscolonnes");				
				createDiv;
				console.log("je suis 2");
				break ;
	case 3 :
				
				document.querySelector(".contenu").classList.add("colonne-2lignes");				
				createDiv;
				console.log("je suis 3");
				break ;				
	case 4 :
				
				document.querySelector(".contenu").classList.add("deuxlignes-colonne");				
				createDiv;
				console.log("je suis 4");
				break ;				

	default :
				
				document.querySelector(".contenu").classList.add("deuxcolonnes");				
				createDiv;
				console.log("je suis 0");
				console.log("a new element est added");
				break ;		
}


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

		/*			
		{ image: 'images/1.jpg', legend: 'Photo 1' },      
        { image: 'images/2.jpg', legend: 'Photo 2' },
        { image: 'images/3.jpg', legend: 'Photo 3' },
        { image: 'images/4.jpg', legend: 'Photo 4' },
        { image: 'images/5.jpg', legend: 'Photo 5' },
        { image: 'images/6.jpg', legend: 'Photo 6' }	
		*/			



var newImg = getRandomIntImg(0,15) ;

addDivChild(createDiv,imgsArray[newImg]);	


var vidsArray = [
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
addDivChild(createDiv,vidsArray[newVideo]);

/*
switch(newVideo)
{
	case 0 :		
				addElement(vidsArray[0]);	
				break ;			
	case 1 :				
				addElement(vidsArray[1]);
				break ;				
	case 2 :
				addElement(vidsArray[2]);				
				break ;				
	case 3 :
				addElement(vidsArray[3]);				
				break ;				
	case 4 :
				addElement(vidsArray[4]);				
				break ;
	case 5 :
				addElement(vidsArray[5]);				
				break ;
	case 6 :
				addElement(vidsArray[6]);				
				break ;				
	case 7 :
				addElement(vidsArray[7]);				
				break ;
	case 8 :
				addElement(vidsArray[8]);				
				break ;			

	case 9 :
				addElement(vidsArray[9]);				
				break ;			
	case 10 :
				addElement(imgsArray[10]);				
				break ;
	case 11 :
				addElement(vidsArray[11]);				
				break ;
	case 12 :
				addElement(vidsArray[12]);				
				break ;
	case 13 :
				addElement(vidsArray[13]);				
				break ;
	case 14 :
				addElement(vidsArray[14]);				
				break ;

	default :
				addElement(vidsArray[0]);	
				break ;									
}
*/
