<?php

require_once('datamodel/db_connectie.php');

function executeQuery($query, $array = []): bool|PDOStatement
{
    global $dbh;
    $statement = $dbh->prepare($query);
    $statement->execute($array);
    return $statement;
}
?>