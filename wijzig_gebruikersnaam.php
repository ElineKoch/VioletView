<?php

session_start();

if (htmlspecialchars(trim($_POST['wachtwoord'])) === $_SESSION['wachtwoord']) {
    $_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
}

header('Location: profiel.php');