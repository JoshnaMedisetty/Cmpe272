<?php

$host = "your_database_host";
$database = "your_database_name";
$username = "your_database_username";
$password = "your_database_password";

try {
    $conn = new MongoClient("mongodb://${username}:${password}@${host}/${database}");
    $db = $conn->$database;
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

?>
