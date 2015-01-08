<?php

namespace ApplicationInsights\Channel\Contracts;

/**
 * Data contract class for type Session. 
 */
class Session implements \JsonSerializable {

    /**
     * Data array that will store all the values. 
     */
    private $_data;

    /**
     * Creates a new Session. 
     */
    function __construct() {
        $this->_data = [];
    }

    /**
     * Gets the id field. 
     */
    public function getId() {
        if (array_key_exists('ai.session.id', $this->_data)) {
            return $this->_data['ai.session.id'];
        }
        return null;
    }

    /**
     * Sets the id field. 
     */
    public function setId($id) {
        $this->_data['ai.session.id'] = $id;
    }

    /**
     * Gets the isFirst field. 
     */
    public function getIsFirst() {
        if (array_key_exists('ai.session.isFirst', $this->_data)) {
            return $this->_data['ai.session.isFirst'];
        }
        return null;
    }

    /**
     * Sets the isFirst field. 
     */
    public function setIsFirst($isFirst) {
        $this->_data['ai.session.isFirst'] = $isFirst;
    }

    /**
     * Gets the isNew field. 
     */
    public function getIsNew() {
        if (array_key_exists('ai.session.isNew', $this->_data)) {
            return $this->_data['ai.session.isNew'];
        }
        return null;
    }

    /**
     * Sets the isNew field. 
     */
    public function setIsNew($isNew) {
        $this->_data['ai.session.isNew'] = $isNew;
    }

    /**
     * Overrides JSON serialization for this class. 
     */
    public function jsonSerialize() {
        return Utils::removeEmptyValues($this->_data);
    }

}
