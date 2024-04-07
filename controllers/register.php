<?php
// Подключение к базе данных
require_once('db.php');

// Получение данных из формы
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$phone = $_POST['phone'];


// Вставка данных в базу данных
$sql = "INSERT INTO users (firstname, lastname, password, phone) 
        VALUES ('$firstname', '$lastname', '$password', '$phone')";
if ($conn->query($sql) === TRUE) {
  echo "Регистрация успешно завершена.";
} else {
  echo "Ошибка при регистрации: " . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>