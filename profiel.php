<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

$username = $_SESSION['username'];

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
        <h2><?= $username ?></h2>
        <table>
            <tr> Aantal maanden abonnement: <?= getSubTime($username) ?></tr>
        </table>
        <form action="verleng_abonnement.php" method="POST">
            <ul>
                <fieldset class="center">
                    <legend>Verleng Abonnement*</legend>
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
                <li>
                    <label for="accountNum">Rekeningnummer*</label>
                    <input type="text" name="accountNum" id="accountNum" required>
                </li>
                <li>
                    <label for="password">Wachtwoord*</label>
                    <input type="password" name="password" id="password" required>
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
                    <label for="username">Nieuwe Gebruikersnaam*</label>
                    <input type="text" name="username" id="username" required>
                </li>
                <li>
                    <label for="password">Wachtwoord*</label>
                    <input type="password" name="password" id="password" required>
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
                    <label for="oldPassword">Oud Wachtwoord*</label>
                    <input type="password" name="oldPassword" id="oldPassword" required>
                </li>
                <li>
                    <label for="password">Nieuw Wachtwoord*</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <label for="repeatPassword">Herhaal Nieuw Wachtwoord*</label>
                    <input type="password" name="repeatPassword" id="repeatPassword" required>
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