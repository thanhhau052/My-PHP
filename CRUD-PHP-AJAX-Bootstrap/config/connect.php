<?php
$serverName = "localhost";
$username = "root";
$password = "12345678";
$db = "web_php_ajax";
// Create connection
$con = mysqli_connect($serverName, $username, $password, $db);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}