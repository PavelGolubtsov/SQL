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
            <h2>ORDER BY</h2>
            <div>
                <p>Конструкция <b>ORDER BY</b> предназначена для сортировки данных столцов, или выражений, по столбцу или столбцам.
                <h3>Сортировка по возрастанию и убыванию.</h3>
                <p><b>ORDER BY</b> имя_столбца <b>ASC</b>: сортирует по возрастанию, применяется по умолчанию можно не указывать.
                <p><b>ORDER BY</b> имя_столбца <b>DESC</b>: сортирует по убыванию.
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_таблицы
                    <b>ORDER BY</b> имя_столбца1 <b>DESC</b>, имя_столбца2 <b>ASC</b>;
                </pre>
                <p><b><i>Laravel</b></i>
                <p>orderBy('имя_столбца')
                <p>orderByDesc('имя_столбца')
                <p>latest() эквивалентно orderBy('created_at', 'desc')
                <h3>Сортировка по выражению.</h3>
                <p>Функция <b>LEFT</b>(имя_столбца, число_символов); возвращает заданное число символов слева из строкового выражения:
                <p>Функция <b>RIGHT</b>(имя_столбца, число_символов); возвращает заданное число символов справа из строкового выражения:
                <p>Пример сортировки по трем последним символам имя_стобца2:
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_таблицы
                    <b>ORDER BY RIGHT</b>(имя_столбца2, 3) <b>ASC</b>;
                </pre>
                <h3>Сортировка с помощью числовых заместителей.</h3>
                <p>При сортировке, на столбцы указанные после блока <b>SELECT</b>, можно ссылаться по порядковому номеру:
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2, имя_столбца3
                    <b>FROM</b> имя_таблицы
                    <b>ORDER BY</b> 1 <b>DESC</b>, 2 <b>ASC</b>, 3 <b>DESC</b>;
                </pre>
            </div>
        </div>
    </div>
</body>
</html>