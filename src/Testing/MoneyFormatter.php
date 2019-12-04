<?php


namespace App\Testing;


class MoneyFormatter extends NumberFormatter
{
//    public function __construct($input)
//    {
//        $a = parent::__construct($input);
//    }

    public function formatEur()
    {
        $a = parent::__toString() . " €";
        return $a;
    }
    public function formatUsd()
    {
        $a = "$" . parent::__toString();
        return $a;
    }
}