<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 12:18 PM
 */

namespace App;


class Player
{

    public $name;
    public $points;

    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    public function earnPoints($points) {
        $this->points = $points;
    }

}