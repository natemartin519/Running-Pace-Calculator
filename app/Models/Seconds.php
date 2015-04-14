<?php namespace App\Models;

use App\Interfaces\TimeInterface;

class Seconds implements TimeInterface{

    protected $seconds;

    function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public function seconds()
    {
        return $this->seconds;
    }

    public function minutes()
    {
        return $this->seconds / 60;
    }

    public function hours()
    {
        return $this->seconds / 60 / 60;
    }
}
