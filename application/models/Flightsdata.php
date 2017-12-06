<?php

require_once(__DIR__.'/Flight.php');
require_once(__DIR__.'/Dbaccess.php');

class Flightsdata extends CSV_Model {

    private $flights;
    // Constructor
    public function __construct() {
        parent::__construct(APPPATH . '../data/flightsdata.csv', 'id');
        $this->flights = array();
        
        foreach($this->_data as $entry){
            $this->flights[] = new Flight($entry->id, $entry->airplane, $entry->departuretime, $entry->arrivaltime, $entry->destination, $entry->origin);
        }
    }

    // retrieve a single quote, null if not found
    public function getFlight($which) {
        $db = new DBAccess();
        $fleet = new Fleetdata();
        $origin;
        $dest;
        $plane;
        
        foreach($db->getAirports() as $airport){
            if($airport["id"] === $this->flights[$which]->getOrigin()){
                $origin = $airport;
            } elseif($airport["id"] === $this->flights[$which]->getDestination()){
                $dest = $airport;
            }
        }
        
        $plane = $fleet->getPlane($this->flights[$which]->getAirplane()); 
        
        return array('deptPort'=>$origin["airport"],
                     'deptCity'=>$origin["community"],
                     'arrPort'=>$dest["airport"],
                     'arrCity'=>$dest["community"],
                     'deptTime'=>$this->flights[$which]->getDeparturetime(),
                     'arrTime'=>$this->flights[$which]->getArrivaltime(),
                     'airplane'=>$plane["model"]);
        
    }
    
    public function allFlights(){
        $output = array();

        // Puts data on all planes we own into an array.
        for ($i = 0; $i < count($this->flights); $i++)
            $output[] = array_merge($this->getFlight($i), array("key" => $i));
        
        return $output;    }
}
