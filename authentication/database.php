<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "authlearn";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}