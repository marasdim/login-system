<?php

$serverName = "localhost";
$dBUserName = "root";
$dbPassword = "";
$dbName = "loginproject";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}