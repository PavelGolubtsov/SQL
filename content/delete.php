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
            <h2>DELETE</h2>
            <div>
                <p><b>DELETE</b> удаляет строку с значениями в таблице.
                <p><b>Синтаксис:</b>
                <?php
                    require('../pre/syntax_delete.php');
                ?>
                <p><i>Выражение</i> <b>WHERE</b> <i>устанавливает условие, какие записи должны быть удалены</i>.
                <p><i>Если вы опустить выражение</i> <b>WHERE</b> <i>, все записи в таблице будут удалены</i>!
            </div>
        </div>
    </div>
</body>
</html>
