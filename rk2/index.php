<?php
include 'db.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомастерская</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="images/slide1.jpg" alt="Сервисный центр">
            <div class="text">Качественный ремонт</div>
        </div>
        <div class="slide fade">
            <img src="images/slide2.jpg" alt="Ремонт автомобилей">
            <div class="text">Современное оборудование</div>
        </div>
        <div class="slide fade">
            <img src="images/slide3.jpg" alt="Команда специалистов">
            <div class="text">Профессиональная команда</div>
        </div>
    </div>

    <section class="intro">
        <h1>Добро пожаловать в нашу автомастерскую!</h1>
        <p>Мы предлагаем широкий спектр услуг для вашего автомобиля.</p>
    </section>
</main>

<?php include 'footer.php'; ?>

<script src="slideshow.js"></script>

</body>
</html>
