<?php

require_once 'C:\xampp\htdocs\4711Assn\Assignment\application\models\Plane.php';
require_once 'C:\xampp\htdocs\4711Assn\Assignment\application\models\Dbaccess.php';

/**
 * 
 * @author Andrew
 */
class Fleetdata extends CSV_Model {

    private $planes;

    // Constructor
    public function __construct() {
        parent::__construct(APPPATH . '../data/fleetdata.csv', 'id');
        $this->planes = array();

        foreach ($this->_data as $entry)
            $this->planes[] = new Plane($entry->name, $entry->id);
    }

    // retrieve a single plane, null if not found
    public function getPlane($which) {
        $db = new DBAccess();

        foreach ($db->getAirplanes() as $plane)
            if ($plane["id"] === $this->planes[$which]->getName())
                return $plane;

        return null;
    }

    public function allPlanes() {
        $output = array();

        for ($i = 0; $i < 2; $i++)
            $output[] = array_merge($this->getPlane($i), array("key" => $i));
        
        return $output;
    }

}
