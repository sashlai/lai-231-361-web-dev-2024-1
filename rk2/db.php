<?php
session_start(); 

$servername = "phpmyadmin.fit.mospolytech.ru";
$username = "std_2695_rk2";
$password = "123456780";
$dbname = "std_2695_rk2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
