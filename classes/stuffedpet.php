<?php

class StuffedPet extends Pet {
    private $_size;
    private $_stuffingType;
    private $_material;

    /**
     * @param string $_animal
     * @param string $_color
     * @param string $_size
     * @param string $_stuffingType
     * @param string $_material
     */
    public function __construct($_animal = "", $_color = "", $_size = "", $_stuffingType = "", $_material = "")
    {
        parent::__construct($_animal, $_color);
        $this->_size = $_size;
        $this->_stuffingType = $_stuffingType;
        $this->_material = $_material;
    }

    /**
     * @return mixed|string
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @param mixed|string $size
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     * @return mixed|string
     */
    public function getStuffingType()
    {
        return $this->_stuffingType;
    }

    /**
     * @param mixed|string $stuffingType
     */
    public function setStuffingType($stuffingType)
    {
        $this->_stuffingType = $stuffingType;
    }

    /**
     * @return mixed|string
     */
    public function getMaterial()
    {
        return $this->_material;
    }

    /**
     * @param mixed|string $material
     */
    public function setMaterial($material)
    {
        $this->_material = $material;
    }
}