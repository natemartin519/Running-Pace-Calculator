<?php

use App\Models\Hours;
use App\Models\Kilometres;
use App\Models\MetricPace;
use App\Models\Minutes;
use App\Models\Miles;

require 'vendor/autoload.php';

class MetricPaceTest extends \PHPUnit_Framework_TestCase
{

    public function testReturnMinutesKilometreGivenMinutesMile()
    {
        $minuteKilometre = new MetricPace(new Miles(1), new Minutes(10));
        $this->assertTrue($minuteKilometre->minutesKilometre() == 6.2137);

        $minuteKilometre = new MetricPace(new Miles(2), new Minutes(14));
        $this->assertTrue($minuteKilometre->minutesKilometre() == 4.3496);
    }

    public function testReturnMinutesKilometreGivenMilesHour()
    {
        $minutesKilometre = new MetricPace(new Miles(6), new Hours(1));
        $this->assertTrue($minutesKilometre->minutesKilometre() == 6.2137);

        $minutesKilometre = new MetricPace(new Miles(14), new Hours(2));
        $this->assertTrue($minutesKilometre->minutesKilometre() == 5.3260);
    }

    public function testReturnMinutesKilometreGivenKilometresHour()
    {
        $minutesKilometre = new MetricPace(new Kilometres(10), new Hours(1));
        $this->assertTrue($minutesKilometre->minutesKilometre() == 6);

        $minutesKilometre = new MetricPace(new Kilometres(10), new Hours(1.5));
        $this->assertTrue($minutesKilometre->minutesKilometre() == 9);
    }

    public function testReturnKilometresHourGivenMinutesMile()
    {
        $kilometresHour = new MetricPace(new Miles(1), new Minutes(10));
        $this->assertTrue($kilometresHour->kilometreHour() == 9.6561);

        $kilometresHour = new MetricPace(new Miles(2), new Minutes(15));
        $this->assertTrue($kilometresHour->kilometreHour() == 12.8748);
    }

    public function testReturnKilometresHourGivenMinutesKilometre()
    {
        $kilometresHour = new MetricPace(new Kilometres(1), new Minutes(6));
        $this->assertTrue($kilometresHour->kilometreHour() == 10);

        $kilometresHour = new MetricPace(new Kilometres(3), new Minutes(15));
        $this->assertTrue($kilometresHour->kilometreHour() == 12);
    }

    public function testReturnKilometresHourGivenMilesHour()
    {
        $kilometresHour = new MetricPace(new Miles(6), new Hours(1));
        $this->assertTrue($kilometresHour->kilometreHour() == 9.6561);

        $kilometresHour = new MetricPace(new Miles(10), new Hours(2));
        $this->assertTrue($kilometresHour->kilometreHour() == 8.0467);
    }


}
