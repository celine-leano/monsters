<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 2/6/2019
 * Time: 11:15 AM
 */

class Vampire extends monster
{
    private $_victims;

    function __construct($name)
    {
        parent::__construct($name);
        $this->_victims = 0;
    }

    function attack()
    {
        echo "Your vampire attacks a victim";
        $this->_victims++;
    }

    function getVictims()
    {
        return $this->_victims;
    }
}