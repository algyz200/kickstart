<?php declare(strict_types = 1);

use App\Testing\MoneyFormatter;
use App\Testing\NumberFormatter;

require __DIR__ . '/vendor/autoload.php';

$nb = 1200000;

//$number = new NumberFormatter($nb);
$number = new MoneyFormatter();
//$NumberFormatter = new NumberFormatter();
//$number = $NumberFormatter->convertNumber($nb);
$number2 = $number->formatEur($nb);

echo $number2;

//var_dump($number);
//echo $number->formatEur() . "\n";
//echo $number->formatUsd() . "\n";
