<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flight
 *
 * @author Andrew
 */
id,airport,fleet,departuretime,arrivaltime,airline,departure,destination,gate

class Flight extends Entity {
    private $id,
            $airport,
            $fleet,
            $departuretime,
            $arrivaltime,
            $airline,
            $departure,
            $destination,
            $gate;
    
    function setId($id) {
        $this->id = $id;
    }

    function setAirport($airport) {
        $this->airport = $airport;
    }

    function setFleet($fleet) {
        $this->fleet = $fleet;
    }

    function setDepartureTime($departuretime) {
        $this->departuretime = $departuretime;
    }

    function setArrivalTime($arrivaltime) {
        $this->arrivaltime = $arrivaltime;
    }

    function setAirline($airline) {
        $this->airline = $airline;
    }

    function setDeparture($departure) {
        $this->departure = $departure;
    }

    function setDestination($destination) {
        $this->destination = $destination;
    }

    function setGate($gate){
        $this->gate = $gate;
    }
        public function getFlight()
    {
        return $this->flight;
    }
    
    public function getScheduled()
    {
        return $this->scheduled;
    }
    
    public function getEstimated()
    {
        return $this->estimated;
    }
    
    public function getAirline()
    {
        return $this->airline;
    }
    
    public function getTo()
    {
        return $this->to;
    }
    
    public function getTerminal()
    {
        return $this->terminal;
    }
    
    public function getGate()
    {
        return $this->gate;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
}
