<?php

require_once 'view/pagina_onderdelen.php';

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
        <form action="registreer.php" method="POST">
            <ul>
                <li>
                    <fieldset class="center">
                        <legend>Kies je Abonnement!*</legend>
                        <li>
                            <label for="abonnement1"><input id="abbonement1" type="radio" name="maandenAbonnement" value="1" required><span>1 maand - €7,99</span></label>
                        </li>
                        <li>
                            <label for="abonnement2"><input id="abonnement2" type="radio" name="maandenAbonnement" value="3" required><span>3 maanden - €19,99</span></label>
                        </li>
                        <li>
                            <label for="abonnement3"><input id="abonnement3" type="radio" name="maandenAbonnement" value="12" required><span>1 jaar - €69,99</span></label>
                        </li>
                    </fieldset>
                </li>
                <li>
                    <label for="voornaam">Voornaam*</label>
                    <input type="text" name="voornaam" id="voornaam" required>
                </li>
                <li>
                    <label for="achternaam">Achternaam*</label>
                    <input type="text" name="achternaam" id="achternaam" required>
                </li>
                <li>
                    <label for="geboortejaar">Geboortejaar*</label>
                    <input type="text" name="geboortejaar" id="geboortejaar" required>
                </li>
                <li>
                    <label for="land">Land*</label>
                    <input type="text" name="land" id="land" required>
                </li>
                <li>
                    <label for="rekeningnummer">Rekeningnummer*</label>
                    <input type="text" name="rekeningnummer" id="rekeningnummer" required>
                </li>
                <li>
                    <label for="gebruikersnaam">Gebruikersnaam*</label>
                    <input type="text" name="gebruikersnaam" id="gebruikersnaam" required>
                </li>
                <li>
                    <label for="wachtwoord">Wachtwoord*</label>
                    <input type="password" name="wachtwoord" id="wachtwoord" required>
                </li>
                <li>
                    <label for="herhaalWachtwoord">Herhaal wachtwoord*</label>
                    <input type="password" name="herhaalWachtwoord" id="herhaalWachtwoord" required>
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