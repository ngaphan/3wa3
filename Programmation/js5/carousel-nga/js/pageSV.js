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


var indiceArr=0;
  

function changePageFun(iTab)

 {

 	document.querySelector('#page img').src = pagesArr[iTab].image;
    document.querySelector('#page img').alt = pagesArr[iTab].legend;
    document.querySelector('#page p').innerHTML = pagesArr[iTab].legend;


    //console.log(pagesArr[iTab]);
    
 }



function incrementPage()
 {

    indiceArr++;
    
    if(indiceArr>=pagesArr.length)
        {
            indiceArr=0;
        }

    changePageFun(indiceArr);

    console.log(pagesArr[indiceArr]);

    console.log(indiceArr);

    
 }


 function decrementPage()
 {

    indiceArr--;
    
    if(indiceArr<0)
        {
            indiceArr=pagesArr.length-1;
        }

    changePageFun(indiceArr);

    console.log(pagesArr[indiceArr]);

    console.log(indiceArr);
    
 }



document.querySelector('#page-next').onclick = function () 

{
    
    incrementPage();
}

document.querySelector('#page-previous').onclick = function () 

{
    
    decrementPage();
}


changePageFun(indiceArr);