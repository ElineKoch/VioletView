<?php

require_once('db_connectie.php');
require_once('queryExecuter.php');

$titles = [
    'Clockwork Orange, A',
    'Shining, The',
    'Eyes Wide Shut',
    'Full Metal Jacket',
    'Barry Lyndo',
    '2001: A Space Odyssey',
    'Day of the Fight',
    'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb',
    'Fear and Desire',
    'Flying Padre',
    'Killer\'s Kiss',
    'Killing, The',
    'Lolita',
    'Paths of Glory',
    'Seafarers, The',
    'Spartacus'
];

foreach ($titles as $title) {
    $param = [
        ':cover_image' => 'images/' . str_replace([' ', ':', '.', "'"], ['_', '', '', ''], $title) . '.jpg',
        ':title' => $title
    ];

    $query = "UPDATE movie SET cover_image = :cover_image WHERE title = :title";
    executeQuery($query, $param);
}

