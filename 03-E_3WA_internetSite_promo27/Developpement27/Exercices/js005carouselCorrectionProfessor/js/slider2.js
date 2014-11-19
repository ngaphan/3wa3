/***********************************************************************************/
/*********************************** DONNEES SLIDER ********************************/
/***********************************************************************************/

// Objet contenant la position du slider.
var iSliderPosition = 0;

// La liste des aSlides.
var aSlides =
    [
        { image: 'images/1.jpg', legend: 'Photo 1' },
        { image: 'images/2.jpg', legend: 'Photo 2' },
        { image: 'images/3.jpg', legend: 'Photo 3' },
        { image: 'images/4.jpg', legend: 'Photo 4' },
        { image: 'images/5.jpg', legend: 'Photo 5' },
        { image: 'images/6.jpg', legend: 'Photo 6' }
    ];

// Intervalle
var oInterval;

/***********************************************************************************/
/********************************** FONCTIONS SLIDER *******************************/
/***********************************************************************************/

function changeImage(iPosition) {
    document.querySelector('#js-slider img').src = aSlides[iPosition].image;
    document.querySelector('#js-slider img').alt = aSlides[iPosition].legend;
    document.querySelector('#js-slider p').innerHTML = aSlides[iPosition].legend;
}

function increaseSlider() {
    iSliderPosition++;
    if (iSliderPosition >= aSlides.length) {
        iSliderPosition = 0;
    }
    changeImage(iSliderPosition);
}

function decreaseSlider() {
    iSliderPosition--;
    if (iSliderPosition < 0) {
        iSliderPosition = aSlides.length - 1;
    }
    changeImage(iSliderPosition);
}


/***********************************************************************************/
/********************************** CODE PRINCIPAL *********************************/
/***********************************************************************************/


document.querySelector('#js-slider-previous').onclick = function () {
    decreaseSlider();
};
document.querySelector('#js-slider-next').onclick = function () {
    increaseSlider();
};
document.querySelector('#random').onclick = function () {
    iSliderPosition = getRandomInteger(0, aSlides.length - 1);
    changeImage(iSliderPosition);
};
document.querySelector('#startAuto').onclick = function () {
    oInterval = setInterval(increaseSlider, 500);
};
document.querySelector('#stopAuto').onclick = function () {
    clearInterval(oInterval);
};

changeImage(iSliderPosition);