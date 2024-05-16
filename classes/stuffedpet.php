<?php

class StuffedPet {
    private $_size;
    private $_stuffingType;
    private $_material;

    /**
     * @param $_size
     * @param $_stuffingType
     * @param $_material
     */
    public function __construct($_size="", $_stuffingType="", $_material="")
    {
        $this->_size = $_size;
        $this->_stuffingType = $_stuffingType;
        $this->_material = $_material;
    }


}