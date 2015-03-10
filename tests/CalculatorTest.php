<?php

use App\Calculator;

include_once('app\Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase {

    const KILOMETRE_IN_MILE = 1.60934;
    const MILE_IN_KILOMETRE = 0.62137;

    protected $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testConvertOneMileToKilometres()
    {
        $kilometres = $this->calculator->ConvertMileToKilometre(1);

        $this->assertTrue($kilometres == self::KILOMETRE_IN_MILE);
    }

    public function testConvertTwoMilesToKilometres()
    {
        $kilometres = $this->calculator->ConvertMileToKilometre(2);

        $this->assertTrue($kilometres == (self::KILOMETRE_IN_MILE * 2));
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

//    public function testConvertOneMileMinuteToKilometresMinute()
//    {
//        $kilometresMinute = $this->calculator->ConvertMilesMinuteToKilometresMinute(1);
//        $this->assertTrue($kilometresMinute == 0);
//    }


}
