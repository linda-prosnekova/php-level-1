<?php
$a = -96;
$b = -13;
if ($a >= 0 && $b >= 0)
    echo $a - $b;
else if ($a < 0 && $b < 0)
    echo $a * $b;
else if ($a > 0 xor $b > 0)
    echo $a + $b;
