<?php
include 'header.html';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $category = $_POST['category'];
    $source = $_POST['source'];

    echo '<p>Здравствуйте, ' . $name . '</p>';
    
    if ($category == 'propose') {
        echo '<p>Спасибо за ваше предложение:</p>';
    } else {
        echo '<p>Мы рассмотрим вашу жалобу:</p>';
    }
    echo '<textarea readonly>' . $message . '</textarea><br>';

    echo 'Источник: ' . ($source == 'internet' ? 'Реклама из интернета' : 'Рассказали друзья') . '<br>';

    echo '<a class="btn" href="index.php?name=' . $name . '&email=' . $email . '&source=' . $source . '">Заполнить снова</a>';
}

?>

</body>
</html>
