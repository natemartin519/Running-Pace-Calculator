<?php namespace App\Models;

use App\Interfaces\KilometresDistanceInterface;
use App\Interfaces\MilesDistanceInterface;

class Kilometres implements KilometresDistanceInterface, MilesDistanceInterface {

    const MILE_IN_KILOMETRE = 0.621371192;

    protected $kilometres;

    function __construct($kilometres)
    {
        $this->kilometres = $kilometres;
    }

    public function kilometres()
    {
        return $this->kilometres;
    }

    public function miles()
    {
        return $this->kilometres * self::MILE_IN_KILOMETRE;
    }
}

