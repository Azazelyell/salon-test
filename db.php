<?php
$host = 'localhost';
$dbname = 'salon_sale';  // имя твоей базы
$user = 'root';
$pass = 'root';  // в MAMP стандартный пароль root

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к БД: " . $e->getMessage());
}
?>