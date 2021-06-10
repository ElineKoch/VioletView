<?php

require_once 'app/src/components.php';

var_dump($_SESSION);
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
        <?= HTML_KLEIN_LOGO ?>
    </header>
    <nav>
        <?= HTML_NAV ?>
    </nav>
    <main>
        <h1>Profiel</h1>
        <h2><?= $_SESSION['gebruikersnaam'] ?></h2>
        <table>
            <tr> Aantal maanden abonnement: <?= $_SESSION['maandenAbonnement'] ?></tr>
        </table>
        <form action="verleng_abonnement.php" method="POST">
            <ul>
                <fieldset class="center">
                    <legend>Verleng Abonnement*</legend>
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
                <li>
                    <label for="rekeningnummer">Rekeningnummer*</label>
                    <input type="text" name="rekeningnummer" id="rekeningnummer" required>
                </li>
                <li>
                    <label for="wachtwoord">Wachtwoord*</label>
                    <input type="password" name="wachtwoord" id="wachtwoord" required>
                </li>
                <li>
                    <input type="submit" value="Opslaan" class="button">
                </li>
            </ul>
        </form>
        <form action="wijzig_gebruikersnaam.php" method="POST">
            <legend class="center">Wijzig Gebruikersnaam</legend>
            <ul>
                <li>
                    <label for="gebruikersnaam">Nieuwe Gebruikersnaam*</label>
                    <input type="text" name="gebruikersnaam" id="gebruikersnaam" required>
                </li>
                <li>
                    <label for="wachtwoord">Wachtwoord*</label>
                    <input type="password" name="wachtwoord" id="wachtwoord" required>
                </li>
                <li>
                    <input type="submit" value="Opslaan" class="button">
                </li>
            </ul>
        </form>
        <form action="wijzig_wachtwoord.php" method="POST">
            <legend class="center">Wijzig Wachtwoord</legend>
            <ul>
                <li>
                    <label for="oudWachtwoord">Oud Wachtwoord*</label>
                    <input type="password" name="oudWachtwoord" id="oudWachtwoord" required>
                </li>
                <li>
                    <label for="wachtwoord">Nieuw Wachtwoord*</label>
                    <input type="password" name="wachtwoord" id="wachtwoord" required>
                </li>
                <li>
                    <label for="herhaalWachtwoord">Herhaal Nieuw Wachtwoord*</label>
                    <input type="password" name="herhaalWachtwoord" id="herhaalWachtwoord" required>
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