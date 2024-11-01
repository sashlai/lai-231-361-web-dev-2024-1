<?php
include 'db.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <h2>Контактная информация</h2>
    <p>Мы будем рады помочь вам! Свяжитесь с нами любым удобным способом.</p>

    <h3>Наши контакты:</h3>
    <ul>
        <li><strong>Адрес:</strong> г. Москва, ул. Примерная, д. 123</li>
        <li><strong>Телефон:</strong> +7 (123) 456-78-90</li>
        <li><strong>Email:</strong> info@example.com</li>
    </ul>

    <h3>Часы работы:</h3>
    <ul>
        <li>Понедельник - Пятница: 09:00 - 18:00</li>
        <li>Суббота: 10:00 - 16:00</li>
        <li>Воскресенье: выходной</li>
    </ul>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
