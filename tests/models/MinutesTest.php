<?php

use App\Models\Minutes;

require 'vendor/autoload.php';

class MinutesTest extends PHPUnit_Framework_TestCase {

    public function testConvertToSeconds()
    {
        $minutes = new Minutes(1);
        $this->assertTrue($minutes->seconds() == 60);

        $minutes = new Minutes(1.5);
        $this->assertTrue($minutes->seconds() == 90);
    }

    public function testConvertToHours()
    {
        $minutes = new Minutes(1);
        $this->assertTrue($minutes->hours() == 1 / 60);

        $minutes = new Minutes(1.5);
        $this->assertTrue($minutes->hours() == 1.5 / 60);
    }

    public function testConvertToMinutes()
    {
        $minutes = new Minutes(1);
        $this->assertTrue($minutes->minutes() == 1);

        $minutes = new Minutes(1.5);
        $this->assertTrue($minutes->minutes() == 1.5);
    }
}
