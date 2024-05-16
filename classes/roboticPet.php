<?php

class RoboticPet extends Pet{
    private $_accessories;

    /**
     * @param string $_animal
     * @param string $_color
     * @param array $_accessories
     */
    public function __construct($_animal = "", $_color = "", array $_accessories = array())
    {
        parent::__construct($_animal, $_color);
        $this->_accessories = $_accessories;
    }

    /**
     * @return mixed|string
     */
    public function getAccessories()
    {
        return $this->_accessories;
    }

    /**
     * @param mixed|string $accessories
     */
    public function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
    }

}