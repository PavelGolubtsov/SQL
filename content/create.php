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
            <h2>CREATE</h2>
            <div>
                <p>Оператор <b>CREATE</b> предназначен для создания объектов базы данных.
                <h3><i>CREATE DATABASE</i></h3>
                <p>конструкция предназначена для создания базы данных:
                <div class="view_code">
                    <p><b class="col_code">CREATE DATABASE</b> имя_базы_данных
                    <p><b class="col_code">DEFAULT CHARACTER SET</b> utf8
                    <p><b class="col_code">DEFAULT COLLATE</b> utf8_general_ci;
                </div>
                <h3><i>CREATE TABLE</i></h3>
                <p>конструкция предназначена для создания таблицы в базе данных:
                <div class="view_code">
                    <p><b class="col_code">CREATE TABLE</b> имя_таблицы
                    <p>(
                    <p>имя_столбца1 тип_данных_столбца1 [атрибуты_столбца],
                    <p>имя_столбца2 тип_данных_столбца2 [атрибуты_столбца],
                    <p>имя_столбца3 тип_данных_столбца3 [атрибуты_столбца]
                    <p>);
                </div>
                <p><b><i>Атрибуты и ограничения:</i></b>
                <p><b>AUTO_INCREMENT</b> - при добавлении строки в таблицу значение поля увеличивается на единицу,
                применим только к одному столбцу таблицы и этот столбец должен быть ключом, используется для целочисленных значений,
                нельзя сочетать с <b>DEFAULT</b>.
                <p>Установить стартовое значение можно только созданной таблицы;
                <div class="view_code">
                    <p><b class="col_code">ALTER TABLE</b> users AUTO_INCREMENT=1001
                </div>
                <p><b>NOT NULL</b> - значение поля не может быть пустым;
                <p><b>PRIMARY KEY</b> - первичный ключ гарантирует уникальность поля и быстрый поиск по колонке;
                <p><b>DEFAULT (значение)</b> - устанавливает значение поля если не указано значение при добавлении строки,
                не применимо к типам: BLOB, TEXT, GEOMETRY, JSON.
                <p><b>UNIQUE</b> - гарантирует уникальность значений в колонке и создает индекс.
                <p><b></b>
                <p><b></b>
                <p><b></b>
                <p>Проверка существования таблицы в базе данных:
                <div class="view_code">
                    <p><b class="col_code">CREATE TABLE IF NOT EXISTS</b> имя_таблицы
                </div>
            </div>
        </div>
    </div>
</body>
</html>