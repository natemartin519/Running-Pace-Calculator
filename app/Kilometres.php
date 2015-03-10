<?php namespace App;

use App\KilometresInterface;
use App\MilesInterface;

include_once('app\KilometresInterface.php');
include_once('app\MilesInterface.php');

class Kilometres implements KilometresInterface, MilesInterface {

    const MILE_IN_KILOMETRE = 0.62137;

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
