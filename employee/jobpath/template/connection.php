<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "job_portal";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>