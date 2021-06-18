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

// deze kan verwijderd worden als de rest werkt
$data = $dbh->query("SELECT * FROM movie LIMIT 100");
$films = [];
while ($rij = $data->fetch()) {
    $films[] = htmlspecialchars($rij['title']);
}




