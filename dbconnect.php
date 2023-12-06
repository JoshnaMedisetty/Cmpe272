<?php
$username = "sql5668278";
$password = "xFzjp2Yspa";
$database = "sql5668278";
$mysqli = new mysqli("sql5.freesqldatabase.com", $username, $password, $database, 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

