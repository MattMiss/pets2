<?php

class RoboticPet extends Pet{
    private $_accessories;

    /**
     * @param $_accessories
     */
    public function __construct($_accessories = "")
    {
        $this->_accessories = $_accessories;
    }
}