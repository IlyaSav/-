<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\styles\autorization.css">
    <title>Document</title>
</head>
<body>
<?php
    require('components\navmenu.html');
    ?>
<h2>Авторизация</h2>
  <form action="login.php" method="POST">
    <label for="firstname">Имя:</label>
    <input type="text" id="firstname" name="firstname" required><br><br>
    <label for="lastname">Фамилия:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Авторизоваться">
  </form>
  <?php require('components/footer.html'); ?>
</body>
</html>