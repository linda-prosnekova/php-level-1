<?php

	$year = 2021;
	$title = "Главная страница обо мне";
	$header = "Я - Ёж";

	$text = file_get_contents("site3.html");

	$text = str_replace("{{ year }}", $year, $text);
	$text = str_replace("{{ title }}", $title, $text);
	$text = str_replace("{{ header }}", $header, $text);

	echo $text;

?>