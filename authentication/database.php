<?php
$server = "localhost";
$username = "root;
$password = ";
$dbname = "authLearn";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Something went wrong");
}