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
    <title>Profiel - VioletView</title>
</head>

<body>
    <header>
        <?=HTML_KLEIN_LOGO?>    
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <h1>Profiel</h1>
        <form action="profiel.php" method="POST">
            <h2 class="center">Wijzig Gebruikersnaam</h2>
            <ul>
                <li>
                    <label for="gnaam">Nieuwe Gebruikersnaam*</label>
                    <input id="gnaam" type="text" name="gnaam">
                </li>
                <li>
                    <label for="ww">Wachtwoord*</label>
                    <input id="ww" type="text" name="ww">
                </li>
                <li>
                    <input type="submit" value="Opslaan" class="button">
                </li>
            </ul>
        </form>
        <form action="abonnement.php" method="POST">
            <h2 class="center">Wijzig Wachtwoord</h2>
            <ul>
                <li>
                    <label for="ww">Oud Wachtwoord*</label>
                    <input id="ww" type="text" name="ww">
                </li>
                <li>
                    <label for="nww">Nieuw Wachtwoord*</label>
                    <input id="nww" type="text" name="nww">
                </li>
                <li>
                    <label for="hnww">Herhaal Nieuw Wachtwoord*</label>
                    <input id="hnww" type="text" name="hnww">
                </li>
                <li>
                    <input type="submit" value="Opslaan" class="button">
                </li>
            </ul>
        </form>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>