<?php
require_once('db.php');
$images = mysqli_query($mysqli, "SELECT * FROM gallery");

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
			<? foreach ($images as $row): ?>
			<a rel="gallery" class="photo" href="gallery_img/big/<?= $row['name'] ?>"><img src="gallery_img/small/<?= $row['name'] ?>" width="150" height="100" /></a>
			<?endforeach;?>
		</div>
	</div>

</body>

</html>