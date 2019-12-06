<?php


namespace App\Services\Tests;

use App\Testing\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /**
     * @dataProvider providerValidNumbers
     */

    public function testNumbersFormattedCorrect($in,$out)
    {

        $converted = new NumberFormatter();
        $this->assertEquals($converted->convertNumber($in),$out);
    }


    public function providerValidNumbers()
    {
        return [
            [2835779, '2.84M'],
            [999500, '1.00M'],
            [535216,'535K'],
            [99950,'100K'],
            [27533.78,'27 534'],
            [999.99,'999.99'],
            [999.9999,'1 000'],
            [533.1,'533.1'],
            [66.6666,'66.67'],
            [12.00,'12'],
            [-123654.89, '-124K']
        ];
    }

}