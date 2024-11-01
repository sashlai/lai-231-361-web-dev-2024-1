<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <form action="auth_handler.php" method="post">
        <h2>Вход</h2>
        <input type="text" name="username" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Войти</button>
        <p>Нет аккаунта? <a href="register.php">Регистрация</a></p>
    </form>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
