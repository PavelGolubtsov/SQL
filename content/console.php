<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        require('../header.php');
    ?>
    <div class="container_flex">
        <div class="sidebar">
            <?php
                require('../nav.php');
            ?>
        </div>
        <div class="content">
            <h2>Команды консоли</h2>
            <div>
                <p>Показать все базы данных:
                <p>SHOW DATABASES;
                <p>Выбрать одну базу данных:
                <p>USE DatabaseName;
                <p>Показать выбранную базу данных:
                <p>SHOW TABLES;
                <p>Показывает ошибку:
                <p>SHOW WARNINGS;
                <p>Показывает столбцы таблицы:
                <p>DESC TablesName;
                <p>describe TablesName;
                <p>Показывает настройки времени сервера:
                <p>SELECT @@global.time_zone, @@session.time_zone;
                <p>Изменить часовой пояс для своего сеанса:
                <p>SET time_zone = 'Europe/Zurich';
                <p>Показать текущее время:
                <p>CURRENT_TIMESTAMP();
                <p><b>Показать все таблицы БД</b>
                <p>SELECT * FROM Sys.Tables
            </div>
        </div>
    </div>
</body>
</html>