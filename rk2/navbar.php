<header>
    <nav class="navbar">
        <a href="index.php" class="logo">Автомастерская</a>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="shop.php">Магазин</a></li>
            <li><a href="contacts.php">Контакты</a></li>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="cart.php">Список покупок</a></li>
                <li><a href="contact.php">Обратная связь</a></li>
                <li><a href="logout.php">Выход</a></li>
            <?php else: ?>
                <li><a href="auth.php">Вход</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
