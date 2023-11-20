<?php
$hostname = "Joshnas-MacBook-Air.local"; 
$username = "root@localhost "; 
$password = "Joshna@0107"; // Replace with your MySQL password
$database = "crypto"; // Assuming "crypto" is the name of your database

$mysqli = new mysqli($hostname, $username, $password, $database, 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
