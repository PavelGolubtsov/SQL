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
            <h2>ALTER</h2>
            <div>
                <p>Оператор <b>ALTER</b> предназначен для модификации объектов базы данных.
                <h3><i>ALTER TABLE</i></h3>
                <p>конструкция предназначена для модификации таблицы базы данных:
                <div class="view_code">
                    <p><b class="col_code">ALTER TABLE</b> имя_таблицы
                    <p><b class="col_code">ADD [COLUMN]</b> имя_столбца тип_данных_столбца [атрибуты_столбца]
                    <p><b class="col_code">MODIFY COLUMN</b> имя_столбца тип_данных_столбца [атрибуты_столбца]
                    <p><b class="col_code">ALTER COLUMN</b> имя_столбца SET DEFAULT значение_по_умолчанию
                    <p><b class="col_code">DROP COLUMN</b> имя_столбца
                    <p><b class="col_code">ADD [CONSTRAINT]</b> определение_ограничения
                    <p><b class="col_code">DROP [CONSTRAINT]</b> имя_ограничения
                </div>
            </div>
        </div>
    </div>
</body>
</html>