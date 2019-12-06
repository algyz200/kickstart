<?php declare(strict_types = 1);

use App\Testing\MoneyFormatter;
use App\Testing\NumberFormatter;

require __DIR__ . '/vendor/autoload.php';

$nb = 1200000;

$number = new MoneyFormatter();

$number2 = $number->formatEur($nb);

echo $number2;
