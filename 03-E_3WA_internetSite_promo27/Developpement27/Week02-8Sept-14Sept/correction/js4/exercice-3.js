/**
 * Display a sentence nth times.
 *
 * @param iNth will repeat nth times the display.
 * @param sSentence sentence to display.
 */
function nthSentences2(iNth, sSentence) {
    for (var iPos = 1; iPos <= iNth; iPos++) {
        document.write('<p>' + sSentence + '</p>');
    }
}


var iRandom = Math.ceil(Math.random() * 100);
document.write("Random number : " + iRandom);

nthSentences2(iRandom, 'test');
