<?php

$menu = renderTemplate('menu');
$footer = renderTemplate('footer');
$about_content = "О нас. Мы — Ежи!";

$final = renderTemplate('layout', $menu, $about_content, $footer);
print($final);

function renderTemplate($page, $menu = "", $content = "", $footer = "")
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
