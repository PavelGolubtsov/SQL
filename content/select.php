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
            <h2>SELECT</h2>
            <div>
                <p>Оператор <b>SELECT</b> предназначен для определения результирующего набора столбцов.
                <p><b>SELECT [ALL | DISTINCT | DISTINCTROW]</b>
                <p><b>ALL</b> показывается все значения.
                <p><b>DISTINCT</b> исключает записи, содержащие повторяющиеся данные в выбранных полях.
                <p><b>DISTINCTROW</b> (исключить повторящиеся строки): для сравнения записей применяются все поля исходной таблицы, независимо от того, какие из этих полей включены в запрос.
                <p>Алиасы для названия столбцов добавляются после имени столбца.
                <pre>
                    <b>FROM</b> (имя_столбца1) имя_столбца, имя_столбца2
                </pre>
            </div>
        </div>
    </div>
</body>
</html>