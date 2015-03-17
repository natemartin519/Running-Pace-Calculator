<?php namespace App;

use App\KilometresInterface;
use App\MilesInterface;

require 'vendor/autoload.php';

class Miles implements KilometresInterface, MilesInterface {

    const KILOMETRE_IN_MILE = 1.60934;

    protected $miles;

    function __construct($miles)
    {
        $this->miles = $miles;
    }

    public function kilometres()
    {
        return $this->miles * self::KILOMETRE_IN_MILE;
    }

    public function miles()
    {
        return $this->miles;
    }
}
