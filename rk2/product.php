<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: auth.php");
    exit();
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    $_SESSION['cart'][] = $product;
    header("Location: cart.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<main>
    <div class="product-detail">
        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p><strong>Цена:</strong> <?php echo $product['price']; ?> руб.</p>
        <p><strong>Описание:</strong> <?php echo $product['description']; ?></p>
        <p><strong>В наличии:</strong> <?php echo $product['stock']; ?> шт.</p>
        
    
        <form method="post">
            <button type="submit" class="btn">Добавить в список покупок</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
