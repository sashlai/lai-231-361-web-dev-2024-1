<?php
include 'header.html';

$login = "admin";  
$password = "1234";  
$auth_message = '';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_login = $_POST['login'];
    $input_password = $_POST['password'];

    
    if ($input_login === $login && $input_password === $password) {
        $auth_message = '<p>Авторизация прошла успешно!</p>';
    } else {
        $auth_message = '<p>Неверный логин или пароль!</p>';
    }
}
?>

    <form action="auth-form.php" method="POST">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Войти</button>
    </form>

    <?= $auth_message ?>

    <a href='index.php'>Обратная связь</a>

</body>
</html>