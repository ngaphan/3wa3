// La liste des pages.

var pagesArr =
    [
        { image: 'images/1.jpg', legend: 'Photo 1' },
        { image: 'images/2.jpg', legend: 'Photo 2' },
        { image: 'images/3.jpg', legend: 'Photo 3' },
        { image: 'images/4.jpg', legend: 'Photo 4' },
        { image: 'images/5.jpg', legend: 'Photo 5' },
        { image: 'images/6.jpg', legend: 'Photo 6' }
    ];


var indiceArr= 0;


changePageFun(indiceArr);
 

function changePageFun(iTab)

 {

 	document.querySelector('#page img').src = pagesArr[iTab].image;
    document.querySelector('#page img').alt = pagesArr[iTab].legend;
    document.querySelector('#page p').innerHTML = pagesArr[iTab].legend;


    console.log(iTab);
    
    
 }



function incrementPage(i)
 {

    
    var newI=i+1;
    
    
    if(newI>=pagesArr.length)
        
        {
            newI=0;
        }

    changePageFun(newI);


    return newI;

    
 }
 

 

 function decrementPage(j)
 {

    var newJ= j-1;
    
    if(newJ<0)

        {
            newJ=pagesArr.length-1;
        }

    

    changePageFun(newJ);
    
    return newJ;
    
 }



document.querySelector('#page-next').onclick = function () 

{
    
    indiceArr= incrementPage(indiceArr);
    
}

document.querySelector('#page-previous').onclick = function () 

{
    
   indiceArr= decrementPage(indiceArr);
    
}

/*
funtion() : c'est une fonction anonyme , donc elle n'est pas considérée comme un fonction , 
Conclusion: ici je ne suis pas dans une fonction .

indiceArr= decrementPage(indiceArr);

ça veur dire que je veut récupérer la nouvelle value de la variable "indiceArr" par appeler la fonction : decrementPage(indiceArr). 
->(indiceArr) en paramètre port l'ancienne value à ce stade
*/
