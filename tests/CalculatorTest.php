<?php

use App\Calculator;

include_once('app\Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase {

    const KILOMETER_IN_MILE = 1.60934;
    const MILE_IN_KILOMETER = 0.62137;

    protected $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testConvertOneMileToKilometers()
    {
        $kilometers = $this->calculator->ConvertMileToKilometer(1);

        $this->assertTrue($kilometers == self::KILOMETER_IN_MILE);
    }

    public function testConvertTwoMilesToKilometers()
    {
        $kilometers = $this->calculator->ConvertMileToKilometer(2);

        $this->assertTrue($kilometers == (self::KILOMETER_IN_MILE * 2));
    }

    public function testConvertOneKilometerToMiles()
    {
        $miles = $this->calculator->ConvertKilometerToMile(1);

        $this->assertTrue($miles == self::MILE_IN_KILOMETER);
    }

    public function testConvertTwoKilometersToMiles()
    {
        $miles = $this->calculator->ConvertKilometerToMile(2);

        $this->assertTrue($miles == (self::MILE_IN_KILOMETER * 2));
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

    public function testConvertNinetyFiveSecondsToMinutes()
    {
        $minutes = $this->calculator->ConvertSecondsToMinutes(95);

        $this->assertTrue($minutes == (95 / 60));
    }


}
