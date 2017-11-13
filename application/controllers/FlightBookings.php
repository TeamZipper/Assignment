<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');
class Flightbookings extends Application
{
    /**
     * Loads some info about the app
     */
    public function index()
    {
//        $this->load->model('airports');
//        $this->load->model('flights');
//        $this->data['airports'] = $this->airports->all();
//        $this->data['flights'] = $this->flights->all(); 
        $this->load->model('Dbaccess');
        $this->data['airlines'] = $this->Dbaccess->getAirports();
        $this->data['pagebody'] = 'flightbookings';
        $this->render();
    }
    public function matchFlights()
    {
        $data = $this->input->post();
        $departure = $data['departureAirport'];
        $arrival = $data['arrivalAirport1'];
        $this->load->model('Dbaccess');
        $flights = $this->Dbaccess->getAirports();
        $matches = array();
        if($departure != $arraival){
            foreach(flights as $flight) {
                if($flight->departureAirport == $departure) {
                    
                }
            }
        }
        $this->data['pagebody'] = 'flightoptions';
        $this->render();
//        $this->load->model('flights');
//        $flights = $this->flights->all();
//        $matches = array();
//        if($departure != $arrival) {
//            foreach($flights as $flight) {
//                if($flight->departureAirport == $departure) {
//                    if($flight->arrivalAirport == $arrival) {
//                        array_push($matches, array($flight)); //direct flight
//                    } else {
//                        foreach($flights as $flight2) {
//                            if($flight2->departureAirport == $flight->arrivalAirport) {
//                                if($flight2->arrivalAirport == $arrival) {
//                                    array_push($matches, array($flight, $flight2)); //check one stop
//                                } else {
//                                    foreach($flights as $flight3) {
//                                        if($flight3->departureAirport == $flight2->arrivalAirport && $flight2->arrivalAirport != $departure) {
//                                            if($flight3->arrivalAirport == $arrival) {
//                                                array_push($matches, array($flight, $flight2, $flight3));
//                                            }
//                                        }
//                                    }
//                                }
//                            }
//                        }
//                    }
//                }
//            }
//        }
//        header('Content-Type: application/json');
//        echo json_encode($matches);
    }
}