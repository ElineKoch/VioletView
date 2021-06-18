<?php

require_once('view/pagina_onderdelen.php');

if (htmlspecialchars(trim($_POST['gebruikersnaam'])) === $_SESSION['gebruikersnaam']) {
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
} else {
    header('Location: inloggen.php');
}


