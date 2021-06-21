<?php

$host = 'localhost';
$db = 'fletnix_db_rh';
$user = 'Eline';
$pass = 'testwachtwoord';

try {
    $dbh = new PDO(
        "mysql:host=$host;dbname=$db;ConnectionPooling=0",
        $user,
        $pass
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}





