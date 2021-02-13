<?php
require_once('db.php');

if ($_GET['action'] == 'add') {
    $id = (int)$_GET['id'];
    $session = session_id();
    mysqli_query($mysqli, "INSERT INTO basket (`good_id`, `session_id`) VALUES ({$id}, '{$session}');");
    header("Location: /catalog.php ");
}

$id = $_GET['id'];

$goods = mysqli_query($mysqli, "SELECT * FROM goods where id = {$id}");
$item = mysqli_fetch_assoc($goods);

$mysqli->close();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
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
            <h2>Карточка товара: <?= $item['name'] ?></h2>
            <?php include "menu.php" ?>
        </div>
        <div class="gallery">
            <h3>Название: <?= $item['name'] ?></h3>
            <img src="/goods_img/<?= $item['images'] ?>" width="300" alt=""><br>
            Описание: <?= $item['description'] ?><br>
            Цена: <?= $item['price'] ?><br><br>
            </a>
            <a href="?action=add&id=<?= $item['id'] ?>">
                <button> Купить </button>
            </a>
        </div>
    </div>

</body>

</html>