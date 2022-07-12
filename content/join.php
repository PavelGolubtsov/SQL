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
            <h2>JOIN</h2>
            <div>
                <p><i>Перекрестное соединение</i> (cross join).
                <p>Запрос сформирует декартово произведение таблиц.
                <pre>
                    <b>SELECT</b> *
                    <b>FROM</b> имя_таблицы1 <b>CROSS JOIN</b> имя_таблицы2
                </pre>
                <p>Если забыть добавить в соединение <b>INNER JOIN</b> условие соединения <b>ON</b>,
                получим так же произведение таблиц.
                <p><i>Внутреннее соединение</i> (inner join).
                <pre>
                    <b>SELECT</b> a.fname, a.lname, a.name
                    <b>FROM</b> имя_таблицы1 a <b>INNER JOIN</b> имя_таблицы2 b
                    <b>ON</b> a.name_id = b.name_id;
                </pre>
                <p>Выберет только те строки где значения полей name_id совпадают в таблицах.
                <p>Если имена столбцов, используемых для соединения двух таблиц, совпадают можно вместо подблока <b>ON</b> применить подблок <b>USING</b>:
                <p><b>USING</b> (name_id);
                <p><i>Внешние соединение</i> (outer join).
                <p><i>Промежуточный результирующий набор</i> (intermediate result set).
                <p>Повторное использование таблицы, alias (псевдоним) стр. 102.
                <p><i>Рекурсивне соединение</i> (self join).
                <p><i>Рекурсивный внешний ключ</i> (self referencing foreign key).
                <p>Таблица включает столбец, указывающий на первичный ключ в рамках той же таблицы.
                <p><i>Эквисоединения</i> (equi-joins).
                <p>Для обеспечения успешности соединения значения двух таблиц должны совпадать. Эквисоединение всегда использует знак равенства.
                <p><i>Неэквисоединения</i> (non-equi-joins).
                <p>Таблицы соединяются посредством диапазонов значений.
                <p>
                <p>
            </div>
        </div>
    </div>
</body>
</html>