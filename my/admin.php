<?php
require 'session.php';
require_once 'db.php';

switch ($_GET['action']) {
    case "cancel":
        $id = (int)$_GET['id'];
        if ($auth  == 1)
            mysqli_query($mysqli, "UPDATE orders set status=3 WHERE id = {$id};");
        header("Location: /admin.php ");
        break;
    case "confirm":
        $id = (int)$_GET['id'];
        if ($auth  == 1)
            mysqli_query($mysqli, "UPDATE orders set status=2 WHERE id = {$id};");
        header("Location: /admin.php ");
        break;
}

$orders = mysqli_query($mysqli, "SELECT orders.id, orders.name, orders.address, orders.items, orders.total_price, status.status FROM orders, status where orders.status=status.id AND orders.status != 3");


$mysqli->close();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
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
    <div id="main">
        <div class="post_title">
            <h2>Админ панель</h2>
            <?php include "menu.php" ?>
        </div>
        <div class="gallery">
            <? foreach ($orders as $item): ?>
            <div>
                Заказ номер: <?= $item['id'] ?><br>
                Имя клиента: <?= $item['name'] ?><br>
                Адрес клиента: <?= $item['address'] ?><br>
                Позиции в заказе: <?= $item['items'] ?><br>
                Сумма заказа: <?= $item['total_price'] ?><br>
                Статус заказа: <?= $item['status'] ?><br>
                <a href="?action=confirm&id=<?= $item['id'] ?>">
                    <button> Подтвердить </button>
                </a>
                <a href="?action=cancel&id=<?= $item['id'] ?>">
                    <button> Отменить </button>
                </a>
                <hr>
            </div>
            <?endforeach;?>
        </div>
    </div>

</body>

</html>
