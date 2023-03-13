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
            <h2>WITH</h2>
            <div>
                <p><b>Common Table Expression (CTE).</b>
                <p>Обобщенное табличное выражение -
                это временные результирующие наборы, которые не сохраняются в базе данных в виде объектов,
                но к ним можно обращаться.
                <p>Задачи <b>CTE.</b>
                <ul>
                    <li>Написание рекурсивных запросов;</li>
                    <li>Замена представлений (VIEW), когда нет необходимости сохранять в базе SQL запрос представления,
                        т.е. его определение;
                    </li>
                    <li>Повышают читаемость кода путем разделения запроса на логические блоки;</li>
                    <li>Использование многократных ссылок на результирующий набор из одной и той же SQL инструкции;</li>
                </ul>
                <p><b>CTE</b> определяется с помощью конструкции <b>WITH</b>,
                и определить его можно как в обычных запросах, так и в функциях, хранимых процедурах, триггерах и представлениях.
                <p><b>Синтаксис:</b>
                <?php
                    require('../pre/syntax_with.php');
                ?>
                <ul>
                    <li><b>common_table_expression_name</b> - используемый псевдоним CTE;</li>
                    <li><b>column_name</b> – имя столбца, который будет определен в CTE.
                        Использование повторяющихся имен нельзя, количество должно совпадать с количеством столбцов возвращаемых запросом CTE_query_definition.
                        Указывать имена столбцов необязательно, если всем столбцам в запросе CTE_query_definition присвоены уникальные псевдонимы;
                    </li>
                    <li><b>CTE_query_definition</b> - запрос SELECT, к результирующему набору которого,
                        мы и будем обращаться через common_table_expression_name.
                    </li>
                </ul>
                <p>После обобщенного табличного выражения, т.е. сразу за ним должен идти одиночный запрос
                    SELECT, INSERT, UPDATE, MERGE или DELETE.
                <p><b>CTE</b> бывает простым и рекурсивным.
                <p>Рекурсивные <b>CTE</b> используются для возвращения иерархических данных.
                <p>Таблица users:
                <?php
                    require('../pre/sql_table_users.php');
                ?>
                <p>Выводим иерархический список сотрудников:
                <?php
                    require('../pre/sql_with_users.php');
                ?>
                <p>
                <p>
            </div>
        </div>
    </div>
</body>
</html>
