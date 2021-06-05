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
    <title>Over Ons - VioletView</title>
</head>

<body>
    <header>
        <?=HTML_KLEIN_LOGO?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <section>
            <article>
                <h1>Over ons</h1>
                <aside>
                    <img src=images/foto1.jpg alt="foto van oprichter Eline Koch" class="small_image">
                    <img src=images/foto2.jpg alt="foto van oprichter Eline Koch" class="medium_image">
                </aside>
                <p>
                    VioletView is opgericht door Eline Koch in 2021. Tijdens haar opleiding Software Development werkte ze aan een opdracht om een website voor een videostreaming-service te maken. Dit leidde tot het idee voor een streamingservice speciaal voor LHBT+ films en series. Vanuit daar is het team enorm uitgebreid, met collega's over de hele wereld. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ullam veritatis pariatur sed voluptates deleniti dolores molestias. Excepturi, sunt laboriosam, debitis non qui ipsa temporibus, impedit dolorem eveniet eaque iste.         
                <p>
            </article>
        </section>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>