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
            <h2>WHERE</h2>
            <div>
                <p>Конструкция <b>WHERE</b> предназначена для фильтрации данных по столбцу или столбцам.
                <p>Все SQL-выражения для работы с данными (кроме выражения <b>INSERT</b>) включают необязательный блок <b>WHERE</b>.
                <p>В выражение <b>SELECT</b> входит блок <b>HAVING</b>, в который могут быть включены условия фильтрации, относящиеся к группам данных.
                <h3>Операторы конструкции WHERE.</h3>
                <p>Условия разделяются с помощью таких операторов: <i>and</i>, <i>or</i> и <i>not</i>.
                <table>
                    <tr>
                        <th>Условные операторы</th>
                        <th>Значение</th>
                    </tr>
                    <tr>
                        <td>AND</td>
                        <td>и</td>
                    </tr>
                    <tr>
                        <td>OR</td>
                        <td>или</td>
                    </tr>
                    <tr>
                        <td>NOT</td>
                        <td>отрицает условие</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Операторы сравнения</th>
                        <th>Значение</th>
                    </tr>
                    <tr>
                        <td>&gt;</td>
                        <td>больше чем</td>
                    </tr>
                    <tr>
                        <td>&gt;=</td>
                        <td>больше или равно</td>
                    </tr>
                    <tr>
                        <td>&lt;</td>
                        <td>меньше чем</td>
                    </tr>
                    <tr>
                        <td>&lt;=</td>
                        <td>меньше или равно</td>
                    </tr>
                    <tr>
                        <td>=</td>
                        <td>равно</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>не равно</td>
                    </tr>
                    <tr>
                        <td>&lt;&gt;</td>
                        <td>не равно</td>
                    </tr>
                    <tr>
                        <td><b>REGEXP</b></td>
                        <td>регулярное выражение '^[выражение]'</td>
                    </tr>
                    <tr>
                        <td><b>LIKE</b></td>
                        <td>соответствие шаблону с % и _ 'выражение'</td>
                    </tr>
                </table>
                    <p><i>Oracle Database</i> функция regexp_like вместо <b>LIKE</b>
                    <p><i>SQL Server</i> допускает использование регулярных выражений с оператором <b>LIKE</b>
                    <p>
                    <p>_ - точно один символ.
                    <p>% - любое число символов (в том числе ни одного).
                <table>
                    <tr>
                        <td><b>IN</b> (1, 'Текст')</td>
                        <td>соответствует значению в поле</td>
                    </tr>
                    <tr>
                        <td><b>NOT IN</b> (1, 'Текст')</td>
                        <td>нет значений в поле</td>
                    </tr>
                    <tr>
                        <td><b>BETWEEN</b></td>
                        <td>В пределах диапазона (включительно)</td>
                    </tr>
                </table>
                <p>Порядок, в котором сортируются символы в наборе символов, называется сопоставлением (<i>collation</i>).
                <table>
        <pre>
            <b>SELECT</b> имя_столбца1, имя_столбца2
            <b>FROM</b> имя_таблицы
            <b>WHERE</b> имя_столбца1 <b>BETWEEN</b> нижния_граница_диапазона <b>AND</b> верхния
        </pre>
                    <tr>
                        <td>EXISTS</td>
                        <td>условие выполнено, если подзапрос возвращает хотя бы одну строку</td>
                    </tr>
                    <tr>
                        <td><b>IS NULL</b></td>
                        <td>значение столбца NULL</td>
                    </tr>
                    <tr>
                        <td><b>IS NOT NULL</b></td>
                        <td>значение столбца не NULL</td>
                    </tr>
                    <tr>
                        <td><b>LEFT</b></td>
                        <td>LEFT(имя_столбца, 1) = 'T'</td>
                    </tr>
                    <tr>
                        <td><b>RIGHT</b></td>
                        <td>RIGHT(имя_столбца, 1) = 'T'</td>
                    </tr>
                </table>
                <p>Если в условии задействованы операторы <i>and</i> и <i>or</i>, необходимо сгруппировать условия с помощью круглых скобок.
                <p>Пример использования скобок если имеется 3 или более фильтров и используются операторы <b>AND</b> и <b>OR</b>:
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_таблицы
                    <b>WHERE</b> имя_столбца1 <b>IS NULL</b>
                        <b>AND NOT</b> (имя_столбца2 = 'Pavel' <b>OR</b> created_at &lt; '2021-01-01');
                </pre>
                <p>или:
                <pre>
                    <b>SELECT</b> имя_столбца1, имя_столбца2
                    <b>FROM</b> имя_таблицы
                    <b>WHERE</b> имя_столбца1 <b>IS NULL</b>
                    <b>AND</b> (имя_столбца2 != 'Pavel' <b>OR</b> created_at &gt;= '2021-01-01');
                </pre>
            </div>
        </div>
    </div>
</body>
</html>