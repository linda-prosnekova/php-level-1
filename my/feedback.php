<?php
require 'session.php';
require_once 'db.php';

$feedbacks = mysqli_query($mysqli, "SELECT * FROM feedback ORDER BY id DESC");
$row = mysqli_fetch_assoc($feedbacks);

$name = $_POST['name'];
$review = $_POST['message'];
$action = $_POST['action'];

if (isset($_POST['action'])) {
    if ($name === "" || $message === "") {
        $message_answer = "Имя или отзыв не заданы";
    } else {
        switch ($_POST['action']) {
            case "Add":
                mysqli_query($mysqli, "INSERT INTO feedback (name, review) VALUES ('{$name}', '{$review}');");
                $message_answer = "Отзыв сохранен";
                break;
        }
    }
}

$mysqli->close();
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
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
            <h2>Отзывы</h2>
            <?php include "menu.php" ?>
        </div>
        <?foreach ($feedbacks as $value): ?>
        <div><strong><?= $value['name'] ?></strong>: <?= $value['review'] ?></div>
        <?endforeach;?> <br>
        <form action="" method="post">
            Оставьте отзыв: <br>
            <input type="text" name="name" placeholder="Ваше имя"><br>
            <input type="text" name="message" placeholder="Ваш отзыв"><br>
            <input type="submit" name="action" value="Add">
        </form>
        <div style="clear: both; font-weight: bold; font-size: 16px"><?= $message_answer ?></div>
    </div>
    </div>


</body>

</html>