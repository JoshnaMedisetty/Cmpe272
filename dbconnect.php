<?php
$username = "sql5660059";
$password = "xugbuebrsw";
$database = "sql5660059";
$mysqli = new mysqli("sql5.freesqldatabase.com", $username, $password, $database, 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
