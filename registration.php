<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\styles\registration.css">
    <title>Document</title>
</head>
<body>
<?php
    require('components\navmenu.html');
    ?>

<section>
  
<div class="form-container">
  
    <form action="controllers\register.php" method="POST">
        <div class="form-group">
            <label for="firstname">Имя:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lastname">Фамилия:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        
        <input type="submit" value="Зарегистрироваться">
    </form>
    
    </section>
    
</div>
<?php
    require('components\footer.html');
    ?>
</body>
</html>