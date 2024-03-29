<?php

$host = "localhost";
$dbname = "otobusbiletuygulama";
$username = "root";
$password = "fd49db33b2";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;