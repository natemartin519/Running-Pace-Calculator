<?php

use App\Calculator;

require 'vendor/autoload.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

    const MILE_IN_KILOMETRE = 0.62137;

    protected $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testConvertOneMinuteToSeconds()
    {
        $seconds = $this->calculator->ConvertMinutesToSeconds(1);

        $this->assertTrue($seconds == 60);
    }

    public function testConvertTwoAndHalfMinutesToSeconds()
    {
        $seconds = $this->calculator->ConvertMinutesToSeconds(2.5);

        $this->assertTrue($seconds == 150);
    }

    public function testConvertSixtySecondsToMinutes()
    {
        $minutes = $this->calculator->ConvertSecondsToMinutes(60);

        $this->assertTrue($minutes == 1);
    }

    public function testConvertNinetySecondsToMinutes()
    {
        $minutes = $this->calculator->ConvertSecondsToMinutes(90);

        $this->assertTrue($minutes == 1.5);
    }

}
