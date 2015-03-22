<?php

use App\ImperialPace;
use App\Models\Hours;
use App\Models\Kilometres;
use App\Models\Miles;
use App\Models\Minutes;

require 'vendor/autoload.php';

class ImperialPaceTest extends PHPUnit_Framework_TestCase {

    public function testReturnMinutesMileGivenMinutesKilometre()
    {
        $minutesMile = new ImperialPace(new Kilometres(1), new Minutes(6));
        $this->assertTrue($minutesMile->minutesMile() == 9.6561);

        $minutesMile = new ImperialPace(new Kilometres(2), new Minutes(14));
        $this->assertTrue($minutesMile->minutesMile() == 11.2654);
    }

    public function testReturnMinutesMileGivenMilesHour()
    {
        $minutesMile = new ImperialPace(new Miles(6), new Hours(1));
        $this->assertTrue($minutesMile->minutesMile() == 10);

        $minutesMile = new ImperialPace(new Miles(14), new Hours(2));
        $this->assertTrue($minutesMile->minutesMile() == 8.5714);
    }

    public function testReturnMinutesMileGivenKilometresHour()
    {
        $minutesMile = new ImperialPace(new Kilometres(10), new Hours(1));
        $this->assertTrue($minutesMile->minutesMile() == 9.6561);

        $minutesMile = new ImperialPace(new Kilometres(12), new Hours(1.5));
        $this->assertTrue($minutesMile->minutesMile() == 12.0701);
    }

    public function testReturnMilesHourGivenMinutesMile()
    {
        $milesHour = new ImperialPace(new Miles(1), new Minutes(6));
        $this->assertTrue($milesHour->milesHour() == 10);

        $milesHour = new ImperialPace(new Miles(2), new Minutes(14));
        $this->assertTrue($milesHour->milesHour() == 8.5714);
    }

    public function testReturnMilesHourGivenMinutesKilometre()
    {
        $milesHour = new ImperialPace(new Kilometres(1), new Minutes(6));
        $this->assertTrue($milesHour->milesHour() == 6.2137);

        $milesHour = new ImperialPace(new Kilometres(3), new Minutes(15));
        $this->assertTrue($milesHour->milesHour() == 7.4565);
    }

    public function testReturnMilesHourGivenKilometreHour()
    {
        $milesHour = new ImperialPace(new Kilometres(6), new Hours(1));
        $this->assertTrue($milesHour->milesHour() == 3.7282);

        $milesHour = new ImperialPace(new Kilometres(10), new Hours(2));
        $this->assertTrue($milesHour->milesHour() == 3.1069);
    }
}
