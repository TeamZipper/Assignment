<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'homepage';
           
         // pass on the data to present, as the "planes" view parameter
        $planes = $this->data['planes'] = $this->fleetdata->all();

        // pass on the data to present, as the "airlines" view parameter
        $flights = $this->data['flights'] = $this->flightsdata->all();
        
        $this->data['planeCount'] = count($planes);
        $this->data['flightCount'] = count($flights);

        $this->render();
    }

    public function show($key) {
        // this is the view we want shown
        $this->data['pagebody'] = 'info';

        // build the list of planes, to pass on to our view
        $source = $this->flightsdata->get($key);

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }

}
