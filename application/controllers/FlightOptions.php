<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FlightOptions extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Flights listing page for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'flightoptions';
        $this->render();
    }
}
