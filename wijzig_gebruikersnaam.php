<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

$username = $_SESSION['username'];
$password = htmlspecialchars(trim($_POST['password']));

if (controleerlogin($username, $password)) {
    $newUsername = htmlspecialchars(trim($_POST['username']));
    setUsername($username, $newUsername);
    $_SESSION['username'] = $newUsername;
}

header('Location: profiel.php');