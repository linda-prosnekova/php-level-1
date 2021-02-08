<html>

<head>
    <meta charst="UTF-8">
    <title>Culculator</title>
</head>

<body>
    <?php
    if (isset($_GET['a']))
        $a = (int) ($_GET['a']);
    else $a = 0;
    if (isset($_GET['b']))
        $b = (int) ($_GET['b']);
    else $b = 0;
    if (isset($_GET['sign']))
        $sign = ($_GET['sign']);
    else $sign = 'plus';
    if (isset($_GET['c']))
        $c = ($_GET['c']);
    if (isset($a) && isset($b))
        switch ($sign) {
            case 'plus':
                $c = $a + $b;
                break;
            case 'minus':
                $c = $a - $b;
                break;
            case 'multiply':
                $c = $a * $b;
                break;
            case 'divide':
                if ($b != 0) $c = $a / $b;
                else $c = 'infinity';
        }
    ?>

    <form method="GET">
        <input name="a" type="number" style="width: 50px;" value="<?= $a ?>">
        <select name="sign" style="width: 40px">
            <option <?php if ($sign = 'plus') echo "selected" ?> value="plus">+</option>
            <option <?php if ($sign = 'minus') echo "selected" ?> value="minus">-</option>
            <option <?php if ($sign = 'multiply') echo "selected" ?> value="multiply">*</option>
            <option <?php if ($sign = 'divide') echo "selected" ?> value="divide">/</option>
        </select>
        <input name="b" type="number" style="width: 50px;" value="<?= $b ?>">
        <input type="submit" value="=" style="width: 30px;">
        <!-- <input type="number" style="width: 50px;" value="<?= $c ?>"> -->
        <b><?php if (isset($c)) echo $c ?></b>
    </form>
</body>

</html>