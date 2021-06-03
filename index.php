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
    <title>VioletView</title>
</head>

<body>
    <header>
        <?= HTML_LOGO ?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <section>
            <article>
                <h1>VioletView is de beste plek om LHBT+ films en series te kijken!</h1>
                <p>
                    <img src=https://i.pinimg.com/originals/f2/41/8a/f2418addcb426c3086760ae4f4c4c52b.jpg alt="Progress Pride Flag Quilt" class="medium_image">
                    Vanaf €6,- per maand krijg je toegang tot onze alsmaar groeiende collectie. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio corporis, natus vel omnis possimus, dicta nesciunt enim sequi voluptate adipisci illum accusamus excepturi quaerat non quod fugiat dolorem, odit soluta. <a href="filmoverzicht.html">Neem eerst een kijkje</a> of <a href="abonnement.html">schrijf je nu in!</a>
                <p>
            </article>
        </section>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>