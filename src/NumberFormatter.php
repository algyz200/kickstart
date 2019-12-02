<?php declare(strict_types=1);

namespace App\Testing;

class mmmmgit
{
    private $input;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function __toString()
    {
        $number = $this->input;
        $negative = FALSE;

        if ($number < 0) {
            $number = $number * (-1);
            $negative = TRUE;
        }
        if ($number >= 0) {
            $rounded = round($number, 2) . "";
//            $rounded = number_format($rounded, 2);
        }
        if ($number >= 999.9999) {
            $rounded = round($number);
            $rounded = number_format ($rounded , 0,".", " " );
        }
        if ($number >= 99950) {
            $rounded = round($number / 1000) . "K";
        }
        if ($number >= 999500) {
            $rounded = round($number / 1000000, 2);
            $rounded = number_format($rounded, 2);
            $rounded = $rounded . "M";
        }
        if ($negative) {
            $rounded = "-" . $rounded;
        }

        return ($rounded);
    }
}