<?php

require_once('view/pagina_onderdelen.php');

if (htmlspecialchars(trim($_POST['wachtwoord'])) === $_SESSION['wachtwoord']) {
    $_SESSION['maandenAbonnement'] = strval((int) $_SESSION['maandenAbonnement'] + 
    (int) $_POST['maandenAbonnement']);
} 

header('Location: profiel.php');