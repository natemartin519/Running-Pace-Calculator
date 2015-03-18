<?php

use App\Models\Hours;

require 'vendor/autoload.php';

class HoursTest extends PHPUnit_Framework_TestCase {

    public function testConvertToSeconds()
    {
        $hours = new Hours(1);
        $this->assertTrue($hours->seconds() == 3600);

        $hours = new Hours(1.5);
        $this->assertTrue($hours->seconds() == 5400);
    }

    public function testConvertToHours()
    {
        $hours = new Hours(1);
        $this->assertTrue($hours->hours() == 1);

        $hours = new Hours(1.5);
        $this->assertTrue($hours->hours() == 1.5);
    }

    public function testConvertToMinutes()
    {
        $hours = new Hours(1);
        $this->assertTrue($hours->minutes() == 60);

        $hours = new Hours(1.5);
        $this->assertTrue($hours->minutes() == 90);
    }

}
