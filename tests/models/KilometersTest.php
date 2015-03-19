<?php

use App\Models\Kilometres;

require 'vendor/autoload.php';

class KilometersTest extends PHPUnit_Framework_TestCase {

    const MILE_IN_KILOMETRE = 0.621371192;

    public function testOneKilometreToMiles()
    {
        $kilometres = new Kilometres(1);

        $miles = Self::MILE_IN_KILOMETRE;

        $this->assertTrue($kilometres->miles() == $miles);
    }

    public function testTwoKilometresToMiles()
    {
        $kilometres = new Kilometres(2);

        $miles = self::MILE_IN_KILOMETRE * 2;

        $this->assertTrue($kilometres->miles() == $miles);
    }

    public function testOneKilometreInKilometres()
    {
        $kilometres = new Kilometres(1);
        $this->assertTrue($kilometres->kilometres() == 1);
    }

    public function testTwoKilometresInKilometres()
    {
        $kilometres = new Kilometres(2);
        $this->assertTrue($kilometres->kilometres() == 2);
    }
}
