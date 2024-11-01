<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <h2>Наши товары</h2>
    <div class="product-table">
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
                <?php
                $result = $conn->query("SELECT * FROM products");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='product-row'>
                            <td><img src='images/{$row['image']}' alt='{$row['name']}'></td>
                            <td>{$row['name']}</td>
                            <td>{$row['price']} руб.</td>
                            <td>{$row['description']}</td>
                            <td><a href='product.php?id={$row['id']}' class='btn'>Подробнее</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
