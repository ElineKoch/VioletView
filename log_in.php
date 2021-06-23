<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));

if (controleerlogin($username, $password)) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedIn'] = true;
    header('Location: index.php');
} else {
    header('Location: inloggen.php');
}
