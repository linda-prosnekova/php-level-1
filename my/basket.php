<?php
require 'session.php';
require_once 'db.php';

if ($_GET['action'] == 'drop') {
    $id = (int)$_GET['id'];
    $session = session_id();
    $result = mysqli_query($mysqli, "SELECT session_id FROM `basket` WHERE session_id = '{$session}';");
    $row = mysqli_fetch_assoc($result);
    if ($session  == $row['session_id'])
        mysqli_query($mysqli, "DELETE FROM `basket` WHERE `basket`.`id` = {$id};");
    header("Location: /basket.php ");
}

$goods = mysqli_query($mysqli, "SELECT basket.id basket_id, goods.images, goods.id good_id, goods.name, goods.description, goods.price FROM basket, goods where basket.good_id=goods.id AND session_id='{$session}'");


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
            <h2>Корзина</h2>
            <?php include "menu.php" ?>
        </div>
        <div class="gallery">
            <? foreach ($goods as $item): ?>
            <div>
                <h3><?= $item['name'] ?></h3>
                <img src="/goods_img/<?= $item['images'] ?>" width="50" alt=""><br>
                Цена:<?= $item['price'] ?><br><br>

                <a href="?action=drop&id=<?= $item['basket_id'] ?>">
                    <button> Удалить </button>
                </a>
                <hr>
            </div>
            <?endforeach;?>
        </div>
        <form method="post" action="order.php">
            <p><input type="submit" value="Оформить заказ" /></p>
        </form>
    </div>

</body>

</html>