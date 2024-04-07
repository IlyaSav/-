<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets\styles\product.css">
  <title>Document</title>
</head>
<body>
<?php
    require('components\navmenu.html');
    ?>
<?php
    session_start();
    
    // Подключение к базе данных и получение информации о товаре
    require_once('controllers\db.php');

    $id = $_GET["id"];

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo "<div class='product'>
              <img src='" . $row["image"] . "' alt='" . $row["name"] . "'>
              <div class='product-info'>
                <h1>" . $row["name"] . "</h1>
                <p>" . $row["description"] . "</p>
                <p>Цена: " . $row["price"] . " рублей</p>
                <form action='add-to-cart.php' method='post'>
  <input type='hidden' name='product_id' value='<?php echo $id; ?>'>
  
  <input type='submit' value='Добавить в корзину' class='add-to-cart'>
</form>
              </div>
            </div>";
    } else {
      echo "Товар не найден";
    }

    $conn->close();
  ?>
  <?php
      require('components\footer.html');
    ?>
</body>
</html>