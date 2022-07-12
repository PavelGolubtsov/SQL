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
            <h2>FROM</h2>
            <div>
                <p>Оператор <b>FROM</b> определяет таблицы, используемые запросом, а также средства связывания таблиц.
                <p>Если в блоке <b>FROM</b> более одной таблицы, включаются связи таблиц.
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2, имя_столбца3
                    <b>FROM</b> имя_таблицы1 <b>INNER JOIN</b> имя_таблицы2
                    <b>ON</b> имя_таблицы1.id = имя_таблицы2.id;
                </pre>
                <p>
                <p>
            </div>
        </div>
    </div>
</body>
</html>