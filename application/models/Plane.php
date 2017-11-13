<?php

require_once(__DIR__.'/Entity.php');

/**
 * Plane.
 * Represents a "plane" as stored in fleetdata.csv.
 * Does not contain complete data on the plane, only enough to identify it
 * and retrieve further detail from the WACKY server.
 *
 * @author Andrew
 */
class Plane extends Entity {

    // name -   The name associated with the plane. 
    //          Used to retrieve further details from WACKY.
    // id   -   The id associated with the plane.
    //          Only used for local identification.
    private $name,
            $id;
    
    /**
     * 
     * @param string $name The name of this plane.
     * @param type $id The id of this plane.
     */
    function __construct($name=null, $id=null) {
        $this->setName($name);
        $this->setId($id);
    }

    /**
     * Sets this plane's name to the given string value.
     * @param string $name is the name of this plane
     * @return string the current name of this plane.
     *                This means it will return the new name if passed a valid
     *                string, and the old name otherwise.
     */
    function setName($name) {
        if (is_string($name))
            $this->name = $name;
        return $this->name;
    }

    /**
     * Sets this plane's id to the given value.
     * @param $id can be of any type.  Only used to identification.
     * @return the current id.
     */
    function setId($id) {
        $this->id = $id;
        
        return $this->id;
    }

    /**
     * Gets this plane's name.
     * @return string the name of this plane.
     */
    function getName() {
        return $this->name;
    }

    /**
     * Gets this plane's id.
     * @return the id of this plane.
     */
    function getId() {
        return $this->id;
    }

}
