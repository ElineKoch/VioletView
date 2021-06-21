<?php
include_once('queryExecuter.php');

function getAllMovies(): array
{
    $query = "SELECT movie.movie_id, movie.title, movie.publication_year, mg.genre_name
                FROM movie INNER JOIN movie_genre mg on movie.movie_id = mg.movie_id
                WHERE genre_name = 'Documentary' LIMIT 100;";
    $array = [];

    return executeQuery($query, $array)->fetchAll();
}

function getMoviesWithDirectorId($searchWord, $year, $genre, $sortSelect = "title"): array
{

    $query = "
        SELECT 
            movie.movie_id, 
            movie.title as title, 
            movie.description, 
            movie.cover_image,
            movie.publication_year as year
            
        FROM movie WHERE movie_id IN (SELECT movie_id FROM movie_genre WHERE genre_name = :genre)";
    if (isset($year)) {
        $query .= "AND movie.publication_year = $year";
    }
    $query = "WITH movies AS ({$query}) SELECT * FROM movies 
    INNER JOIN movie_director md on movies.movie_id = md.movie_id
    WHERE title LIKE :search ORDER BY $sortSelect ";

    $param = [
        "search" => "%" . $searchWord . "%",
        "genre" => $genre
    ];

    return executeQuery($query, $param)->fetchAll();
}

function getMovies($year, $genre, $director, $title, $id, $amount, $random, $from): array
{
    $query = "";
    $params = [];

    if ($random) {
        $query .= ("SELECT * FROM movie LIMIT $amount");
    } elseif ($year || $genre || $director || $title || $from) {
        $query = "SELECT * FROM movie";
        $query .= " WHERE ";
        if ($year) {
            $params[':year'] = $year;
            $query .= "publication_year LIKE (:year)";
            if ($genre || $director || $title || $from) {
                $query .= " AND ";
            };
        };
        if ($genre) {
            $params[':genre'] = $genre;
            $query .= "movie_id IN (SELECT movie_id FROM movie_genre AS test WHERE genre_name = :genre)";
            if ($director || $title || $from) {
                $query .= " AND ";
            };
        };
        if ($director) {
            $params[':director'] = "%" . $director . "%";
            $query .= ("movie_id IN (SELECT movie_id FROM movie_director WHERE person_id IN (SELECT person_id FROM person WHERE CONCAT(firstname, ' ', lastname) LIKE (:director)))");
            if ($title || $from) {
                $query .= " AND ";
            };
        };
        if ($title) {
            $params[':title'] = "%" . $title . "%";
            $query .= "title LIKE (:title)";
            if ($from) {
                $query .= " AND ";
            };
        };
        if ($from) {
            $params[':id'] = $id;
            $query .= "movie_id >= :id";
        };
        if ($amount) {
            $query .= "LIMIT $amount ";
        }
    } elseif ($id) {
        $params[':id'] = $id;
        $query = "SELECT * FROM movie WHERE movie_id = :id LIMIT $amount";
    } else {
        $query = "SELECT * FROM movie LIMIT $amount";
    };

    return executeQuery($query, $params)->fetchAll();
};

function getMovieFromGenre($genre): array
{
    $query = "SELECT * FROM movie WHERE movie_id IN (SELECT movie_id FROM movie_genre WHERE genre_name = :genreName)";
    $params = [
        "genreName" => $genre
    ];
    return executeQuery($query, $params)->fetchAll();
}

function getYears(): array
{
    $query = "SELECT DISTINCT(publication_year) FROM movie ORDER BY publication_year DESC";

    return executeQuery($query, [])->fetchAll();
};

function getGenres($amount = null): array
{

    $query = "";
    if (!$amount) {
        $query .= "SELECT genre_name FROM genre";
    } else {
        $query .= ("SELECT genre_name FROM genre LIMIT $amount");
    };

    return executeQuery($query)->fetchAll();
};

function getGenreFromId($movie): array
{
    $query = "SELECT genre_name FROM movie_genre WHERE movie_id = :id";

    return executeQuery($query, [":id" => $movie])->fetchAll();
};

function getGenreFromTitle($movie): array
{
    $query = "SELECT genre_name FROM movie_genre WHERE movie_id IN (SELECT movie_id FROM movie WHERE title = :title)";

    return executeQuery($query, [":title" => $movie])->fetchAll();
};

function getDirectorFromId(int $movieId): array
{
    $query = "
    SELECT  
        person.person_id,
        lastname, 
        firstname, 
        gender
    FROM movie_director, person 
    WHERE movie_director.movie_id = :movieId AND movie_director.person_id = person.person_id";

    return executeQuery($query, ["movieId" => $movieId])->fetchAll();
}

function getDirectorFromTitle($movie): array
{
    $query = "SELECT person_id, firstname, lastname FROM person WHERE person_id IN 
                                             (SELECT person_id FROM movie_director WHERE movie_id IN 
                                                                                         (SELECT movie_id FROM movie WHERE title = :title))";

    $params = [
        ":title" => $movie
    ];
    return executeQuery($query, $params)->fetchAll();
};

function getActorsFromTitle($movie): array
{
    $query = "SELECT person_id, firstname, lastname FROM person WHERE person_id IN 
                                             (SELECT person_id FROM movie_cast WHERE movie_id IN 
                                                                                         (SELECT movie_id FROM movie WHERE title = :title))";

    $params = [
        ":title" => $movie
    ];
    return executeQuery($query, $params)->fetchAll();
};

function getActorsFromId($movie): array
{
    $query = "SELECT firstname, lastname FROM person WHERE person_id IN (SELECT person_id FROM movie_cast WHERE movie_id = :id)";

    $params = [
        ':id' => $movie
    ];
    return executeQuery($query, $params)->fetchAll();
};

//zelf toegevoegd
function getMovieFromId($movie): array
{
    $query = "SELECT * FROM movie WHERE movie_id = :id";

    $params = [
        ':id' => $movie
    ];

    return executeQuery($query, $params)->fetchAll();
}

 