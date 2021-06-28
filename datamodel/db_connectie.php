<?php

$login = explode("\n", file_get_contents('datamodel/files/login.txt'));
$arrayLength = count($login);

for($i = 0; $i < $arrayLength; $i++) {
    [$x, $y] = explode(' = ', trim($login[$i], " \n\r\t\v\0"));
    $login[$x] = $y;
    unset($login[$i]);
} 

try {
    $dbh = new PDO(
        "mysql:host={$login['host']};dbname={$login['db']};ConnectionPooling=0",
        $login['user'],
        $login['pass']
    );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}





