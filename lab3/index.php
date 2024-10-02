<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php
        $page_title = "Домашняя страница";
    ?>
    <title><?php echo $page_title; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            text-align: center;
        }

        a.selected_menu {
            color: yellow;
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

        .content {
            padding: 20px;
            text-align: center;
        }

        img {
            width: 50%;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border: 1px solid;
        }

        th, td {
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $page_title; ?></h1>
        <nav>
            <ul>
                <li><a href="<?php $link = 'index.php'; $current_page = true; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Главная</a></li>
                <li><a href="<?php $link = 'auth-form.php'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Авторизоваться</a></li>
                <li><a href="<?php $link = 'contact-form.php'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Обратная связь</a></li>
                <li><a href="<?php $link = '#contact'; $current_page = false; echo $link; ?>"<?php if($current_page) echo ' class="selected_menu"'; ?>>Контакты</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Автомастерская</h2>
        <p>Мы предлагаем лучшие услуги на рынке!</p>
        <?php
            echo '<img src="photo';	
            echo date('s') % 2 + 1;	
            echo '.jpg" alt="Меняющаяся фотография">';	
        ?>
        <table>
            <thead>
                <tr>+
                    <th>Запчасть</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $parts = [
                    ['name' => 'Фары', 'price' => '$10'],
                    ['name' => 'Двигатель', 'price' => '$20'],
                    ['name' => 'Колеса', 'price' => '$30']
                ];

                foreach ($parts as $part) {
                    echo "<tr><td>{$part['name']}</td><td>{$part['price']}</td></tr>";
                }
                ?>
            </tbody>
        </table>
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
