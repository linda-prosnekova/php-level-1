<?php
require 'session.php';
require_once 'db.php';


?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Страница входа</title>
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
            <h2>Логин</h2>
            <?php include "menu.php" ?>
        </div>
        <form method="post">
            <p><input type="text" name="login" /></p>
            <p><input type="password" name="password" /></p>
            <p><input type="checkbox" name="rememberme" /></p>
            <p><input type="submit" value="Войти" /></p>
        </form>
    </div>
    </div>

</body>

</html>