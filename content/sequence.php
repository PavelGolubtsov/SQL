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
            <h2>Последовательности</h2>
            <div>
                <p><b>Последовательность написания</b>
                <ol>
                    <li><b>SELECT DICTINCT</b></li>
                    <li><b>FROM</b></li>
                    <li><b>JOIN</b></li>
                    <li><b>ON</b></li>
                    <li><b>WHERE</b></li>
                    <li><b>GROUP BY</b></li>
                    <li><b>WITH CUBE или WITH ROLLUP</b></li>
                    <li><b>HAVING</b></li>
                    <li><b>ORDER BY</b></li>
                    <li><b>LIMIT</b></li>
                    <li><b>OFFSET</b></li>
                </ol>
                <p><b>Последовательность выполнения</b>
                <ol>
                    <li><b>FROM</b></li>
                    <li><b>ON</b></li>
                    <li><b>JOIN</b></li>
                    <li><b>WHERE</b></li>
                    <li><b>GROUP BY</b></li>
                    <li><b>WITH CUBE или WITH ROLLUP</b></li>
                    <li><b>HAVING</b></li>
                    <li><b>SELECT DICTINCT</b></li>
                    <li><b>ORDER BY</b></li>
                    <li><b>OFFSET</b></li>
                    <li><b>LIMIT</b></li>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>