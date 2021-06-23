<?php

require_once('view/pagina_onderdelen.php');
require_once('datamodel/query_user.php');

if ($_POST['password'] != $_POST['repeatPassword']) {
    header('Location: abonnement.php');
} else {
    $data = array_slice($_POST, 0, -1);
    $accountData = [];
    foreach($data as $key => $value) {
        $accountData[$key] = htmlspecialchars(trim($value));
    }
    maakAccount($accountData);
    
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['loggedIn'] = true;

    header('Location: index.php');
}
