<?php

function sum($x, $y)
{
    return $x + $y;
}


function substruct($x, $y)
{
    return $x - $y;
}

function multiplication($x, $y)
{
    return $x * $y;
}

function divide($x, $y)
{
    if ($y == 0) {
        echo "ERROR Division by zero";
        return NULL;
    } else {
        return $x / $y;
    }
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sum';
            echo sum($arg1, $arg2);
            break;
        case 'substruct';
            echo substruct($arg1, $arg2);
            break;
        case 'multiplication';
            echo multiplication($arg1, $arg2);
            break;
        case 'divide';
            echo divide($arg1, $arg2);
            break;
    }
}

$a = 5;
$b = 0;
mathOperation($a, $b, "sum");
mathOperation($a, $b, "substruct");
mathOperation($a, $b, "multiplication");
mathOperation($a, $b, "divide");
