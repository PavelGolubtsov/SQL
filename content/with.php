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
                <p><i>Обобщенное табличное выражение</i> -
                это временные результирующие наборы, которые не сохраняются в базе данных в виде объектов,
                но к ним можно обращаться.
                <p><i>Для работы CTE нужна версия MySQL 8.0 +</i>
                <p>Задачи <b>CTE</b>:
                <ul>
                    <li>Повышают читаемость кода путем разделения запроса на логические блоки;</li>
                    <li>Улучшает производительность запросов;</li>
                    <li>Альтернатива представлениям (VIEW);</li>
                    <li>Написание рекурсивных запросов;</li>
                    <li>Использование многократных ссылок на результирующий набор из одной и той же SQL инструкции;</li>
                </ul>
                <p><b>CTE</b> определяется с помощью конструкции <b>WITH</b>,
                и определить его можно как в обычных запросах, так и в функциях, хранимых процедурах, триггерах и представлениях.
                <p><b>Синтаксис:</b>
                <?php
                    require('../pre/syntax_with.php');
                ?>
                <ul>
                    <li><b>CTE_name</b> - используемый псевдоним CTE;</li>
                    <li><b>column_name</b> – имя столбца, который будет определен в CTE.
                        Использование повторяющихся имен нельзя, количество должно совпадать с количеством столбцов возвращаемых запросом CTE_query_definition.
                        Указывать имена столбцов необязательно, если всем столбцам в запросе CTE_query_definition присвоены уникальные псевдонимы;
                    </li>
                    <li><b>CTE_query_definition</b> - запрос SELECT, к результирующему набору которого,
                        мы и будем обращаться через common_table_expression_name.
                    </li>
                    <li><b>single_query</b> - после обобщенного табличного выражения, т.е. сразу за ним должен идти одиночный запрос
                        SELECT, INSERT, UPDATE, MERGE или DELETE.
                    </li>
                </ul>
                <p><b>CTE</b> бывает простым и рекурсивным.
                <p><i>Простой <b>CTE</b>.</i>
                <?php
                    require('../pre/sql_common_with_users.php');
                ?>
                <ul>
                    <li>Здесь создали простое <b>CTE</b> с именем CTE_users;</li>
                    <li>Оно извлекает все данные из таблицы users;</li>
                    <li>Затем извлекаем все записи из <b>CTE</b> CTE_users.</li>
                </ul>
                <p>
                <p>Таблица users:
                <?php
                require('../pre/sql_table_users.php');
                ?>
                <p><i>Рекурсивные <b>CTE</b> используются для возвращения иерархических данных.</i>
                <p>Выводим иерархический список сотрудников:
                <?php
                    require('../pre/sql_with_users.php');
                ?>
                <p>
            </div>
        </div>
    </div>
</body>
</html>
