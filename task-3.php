<?php
$mos_obl = [];
$yar_obl = [];
$len_obl = [];
$all = [];

$mos_obl[] = "Moscow";
$mos_obl[] = "Zelenograd";
$mos_obl[] = "Dmitrov";

$yar_obl[] = "Rostov";
$yar_obl[] = "Tutaev";
$yar_obl[] = "Yaroslavl";

$len_obl[] = "Saint-Petersburg";
$len_obl[] = "Sestroreck";
$len_obl[] = "Pushkin";

$all = [
    'Moscow area' => $mos_obl,
    'Yaroslaval area' => $yar_obl,
    'Leningradskaya area' => $len_obl
];

foreach ($all as $key => $obl) {
    echo "$key \n";
    foreach ($obl as $city) {
        echo "$city \n";
    }
};
