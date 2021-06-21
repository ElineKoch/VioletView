<?php

require_once('query_movie.php');

function haalFilmInfoOp($id) {

    $film = getMovieFromId($id)[0]; 

    $regisseur = getDirectorFromId($id);
    if (!empty($regisseur)) {
        $naamRegisseur = "{$regisseur[0]['firstname']} {$regisseur[0]['lastname']}";
    } else {
        $naamRegisseur = '';
    }

    $cast = getActorsFromId($id);
    $namenCast = [];
    foreach($cast as $actor) {
        $namenCast[] = "{$actor['firstname']} {$actor['lastname']}";
    };

    $filmInfo = [
        'Titel' => $film['title'],
        'Jaar' => $film['publication_year'],
        'Regisseur' => $naamRegisseur,
        'Cast' => $namenCast,
        'Duur' => $film['duration'] . ' min',
        'Descriptie' => $film['description'] . '. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quia illo maiores aut quaerat natus omnis expedita rerum. Fugit iusto porro at natus, numquam recusandae iure autem ad corrupti assumenda.',
    ];

    return $filmInfo;
}