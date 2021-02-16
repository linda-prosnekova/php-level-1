<?php
require 'session.php';
require_once 'db.php';

switch ($_GET['action']) {
    case "Drop":
        $id = (int)$_GET['id'];
        $session = session_id();
        $result = mysqli_query($mysqli, "SELECT session_id FROM `basket` WHERE session_id = '{$session}';");
        $row = mysqli_fetch_assoc($result);
        if ($session  == $row['session_id'])
            mysqli_query($mysqli, "DELETE FROM `basket` WHERE `basket`.`id` = {$id};");
        header("Location: /basket.php ");
        break;
}

$goods = mysqli_query($mysqli, "SELECT basket.id basket_id, goods.images, goods.id good_id, goods.name, goods.description, goods.price FROM basket, goods where basket.good_id=goods.id AND session_id='{$session}'");
$total = mysqli_query($mysqli, "SELECT SUM(goods.price) as total FROM basket, goods where basket.good_id=goods.id AND session_id='{$session}'");
$summ = mysqli_fetch_assoc($total);

if (isset($_POST['order_action'])) {
    switch ($_POST['order_action']) {
        case "Buy":
            $name = $_POST['name'];
            $address = $_POST['address'];
            $goods_list = mysqli_query($mysqli, "SELECT COUNT(good_id) as total, good_id FROM basket where session_id='{$session}' GROUP by good_id;");
            foreach ($goods_list as $item) :
                $total_goods .= '{' . $item["good_id"] . ': ' . $item['total'] . '}';
            endforeach;
            mysqli_query($mysqli, "INSERT INTO orders (name, address, items, total_price, status) VALUES ('{$name}', '{$address}', '{$total_goods}', {$summ['total']}, 1);");
            $message_answer = "Заказ отправлен";
            break;
        case "Flush":
            $session = session_id();
            $flush= mysqli_query($mysqli, "SELECT session_id FROM `basket` WHERE session_id = '{$session}';");
            $row = mysqli_fetch_assoc($flush);
            if ($session  == $row['session_id'])
                mysqli_query($mysqli, "DELETE FROM basket WHERE session_id = '{$session}';");
            header("Location: /basket.php ");
            $message_answer = "Корзина очищена";
            break;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Страница Заказа</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });
        });
    </script>

</head>

<body>
    <?= var_dump($total_goods); ?>
    <div id="main">
        <div class="post_title">
            <h2>Оформление заказа</h2>
            <?php include "menu.php" ?>
        </div>
        <?foreach ($feedbacks as $value): ?>
        <div><strong><?= $value['name'] ?></strong>: <?= $value['review'] ?></div>
        <?endforeach;?> <br>
        <form action="" method="post">
            Введите ваши данные: <br>
            <input type="text" name="name" placeholder="Ваше имя"><br>
            <input type="text" name="address" placeholder="Ваш адрес"><br>
            <p>В заказе:</p><br>
            <? foreach ($goods as $item): ?>
                <div>
                    <?= $item['name'] ?><br>
                    Цена:<?= $item['price'] ?><br><br>
                    <img src="/goods_img/<?= $item['images'] ?>" width="50" alt=""><br>
                    <a href="?action=drop&id=<?= $item['basket_id'] ?>">
                        <button> Удалить </button>
                    </a>
                    <hr>
                </div>
            <?endforeach;?>
            Сумма заказа: <?= $summ['total'] ?> <br>
            <input type="submit" name="order_action" value="Buy">
            <input type="submit" name="order_action" value="Flush">
        </form>
        <div style="clear: both; font-weight: bold; font-size: 16px"><?= $message_answer ?></div>
    </div>
    </div>


</body>

</html>
