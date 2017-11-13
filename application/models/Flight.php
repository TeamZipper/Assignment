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
class Flight extends Entity {

    private $id,
            $airport,
            $fleet,
            $departuretime,
            $arrivaltime,
            $airline,
            $departure,
            $destination,
            $arrivalid,
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

    function setArrivalId($arrivalid) {
        $this->arrivalid = $arrivalid;
    }

    function setDestination($destination) {
        $this->destination = $destination;
    }

    function setGate($gate) {
        $this->gate = $gate;
    }

    public function getId() {
        return $this->id;
    }

    public function getAirport() {
        return $this->airport;
    }

    public function getFleet() {
        return $this->fleet;
    }

    public function getDepartureTime() {
        return $this->departuretime;
    }

    public function getArrivalTime() {
        return $this->arrivaltime;
    }

    public function getAirline() {
        return $this->airline;
    }

    public function getDeparture() {
        return $this->departure;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getArrivalId() {
        return $this->arrivalid;
    }

    public function getGate() {
        return $this->gate;
    }

}
