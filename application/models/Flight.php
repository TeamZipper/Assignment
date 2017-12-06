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
            $airplane,
            $departuretime,
            $arrivaltime,
            $destination,
            $origin;

    public function __construct($id=null, $airplane=null, $departuretime=null, $arrivaltime=null, $destination=null, $origin=null) {
        parent::__construct();
        $this->id = $id;
        $this->airplane = $airplane;
        $this->departuretime = $departuretime;
        $this->arrivaltime = $arrivaltime;
        $this->destination = $destination;
        $this->origin = $origin;
    }

    public function getId() {
        return $this->id;
    }

    public function getAirplane() {
        return $this->airplane;
    }

    public function getDeparturetime() {
        return $this->departuretime;
    }

    public function getArrivaltime() {
        return $this->arrivaltime;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getOrigin() {
        return $this->origin;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setAirplane($airplane) {
        $this->airplane = $airplane;
    }

    public function setDeparturetime($departuretime) {
        $this->departuretime = $departuretime;
    }

    public function setArrivaltime($arrivaltime) {
        $this->arrivaltime = $arrivaltime;
    }

    public function setDestination($destination) {
        $this->destination = $destination;
    }

    public function setOrigin($origin) {
        $this->origin = $origin;
    }
}
