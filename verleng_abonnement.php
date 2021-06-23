<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

$username = $_SESSION['username'];
$password = $_POST['password'];

if (controleerlogin($username, $password)) {
    $newSubTime = getSubTime($username) + $_POST['subTime'];
    setSubTime($username, $newSubTime);
} 

header('Location: profiel.php');
