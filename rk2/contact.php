<?php
include 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: auth.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <h2>Форма обратной связи</h2>
    <form action="contact_handler.php" method="post">
        <textarea name="message" placeholder="Ваше сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
