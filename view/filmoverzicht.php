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
        if(isset($film['cover_image']) && !empty($film['cover_image'])) {
            $img = $film['cover_image'];        
        } else {
            $img = 'images/placeholder.jpg';
        }

        $html .= "<section>
        <a href='film_info.php?id={$film['movie_id']}'><img src={$img} alt='{$film['title']} ({$film['publication_year']})'></a>
        <a href='film_info.php?id={$film['movie_id']}'>{$film['title']} ({$film['publication_year']})</a>
        </section>";
    }
     return $html;  
}