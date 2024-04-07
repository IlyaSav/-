

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\styles\profile.css">
    <title>Document</title>
</head>
<body>
<?php
    require('components\navmenu.html');
    require('check_auth.php');
    ?>  
    
<?php 

session_start();

// Проверка наличия сессии
if (!isset($_SESSION['firstname']) || !isset($_SESSION['lastname'])) {
  // Пользователь не авторизован, перенаправляем на страницу авторизации
  header("Location: controllers\login.php");
  exit();
}

// Подключение к базе данных
require_once('controllers\db.php');

// Очистка переменных из GET-запроса
$firstname = mysqli_real_escape_string($conn, $_SESSION['firstname']);
$lastname = mysqli_real_escape_string($conn, $_SESSION['lastname']);

// Выполнение SQL-запроса
$sql = "SELECT * FROM users WHERE firstname='$firstname' AND lastname='$lastname'";
$result = $conn->query($sql);

// Проверка наличия ошибок при выполнении SQL-запроса
if (!$result) {
  echo "Ошибка получения информации о пользователе: " . $conn->error;
} else {
  // Вывод информации о пользователе
  if ($result->num_rows > 0) {
    // Вывод информации о пользователе без использования echo
    $row = $result->fetch_assoc();
    $id = $row['id'];
  }
 
}
    // ...
    // Вывод нужной информации о пользователе
    // Например:
    ?>
    <div class="user-info">
    <h1>Личный кабинет</h1>
    <p>Имя: <span><?php echo $firstname; ?></span></p>
    <p>Фамилия: <span><?php echo $lastname; ?></span></p>
    <p>Телефон: <span><?php echo $row['phone']; ?></span></p>
    
    <a href="logout.php" class="logout-btn"> <i class="logout-icon"></i> Выход</a>
    
</div>
<div class="cart-container">
    <h2>Корзина</h2>
    <table>
        <thead>
            <tr>
                <th>Наименование товара</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once('controllers\db.php');

                $user_id = $id; // Получаем ID пользователя из предыдущего кода

                $sql = "SELECT products.name, products.price FROM carts
                        INNER JOIN products ON carts.product_id = products.id
                        WHERE carts.user_id = '$user_id'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>$" . $row['price'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Нет товаров в корзине</td></tr>";
                }

                $conn->close();
            ?>
        </tbody>
    </table>
</div>
    <?php
 
// Закрытие сонения с базо данных
$conn->close();
?>
 <?php require('components/footer.html'); ?>
</body>
</html>


