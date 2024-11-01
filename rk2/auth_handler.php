<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];


$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username; 
    header("Location: index.php");
} else {
    echo "Неверный логин или пароль.";
}
?>
