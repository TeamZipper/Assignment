<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Flights listing page for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'flights';

        // build the list of planes, to pass on to our view
        $source = $this->flightsdata->all();

        // pass on the data to present, as the "planes" view parameter
        $this->data['airlines'] = $source;
        $this->render();
    }

    public function show($key) {
        // this is the view we want shown
        $this->data['pagebody'] = 'info';

        // build the list of planes, to pass on to our view
        $source = $this->flightsdata->getFlight($key);

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }

}
