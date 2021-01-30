<!-- <a href="/">Главная</a>
<a href="/about.php">О нас</a> <br> -->

<?php

$menuArr = [
    'Главная' => "/index.php",
    'О нас' => "/about.php"
];

function menuRender($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        $renderArr[] = '<li><a href="' . $value . '">' . $key . '</a></li>';
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);

echo '<hr>';
