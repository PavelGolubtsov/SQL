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
            <h2>Данные</h2>
            <div>
                <h3>Временные данные</h3>
                <p><i>Время по Гринвичу</i> <b>GTM</b> (Greenwich Mean Time).
                <p><i>Универсальное глобальное время</i> <b>UTC</b> (coordinated universal time).
                <p>Функция возвращающая текущее время UTC:
                <p><i>SQL Server</i> getutcdate()
                <p><i>MySQL</i> utc_timestamp()
                <p><b>Создание временных данных:</b>
                <p>копирование даты из имеющегося столбца типа date, datetime или time
                <p>выполнение встроенной функции, возвращающей значение типа date, datetime или time
                <p>создание строкового представления временных данных, которое потом преобразовывается сервером
                <p>
                <p>
                <p>
            </div>
        </div>
    </div>
</body>
</html>