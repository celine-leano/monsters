<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 2/6/2019
 * Time: 11:35 AM
 */

class Banshee
{
    private $_pitch;

    function __construct($name)
    {
        parent::__construct($name);
        $this->_pitch = "high";
    }

    function shriek()
    {
        echo $this->_name . "shrieks at a " . $this->_pitch . " pitch.";
    }

    function attack()
    {
        return shriek();
    }

    function setPitch($pitch)
    {
        $this->_pitch = $pitch;
    }



}