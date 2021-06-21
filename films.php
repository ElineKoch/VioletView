<?php

require_once('view/pagina_onderdelen.php');
require_once('view/filmoverzicht.php');

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/screen_768px.css">
    <title>Films - VioletView</title>
</head>

<body>
    <header>
        <?= HTML_KLEIN_LOGO ?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main class="flexbox-container">
        <form action="" class='search-form'>
            <legend class="center">Zoek een film</legend>
            <ul>
                <li>
                    <label for="title">Titel</label>
                    <input type="text" name="title" id="title">
                </li>
                <li>
                    <label for="director">Regisseur</label>
                    <input type="text" name="director" id="director">
                </li>
                <li>
                    <label for="year">Jaar</label>
                    <input type="text" name="year" id="year">
                </li>
                <li>
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                        <?= maakGenreOpties() ?>
                    </select>
                </li>
                <li>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </li>
            </ul>
        </form>
        <?= maakFilmOverzicht(filterFilms()) ?>
        <section>
            <a href="blind_date_2016_info.php"><img src="images/blind_date_2016.jpg" alt="Blind Date (2016)"></a>
            <a href="blind_date_2016_info.php">Blind Date (2016)</a>
        </section>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>