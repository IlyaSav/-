<div class="message">
<?php  
    session_start();  
    // Проверка наличия сессии  
    if (!isset($_SESSION['firstname']) || !isset($_SESSION['lastname'])) {  
      // Пользователь не авторизован, выводим сообщение о необходимости авторизации  
      ?><h1>Пожалуйста зарегистрируйтесь или выполните вход в аккаунт</h1><?php  
      exit();  
    }  
    ?>
    
</div>