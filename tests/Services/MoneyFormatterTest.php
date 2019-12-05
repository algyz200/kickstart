<?php


namespace App\Services\Tests;

use App\Testing\MoneyFormatter;
use App\Testing\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /**
     * @var MoneyFormatter
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new MoneyFormatter($this->NumberFormatterMock());
        //$this->sut->formatUsd($this->NumberFormatterMock());
    }

    public function testEurAdded()
    {
        $this->assertEquals($this->sut->formatEur('20.111'), '20.11 €');
    }

    public function testUsdAdded()
    {
        $this->assertEquals($this->sut->formatUsd('20.111'), '$20.11');
    }

    public function NumberFormatterMock()
    {
        $mock = $this->getMockBuilder(NumberFormatter::class)
            ->getMock();

        return $mock;
    }
}
