<?php

class Flightsdata extends CSV_Model {

    // Constructor
    public function __construct() {
        parent::__construct(APPPATH . '../data/flightsdata.csv', 'id');
    }

    // retrieve a single quote, null if not found
    public function getFlight($which) {
        foreach ($this->all() as $flight) {
            $flights[] = (array) $flight;
        }
        return $flights[$which];
    }
    
    public function getAll(){
        return $this->all();
    }
}
