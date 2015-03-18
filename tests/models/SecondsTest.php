<?php

use App\Models\Seconds;

require 'vendor/autoload.php';

class SecondsTest extends PHPUnit_Framework_TestCase {

    public function testConvertToSeconds()
    {
        $seconds = new Seconds(60);
        $this->assertTrue($seconds->seconds() == 60);

        $seconds =new Seconds(90);
        $this->assertTrue($seconds->seconds() == 90);
    }

    public function testConvertToHours()
    {
        $seconds = new Seconds(60);
        $this->assertTrue($seconds->hours() == ((60 / 60) / 60));

        $seconds =new Seconds(90);
        $this->assertTrue($seconds->hours() == ((90 / 60) / 60));
    }

    public function testConvertToMinutes()
    {
        $seconds = new Seconds(60);
        $this->assertTrue($seconds->minutes() == 1);

        $seconds =new Seconds(90);
        $this->assertTrue($seconds->minutes() == 1.5);
    }

}

