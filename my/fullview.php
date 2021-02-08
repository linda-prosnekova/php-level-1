<?php
require_once('db.php');

$id = $_GET['id'];

$images = mysqli_query($mysqli, "SELECT * FROM gallery where id = {$id}");
$row = mysqli_fetch_assoc($images);

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
            <h2>Моя галерея</h2>
        </div>
        <div class="gallery">
            <a rel="gallery" class="photo" href="gallery_img/big/<?= $row['name'] ?>"><img src="gallery_img/big/<?= $row['name'] ?>" width="<?= $row['size'] ?>" /></a>
        </div>
    </div>

</body>

</html>