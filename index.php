<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL в htdocs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require_once('header.php');
    ?>
    <div class="container_flex">
        <div class="sidebar">
            <?php
                require_once('nav.php');
            ?>
        </div>
        <div class="content">
            <h1>SQL</h1>
            <p><i><b>DDL</b></i> – <i>Data Definition Language</i> (язык определения данных), служит для создания/изменения/удаления таблиц и связей.
            <p><b>CREATE</b> - для создания объектов базы данных
            <p><b>ALTER</b> - для изменения объектов базы данных
            <p><b>DROP</b> - для удаления объектов базы данных
            <p><i><b>DML</b></i> – <i>Data Manipulation Language</i> (язык манипулирования данными), осуществляет манипуляции с данными таблиц:
            <p><b>SELECT</b> – выборка данных
            <p><b>INSERT</b> – вставка новых данных
            <p><b>UPDATE</b> – обновление данных
            <p><b>DELETE</b> – удаление данных
            <p><b>MERGE</b> – слияние данных
            <p><i><b>DCL</b></i> – <i>Data Control Language</i> (язык управления данными), служит для управления правами доступа.</p>
            <p>
            <p>
        </div>
    </div>
</body>
</html>