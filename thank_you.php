<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за заявку!</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .thank-you {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
        }
        .thank-you h1 {
            font-size: 48px;
            color: #d4af37;
            margin-bottom: 20px;
        }
        .thank-you p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="thank-you">
        <div>
            <h1>Спасибо!</h1>
            <p>Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.</p>
            <a href="index.php" class="btn">На главную</a>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>