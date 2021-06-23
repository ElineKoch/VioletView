<?php
/*
alle abonnementen
Alle betaalmogelijkheden
alle landen
user met wachtwoord
gebruiker met wachtwoord, gebruikernaam, email, etc
voeg gebruiker toe met wachtwoord, gebruikersnaam, email, etc
 */

include_once("queryExecuter.php");

function getUserInfo($mail): array
{
    $query = "SELECT * FROM customer WHERE customer_mail_address = :mail";

    $params = [
        ':mail' => $mail
    ];
    return executeQuery($query,$params)->fetchAll();
};

function getPaymentMethods(): array
{
    $query = "SELECT * FROM payment";
    return executeQuery($query)->fetchAll();
};

function getCountries (): array
{
    $query = "SELECT country_name FROM country";

    return executeQuery($query)->fetchAll();
};

function getSubscriptions(): array
{
    $query = "SELECT * FROM contract";
    $results = executeQuery($query)->fetchAll();

    $count = 0;
    foreach ($results as $subscription) {
        $price = ($subscription['price_per_month'] * ((100 - $subscription['discount_percentage']) / 100));
        $results[$count]['price'] = $price;
        $count++;
    };

    return $results;
};

function createAccount($accountData): array
{
    // $accountData['email'] = "test@tester.nl";
    // $accountData['lastname'] = "";
    // $accountData['firstname'] = "";
    // $accountData['paymentMethod'] = "Mastercard";
    // $accountData['cardNum'] = "5125 3194 7871 6270";
    // $accountData['contract'] = "Premium";
    // $accountData['subscriptionStart'] = "2006-01-09";
    // $accountData['subscriptionEnd'] = null;
    // $accountData['username'] = "testerer";
    // $accountData['password'] = '1234';
    // $accountData['country'] = "Netherlands";
    // $accountData['gender'] = "M";
    // $accountData['birthDate'] = "1980-02-25";

    $query = "INSERT INTO customer VALUES (:mail, :lastname, :firstname, :paymentMethod, :cardNum, :contract, :subscriptionStart, :subscriptionEnd, :username, :password, :country, :gender, :birthDate)";

    $currentDate = date("Y-m-d");
    $password = password_hash($accountData['password'], PASSWORD_DEFAULT);

    $params = [
        ':mail' => $accountData['email'],
        ':lastname' => $accountData['lastname'],
        ':firstname' => $accountData['firstname'],
        ':paymentMethod'=> $accountData['paymentMethod'],
        ':cardNum' => $accountData['cardNum'],
        ':contract' => $accountData['contract'],
        ':subscriptionStart' => $currentDate,
        ':subscriptionEnd' => $accountData['subscriptionEnd'],
        ':username' => $accountData['username'],
        ':password' => $password,
        ':country' => $accountData['country'],
        ':gender' => $accountData['gender'],
        ':birthDate' => $accountData['birthDate']
    ];

    return executeQuery($query,$params)->fetchAll();
};

function changeContract($newContract, $user): array
{
    $query = "UPDATE customer SET contract_type = :contract WHERE customer_mail_address = :user";

    $param = [
        ":user" => $user,
        ":contract" => $newContract
    ];
    return executeQuery($query, $param)->fetchAll();
};

function checkIfUnique ($submittedMail): bool
{
    $query = "SELECT customer_mail_address FROM customer WHERE customer_mail_address = :mail";

    $param = [
        ":mail" => $submittedMail
    ];
    $result = executeQuery($query, $param)->fetchAll();

    if (isset($result[0]['customer_mail_address'])) {
        return false;
    } else {
        return true;
    };
};

function checklogin ($mail, $pw): array
{
    $query = "SELECT * FROM customer WHERE customer_mail_address = :mail";

    $param = [
        ":mail" => $mail
    ];
    $result = executeQuery($query, $param)->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        $hash = $result[0]['password'];
        if (!password_verify($pw, $hash)) {
        $result = [];
        }
        else
        {
            $result[0]['password'] = "";
        }
    }
    return $result;
};

//zelf toegevoegd
function maakAccount($accountData): array
{
    $password = password_hash($accountData['password'], PASSWORD_DEFAULT);

    $params = [
        ':mail' => $accountData['email'],
        ':lastname' => $accountData['lastname'],
        ':firstname' => $accountData['firstname'],
        ':username' => $accountData['username'],
        ':password' => $password,
        ':subTime' => $accountData['subTime'],
        ':birthYear' => $accountData['birthYear'],
        ':country' => $accountData['country'],
        ':accountNum' => $accountData['accountNum']
    ];

    $query = "INSERT INTO fletnix_user (mail, lastname, firstname, username, password, subTime, birthYear, country, accountNum) VALUES (:mail, :lastname, :firstname, :username, :password, :subTime, :birthYear, :country, :accountNum)";

    return executeQuery($query,$params)->fetchAll();
};

function controleerlogin($username, $pw): array
{
    $query = "SELECT * FROM fletnix_user WHERE username = :username";

    $param = [
        "username" => $username
    ];

    $result = executeQuery($query, $param)->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        $hash = $result[0]['password'];
        if (!password_verify($pw, $hash)) {
        $result = [];
        }
        else
        {
            $result[0]['password'] = "";
        }
    }

    return $result;
};

function getSubTime($username) {
    $query = "SELECT subTime FROM fletnix_user WHERE username = :username";

    $params = [
    ':username' => $username
    ];

    return executeQuery($query,$params)->fetchAll()[0]['subTime'];
}

function setSubTime($username, $subTime) {
    $query = "UPDATE fletnix_user SET subTime = :subTime WHERE username = :username";

    $params = [
    ':username' => $username,
    ':subTime' => $subTime
    ];

    executeQuery($query,$params);
}

function setUsername($username, $newUsername) {
    $query = "UPDATE fletnix_user SET username = :newUsername WHERE username = :username";

    $params = [
    ':username' => $username,
    ':newUsername' => $newUsername
    ];

    executeQuery($query,$params);
}

function setPassword($username, $password) {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE fletnix_user SET password = :password WHERE username = :username";

    $params = [
    ':username' => $username,
    ':password' => $password
    ];

    executeQuery($query,$params);
}
