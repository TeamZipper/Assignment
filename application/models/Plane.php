<?php

require_once(__DIR__.'\Entity.php');

/**
 * Description of Plane
 *
 * @author Andrew
 */
class Plane extends Entity {

    private $name,
            $id;

    /*function __construct($name, $id) {
        $this->setName($name);
        $this->setId($id);
    }*/

    function setName($name) {
        if (is_string($name))
            $this->name = $name;
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

}
