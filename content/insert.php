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
            <h2>INSERT</h2>
            <div>
                <p><b>INSERT</b> добавляет строку с значениями в таблицу.
                <p><b>Синтаксис:</b>
                <?php
                    require('../pre/syntax_insert.php');
                ?>
            </div>
        </div>
    </div>
</body>
</html>
