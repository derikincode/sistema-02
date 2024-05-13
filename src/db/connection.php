<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = ""; 

$connection = new myqli($servername, $username, $password, $dbname);

if ($connection -> connect_error) {
    die("Connection failed: " . $connection -> connect_error);
}
?>