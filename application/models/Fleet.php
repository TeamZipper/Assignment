<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fleet
 *
 * @author Bill Xue
 */
class Fleet {
    private $id;
    private $manufacturer;
    private $model;
    private $price;
    private $seats;
    private $reach;
    private $cruise;
    private $takeoff;
    private $hourly;
    
    function setId($id) {
        if(strlen($id) <= 0 || strlen($id) > 50){
            return false;
        }
        $this->id = $id;
        return true;
    }
    
    function setManufacturer($manufacturer) {
        if(strlen($manufacturer) <= 0 || strlen($manufacturer) > 50){
            return false;
        }
        $this->manufacturer = $manufacturer;
        return true;
    }
    
    function setModel($model) {
        if(strlen($model) <= 0 || strlen($model) > 100){
            return false;
        }
        $this->model = $model;
        return true;
    }
    
    function setPrice($price) {
        if(!is_int($price)|| $price < 0){
            return false;
        }
        $this->price = $price;
        return true;
    }
    
    function setSeats($seats) {
        if(!is_int($seats)|| $seats < 0){
            return false;
        }
        $this->seats = $seats;
        return true;
    }
    
    function setReach($reach) {
        if(!is_int($reach)|| $reach < 0){
            return false;
        }
        $this->reach = $reach;
        return true;
    }
    
    function setCruise($cruise) {
        if(!is_int($cruise)|| $cruise < 0){
            return false;
        }
        $this->cruise = $cruise;
        return true;
    }
    
    function setTakeoff($takeoff) {
        if(!is_int($takeoff)|| $takeoff < 0){
            return false;
        }
        $this->takeoff = $takeoff;
        return true;
    }
    
    function setHourly($hourly) {
        if(!is_int($hourly)|| $hourly < 0){
            return false;
        }
        $this->$hourly = $hourly;
        return true;
    }
    
    function getId() {
        return $this->id;
    }

    function getManufacturer() {
        return $this->manufacturer;
    }

    function getModel() {
        return $this->model;
    }

    function getPrice() {
        return $this->price;
    }

    function getSeats() {
        return $this->seats;
    }

    function getReach() {
        return $this->reach;
    }

    function getCruise() {
        return $this->cruise;
    }

    function getTakeoff() {
        return $this->takeoff;
    }

    function getHourly() {
        return $this->hourly;
    }


}
