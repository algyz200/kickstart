<?php declare(strict_types = 1);


namespace App\Testing;

use App\Testing\NumberFormatter;


class MoneyFormatter
{

    public function __construct()
    {
        $this->numberFormatter = new NumberFormatter;
    }

    public function formatEur($number): string
    {
        $converted = $this->numberFormatter->convertNumber($number);
        $signAdded = $converted . " €";

        return $signAdded;
    }

    public function formatUsd($number): string
    {
        $converted = $this->numberFormatter->convertNumber($number);
        $signAdded = "$" . $converted;

        return $signAdded;
    }
}