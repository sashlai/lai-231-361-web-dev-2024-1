<?php
include 'db.php';
session_start();

if (isset($_POST['message'])) {
    $username = $_SESSION['username'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO feedback (username, message) VALUES ('$username', '$message')");
    echo "Сообщение отправлено!";
}
?>
