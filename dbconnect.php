<?php
$username = "sql3663844";
$password = "Q7PmRCPdHS";
$database = "sql3663844";
$mysqli = new mysqli("sql3.freesqldatabase.com", $username, $password, $database, 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

