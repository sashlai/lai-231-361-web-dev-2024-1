<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php
        $page_title = "Форма аутентификации";
    ?>
    <title><?php echo $page_title ?></title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: url('https://cdn.ingos.ru/images/blog/samye-dorogie-avtomobili_shut.jpg');
        }

        .contact-form, .auth-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 20px auto;
        }

        .contact-form h2, .auth-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="name"],  textarea, select {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 30%;
            background-color: bisque;
            border-radius: 3px;
            border-width: 1px;
            text-align: center;
        }

        .button {
            text-align: center;
        }

        header {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        .auth-form {
            padding: 55px;
        }

        a.selected_menu {
            color: yellow;
        }
    </style>
</head>
<body>


    <header>
        <h1>Добро пожаловать!</h1>
        <nav>
        <ul>
                <li><a href="<?php $link = 'index.php'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Главная</a></li>
                <li><a href="<?php $link = 'auth-form.php'; $current_page = true; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Авторизоваться</a></li>
                <li><a href="<?php $link = 'contact-form.php'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Обратная связь</a></li>
                <li><a href="<?php $link = '#contact'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Контакты</a></li>
            </ul>
        </nav>
    </header>

    <div class="auth-form">
        <h2>Форма аутентификации</h2>
        <form action="https://httpbin.org/post" method="POST">
            <p><strong>Логин</strong></p>
            <input maxlength="25" size="40" name="login">

            <p><strong>Пароль</strong></p>
            <input type="password" maxlength="25" size="40" name="password">

            <p><input type="checkbox" name="remember"> Запомнить меня</p>
            
            <div class="button">
            <p><input type="submit" value="Войти"></p>
            </div>
        </form>
    </div>

    <footer id="contact">
        <p>&copy; 2024 Ваша Компания. Все права защищены.</p>
        <p>Сформировано 
            <?php 
            echo date('d.m.Y в H:i:s', strtotime('+3 hours')); 
            ?>
        </p>
        <p>Контактная информация: 123@company.com | Телефон: +0 (123) 456-7890</p>
    </footer>
</body>
</html>
