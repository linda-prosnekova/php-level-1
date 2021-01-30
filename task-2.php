<?php
$x = 0;
do {
    if ($x == 0)
        echo "$x is zero \n";
    else if ($x % 2 == 0)
        echo "$x is even \n";
    else
        echo "$x is odd \n";
    $x++;
} while ($x <= 10);
