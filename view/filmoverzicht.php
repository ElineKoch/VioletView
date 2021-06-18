<?php

require_once('datamodel/filter_films.php');

function maakGenreOpties() {
    $genres = getGenres();
    $html = "<option value =''>-</option>";
    foreach($genres as $genre) {
        $html .= "<option value ='{$genre['genre_name']}'>{$genre['genre_name']}</option>";
    }

    return $html;
}

function maakFilmOverzicht($films) {
    $html = '';
    foreach($films as $film) {
        $html .= "<section>
        <a href='film_info.php'><img src='images/placeholder.jpg' alt='{$film['title']} ({$film['publication_year']})'></a>
        <a href='film_info.php'>{$film['title']} ({$film['publication_year']})</a>
        </section>";
    }

    return $html;
}