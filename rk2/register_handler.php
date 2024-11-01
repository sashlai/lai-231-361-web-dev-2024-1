<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Добавление нового пользователя
$conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
header("Location: auth.php");
?>
