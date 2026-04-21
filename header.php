<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Салон красоты'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php" style="text-decoration: none;">
                <div class="logo">Beauty Salon</div>
            </a>
            <ul class="menu">
                <li><a href="index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Главная</a></li>
                <li><a href="about.php" <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'class="active"' : ''; ?>>О нас</a></li>
                <li><a href="services.php" <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'class="active"' : ''; ?>>Услуги</a></li>
                <li><a href="masters.php" <?php echo basename($_SERVER['PHP_SELF']) == 'masters.php' ? 'class="active"' : ''; ?>>Мастера</a></li>
                <li><a href="contacts.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'class="active"' : ''; ?>>Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>