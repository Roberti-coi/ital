<?php

$conn = mysqli_connect('localhost', 'root', '', 'cart_db');
if (!$conn) {
  die("Ошибка соединения: " . mysqli_connect_error());
}
?>