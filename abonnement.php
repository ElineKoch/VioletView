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
                            <label for="subTime"><input id="subTime" type="radio" name="subTime" value="1" required><span>1 maand - €7,99</span></label>
                        </li>
                        <li>
                            <label for="subTime"><input id="subTime" type="radio" name="subTime" value="3" required><span>3 maanden - €19,99</span></label>
                        </li>
                        <li>
                            <label for="subTime"><input id="subTime" type="radio" name="subTime" value="12" required><span>1 jaar - €69,99</span></label>
                        </li>
                    </fieldset>
                </li>
                <li>
                    <label for="firstname">Voornaam*</label>
                    <input type="text" name="firstname" id="firstname" required>
                </li>
                <li>
                    <label for="lastname">Achternaam*</label>
                    <input type="text" name="lastname" id="lastname" required>
                </li>
                <li>
                    <label for="email">E-mailadres*</label>
                    <input type="email" name="email" id="email" required>
                </li>
                <li>
                    <label for="birthYear">Geboortejaar*</label>
                    <input type="text" name="birthYear" id="birthYear" required>
                </li>
                <li>
                    <label for="country">Land*</label>
                    <input type="text" name="country" id="country" required>
                </li>
                <li>
                    <label for="accountNum">Rekeningnummer*</label>
                    <input type="text" name="accountNum" id="accountNum" required>
                </li>
                <li>
                    <label for="username">Gebruikersnaam*</label>
                    <input type="text" name="username" id="username" required>
                </li>
                <li>
                    <label for="password">Wachtwoord*</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <label for="repeatPassword">Herhaal wachtwoord*</label>
                    <input type="password" name="repeatPassword" id="repeatPassword" required>
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