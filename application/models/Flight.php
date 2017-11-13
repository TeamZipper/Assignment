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
    private $flight,
            $scheduled,
            $estimated,
            $airline,
            $to,
            $terminal,
            $gate,
            $status;
    
    function setFlight($flight) {
        $this->flight = $flight;
    }

    function setScheduled($scheduled) {
        $this->scheduled = $scheduled;
    }

    function setEstimated($estimated) {
        $this->estimated = $estimated;
    }

    function setAirline($airline) {
        $this->airline = $airline;
    }

    function setTo($to) {
        $this->to = $to;
    }

    function setTerminal($terminal) {
        $this->terminal = $terminal;
    }

    function setGate($gate) {
        $this->gate = $gate;
    }

    function setStatus($status) {
        $this->status = $status;
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
