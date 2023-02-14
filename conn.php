<?php

$db_host = 'localhost';
$db_user = 'bit_academy';
$db_password = 'bit_academy';
$db_db = 'Deepdive';
try {
    $dbh = new PDO("mysql:host={$db_host};dbname={$db_db}", $db_user, $db_password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
