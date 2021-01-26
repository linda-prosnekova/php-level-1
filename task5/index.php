<?php

$menu = renderTemplate('menu');
$footer = renderTemplate('footer');
$index_content = "НАШ САЙТ";

echo renderTemplate('layout', $menu);
echo renderTemplate('layout', $index_content);
echo renderTemplate('layout', $footer);


function renderTemplate($page, $content = "")
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
