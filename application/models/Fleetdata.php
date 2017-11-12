<?php

require_once 'C:\xampp\htdocs\4711Assn\Assignment\application\models\Plane.php';
require_once 'C:\xampp\htdocs\4711Assn\Assignment\application\models\Dbaccess.php';

/**
 * Fleetdata.
 * The model through which data on all planes is accessed.
 * 
 * @author Andrew
 */
class Fleetdata extends CSV_Model {

    // An array containing Plane entities.
    private $planes;

    /**
     * Constructor for Fleetdata.
     */
    public function __construct() {
        parent::__construct(APPPATH . '../data/fleetdata.csv', 'id');
        $this->planes = array();
        
        // Gets data from fleetdata.csv in the form of an associative array,
        // converts each entry of that array into a Plane entity stored in
        // planes.
        foreach ($this->_data as $entry)
            $this->planes[] = new Plane($entry->name, $entry->id);
    }

    /**
     * Gets a single plane from WACKY server based on a Plane entity in
     * planes.
     * @param int $which the index of the plane to be retrieved.
     * @return a single plane, or null.
     */
    public function getPlane($which) {
        $db = new DBAccess();

        // Searches through all airplane varieties from WACKY for the one that 
        // matches the entry selected from planes.
        foreach ($db->getAirplanes() as $plane)
            if ($plane["id"] === $this->planes[$which]->getName())
                return $plane;

        return null;
    }

    /**
     * Gets all planes that we own.
     * @return All planes that we own.
     */
    public function allPlanes() {
        $output = array();

        // Puts data on all planes we own into an array.
        for ($i = 0; $i < count($this->planes); $i++)
            $output[] = array_merge($this->getPlane($i), array("key" => $i));
        
        return $output;
    }

}
