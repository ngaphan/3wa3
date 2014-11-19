<?php
include('data.inc.php');
include('functions.inc.php');

if (count($_POST) > 0) {
    switch ($_POST['type']) {
        case 'cinema':
            $aSearchMovies = searchMoviesFromCinema($_POST['cinema'], $aCinemas, $aMovies);
            break;
        case 'duration':
            $aSearchMovies = searchMoviesFromDuration($_POST['duration'], $aMovies);
            break;
    }
} else {
    $aSearchMovies = $aMovies;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans"/>
    <link rel="stylesheet" type="text/css" href="css/movies.css"/>
</head>
<body>
<h1>Films à l'affiche</h1>

<?php displayMovies($aSearchMovies, $aCovers); ?>

<hr/>
<h2>Recherche par cinéma</h2>

<form class="standard-form" method="post" action="">
    <input type="hidden" name="type" value="cinema"/>
    <label for="cinema">Cinéma :</label> <select id="cinema" name="cinema">
        <?php foreach ($aCinemas as $iCinemaPos => $aCinema): ?>
            <option value="<?= $iCinemaPos; ?>"><?= $aCinema['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher"/>
</form>

<hr/>
<h2>Recherche par durée maximum d'un film</h2>

<form class="standard-form" method="post" action="">
    <input type="hidden" name="type" value="duration"/>
    <label for="duration">Durée en minutes :</label> <input
        type="number" id="duration" name="duration"/>
    <input type="submit" value="Rechercher"/>
</form>
</body>
</html>