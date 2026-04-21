<?php
session_start();
require_once 'db.php';

$admin_password = 'admin123'; // измени на свой пароль!

if (isset($_POST['login'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin'] = true;
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['admin']);
    header('Location: admin.php');
    exit;
}

// Проверка авторизации
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Вход в админку</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .login-form { max-width: 400px; margin: 100px auto; padding: 40px; background: #f9f9f9; border-radius: 20px; }
            input, button { width: 100%; padding: 15px; margin: 10px 0; border-radius: 10px; border: 2px solid #eee; }
            button { background: #d4af37; color: white; border: none; }
        </style>
    </head>
    <body>
        <div class="login-form">
            <h2>Вход в админ-панель</h2>
            <form method="POST">
                <input type="password" name="password" placeholder="Пароль" required>
                <button type="submit" name="login">Войти</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Получаем заявки
$stmt = $pdo->query("SELECT * FROM requests ORDER BY created_at DESC");
$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Обработка действий
if (isset($_GET['mark_processed'])) {
    $id = (int)$_GET['mark_processed'];
    $pdo->prepare("UPDATE requests SET status = 'processed' WHERE id = ?")->execute([$id]);
    header('Location: admin.php');
    exit;
}

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $pdo->prepare("DELETE FROM requests WHERE id = ?")->execute([$id]);
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Админ-панель</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-panel { max-width: 1400px; margin: 50px auto; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th { background: #333; color: white; padding: 15px; }
        td { padding: 15px; border-bottom: 1px solid #eee; }
        .status-new { background: #ff4444; color: white; padding: 5px 10px; border-radius: 20px; }
        .status-processed { background: #00C851; color: white; padding: 5px 10px; border-radius: 20px; }
        .btn { padding: 5px 10px; margin: 2px; text-decoration: none; border-radius: 5px; }
        .btn-process { background: #d4af37; color: white; }
        .btn-delete { background: #ff4444; color: white; }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="admin-panel">
        <h1>Заявки с сайта</h1>
        <p><a href="?logout=1">Выйти</a></p>
        
        <table>
            <tr>
                <th>ID</th><th>Дата</th><th>Имя</th><th>Телефон</th>
                <th>Услуга</th><th>Дата визита</th><th>Комментарий</th><th>Статус</th><th>Действия</th>
            </tr>
            <?php foreach ($requests as $r): ?>
            <tr>
                <td>#<?= $r['id'] ?></td>
                <td><?= date('d.m.Y H:i', strtotime($r['created_at'])) ?></td>
                <td><?= htmlspecialchars($r['name']) ?></td>
                <td><?= htmlspecialchars($r['phone']) ?></td>
                <td><?= htmlspecialchars($r['service'] ?: '-') ?></td>
                <td><?= $r['date'] ? date('d.m.Y', strtotime($r['date'])) : '-' ?></td>
                <td><?= htmlspecialchars($r['comment'] ?: '-') ?></td>
                <td>
                    <span class="<?= $r['status'] == 'new' ? 'status-new' : 'status-processed' ?>">
                        <?= $r['status'] == 'new' ? 'Новая' : 'Обработана' ?>
                    </span>
                </td>
                <td>
                    <?php if ($r['status'] == 'new'): ?>
                        <a href="?mark_processed=<?= $r['id'] ?>" class="btn btn-process">✓</a>
                    <?php endif; ?>
                    <a href="?delete=<?= $r['id'] ?>" class="btn btn-delete" onclick="return confirm('Удалить?')">✗</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>