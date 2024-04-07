<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/styles/catalog.css"/>
  <title>Document</title>
</head>
<body>
  <?php require('components/navmenu.html'); ?>
  
  <h1>Каталог мазазин</h1>
  
  <div class="product-container">
    <?php
        require_once('controllers\db.php');

        // Пагинация
        $limit = 9; // Количество продуктов на одной странице
        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Получение номера страницы

        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM products LIMIT $start, $limit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "
            <div class='product-card'>
                <img src='" . $row["image"] . "' alt='" . $row["name"] . "'>
                <div class='product-info'>
                  <h3 class='product-name'>" . $row["name"] . "</h3>
                  <p class='product-description'>" . $row["description"] . "</p>
                  <p class='product-price'>Цена: <span>" . $row["price"] . " рублей</span></p>
                  <a href='product.php?id=" . $row["id"] . "' class='product-link more-details'>Подробнее</a>
                </div>
              </div>
            ";
          }
        } else {
          echo "Нет доступных товаров";
        }

        $start = ($page - 1) * $limit;
$sql = "SELECT * FROM products LIMIT $start, $limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Ваш текущий код вывода товаров
  }
} else {
  echo "Нет доступных товаров";
}
    ?>
  </div>
  <div class="pagination">
  <?php
    require_once('controllers\db.php');
    
    $sql = "SELECT COUNT(id) AS total FROM products";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_pages = ceil($row["total"] / $limit);

    // Вывод кнопок пагинации
    for ($i = 1; $i <= $total_pages; $i++) {
      echo "<a href='?page=$i' class='page-link'>$i</a> ";
    }

    $conn->close(); 
  ?>
 

 
<?php require('components/footer.html'); ?>
</body>
</html>