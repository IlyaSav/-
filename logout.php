<?php
session_start();
session_destroy();
header("Location: autorization.php");
exit();
?>