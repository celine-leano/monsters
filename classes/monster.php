<?php
/**
 * Celine and Alec
 * 2/6/2019
 * 328/monsters/classes/monster.php
 * Monster class
 */

class Monster
{

    private $_name;

    function __construct($name = "?")
    {
        $this->_name = $name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function attack()
    {
        echo $this->_name . " is attacking.";
    }

}