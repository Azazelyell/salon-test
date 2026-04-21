<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = trim(strip_tags($_POST['name']));
    $phone = trim(strip_tags($_POST['phone']));
    $service = isset($_POST['service']) ? trim(strip_tags($_POST['service'])) : '';
    $date = !empty($_POST['date']) ? $_POST['date'] : null;
    $comment = !empty($_POST['comment']) ? trim(strip_tags($_POST['comment'])) : '';
    
    if (empty($name) || empty($phone)) {
        die("Ошибка: Имя и телефон обязательны");
    }
    
    $sql = "INSERT INTO requests (name, phone, service, date, comment) 
            VALUES (:name, :phone, :service, :date, :comment)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':service' => $service,
        ':date' => $date,
        ':comment' => $comment
    ]);
    
    header('Location: thank_you.php');
    exit;
}
?>