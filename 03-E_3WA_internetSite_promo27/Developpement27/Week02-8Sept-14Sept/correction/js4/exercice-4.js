/**
 * Calculate a random integer between iMin and iMax.
 *
 * @param iMin minimum value
 * @param iMax maximum value
 * @return integer random integer between iMin and iMax.
 */
function randomInteger(iMin, iMax) {
    document.write("Between " + iMin + " and " + iMax + "<br />");
    return Math.round(Math.random() * (iMax - iMin)) + iMin;
}

document.write("Random : " + randomInteger(100, 200));