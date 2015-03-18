<?php

use App\Models\Miles;

require 'vendor/autoload.php';

class MilesTest extends PHPUnit_Framework_TestCase {

    const KILOMETRE_IN_MILE = 1.609344;

    public function testOneMileToKilometres()
    {
        $miles = new Miles(1);

        $kilometres = self::KILOMETRE_IN_MILE;

        $this->assertTrue($miles->kilometres() == $kilometres);
    }

    public function testTwoMilesToKilometres()
    {
        $miles = new Miles(2);

        $kilometres = self::KILOMETRE_IN_MILE * 2;

        $this->assertTrue($miles->kilometres() == $kilometres);
    }

    public function testOneMileToMiles()
    {
        $miles = new Miles(1);

        $this->assertTrue($miles->miles() == 1);
    }

    public function testTwoMilesToMiles()
    {
        $miles = new Miles(2);

        $this->assertTrue($miles->miles() == 2);
    }
}
