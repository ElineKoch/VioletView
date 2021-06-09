<?php

session_start();

if (htmlspecialchars(trim($_POST['gebruikersnaam'])) === $_SESSION['gebruikersnaam']) {
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
} else {
    header('Location: inloggen.php');
}


