<?php


class AirportData extends CSV_Model {

    // Constructor
    public function __construct() {
        parent::__construct(APPPATH . '../data/airportdata.csv', 'id');
    }

    // retrieve a single quote, null if not found
    public function getAirport($which) {
        foreach ($this->all() as $airport) {
            $airports[] = (array) $airport;
        }
        return $airports[$which];
    }
    
    public function getAll(){
        return $this->all();
    }
}