<?php
function replace($p, $x, $y)
{
    $string = str_replace($p, $x, $y);
    return $string;
}

$chto = " ";
$na_chto = "_";
$gde = "Привет, как дела";

echo replace($chto, $na_chto, $gde);
