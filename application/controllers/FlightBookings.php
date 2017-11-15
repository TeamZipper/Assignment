<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Flight booking page
 */

class FlightBookings extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Loads some info about the app
     */
    public function index() {
        $this->load->model('AirportData');
        $this->data['airlines'] = $this->AirportData->getAll();
        $this->data['pagebody'] = 'flightbookings';
        $this->render();
    }

    public function matchFlights() {
        $data = $this->input->post();
        $departure = $data['departureAirport'];
        $arrival = $data['arrivalAirport1'];
        $this->load->model('Dbaccess');
        $this->load->model('flightsdata');
        $flights = $this->flightsdata->getAll();
        foreach ($flights as $flight) {
            if ($flight->id == $departure && $flight->arrivalid == $arrival) {
                $this->data['airport'] = $flight->airport;
                $this->data['departuretime'] = $flight->departuretime;
                $this->data['destination'] = $flight->destination;
                $this->data['arrivaltime'] = $flight->arrivaltime;
            }
        }
        $this->data['pagebody'] = 'flightoptions';
        $this->render();
    }

}
