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
    <title>Blind Date (2016) Info - VioletView</title>
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
            <img src="https://m.media-amazon.com/images/M/MV5BZjI5YjQ0OWUtM2RmYy00Njk3LWJiOTctNzFlNzM3MWE2ZTdiXkEyXkFqcGdeQXVyMjk4MTk0NDc@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Blind Date (2016)">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corrupti rem expedita tempore quidem impedit corporis enim accusantium, minima provident voluptatem commodi quae rerum, neque doloribus! Sint quam molestiae odio.</p>
            <a href="blind_date_2016_trailer.php">Bekijk de trailer ></a>
            <table>
                <tr>
                    <th>Titel:</th>
                    <td>Blind Date</td>
                </tr>
                <tr>
                    <th>Jaar:</th>
                    <td>2016</td>
                </tr>
                <tr>
                    <th>Regisseur:</th>
                    <td>Adrienne Lovette</td>
                </tr>
                <tr>
                    <th>Cast:</th>
                    <td>Adrienne Lovette, Ella Jane New</td>
                </tr>
                <tr>
                    <th>Schrijver:</th>
                    <td>Adrienne Lovette, Ella Jane New</td>
                </tr>
                <tr>
                    <th>Duur:</th>
                    <td>8 min</td>
                </tr>
            </table>
            <a href="filmoverzicht.php">Terug naar het filmoverzicht ></a>
        </section>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>