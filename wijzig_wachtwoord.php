<?php

require_once('view/pagina_onderdelen.php');

if (
    $_POST['wachtwoord'] != $_POST['herhaalWachtwoord'] || 
    $_POST['oudWachtwoord'] != $_SESSION['wachtwoord']
) {
    header('Location: profiel.php');
} else {
    foreach($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
    header('Location: profiel.php');
}