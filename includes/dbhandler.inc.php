<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "test";

$conn = mysqli_connect($servername, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}
