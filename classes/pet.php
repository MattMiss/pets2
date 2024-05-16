<?php

/** Pet class represents a pet */
class Pet
{
    private $_animal;
    private $_color;

    public function __construct($_animal = "", $_color="")
    {
        $this->_animal = $_animal;
        $this->_color = $_color;
    }

    /**
     * @return string The selected animal
     */
    public function getAnimal()
    {
        return $this->_animal;
    }

    /**
     * @param string $animal The selected animal
     */
    public function setAnimal($animal)
    {
        $this->_animal = $animal;
    }

    /**
     * @return string The selected color
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param string $color The selected color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }


}