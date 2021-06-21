<?php

require_once('query_movie.php');

function filterFilms() {
$searchKeys = ['year', 'genre', 'director', 'title'];
$searchValues = [];
foreach ($searchKeys as $key) {
    if (isset($_GET[$key]) && !empty($_GET[$key])) {
        $searchValues[$key] = htmlspecialchars(trim($_GET[$key]));
    } else {
        $searchValues[$key] = null;
    }
}

var_dump($searchValues);

$films = getMovies($searchValues['year'], $searchValues['genre'], $searchValues['director'], $searchValues['title'], null, 50, null, null);

return $films;
}