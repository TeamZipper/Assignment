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
        $flights = $this->data['airports'] = $this->ourAirlines();
        
        $this->data['planeCount'] = count($planes);
        $this->data['flightCount'] = count($flights);

        $this->render();
    }

    
    private function ourAirlines() {
        $this->load->model['Dbaccess'];
        $all = $this->Dbaccess->getAirlines();
        
        foreach ($all as $an)
            if ($an['id'] === 'zipper')
                return $an;
    }
    
    public function show($key) {
        // this is the view we want shown
        $this->data['pagebody'] = 'info';

        // build the list of planes, to pass on to our view
        $source = $this->ourAirlines()['id'];

        // pass on the data to present, adding the author record's fields
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }

}
