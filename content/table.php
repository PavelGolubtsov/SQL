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
            <h2>Таблицы</h2>
            <div>
                <p>Постоянные таблицы (т. е. созданные с помощью выражения create table)
                <p>Временные таблицы (т. е. строки, возвращенные подзапросом)
                <p> Представление (view) - это запрос, хранящийся в словаре данных (data dictionary). Виртуальные таблицы созданные с помощью выражения <b>CREATE VIEW</b>:
                <pre>
                    <b>CREATE VIEW</b> имя_представления <b>AS</b>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_таблицы;
                </pre>
                <p>После создания представления можно обращятся к нему:
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_представления;
                </pre>
            </div>
        </div>
    </div>
</body>
</html>