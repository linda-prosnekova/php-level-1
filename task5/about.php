<?php

$menu = renderTemplate('menu');
$footer = renderTemplate('footer');
$about_content = "О нас. Мы — Ежи!";

echo renderTemplate('layout', $menu);
echo renderTemplate('layout', $about_content);
echo renderTemplate('layout', $footer);


function renderTemplate($page, $content = "")
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
