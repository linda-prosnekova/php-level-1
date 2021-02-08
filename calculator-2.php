<html>

<head>
    <meta charset="UTF-8">
    <title>Calculator 2</title>
</head>

<body>

    <form action="" method="POST">
        <label> Var 1:</label>
        <input type="number" name="var1">
        <label> Var 2:</label>
        <input type="number" name="var2">

        <div style="overflow: hidden">
            <input type="submit" name="operation" value="+" style="clear: both; float: left; padding: 2px; margin: 2px">
            <input type="submit" name="operation" value="-" style="float: left; padding: 2px; margin: 2px">
            <input type="submit" name="operation" value="*" style="clear: both; float: left; padding: 2px; margin: 2px">
            <input type="submit" name="operation" value="/" style="float: left; padding: 2px; margin: 2px">
        </div>
    </form>

    <?php
    $a = $_POST['var1'];
    $b = $_POST['var2'];

    if (isset($_POST['operation'])) {
        if ($a === "" || $b === "") {
            $c = "Значения не заданы";
        } else {
            switch ($_POST['operation']) {
                case '+':
                    $c = $a + $b;
                    break;
                case '-':
                    $c = $a - $b;
                    break;
                case '*':
                    $c = $a * $b;
                    break;
                case '/':
                    if ($b != 0) $c = $a / $b;
                    else $c = 'infinity';
                default:
                    $c = "что-то пошло не так";
                    break;
            }
        }
    }
    ?>

    <div style="clear: both; font-weight: bold; font-size: 16px">Результат: <?= $c ?></div>
</body>

</html>