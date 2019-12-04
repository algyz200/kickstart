<?php declare(strict_types = 1);

use App\Testing\MoneyFormatter;
use App\Testing\NumberFormatter;

require __DIR__ . '/vendor/autoload.php';

$nb = 1200000;

//$number = new NumberFormatter($nb);
//$number = new MoneyFormatter($nb);
$NumberFormatter = new NumberFormatter();
$number = $NumberFormatter->convertNumber($nb);
//$number->formatEur();

echo $number;
//echo $number->formatEur() . "\n";
//echo $number->formatUsd() . "\n";
