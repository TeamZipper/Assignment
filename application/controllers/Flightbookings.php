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

class Flightbookings extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Loads some info about the Flightbookings
     */
    public function index() {
        $this->data['pagebody'] = 'flightbookings';

        $this->load->model('AirportData');
        $this->data['airlines'] = $this->AirportData->getAll();
        $this->render();
    }

    public function matchFlights() {
        $data = $this->input->post();
        $departure = $data['departureAirport'];
        $arrival = $data['arrivalAirport'];
        $this->load->model('Dbaccess');
        $this->load->model('flightsdata');
        $flights = $this->flightsdata->allFlights();
        foreach ($flights as $flight) {
            if ($flight['deptId'] === $departure && $flight['arrId'] === $arrival) {
                $this->data['airport'] = $flight['deptPort'];
                $this->data['departuretime'] = $flight['deptTime'];
                $this->data['destination'] = $flight['arrPort'];
                $this->data['arrivaltime'] = $flight['arrTime'];
            }
        }
        $this->data['pagebody'] = 'flightoptions';
        $this->render();
    }

}
