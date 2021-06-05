<?php
require_once 'app/src/components.php';
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
    <title>Blind Date (2016) Trailer - VioletView</title>
</head>

<body>
    <header>
        <?=HTML_KLEIN_LOGO?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <section class="info_section">
            <iframe src="https://www.youtube.com/embed/SYRnboEUpL0?controls=0" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
            <a href="blind_date_2016_info.php">Terug naar info ></a>
            <a href="filmoverzicht.php">Terug naar het filmoverzicht ></a>
        </section>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>