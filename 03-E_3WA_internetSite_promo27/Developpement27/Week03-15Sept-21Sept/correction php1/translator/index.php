<?php
$aAllWords = array('cat' => 'chat', 'dog' => 'chien', 'sea' => 'mer', 'sun' => 'soleil');
if (array_key_exists('lang', $_GET)) {
    $sLang = $_GET['lang'];
} else {
    $sLang = 'fr';
}

$aLangWords = array();
if ('fr' == $sLang) {
    $aLangWords = array_values($aAllWords);
} else {
    $aLangWords = array_keys($aAllWords);
}


if (array_key_exists('word', $_POST)) {
    $sTranslateWord = $_POST['word'];
    if ('fr' == $sLang) {
        $sFoundWord = array_search($sTranslateWord, $aAllWords);
    } else {
        $sFoundWord = $aAllWords[$sTranslateWord];
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>
<h1>Traducteur PHP</h1>
<?php if (array_key_exists('word', $_POST)) {
    echo 'Translation of ' . $sTranslateWord . ' => ' . $sFoundWord;
} ?>
<form method="post" action="index.php?lang=<?= $sLang; ?>">
    <label>Word</label>
    <select name="word">
        <?php for ($iPos = 0; $iPos < count($aLangWords); $iPos++) {
            echo '<option>' . $aLangWords[$iPos] . '</option>';
        } ?>
    </select>
    <input type="submit" value="submit"/>
</form>
</body>
</html>