<?php

require_once('datamodel/haal_film_info_op.php');

function maakFilmInfoOverzicht($id)
{
    $filmInfo = haalFilmInfoOp($id);

    $html = "<section class='info_section'>
    <img src='https://m.media-amazon.com/images/M/MV5BZjI5YjQ0OWUtM2RmYy00Njk3LWJiOTctNzFlNzM3MWE2ZTdiXkEyXkFqcGdeQXVyMjk4MTk0NDc@._V1_UX182_CR0,0,182,268_AL_.jpg' alt='{$filmInfo['Titel']} ({$filmInfo['Jaar']})'>
    <a href='film_trailer.php?id={$id}'>Bekijk de trailer ></a>
    <table>";

    foreach($filmInfo as $key => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $html .= "<tr><th>$key:</th><td>$value</td></tr>";
    }
     
    $html .= "</table>
    <a href='films.php'>Terug naar het filmoverzicht ></a>
    </section>";

    return $html;
}
