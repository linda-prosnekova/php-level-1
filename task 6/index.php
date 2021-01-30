<?php

$menu = renderTemplate('menu');
$footer = renderTemplate('footer');
$index_content = "НАШ САЙТ";

$final = renderTemplate('layout', $menu, $index_content, $footer);
print($final);

function renderTemplate($page, $menu = "", $content = "", $footer = "")
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
