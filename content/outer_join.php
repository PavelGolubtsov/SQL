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
            <h2>OUTER JOIN</h2>
            <div>
                <h3>LEFT OUTER JOIN</h3>
                <p><b>LEFT</b> означает что таблица находящаяся в левой части блока <b>FROM</b> определяет число строк в результирующем наборе,
                а таблица в правой части предоставляет значения столбцов в случае обнаружения соответствия.
                <pre>
                    SELECT a.имя_столбца1, b.имя_столбца2
                    FROM имя_таблицы1 a LEFT OUTER JOIN имя_таблицы2 b
                    ON a.имя_столбца1 = b.имя_столбца1;
                </pre>
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: rgba(180,180,180, 0.6);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: rgba(255,255,255, 0.4);z-index: -1;"><p style="margin: 10px;">B</p></div>
                </div>
                <p><b>A</b> <i>LEFT OUTER</i> <b>B</b>
                <p><h3>RIGHT OUTER JOIN</h3>
                <p><b>RIGHT</b> означает что таблица находящаяся в правой части блока <b>FROM</b> определяет число строк в результирующем наборе,
                а таблица в левой части предоставляет значения столбцов в случае обнаружения соответствия.
                <pre>
                    SELECT a.имя_столбца1, b.имя_столбца2
                    FROM имя_таблицы1 a RIGHT OUTER JOIN имя_таблицы2 b
                    ON a.имя_столбца1 = b.имя_столбца1;
                </pre>
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: rgba(255,255,255, 0.4)rgba(180,180,180, 0.6);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: rgba(180,180,180, 0.6);"><p style="margin: 10px;">B</p></div>
                </div>
                <p><b>A</b> <i>RIGHT OUTER</i> <b>B</b>
                <p><i>Запросы <b>LEFT</b> и <b>RIGHT</b> можно использовать для получения равнозначного результата меняя положение таблиц.</i>
                <h3>Трехсторонние внешние соединения стр. 202</h3>
                <p><i>Естественное соединение</i> <b>NATURAL JOIN</b>
                <p>Соединения делает предположение о необходимых условиях соединения, полагаясь на идентичные имена столбцов в таблицах.
                <p>
                <p>
            </div>
        </div>
    </div>
</body>
</html>