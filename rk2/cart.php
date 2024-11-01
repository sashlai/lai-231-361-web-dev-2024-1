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
    <title>Список покупок</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <h2>Ваш список покупок</h2>

    <?php if (!empty($_SESSION['cart'])): ?>
        <div class="cart-list">
            <table>
                <thead>
                    <tr>
                        <th>Изображение</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Описание</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><img src="images/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" width="80"></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?> руб.</td>
                            <td><?php echo $item['description']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p>Ваш список покупок пуст.</p>
    <?php endif; ?>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
