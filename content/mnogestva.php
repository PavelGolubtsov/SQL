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
            <h2>Множества</h2>
            <div>
                <p><i>Объединение</i> (union):
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(90deg, rgba(200,200,200, 0.5) 0%, rgba(200,200,200, 0.5) 60%, rgba(255,255,255, 0.5) 100%);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(270deg, rgba(200,200,200, 0.5) 0%, rgba(200,200,200, 0.5) 60%, rgba(255,255,255, 0.5) 100%);"><p style="margin: 10px;">B</p></div>
                </div>
                <p><b>A</b> <i>union</i> <b>B</b>
                <p>множество данных, которое является комбинацией двух множеств (пересекающиеся области включены только один раз), получаемое в результате пересечения двух множеств данных.
                <p><i>Пересечение</i> (intersection):
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(90deg, rgba(255,255,255, 0.5) 0%, rgba(255,255,255, 0.5) 60%, rgba(190,190,190, 0.8) 100%);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(270deg, rgba(255,255,255, 0.5) 0%, rgba(255,255,255, 0.5) 60%, rgba(190,190,190, 0.8) 100%);"><p style="margin: 10px;">B</p></div>
                </div>
                <p><b>A</b> <i>intersection</i> <b>B</b>
                <p>множество данных, только перекрытие двух множеств, получаемое в результате пересечения двух множеств данных.
                <p><i>Разность</i> (except):
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(90deg, rgba(200,200,200, 0.5) 0%, rgba(200,200,200, 0.5) 60%, rgba(255,255,255, 0.5) 100%);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: rgba(255,255,255, 0.4);"><p style="margin: 10px;">B</p></div>
                </div>
                <p><b>A</b> <i>except</i> <b>B</b>
                <p>множество данных, данные первого множества минус данные второго множества, получаемое в результате пересечения двух множеств данных.
                <p>Искомое множество включает множества А и В без области пересечения.
                <p>Для получения множества данных где результатом должно быть только песечение двух множеств данных используется комбинация множеств:
                <div style="display: flex;position: relative;text-align: center;">
                    <div style="height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(90deg, rgba(170,170,170, 0.9) 0%, rgba(200,200,200, 0.5) 54%, rgba(255,255,255, 0.7) 100%);"><p style="margin: 10px;">A</p></div>
                    <div style="left: 30px;position: absolute;height: 48px;width: 48px;border: 1px gray solid;border-radius: 24px;background: linear-gradient(270deg, rgba(170,170,170, 0.9) 0%, rgba(200,200,200, 0.5) 54%, rgba(255,255,255, 0.99) 100%);"><p style="margin: 10px;">B</p></div>
                </div>
                <p>Сначала создать множество данных, объединяющее множества А и В целиком, а затем применить вторую операцию, чтобы удалить область пересечения.
                <p>(A <i>union</i> B) <i>except</i> (A <i>intersect</i> B)
                <p>Или с помощью следующей операции:
                <p>(A <i>except</i> B) <i>union</i> (B <i>except</i> A)
                <h3>Правила формирования множеств</h3>
                <p>- в обеих таблицах должно быть одинаковое число столбцов.
                <p>- типы данных столбцов двух таблиц должны быть одинаковыми (или сервер должен уметь преобразовывать один тип в другой).
                <p>Операции с множествами осуществляются путем помещения <i>оператора работы с множествами</i> (set operator), между двух выражений <b>SELECT</b>.
                <p><i>Составной запрос</i> (compound query).
                <p><b>UNION</b> объединяет все строки двух таблиц (не включает дублирующие значения).
                <p><b>UNION ALL</b> объединяет все строки двух таблиц (включая дублирующие значения).
                <p>
                <p>
                <p>
            </div>
        </div>
    </div>
    <div>
        <?php
        $first = $_POST['first'];
        $second = $_POST['second'];
        $variable = $_POST['variable'];
        ?>
        <form action="mnogestva.php" method="post">
            <input name="first">
            <select name="variable">
                <option value='plus'>+</option>
                <option value='minus'>-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input name="second">
            <input type="submit" value="Посчитать">
        </form>
        <?php
        switch($variable){
            case 'plus': // если выбран оператор сложения, то вычисляем сумму
                $result = $first + $second; 
                break;
            case 'minus': // если выбран оператор вычитания, то вычисляем разность
                $result = $first - $second;  
                break;
            case 'multiply': // если выбран оператор умножения, то вычисляем произведение
                $result = $first * $second;
                break;
            case 'divide': // если выбран оператор сложения
                $result = $first / $second; // если второй делитель не ноль, выполняем деление
                break;
        }
        echo $result;
        ?>
    </div>
</body>
</html>