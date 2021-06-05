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
    <title>Abonnement - VioletView</title>
</head>

<body>
    <header>
        <?=HTML_KLEIN_LOGO?>    
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <h1>Maak een account</h1>
        <form action="abonnement.php" method="POST">
            <ul>
                <li>
                    <fieldset class="center">
                        <legend>Kies je Abonnement!*</legend>
                        <li>
                            <label for="opt1"><input id="opt1" type="radio" name="abonnement" value="1"><span>1 maand - €7,99</span></label>
                        </li>
                        <li>
                            <label for="opt2"><input id="opt2" type="radio" name="abonnement" value="3"><span>3 maanden - €19,99</span></label>
                        </li>
                        <li>
                            <label for="opt3"><input id="opt3" type="radio" name="abonnement" value="12"><span>1 jaar - €69,99</span></label>
                        </li>
                    </fieldset>
                </li>
                <li>
                    <label for="vnaam">Voornaam*</label>
                    <input id="vnaam" type="text" name="vnaam">
                </li>
                <li>
                    <label for="anaam">Achternaam*</label>
                    <input id="anaam" type="text" name="anaam">
                </li>
                <li>
                    <label for="gjaar">Geboortejaar*</label>
                    <input id="gjaar" type="text" name="gjaar">
                </li>
                <li>
                    <label for="land">Land*</label>
                    <input id="land" type="text" name="land">
                </li>
                <li>
                    <label for="rnummer">Rekeningnummer*</label>
                    <input id="rnummer" type="text" name="rnummer">
                </li>
                <li>
                    <label for="gnaam">Gebruikersnaam*</label>
                    <input id="gnaam" type="text" name="gnaam">
                </li>
                <li>
                    <label for="ww">Wachtwoord*</label>
                    <input id="ww" type="text" name="ww">
                </li>
                <li>
                    <label for="hww">Herhaal wachtwoord*</label>
                    <input id="hww" type="text" name="hww">
                </li>
                <li>
                    <input type="submit" value="Inschrijven" class="center button">
                </li>
            </ul>
        </form>
    </main>
    <footer>
        <?= HTML_FOOTER ?>
    </footer>
</body>

</html>