<?php namespace App\Models;

use App\Interfaces\TimeInterface;

class Minutes implements TimeInterface{

    protected $minutes;

    function __construct($minutes)
    {
        $this->minutes = $minutes;
    }

    public function seconds()
    {
        return $this->minutes * 60;
    }

    public function minutes()
    {
        return $this->minutes;
    }

    public function hours()
    {
        return $this->minutes() / 60;
    }
}
