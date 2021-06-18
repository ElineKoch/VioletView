<?php

require_once('view/pagina_onderdelen.php');

if ($_POST['wachtwoord'] != $_POST['herhaalWachtwoord']) {
    header('Location: abonnement.php');
} else {
    foreach($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
}
