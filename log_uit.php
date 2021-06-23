<?php

require_once('view/pagina_onderdelen.php');

$_SESSION['username'] = '';
$_SESSION['loggedIn'] = false;

header('Location: index.php');