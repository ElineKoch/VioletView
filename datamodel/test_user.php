<?php

require_once('db_connectie.php');

$password = 'NietVeilig';
$passwordHashed = password_hash($password,  PASSWORD_DEFAULT);

// Sla een nieuwe gebruiker 'student' op met een gehashed wachtwoord.
$query = $dbh->prepare('INSERT INTO fletnix_user (username, password)
VALUES (?, ?)');
$query->execute(['student', $passwordHashed]);