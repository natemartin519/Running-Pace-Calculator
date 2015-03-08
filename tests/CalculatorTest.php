<?php

use App\Calculator;

include_once('app\Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase {

    const KILOMETER_IN_MILE = 1.60934;
    const MILE_IN_KILOMETER = 0.62137;

    public function testConvertOneMileToKilometers()
    {
        $calculator = new Calculator();

        $kilometers = $calculator->ConvertMileToKilometer(1);

        $this->assertTrue($kilometers === self::KILOMETER_IN_MILE);
    }

    public function testConvertTwoMilesToKilometers()
    {
        $calculator = new Calculator();

        $kilometers = $calculator->ConvertMileToKilometer(2);

        $this->assertTrue($kilometers === (self::KILOMETER_IN_MILE * 2));
    }

    public function testConvertOneKilometerToMiles()
    {
        $calculator = new Calculator();

        $miles = $calculator->ConvertKilometerToMile(1);

        $this->assertTrue($miles === self::MILE_IN_KILOMETER);
    }

    public function testConvertTwoKilometersToMiles()
    {
        $calculator = new Calculator();

        $miles = $calculator->ConvertKilometerToMile(2);

        $this->assertTrue($miles === (self::MILE_IN_KILOMETER * 2));
    }

}
