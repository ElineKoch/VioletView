<?php

require_once('view/pagina_onderdelen.php');
require_once('view/film_info_overzicht.php');

$_SESSION['id'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/screen_768px.css">
    <title><?= $id?> - Info - VioletView</title>
</head>

<body>
    <header>
        <?= HTML_KLEIN_LOGO ?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <?= maakFilmInfoOverzicht($_SESSION['id']) ?>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>