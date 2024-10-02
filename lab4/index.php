<?php
    include 'header.html';

    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $source = isset($_GET['source']) ? $_GET['source'] : '';
?>

    <form action="home.php" method="POST">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" value="<?= $name ?>" required><br>

        <label for="email">Ваш е-mail:</label>
        <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="example@mail.com" required><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <label for="category">Тема обращения:</label>
        <select id="category" name="category" required>
            <option value="propose">Предложение</option>
            <option value="complaint">Жалоба</option>
        </select><br>

        <input type="checkbox" id="consent" name="consent" required>
        <label for="consent">Даю согласие на обработку данных</label><br>

        <label for="source">Источник:</label>
        <input type="radio" id="internet" name="source" value="internet" <?= $source == 'internet' ? 'checked' : '' ?>>
        <label for="internet">Реклама из интернета</label><br>
        <input type="radio" id="friends" name="source" value="friends" <?= $source == 'friends' ? 'checked' : '' ?>>
        <label for="friends">Рассказали друзья</label><br>

        <button type="submit">Отправить</button>
    </form>

    <a href='auth-form.php'>Авторизация</a>

</body>
</html>