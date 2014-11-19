/**
 * Display a sentence nth times.
 *
 * @param iNth will repeat nth times the display.
 */
function nthSentences(iNth) {
    for (var iPos = 1; iPos <= iNth; iPos++) {
        document.write('<p>Sentence to display!</p>');
    }
}

nthSentences(3);

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


nthSentences2(2, 'test');

