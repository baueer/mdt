<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "mdc";

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
