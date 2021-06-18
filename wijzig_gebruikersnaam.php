<?php

require_once('view/pagina_onderdelen.php');

if (htmlspecialchars(trim($_POST['wachtwoord'])) === $_SESSION['wachtwoord']) {
    $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
}

header('Location: profiel.php');