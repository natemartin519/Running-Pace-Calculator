<?php namespace App\Models;

use App\Interfaces\TimeInterface;

class Hours implements TimeInterface {

    protected $hours;

    function __construct($hours)
    {
        $this->hours = $hours;
    }

    public function seconds()
    {
        return $this->hours * 60 * 60;
    }

    public function minutes()
    {
        return $this->hours * 60;
    }

    public function hours()
    {
        return $this->hours;
    }
}
