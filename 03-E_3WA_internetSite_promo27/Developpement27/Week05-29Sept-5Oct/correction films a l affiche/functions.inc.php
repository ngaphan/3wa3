<?php

/**
 * Display a movie duration in hours+minutes.
 *
 * @param integer $iDurationInMinutes duration in minutes.
 * @return string duration in hours+minutes.
 */
function displayDuration($iDurationInMinutes)
{
    $iHour = intval($iDurationInMinutes / 60);
    // two ways : with %, or without
    // $iMinutes = intval($iDurationInMinutes % 60);
    $iMinutes = $iDurationInMinutes - ($iHour * 60);
    // adds zero when minutes less than ten
    if ($iMinutes < 10) {
        $iMinutes = '0' . $iMinutes;
    }
    $sDuration = $iHour . 'h' . $iMinutes . 'min';

    return $sDuration;
}

/**
 * Display a single movie.
 *
 * @param array $aMovie
 *            movie to display.
 * @param array $aCovers covers.
 */
function displayMovie(array $aMovie, array $aCovers)
{
    ?>
    <div class="movie">
        <img src="images/<?= $aCovers[$aMovie['cover']]; ?>">

        <p>
            <strong><?= $aMovie['title']; ?></strong> - <em><?= displayDuration($aMovie['duration']); ?></em>
        </p>
    </div>
<?php
}

/**
 * Display a list of movies.
 *
 * @param array $aMovies
 *            movies to display.
 * @param array $aCovers covers.
 */
function displayMovies(array $aMovies, array $aCovers)
{
    echo '<ul class="movie-list">';
    foreach ($aMovies as $aMovie) {
        echo '<li>';
        displayMovie($aMovie, $aCovers);
        echo '</li>';
    }
    echo '</ul>';
}


/**
 * Search all movies displayed in a cinema.
 *
 * @param string $sCinema cinema to search.
 * @param array $aCinemas all cinemas.
 * @param array $aMovies all movies.
 * @return array movies displayed in the cinema.
 */
function searchMoviesFromCinema($sCinema, array $aCinemas, array $aMovies)
{
    $aSearchMovies = array();
    foreach ($aCinemas[$sCinema]['rooms'] as $iMovieId) {
        $aSearchMovies[] = $aMovies[$iMovieId];
    }

    return $aSearchMovies;
}


/**
 * Search all movies which duration is less than $iDurationMax.
 *
 * @param integer $iDurationMax duration max.
 * @param array $aMovies all movies.
 * @return array matched movies.
 */
function searchMoviesFromDuration($iDurationMax, array $aMovies)
{
    $aSearchMovies = array();
    foreach ($aMovies as $aMovie) {
        $iDuration = $aMovie['duration'];
        if ($iDuration <= $iDurationMax) {
            $aSearchMovies[] = $aMovie;
        }
    }

    return $aSearchMovies;
}