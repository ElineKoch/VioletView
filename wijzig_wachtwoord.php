<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

$username = $_SESSION['username'];
$oldPassword = htmlspecialchars(trim($_POST['oldPassword']));

if (controleerLogin($username, $oldPassword) && $_POST['password'] === $_POST['repeatPassword']) {
    $password = htmlspecialchars(trim($_POST['password']));
    setPassword($username, $password);
} 

header('Location: profiel.php');