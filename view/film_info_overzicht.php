<?php

require_once('datamodel/haal_film_info_op.php');

function maakFilmInfoOverzicht($id)
{
    $filmInfo = haalFilmInfoOp($id);

    $img = getAfbeeldingFromId($id)[0]['cover_image'];  
    if(empty($img)) {
        $img = 'images/placeholder.jpg';
    }
        
    $html = "<section class='info_section'>
    <img src='{$img}' alt='{$filmInfo['Titel']} ({$filmInfo['Jaar']})'>
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
