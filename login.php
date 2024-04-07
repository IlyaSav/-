<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// Подключение к базе данных
require_once('controllers\db.php');

// Получение данных из формы
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

// Проверка совпадения данных в базе данных
$sql = "SELECT * FROM users WHERE firstname='$firstname' AND lastname='$lastname' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // Авторизация успешна, устанавливаем сессию
  session_start();
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  header("Location: profile.php");
} else {
  echo "Ошибка авторизации.";
}

// Закрытие соединения с базой данных
$conn->close();
?>