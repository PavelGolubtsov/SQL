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
            <h2>Условная логика</h2>
            <p>Условная логика – это способность выбирать одно из направлений выполнения программы.
            <p><i>Выражение</i> <b>CASE</b> <i>с перебором вариантов</i> (searched case expression).
        <pre>
            <b>SELECT</b> имя_столбца1, имя_столбца2, имя_столбца3
                <b>CASE</b>
                    <b>WHEN</b> имя_столбца1 = 'значение'
                        <b>THEN</b> CONCAT(u.имя_столбца2 , ' ', u.имя_столбца3)
                    <b>WHEN</b> имя_столбца1 = 'значение'
                        <b>THEN</b> CONCAT(u.имя_столбца1 , ' ', u.имя_столбца3)
                    [ <b>ELSE</b> 'Unknown' ]
                <b>END</b>
            <b>FROM</b> имя_таблицы;
        </pre>
            <p><b>WHEN</b> - задает условие.
            <p><b>THEN</b> - обозначает выражение, которое должно выполнится если условие верно.
            <p>Выражением может служить подзапрос:
        <pre>
            (<b>SELECT</b>
            <b>FROM</b>
            <b>WHERE</b>)
        </pre>
            <p><i>Простое выражение</i> <b>CASE</b> (simple case expression).
        <pre>
        <b>CASE</b> 'сравниваемое значение'
            <b>WHEN</b> 'значение1'
                <b>THEN</b> 'выражение'
            <b>WHEN</b> 'значение2'
                <b>THEN</b> 'выражение'
            [ <b>ELSE</b> 'Unknown' ]
        <b>END</b>
        </pre>
            <p>
            <p>
        </div>
    </div>
<script>
let b = []
let c = 65
//let c = 'A'.charCodeAt(0)
function recurABC(){
    if(b.length < 40){
        console.log(String.fromCharCode(c))
        b.push(String.fromCharCode(c))
        c++
        recurABC()
    }
}
recurABC()
console.log(b)

let a = 0
function recur(){
    console.log('а равно ' + a);
    if(a < 10){
        a++
        console.log(a)
        recur()
    }
}
recur()
</script>
</body>
</html>